<?php
/**
 * @file
 * Expose the web_server feature to hostmaster.
 */

/**
 * Implements hook_hosting_feature().
 */
function hosting_web_cloud_hosting_feature() {
  $features['web_cloud'] = array(
    'title' => t('Web cloud servers'),
    'description' => t('Provides a service to expose a site across multiple servers in the cloud.'),
    'status' => HOSTING_FEATURE_DISABLED,
    'module' => 'hosting_web_cloud',
    'group' => 'optional',
  );
  return $features;
}
