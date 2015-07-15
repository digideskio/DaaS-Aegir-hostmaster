<?php
/**
 * @file
 * Provide the hosting serivce classes for database integration.
 */

/**
 * A MySQL specific db cloud service implementation class.
 */
class hostingService_db_mysql_cloud extends hostingService_db_mysql {
  public $type = 'mysql_cloud';
}
