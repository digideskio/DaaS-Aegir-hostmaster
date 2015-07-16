<?php
/**
 * @file
 * Hosting service classes for the Hosting web cloud module.
 */

module_load_include('service.inc', 'hosting_web_server');

class hostingService_http_apache_cloud extends hostingService_http_apache {
  // protected $has_port = FALSE;
  // protected $has_restart_cmd = FALSE;
  public $type = 'apache_cloud';
  public $port = 80;

  function form(&$form){ 
  	$form['apache_cloud'] = array(
  		'#title' => 'apache_cloud',
  		'#type' => 'hidden'
  	);
  }

}
