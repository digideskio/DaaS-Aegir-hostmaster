<?php
/**
 * @file
 * Expose the db_server feature to hostmaster.
 */

/**
 * Implements hook_hosting_feature().
 */
function hosting_db_cloud_server_hosting_feature() {
  $features['db_cloud_server'] = array(
    'title' => t('Database cloud servers'),
    'description' => t('API to provide support for database cloud servers.'),
    'status' => HOSTING_FEATURE_DISABLED,
    'module' => 'hosting_db_cloud_server',
    'group' => 'optional',
  );
  return $features;
}
