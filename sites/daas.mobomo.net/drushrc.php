<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'daas.cav0x1u8ckiu.us-west-1.rds.amazonaws.com';
$options['db_port'] = '3306';
$options['db_passwd'] = 'hHnrzHRVwb';
$options['db_name'] = 'daasmobomonet_0';
$options['db_user'] = 'daasmobomonet_0';
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.38',
      'description' => 'This platform is running Drupal 7.38',
    ),
  ),
  'profiles' => 
  array (
    'hostmaster' => 
    array (
      'name' => 'hostmaster',
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/hostmaster.profile',
      'project' => 'hostmaster',
      'info' => 
      array (
        'name' => 'Hostmaster',
        'description' => 'Select this profile to manage the installation and maintenance of hosted Drupal sites.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'filter',
          3 => 'help',
          4 => 'menu',
          5 => 'node',
          6 => 'overlay',
          7 => 'system',
          8 => 'user',
          9 => 'hosting',
          10 => 'hosting_task',
          11 => 'hosting_client',
          12 => 'hosting_db_server',
          13 => 'hosting_package',
          14 => 'hosting_platform',
          15 => 'hosting_site',
          16 => 'hosting_web_server',
          17 => 'hosting_server',
          18 => 'admin_menu',
          19 => 'betterlogin',
          20 => 'overlay_paths',
          21 => 'views',
          22 => 'views_bulk_operations',
          23 => 'actions_permissions',
          24 => 'r4032login',
          25 => 'views_ui',
          26 => 'dblog',
          27 => 'devel',
          28 => 'devel_debug_log',
        ),
        'version' => '7.x-3.0-beta2+1-dev',
        'project' => 'hostmaster',
        'datestamp' => '1436057207',
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
      ),
      'version' => '7.x-3.0-beta2+1-dev',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'actions_permissions' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions (VBO)',
        'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
        'package' => 'Administration',
        'core' => '7.x',
        'version' => '7.x-3.3',
        'project' => 'views_bulk_operations',
        'datestamp' => '1435764542',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'views_bulk_operations',
      'version' => '7.x-3.3',
    ),
    'admin_devel' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/admin_menu/admin_devel/admin_devel.module',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration Development tools',
        'description' => 'Administration and debugging functionality for developers and site builders.',
        'package' => 'Administration',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'admin_devel.js',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/administration/admin_menu',
        'dependencies' => 
        array (
          0 => 'system (>7.10)',
        ),
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu Toolbar style',
        'description' => 'A better Toolbar.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc5',
    ),
    'aggregator' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'betterlogin' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/betterlogin/betterlogin.module',
      'name' => 'betterlogin',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Better Login',
        'description' => 'Make the login screens better :)',
        'package' => 'User interface',
        'core' => '7.x',
        'version' => '7.x-1.3',
        'project' => 'betterlogin',
        'datestamp' => '1415716983',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'betterlogin',
      'version' => '7.x-1.3',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'bootstrap_tour' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/bootstrap_tour/bootstrap_tour.module',
      'name' => 'bootstrap_tour',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bootstrap tour',
        'description' => 'Provides Bootstrap-based tours to guide users through navigations of the site',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'jquery_update',
          1 => 'ctools',
        ),
        'version' => '7.x-1.0-beta8',
        'project' => 'bootstrap_tour',
        'datestamp' => '1393602208',
        'php' => '5.2.4',
      ),
      'project' => 'bootstrap_tour',
      'version' => '7.x-1.0-beta8',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.7',
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.7',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/css-cache.inc',
          2 => 'includes/math-expr.inc',
          3 => 'includes/stylizer.inc',
          4 => 'tests/css_cache.test',
        ),
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.7',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.7',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.7',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.7',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.38',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'devel' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/developer/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7006',
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'files' => 
        array (
          0 => 'devel.test',
          1 => 'devel.mail.inc',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.5',
    ),
    'devel_debug_log' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/developer/devel_debug_log/devel_debug_log.module',
      'name' => 'devel_debug_log',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel debug log',
        'description' => 'Creates a page that shows debug messages.',
        'package' => 'Development',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'devel',
        ),
        'version' => '7.x-1.2',
        'project' => 'devel_debug_log',
        'datestamp' => '1401723828',
        'php' => '5.2.4',
      ),
      'project' => 'devel_debug_log',
      'version' => '7.x-1.2',
    ),
    'devel_generate' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/developer/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'configure' => 'admin/config/development/generate',
        'files' => 
        array (
          0 => 'devel_generate.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.5',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/developer/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer blocks and page illustrating relevant node_access records.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.5',
    ),
    'entity' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/entity/entity.module',
      'name' => 'entity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity API',
        'description' => 'Enables modules to work with any entity type and to provide entities.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity.features.inc',
          1 => 'entity.i18n.inc',
          2 => 'entity.info.inc',
          3 => 'entity.rules.inc',
          4 => 'entity.test',
          5 => 'includes/entity.inc',
          6 => 'includes/entity.controller.inc',
          7 => 'includes/entity.ui.inc',
          8 => 'includes/entity.wrapper.inc',
          9 => 'views/entity.views.inc',
          10 => 'views/handlers/entity_views_field_handler_helper.inc',
          11 => 'views/handlers/entity_views_handler_area_entity.inc',
          12 => 'views/handlers/entity_views_handler_field_boolean.inc',
          13 => 'views/handlers/entity_views_handler_field_date.inc',
          14 => 'views/handlers/entity_views_handler_field_duration.inc',
          15 => 'views/handlers/entity_views_handler_field_entity.inc',
          16 => 'views/handlers/entity_views_handler_field_field.inc',
          17 => 'views/handlers/entity_views_handler_field_numeric.inc',
          18 => 'views/handlers/entity_views_handler_field_options.inc',
          19 => 'views/handlers/entity_views_handler_field_text.inc',
          20 => 'views/handlers/entity_views_handler_field_uri.inc',
          21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
          22 => 'views/handlers/entity_views_handler_relationship.inc',
          23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
        ),
        'version' => '7.x-1.6',
        'project' => 'entity',
        'datestamp' => '1424876582',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.6',
    ),
    'entity_token' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/entity/entity_token.module',
      'name' => 'entity_token',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity tokens',
        'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_token.tokens.inc',
          1 => 'entity_token.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.6',
        'project' => 'entity',
        'datestamp' => '1424876582',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.6',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'hosting' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/hosting.module',
      'name' => 'hosting',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6207',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting',
        'description' => 'Allow this Drupal site to deploy hosted sites.',
        'package' => 'Hosting',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'views_bulk_operations',
          2 => 'hosting_task',
          3 => 'hosting_client',
          4 => 'hosting_db_server',
          5 => 'hosting_package',
          6 => 'hosting_platform',
          7 => 'hosting_site',
          8 => 'hosting_web_server',
        ),
        'files' => 
        array (
          0 => 'includes/views/handlers/hosting_field_handler_interval.inc',
          1 => 'hosting.test',
        ),
        'configure' => 'admin/hosting',
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_alias' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/alias/hosting_alias.module',
      'name' => 'hosting_alias',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site aliases',
        'description' => 'Maintain domain aliases for sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_client' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/client/hosting_client.module',
      'name' => 'hosting_client',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Client',
        'description' => 'Allow Hostmaster to configure clients.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_client.access.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_clone' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/clone/hosting_clone.module',
      'name' => 'hosting_clone',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site cloning',
        'description' => 'Clone sites between platforms, performing upgrades when necessary.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_migrate',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_cron' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/cron/hosting_cron.module',
      'name' => 'hosting_cron',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Cron',
        'description' => 'Allow the hosting system to cron all the installed sites on a schedule.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_db_server' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/db_server/hosting_db_server.module',
      'name' => 'hosting_db_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database Server',
        'description' => 'Allow Hostmaster to configure database servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_db_server.service.inc',
          1 => 'hosting_db_server_handler_filter_db_server_type.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_dns' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/dns/hosting_dns.module',
      'name' => 'hosting_dns',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DNS support',
        'description' => 'Manage DNS records for your hosted sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_dns.service.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_example' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/example/hosting_example.module',
      'name' => 'hosting_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting example',
        'description' => 'Contains example implementations of the Hosting API.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_example.service.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_git' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting_git/hosting_git.module',
      'name' => 'hosting_git',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Git integration',
        'description' => 'Allows Hostmaster managed sites and platforms to use Git.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta1+2-dev',
        'project' => 'hosting_git',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting_git',
      'version' => '7.x-3.0-beta1+2-dev',
    ),
    'hosting_git_checkout' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting_git/checkout/hosting_git_checkout.module',
      'name' => 'hosting_git_checkout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Git checkout tasks',
        'description' => 'Allows access to the checkout task',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
          1 => 'hosting_git',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta1+2-dev',
        'project' => 'hosting_git',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting_git',
      'version' => '7.x-3.0-beta1+2-dev',
    ),
    'hosting_git_pull' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting_git/pull/hosting_git_pull.module',
      'name' => 'hosting_git_pull',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Git pull tasks',
        'description' => 'Allows access to the pull task',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
          1 => 'hosting_git',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta1+2-dev',
        'project' => 'hosting_git',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting_git',
      'version' => '7.x-3.0-beta1+2-dev',
    ),
    'hosting_migrate' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/migrate/hosting_migrate.module',
      'name' => 'hosting_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site migration',
        'description' => 'Migrate sites between platforms, performing upgrades when necessary.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_site',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_migrate.batch.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_nginx' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/web_server/nginx/hosting_nginx.module',
      'name' => 'hosting_nginx',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nginx servers',
        'description' => 'Allow hostmaster to configure NGINX web servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_nginx.service.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_nginx_ssl' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/web_server/nginx/ssl/hosting_nginx_ssl.module',
      'name' => 'hosting_nginx_ssl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nginx +SSL servers',
        'description' => 'Allow hostmaster to configure NGINX web servers with SSL support.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
          1 => 'hosting_ssl',
          2 => 'hosting_nginx',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_nginx_ssl.service.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_package' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/package/hosting_package.module',
      'name' => 'hosting_package',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6202',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Package management',
        'description' => 'Allow Hostmaster to keep track which packages have been installed.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views/handlers/hosting_package_handler_field_site_count.inc',
          1 => 'includes/views/handlers/hosting_package_handler_field_status.inc',
          2 => 'includes/views/handlers/hosting_package_handler_filter_status.inc',
          3 => 'includes/views/handlers/hosting_package_handler_filter_type.inc',
          4 => 'includes/views/handlers/hosting_package_handler_sort_site_count.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_platform' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/platform/hosting_platform.module',
      'name' => 'hosting_platform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6208',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Platforms',
        'description' => 'Allow Hostmaster to keep track of multiple instances of Drupal.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_package',
        ),
        'files' => 
        array (
          0 => 'includes/views/handlers/hosting_platform_handler_field_release.inc',
          1 => 'includes/views/handlers/hosting_platform_handler_field_sites.inc',
          2 => 'includes/views/handlers/hosting_platform_handler_field_status.inc',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_queued' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/queued/hosting_queued.module',
      'name' => 'hosting_queued',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting queue daemon',
        'description' => 'Allows the hosting queue to be run in a daemon.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_quota' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/quota/hosting_quota.module',
      'name' => 'hosting_quota',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Client Quota',
        'description' => 'Allow Hostmaster to configure quotas.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_client',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_remote_import' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting_remote_import/hosting_remote_import.module',
      'name' => 'hosting_remote_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting remote import',
        'description' => 'Helps to import sites from remote Hostmasters',
        'core' => '7.x',
        'package' => 'Hosting',
        'files' => 
        array (
          0 => 'hosting_remote_import.service.inc',
        ),
        'version' => '7.x-3.0-alpha1+0-dev',
        'project' => 'hosting_remote_import',
        'datestamp' => '1436057211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'hosting_remote_import',
      'version' => '7.x-3.0-alpha1+0-dev',
    ),
    'hosting_server' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/server/hosting_server.module',
      'name' => 'hosting_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Server',
        'description' => 'Allow hostmaster to configure servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_server.service.inc',
          1 => 'hosting_server.test',
          2 => 'includes/views/handlers/hosting_server_handler_field_services.inc',
          3 => 'includes/views/handlers/hosting_server_handler_field_human_name.inc',
          4 => 'includes/views/handlers/hosting_server_handler_field_status.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_server_data' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/example/server_data/hosting_server_data.module',
      'name' => 'hosting_server_data',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'server_data',
        'description' => 'Example implementation of saving data into a server context.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_server',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_signup' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/signup/hosting_signup.module',
      'name' => 'hosting_signup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Signup form',
        'description' => 'A simple signup form that allows users to sign up for a new site.',
        'package' => 'Hosting',
        'core' => '7.x',
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_site' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/site/hosting_site.module',
      'name' => 'hosting_site',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Sites',
        'description' => 'Allow Aegir to manage of hosted sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_client',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views/handlers/hosting_site_handler_field_language.inc',
          1 => 'includes/views/handlers/hosting_site_handler_field_status.inc',
          2 => 'includes/views/plugins/hosting_site_plugin_access.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_site_data' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/example/site_data/hosting_site_data.module',
      'name' => 'hosting_site_data',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'site_data',
        'description' => 'Example implementation of saving data into a site context.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_ssl' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/web_server/ssl/hosting_ssl.module',
      'name' => 'hosting_ssl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SSL support',
        'description' => 'Allow hostmaster to configure web servers with SSL support',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_web_server',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_ssl.service.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_subdirs' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/subdirs/hosting_subdirs.module',
      'name' => 'hosting_subdirs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Subdirectories',
        'description' => 'Allow hostmaster to install sites in subdirectories.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_alias',
        ),
        'core' => '7.x',
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_task' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/task/hosting_task.module',
      'name' => 'hosting_task',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting tasks',
        'description' => 'Allow Hostmaster to keep track of tasks that have been processed on the servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views/handlers/hosting_task_handler_field_status.inc',
          1 => 'includes/views/handlers/hosting_task_handler_filter_type.inc',
          2 => 'includes/views/handlers/hosting_task_handler_filter_status.inc',
          3 => 'includes/views/handlers/hosting_task_handler_sort_default.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_task_gc' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/task_gc/hosting_task_gc.module',
      'name' => 'hosting_task_gc',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting task garbage collection',
        'description' => 'Removes old tasks and task logs.',
        'core' => '7.x',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_web_cluster' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/web_cluster/hosting_web_cluster.module',
      'name' => 'hosting_web_cluster',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web Cluster',
        'description' => 'Allow hostmaster to configure web clusters.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_web_cluster.service.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_web_pack' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/web_pack/hosting_web_pack.module',
      'name' => 'hosting_web_pack',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web Pack',
        'description' => 'Allow hostmaster to configure web "packs", which have masters and slaves.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_web_pack.service.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'hosting_web_server' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/aegir/hosting/web_server/hosting_web_server.module',
      'name' => 'hosting_web_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web Server',
        'description' => 'Allow hostmaster to configure web servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_web_server.service.inc',
        ),
        'version' => '7.x-3.0-beta2+2-dev',
        'project' => 'hosting',
        'datestamp' => '1436057210',
        'php' => '5.2.4',
      ),
      'project' => 'hosting',
      'version' => '7.x-3.0-beta2+2-dev',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7015',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.38',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'openidadmin' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/openidadmin/openidadmin.module',
      'name' => 'openidadmin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID Admin',
        'description' => 'Allows bulk operations for OpenID administration.',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openidadmin.module',
        ),
        'version' => '7.x-1.0',
        'project' => 'openidadmin',
        'datestamp' => '1284569742',
        'php' => '5.2.4',
      ),
      'project' => 'openidadmin',
      'version' => '7.x-1.0',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'overlay_paths' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/overlay_paths/overlay_paths.module',
      'name' => 'overlay_paths',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay paths',
        'description' => 'Allows other developers to define paths that should use the overlay, but not an admin theme',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'overlay',
        ),
        'version' => '7.x-1.3',
        'project' => 'overlay_paths',
        'datestamp' => '1388699909',
        'php' => '5.2.4',
      ),
      'project' => 'overlay_paths',
      'version' => '7.x-1.3',
    ),
    'overlay_paths_example' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/overlay_paths/overlay_paths_example/overlay_paths_example.module',
      'name' => 'overlay_paths_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay paths - Example',
        'description' => 'A demonstration module for Overlay paths that provides a UI for setting paths that should appear in the overlay.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'overlay_paths',
        ),
        'configure' => 'admin/config/system/overlay_paths_example',
        'hidden' => 'true',
        'version' => '7.x-1.3',
        'project' => 'overlay_paths',
        'datestamp' => '1388699909',
        'php' => '5.2.4',
      ),
      'project' => 'overlay_paths',
      'version' => '7.x-1.3',
    ),
    'overlay_paths_ui' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/overlay_paths/overlay_paths_ui/overlay_paths_ui.module',
      'name' => 'overlay_paths_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay paths UI',
        'description' => 'Provides a UI for overlay paths, allow site builders to select paths that should appear in the overlay.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'overlay_paths',
        ),
        'configure' => 'admin/config/system/overlay_paths_ui',
        'version' => '7.x-1.3',
        'project' => 'overlay_paths',
        'datestamp' => '1388699909',
        'php' => '5.2.4',
      ),
      'project' => 'overlay_paths',
      'version' => '7.x-1.3',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.7',
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'r4032login' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/r4032login/r4032login.module',
      'name' => 'r4032login',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Redirect 403 to User Login',
        'description' => 'Redirect anonymous users from 403 Access Denied pages to the /user/login page.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'r4032login.install',
          1 => 'r4032login.module',
        ),
        'configure' => 'admin/config/system/site-information',
        'version' => '7.x-1.8',
        'project' => 'r4032login',
        'datestamp' => '1407782030',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'r4032login',
      'version' => '7.x-1.8',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud.test',
          10 => 'tests/entity_crud_hook_test.test',
          11 => 'tests/entity_query.test',
          12 => 'tests/error.test',
          13 => 'tests/file.test',
          14 => 'tests/filetransfer.test',
          15 => 'tests/form.test',
          16 => 'tests/graph.test',
          17 => 'tests/image.test',
          18 => 'tests/lock.test',
          19 => 'tests/mail.test',
          20 => 'tests/menu.test',
          21 => 'tests/module.test',
          22 => 'tests/pager.test',
          23 => 'tests/password.test',
          24 => 'tests/path.test',
          25 => 'tests/registry.test',
          26 => 'tests/schema.test',
          27 => 'tests/session.test',
          28 => 'tests/tablesort.test',
          29 => 'tests/theme.test',
          30 => 'tests/unicode.test',
          31 => 'tests/update.test',
          32 => 'tests/xmlrpc.test',
          33 => 'tests/upgrade/upgrade.test',
          34 => 'tests/upgrade/upgrade.comment.test',
          35 => 'tests/upgrade/upgrade.filter.test',
          36 => 'tests/upgrade/upgrade.forum.test',
          37 => 'tests/upgrade/upgrade.locale.test',
          38 => 'tests/upgrade/upgrade.menu.test',
          39 => 'tests/upgrade/upgrade.node.test',
          40 => 'tests/upgrade/upgrade.taxonomy.test',
          41 => 'tests/upgrade/upgrade.trigger.test',
          42 => 'tests/upgrade/upgrade.translatable.test',
          43 => 'tests/upgrade/upgrade.upload.test',
          44 => 'tests/upgrade/upgrade.user.test',
          45 => 'tests/upgrade/update.aggregator.test',
          46 => 'tests/upgrade/update.trigger.test',
          47 => 'tests/upgrade/update.field.test',
          48 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.7',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7079',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'term_depth' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/ctools/term_depth/term_depth.module',
      'name' => 'term_depth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Term Depth access',
        'description' => 'Controls access to context based upon term depth',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.7',
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.38',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.38',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7018',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_messages.inc',
          2 => 'handlers/views_handler_area_result.inc',
          3 => 'handlers/views_handler_area_text.inc',
          4 => 'handlers/views_handler_area_text_custom.inc',
          5 => 'handlers/views_handler_area_view.inc',
          6 => 'handlers/views_handler_argument.inc',
          7 => 'handlers/views_handler_argument_date.inc',
          8 => 'handlers/views_handler_argument_formula.inc',
          9 => 'handlers/views_handler_argument_many_to_one.inc',
          10 => 'handlers/views_handler_argument_null.inc',
          11 => 'handlers/views_handler_argument_numeric.inc',
          12 => 'handlers/views_handler_argument_string.inc',
          13 => 'handlers/views_handler_argument_group_by_numeric.inc',
          14 => 'handlers/views_handler_field.inc',
          15 => 'handlers/views_handler_field_counter.inc',
          16 => 'handlers/views_handler_field_boolean.inc',
          17 => 'handlers/views_handler_field_contextual_links.inc',
          18 => 'handlers/views_handler_field_custom.inc',
          19 => 'handlers/views_handler_field_date.inc',
          20 => 'handlers/views_handler_field_entity.inc',
          21 => 'handlers/views_handler_field_markup.inc',
          22 => 'handlers/views_handler_field_math.inc',
          23 => 'handlers/views_handler_field_numeric.inc',
          24 => 'handlers/views_handler_field_prerender_list.inc',
          25 => 'handlers/views_handler_field_time_interval.inc',
          26 => 'handlers/views_handler_field_serialized.inc',
          27 => 'handlers/views_handler_field_machine_name.inc',
          28 => 'handlers/views_handler_field_url.inc',
          29 => 'handlers/views_handler_filter.inc',
          30 => 'handlers/views_handler_filter_boolean_operator.inc',
          31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          32 => 'handlers/views_handler_filter_combine.inc',
          33 => 'handlers/views_handler_filter_date.inc',
          34 => 'handlers/views_handler_filter_equality.inc',
          35 => 'handlers/views_handler_filter_entity_bundle.inc',
          36 => 'handlers/views_handler_filter_group_by_numeric.inc',
          37 => 'handlers/views_handler_filter_in_operator.inc',
          38 => 'handlers/views_handler_filter_many_to_one.inc',
          39 => 'handlers/views_handler_filter_numeric.inc',
          40 => 'handlers/views_handler_filter_string.inc',
          41 => 'handlers/views_handler_filter_fields_compare.inc',
          42 => 'handlers/views_handler_relationship.inc',
          43 => 'handlers/views_handler_relationship_groupwise_max.inc',
          44 => 'handlers/views_handler_sort.inc',
          45 => 'handlers/views_handler_sort_date.inc',
          46 => 'handlers/views_handler_sort_formula.inc',
          47 => 'handlers/views_handler_sort_group_by_numeric.inc',
          48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          49 => 'handlers/views_handler_sort_random.inc',
          50 => 'includes/base.inc',
          51 => 'includes/handlers.inc',
          52 => 'includes/plugins.inc',
          53 => 'includes/view.inc',
          54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          63 => 'modules/book/views_plugin_argument_default_book_root.inc',
          64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          65 => 'modules/comment/views_handler_field_comment.inc',
          66 => 'modules/comment/views_handler_field_comment_depth.inc',
          67 => 'modules/comment/views_handler_field_comment_link.inc',
          68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          72 => 'modules/comment/views_handler_field_comment_node_link.inc',
          73 => 'modules/comment/views_handler_field_comment_username.inc',
          74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          76 => 'modules/comment/views_handler_field_node_comment.inc',
          77 => 'modules/comment/views_handler_field_node_new_comments.inc',
          78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          81 => 'modules/comment/views_handler_filter_node_comment.inc',
          82 => 'modules/comment/views_handler_sort_comment_thread.inc',
          83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          85 => 'modules/comment/views_plugin_row_comment_rss.inc',
          86 => 'modules/comment/views_plugin_row_comment_view.inc',
          87 => 'modules/contact/views_handler_field_contact_link.inc',
          88 => 'modules/field/views_handler_field_field.inc',
          89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          90 => 'modules/field/views_handler_argument_field_list.inc',
          91 => 'modules/field/views_handler_filter_field_list_boolean.inc',
          92 => 'modules/field/views_handler_argument_field_list_string.inc',
          93 => 'modules/field/views_handler_filter_field_list.inc',
          94 => 'modules/filter/views_handler_field_filter_format_name.inc',
          95 => 'modules/locale/views_handler_field_node_language.inc',
          96 => 'modules/locale/views_handler_filter_node_language.inc',
          97 => 'modules/locale/views_handler_argument_locale_group.inc',
          98 => 'modules/locale/views_handler_argument_locale_language.inc',
          99 => 'modules/locale/views_handler_field_locale_group.inc',
          100 => 'modules/locale/views_handler_field_locale_language.inc',
          101 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          102 => 'modules/locale/views_handler_filter_locale_group.inc',
          103 => 'modules/locale/views_handler_filter_locale_language.inc',
          104 => 'modules/locale/views_handler_filter_locale_version.inc',
          105 => 'modules/node/views_handler_argument_dates_various.inc',
          106 => 'modules/node/views_handler_argument_node_language.inc',
          107 => 'modules/node/views_handler_argument_node_nid.inc',
          108 => 'modules/node/views_handler_argument_node_type.inc',
          109 => 'modules/node/views_handler_argument_node_vid.inc',
          110 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          111 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          112 => 'modules/node/views_handler_field_node.inc',
          113 => 'modules/node/views_handler_field_node_link.inc',
          114 => 'modules/node/views_handler_field_node_link_delete.inc',
          115 => 'modules/node/views_handler_field_node_link_edit.inc',
          116 => 'modules/node/views_handler_field_node_revision.inc',
          117 => 'modules/node/views_handler_field_node_revision_link.inc',
          118 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          119 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          120 => 'modules/node/views_handler_field_node_path.inc',
          121 => 'modules/node/views_handler_field_node_type.inc',
          122 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          123 => 'modules/node/views_handler_filter_node_access.inc',
          124 => 'modules/node/views_handler_filter_node_status.inc',
          125 => 'modules/node/views_handler_filter_node_type.inc',
          126 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          127 => 'modules/node/views_plugin_argument_default_node.inc',
          128 => 'modules/node/views_plugin_argument_validate_node.inc',
          129 => 'modules/node/views_plugin_row_node_rss.inc',
          130 => 'modules/node/views_plugin_row_node_view.inc',
          131 => 'modules/profile/views_handler_field_profile_date.inc',
          132 => 'modules/profile/views_handler_field_profile_list.inc',
          133 => 'modules/profile/views_handler_filter_profile_selection.inc',
          134 => 'modules/search/views_handler_argument_search.inc',
          135 => 'modules/search/views_handler_field_search_score.inc',
          136 => 'modules/search/views_handler_filter_search.inc',
          137 => 'modules/search/views_handler_sort_search_score.inc',
          138 => 'modules/search/views_plugin_row_search_view.inc',
          139 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          140 => 'modules/system/views_handler_argument_file_fid.inc',
          141 => 'modules/system/views_handler_field_file.inc',
          142 => 'modules/system/views_handler_field_file_extension.inc',
          143 => 'modules/system/views_handler_field_file_filemime.inc',
          144 => 'modules/system/views_handler_field_file_uri.inc',
          145 => 'modules/system/views_handler_field_file_status.inc',
          146 => 'modules/system/views_handler_filter_file_status.inc',
          147 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          148 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          150 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          151 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          152 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          153 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          154 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          155 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          156 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          157 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          158 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          159 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          160 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          161 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          162 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          163 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
          164 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
          165 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
          166 => 'modules/system/views_handler_filter_system_type.inc',
          167 => 'modules/translation/views_handler_argument_node_tnid.inc',
          168 => 'modules/translation/views_handler_field_node_link_translate.inc',
          169 => 'modules/translation/views_handler_field_node_translation_link.inc',
          170 => 'modules/translation/views_handler_filter_node_tnid.inc',
          171 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          172 => 'modules/translation/views_handler_relationship_translation.inc',
          173 => 'modules/user/views_handler_argument_user_uid.inc',
          174 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          175 => 'modules/user/views_handler_field_user.inc',
          176 => 'modules/user/views_handler_field_user_language.inc',
          177 => 'modules/user/views_handler_field_user_link.inc',
          178 => 'modules/user/views_handler_field_user_link_cancel.inc',
          179 => 'modules/user/views_handler_field_user_link_edit.inc',
          180 => 'modules/user/views_handler_field_user_mail.inc',
          181 => 'modules/user/views_handler_field_user_name.inc',
          182 => 'modules/user/views_handler_field_user_permissions.inc',
          183 => 'modules/user/views_handler_field_user_picture.inc',
          184 => 'modules/user/views_handler_field_user_roles.inc',
          185 => 'modules/user/views_handler_filter_user_current.inc',
          186 => 'modules/user/views_handler_filter_user_name.inc',
          187 => 'modules/user/views_handler_filter_user_permissions.inc',
          188 => 'modules/user/views_handler_filter_user_roles.inc',
          189 => 'modules/user/views_plugin_argument_default_current_user.inc',
          190 => 'modules/user/views_plugin_argument_default_user.inc',
          191 => 'modules/user/views_plugin_argument_validate_user.inc',
          192 => 'modules/user/views_plugin_row_user_view.inc',
          193 => 'plugins/views_plugin_access.inc',
          194 => 'plugins/views_plugin_access_none.inc',
          195 => 'plugins/views_plugin_access_perm.inc',
          196 => 'plugins/views_plugin_access_role.inc',
          197 => 'plugins/views_plugin_argument_default.inc',
          198 => 'plugins/views_plugin_argument_default_php.inc',
          199 => 'plugins/views_plugin_argument_default_fixed.inc',
          200 => 'plugins/views_plugin_argument_default_raw.inc',
          201 => 'plugins/views_plugin_argument_validate.inc',
          202 => 'plugins/views_plugin_argument_validate_numeric.inc',
          203 => 'plugins/views_plugin_argument_validate_php.inc',
          204 => 'plugins/views_plugin_cache.inc',
          205 => 'plugins/views_plugin_cache_none.inc',
          206 => 'plugins/views_plugin_cache_time.inc',
          207 => 'plugins/views_plugin_display.inc',
          208 => 'plugins/views_plugin_display_attachment.inc',
          209 => 'plugins/views_plugin_display_block.inc',
          210 => 'plugins/views_plugin_display_default.inc',
          211 => 'plugins/views_plugin_display_embed.inc',
          212 => 'plugins/views_plugin_display_extender.inc',
          213 => 'plugins/views_plugin_display_feed.inc',
          214 => 'plugins/views_plugin_display_page.inc',
          215 => 'plugins/views_plugin_exposed_form_basic.inc',
          216 => 'plugins/views_plugin_exposed_form.inc',
          217 => 'plugins/views_plugin_exposed_form_input_required.inc',
          218 => 'plugins/views_plugin_localization_core.inc',
          219 => 'plugins/views_plugin_localization.inc',
          220 => 'plugins/views_plugin_localization_none.inc',
          221 => 'plugins/views_plugin_pager.inc',
          222 => 'plugins/views_plugin_pager_full.inc',
          223 => 'plugins/views_plugin_pager_mini.inc',
          224 => 'plugins/views_plugin_pager_none.inc',
          225 => 'plugins/views_plugin_pager_some.inc',
          226 => 'plugins/views_plugin_query.inc',
          227 => 'plugins/views_plugin_query_default.inc',
          228 => 'plugins/views_plugin_row.inc',
          229 => 'plugins/views_plugin_row_fields.inc',
          230 => 'plugins/views_plugin_row_rss_fields.inc',
          231 => 'plugins/views_plugin_style.inc',
          232 => 'plugins/views_plugin_style_default.inc',
          233 => 'plugins/views_plugin_style_grid.inc',
          234 => 'plugins/views_plugin_style_list.inc',
          235 => 'plugins/views_plugin_style_jump_menu.inc',
          236 => 'plugins/views_plugin_style_mapping.inc',
          237 => 'plugins/views_plugin_style_rss.inc',
          238 => 'plugins/views_plugin_style_summary.inc',
          239 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          240 => 'plugins/views_plugin_style_summary_unformatted.inc',
          241 => 'plugins/views_plugin_style_table.inc',
          242 => 'tests/handlers/views_handlers.test',
          243 => 'tests/handlers/views_handler_area_text.test',
          244 => 'tests/handlers/views_handler_argument_null.test',
          245 => 'tests/handlers/views_handler_argument_string.test',
          246 => 'tests/handlers/views_handler_field.test',
          247 => 'tests/handlers/views_handler_field_boolean.test',
          248 => 'tests/handlers/views_handler_field_custom.test',
          249 => 'tests/handlers/views_handler_field_counter.test',
          250 => 'tests/handlers/views_handler_field_date.test',
          251 => 'tests/handlers/views_handler_field_file_extension.test',
          252 => 'tests/handlers/views_handler_field_file_size.test',
          253 => 'tests/handlers/views_handler_field_math.test',
          254 => 'tests/handlers/views_handler_field_url.test',
          255 => 'tests/handlers/views_handler_field_xss.test',
          256 => 'tests/handlers/views_handler_filter_combine.test',
          257 => 'tests/handlers/views_handler_filter_date.test',
          258 => 'tests/handlers/views_handler_filter_equality.test',
          259 => 'tests/handlers/views_handler_filter_in_operator.test',
          260 => 'tests/handlers/views_handler_filter_numeric.test',
          261 => 'tests/handlers/views_handler_filter_string.test',
          262 => 'tests/handlers/views_handler_sort_random.test',
          263 => 'tests/handlers/views_handler_sort_date.test',
          264 => 'tests/handlers/views_handler_sort.test',
          265 => 'tests/test_handlers/views_test_area_access.inc',
          266 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          267 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          268 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
          269 => 'tests/plugins/views_plugin_display.test',
          270 => 'tests/styles/views_plugin_style_jump_menu.test',
          271 => 'tests/styles/views_plugin_style.test',
          272 => 'tests/styles/views_plugin_style_base.test',
          273 => 'tests/styles/views_plugin_style_mapping.test',
          274 => 'tests/styles/views_plugin_style_unformatted.test',
          275 => 'tests/views_access.test',
          276 => 'tests/views_analyze.test',
          277 => 'tests/views_basic.test',
          278 => 'tests/views_argument_default.test',
          279 => 'tests/views_argument_validator.test',
          280 => 'tests/views_exposed_form.test',
          281 => 'tests/field/views_fieldapi.test',
          282 => 'tests/views_glossary.test',
          283 => 'tests/views_groupby.test',
          284 => 'tests/views_handlers.test',
          285 => 'tests/views_module.test',
          286 => 'tests/views_pager.test',
          287 => 'tests/views_plugin_localization_test.inc',
          288 => 'tests/views_translatable.test',
          289 => 'tests/views_query.test',
          290 => 'tests/views_upgrade.test',
          291 => 'tests/views_test.views_default.inc',
          292 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          293 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          294 => 'tests/node/views_node_revision_relations.test',
          295 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
          296 => 'tests/user/views_handler_field_user_name.test',
          297 => 'tests/user/views_user_argument_default.test',
          298 => 'tests/user/views_user_argument_validate.test',
          299 => 'tests/user/views_user.test',
          300 => 'tests/views_cache.test',
          301 => 'tests/views_view.test',
          302 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.11',
        'project' => 'views',
        'datestamp' => '1430321048',
      ),
      'project' => 'views',
      'version' => '7.x-3.11',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'views',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2.9',
        'files' => 
        array (
          0 => 'plugins/operation_types/base.class.php',
          1 => 'views/views_bulk_operations_handler_field_operations.inc',
        ),
        'version' => '7.x-3.3',
        'project' => 'views_bulk_operations',
        'datestamp' => '1435764542',
      ),
      'project' => 'views_bulk_operations',
      'version' => '7.x-3.3',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'version' => '7.x-1.7',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'project' => 'ctools',
        'datestamp' => '1426696183',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.7',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/modules/contrib/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.11',
        'project' => 'views',
        'datestamp' => '1430321048',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.11',
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'eldir' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/profiles/hostmaster/themes/aegir/eldir/eldir.info',
      'name' => 'eldir',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Eldir',
        'description' => 'Companion theme for the Aegir hosting system.',
        'version' => '7.x-3.0-beta2+0-dev',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
        ),
        'stylesheets-conditional' => 
        array (
          'lt IE 7' => 
          array (
            'all' => 
            array (
              0 => 'ie6.css',
            ),
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar top',
          'sidebar_second' => 'Sidebar bottom',
          'content' => 'Content',
          'content_bottom' => 'Content bottom',
          'header' => 'Header',
          'footer' => 'Footer',
          'help' => 'Help',
        ),
        'project' => 'eldir',
        'datestamp' => '1436057208',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'eldir',
      'version' => '7.x-3.0-beta2+0-dev',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/hostmaster-7.x-4.x-dev/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.38',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1434567286',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.38',
    ),
  ),
);
$options['profile'] = 'hostmaster';
$options['language'] = 'en';
$options['aliases'] = array (
);
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
# local non-aegir-generated additions
@include_once('/var/aegir/hostmaster-7.x-4.x-dev/sites/daas.mobomo.net/local.drushrc.php');
