<?php
/**
 * @file
 * Expose the clone feature to hostmaster.
 */

/**
 * Implements hook_hosting_feature().
 */
function hosting_clone_hosting_feature() {
  $features['clone'] = array(
    'title' => t('Site cloning'),
    'description' => t('Clone sites to platforms of the same or later version.'),
    'status' => HOSTING_FEATURE_ENABLED,
    'module' => 'hosting_clone',
    'group' => 'optional',
    'role_permissions' => array(
      'aegir platform manager' => array(
        'create clone task',
      ),
      'aegir client' => array(
        'create clone task',
      ),
    ),
  );
  return $features;
}
