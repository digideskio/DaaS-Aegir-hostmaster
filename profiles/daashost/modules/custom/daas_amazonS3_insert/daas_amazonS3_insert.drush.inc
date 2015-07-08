<?php

/**
 * @file
 * Admin settings
 *
 * After the hosting task is over, uploads the config and Drupal files to Amazon S3 bucket.
 */
function drush_daas_amazonS3_insert_post_hosting_task($task) {
  $task = &drush_get_context('HOSTING_TASK');
  
  if ($task->ref->type == "site") {
    $site_subdomain = $task->ref->title;
    
    $platform = node_load($task->ref->platform);
    $platform_publish_path = $platform->publish_path;
    
    $aws_access_key_id = variable_get('daas_amazonS3_insert_aws_r53_key_id');
    $aws_secret_key = variable_get('daas_amazonS3_insert_aws_r53_secret_key');
    $region = variable_get('daas_amazonS3_insert_aws_r53_region');
    $bucket = variable_get('daas_amazonS3_insert_aws_r53_bucket_name');
    
    if (! empty($aws_access_key_id) && ! empty($aws_secret_key) && ! empty($region) && ! empty($bucket)) {
      $aws_library = _daas_load_awssdk2_library();
      $credentials = new Aws\Credentials\Credentials($aws_access_key_id, $aws_secret_key);
      
      $client_config = array(
        'credentials' => $credentials,
        'version' => '2006-03-01'
      );
      $client_config['region'] = $region;
      
      $s3 = Aws\S3\S3Client::factory($client_config);
      
      $dir_to_upload = DRUPAL_ROOT . '/../config';
      $upload_dir = $site_subdomain . "/config";
      $response = $s3->uploadDirectory($dir_to_upload, $bucket . '/' . $upload_dir);
      
      $site_files_dir = $platform_publish_path . '/sites/' . $site_subdomain;
      $sites_upload_dir = $site_subdomain . "/sites/" . $site_subdomain;
      $response = $s3->uploadDirectory($site_files_dir, $bucket . '/' . $sites_upload_dir);
      
      dpm("Site published in " . $platform_publish_path);
    }
  }
}