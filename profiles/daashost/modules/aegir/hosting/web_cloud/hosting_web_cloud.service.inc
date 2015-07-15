<?php
/**
 * @file
 * Hosting service classes for the Hosting web cloud module.
 */

module_load_include('service.inc', 'hosting_web_server');

class hostingService_http_cloud extends hostingService_http_public {
  public $type = 'cloud';
}
