<?php

/**
 * @file
 * 
 * Post hosting task
 *
 * After the hosting task is over, uploads the config and Drupal files to Amazon S3 bucket.
 * Works in site add/delete and platform add/delete scenarios.
 */
function drush_daas_amazonS3_insert_post_hosting_task($task) {
	$task = &drush_get_context ( 'HOSTING_TASK' );
	
	$bucket = variable_get ( 'aws_opsworks_s3_bucket' );
	
	if ($task->ref->type == "site" && $task->task_type == "install") {
		
		_insert_site_s3_bucket ( $task, $bucket );
	} else if ($task->ref->type == "site" && $task->task_type == "delete") {
		
		_delete_site_s3_bucket ( $task, $bucket );
	} else if ($task->ref->type == "platform" && $task->task_type == "verify") {
		
		_insert_platform_s3_bucket ( $task, $bucket );
	} else if ($task->ref->type == "platform" && $task->task_type == "delete") {
		
		_delete_platform_s3_bucket ( $task, $bucket );
	}
}

/**
 * Creates S3 instance object
 *
 * @return \Aws\static
 */
function _create_s3_object() {
	$region = 'us-west-1';
	
	$aws_library = _daas_load_awssdk2_library ();
	
	$client_config = array (
			'version' => '2006-03-01',
			'region' => $region 
	);
	$s3 = Aws\S3\S3Client::factory ( $client_config );
	
	return $s3;
}

/**
 * Insert file to Amazon S3 bucket
 *
 * @param string $bucket        	
 * @param string $dir_to_upload        	
 * @param string $upload_dir        	
 */
function _insert_file_s3_bucket($bucket, $dir_to_upload, $upload_dir) {
	$s3 = _create_s3_object ();
	$s3->putObject ( array (
			'Bucket' => $bucket,
			'SourceFile' => $dir_to_upload,
			'Key' => $upload_dir 
	) );
	
	dpm ( "Uploaded {$dir_to_upload} file to " . $bucket . '/' . $upload_dir );
}

/**
 * Uploads directory to Amazon S3 bucket
 *
 * @param string $bucket        	
 * @param string $site_files_dir        	
 * @param string $sites_upload_dir        	
 */
function _insert_directory_s3_bucket($bucket, $site_files_dir, $sites_upload_dir) {
	$s3 = _create_s3_object ();
	$s3->uploadDirectory ( $site_files_dir, $bucket . '/' . $sites_upload_dir );
	
	dpm ( "Uploaded {$site_files_dir} directory to " . $bucket . '/' . $sites_upload_dir );
}

/**
 * Deletes file from Amazon S3 bucket
 *
 * @param string $bucket        	
 * @param string $file        	
 *
 * @return boolean
 */
function _delete_file_s3_bucket($bucket, $file) {
	$s3 = _create_s3_object ();
	$response = $s3->deleteObject ( array (
			'Bucket' => $bucket,
			'Key' => $file 
	) );
	
	return $response;
}

/**
 * Deletes directory from S3 bucket
 *
 * @param string $bucket        	
 * @param string $sites_upload_dir        	
 */
function _delete_directory_s3_bucket($bucket, $sites_upload_dir) {
	$s3 = _create_s3_object ();
	$s3->deleteMatchingObjects ( $bucket, $sites_upload_dir );
	
	dpm ( "Deleted {$bucket}/{$sites_upload_dir}" );
}

/**
 * Insert site config and files to S3 bucket.
 *
 * @param stdClass $task        	
 * @param string $bucket        	
 */
function _insert_site_s3_bucket($task, $bucket) {
	if (! empty ( $bucket )) {
		
		$site_subdomain = $task->ref->title;
		
		$platform = node_load ( $task->ref->platform );
		$platform_publish_path = $platform->publish_path;
		$platform_title = $platform->hosting_name;
		
		$dir_to_upload = DRUPAL_ROOT . '/../config/server_master/apache/vhost.d/' . $site_subdomain;
		$upload_dir = "config/server_master/apache/vhost.d/{$site_subdomain}";
		
		_insert_file_s3_bucket ( $bucket, $dir_to_upload, $upload_dir );
		
		$site_files_dir = $platform_publish_path . '/sites/' . $site_subdomain;
		$sites_upload_dir = "platforms/" . $platform_title . "/sites/" . $site_subdomain;
		
		_insert_directory_s3_bucket ( $bucket, $site_files_dir, $sites_upload_dir );
		
		dpm ( "Site published in " . $platform_publish_path );
	}
}

/**
 * Insert platform config and files to S3 bucket
 *
 * @param stdClass $task        	
 * @param string $bucket        	
 */
function _insert_platform_s3_bucket($task, $bucket) {
	if (! empty ( $bucket )) {
		$platform_title = $task->ref->hosting_name;
		$config_to_upload = DRUPAL_ROOT . '/../config/server_master/apache/platform.d/' . $platform_title . '.conf';
		$s3_platform_upload_path = 'config/servermaster/apache/platform.d/' . $platform_title . '.conf';
		
		_insert_file_s3_bucket ( $bucket, $config_to_upload, $s3_platform_upload_path );
		
		$platform_publish_path = $task->ref->publish_path;
		$s3_platform_upload_dir = "platforms/" . $platform_title;
		
		_insert_directory_s3_bucket ( $bucket, $platform_publish_path, $s3_platform_upload_dir );
	}
}

/**
 * Deletes site config and files from S3 bucket
 */
function _delete_site_s3_bucket($task, $bucket) {
	if (! empty ( $bucket )) {
		$site_subdomain = $task->ref->title;
		
		$platform = node_load ( $task->ref->platform );
		$platform_title = $platform->hosting_name;
		
		$sites_upload_dir = "platforms/" . $platform_title . "/sites/" . $site_subdomain;
		
		$file = "config/server_master/apache/vhost.d/{$site_subdomain}";
		
		if (_delete_file_s3_bucket ( $bucket, $file )) {
			dpm ( "S3 Delete config successful." );
		}
		
		_delete_directory_s3_bucket ( $bucket, $sites_upload_dir );
	}
}

/**
 * Deletes platform config and files from S3 bucket
 *
 * @param string $task        	
 * @param string $bucket        	
 */
function _delete_platform_s3_bucket($task, $bucket) {
	if (! empty ( $bucket )) {
		$platform_title = $task->ref->hosting_name;
		
		$s3_platform_upload_path = 'config/servermaster/apache/platform.d/' . $platform_title . '.conf';
		if (_delete_file_s3_bucket ( $bucket, $s3_platform_upload_path )) {
			dpm ( "S3 Delete platform config successful." );
		}
		
		$s3_platform_upload_dir = "platforms/" . $platform_title;
		_delete_directory_s3_bucket ( $bucket, $s3_platform_upload_dir );
	}
}