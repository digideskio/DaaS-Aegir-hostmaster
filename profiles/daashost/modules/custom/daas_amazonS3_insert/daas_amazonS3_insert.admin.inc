<?php

/**
 * @file
 * Admin settings
 *
 * AWS Credentials settings form
 */

/**
 * Admin settings form for Amazon S3 settings
 * 
 * @param array $form
 * @param array $form_state
 */
function aws_credentials_config_form($form, &$form_state) {
  $form['daas_amazonS3_insert_aws_r53_key_id'] = array(
    '#type' => 'textfield',
    '#collapsed' => FALSE,
    '#description' => t('Please enter the Amazon Access Key ID.'),
    '#collapsible' => TRUE,
    '#required' => TRUE,
    '#default_value' => variable_get('daas_amazonS3_insert_aws_r53_key_id', ''),
    '#title' => t('AWS Access Key ID')
  );
  
  $form['daas_amazonS3_insert_aws_r53_secret_key'] = array(
    '#type' => 'textfield',
    '#description' => t('Please enter the Amazon Secret Key.'),
    '#required' => TRUE,
    '#default_value' => variable_get('daas_amazonS3_insert_aws_r53_secret_key', ''),
    '#title' => t('AWS Secret Key')
  );
  
  $form['daas_amazonS3_insert_aws_r53_bucket_name'] = array(
    '#type' => 'textfield',
    '#description' => t('Please enter the bucket name.'),
    '#required' => TRUE,
    '#default_value' => variable_get('daas_amazonS3_insert_aws_r53_bucket_name', ''),
    '#title' => t('AWS S3 Bucket Name')
  );
  
  $form['daas_amazonS3_insert_aws_r53_region'] = array(
    '#type' => 'textfield',
    '#description' => t('Please enter the region.'),
    '#required' => TRUE,
    '#default_value' => variable_get('daas_amazonS3_insert_aws_r53_region', ''),
    '#title' => t('AWS S3 Region')
  );
  
  return system_settings_form($form);
}