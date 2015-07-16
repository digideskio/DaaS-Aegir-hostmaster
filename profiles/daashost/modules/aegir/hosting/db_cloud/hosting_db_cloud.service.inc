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
  public $has_port = TRUE;
  public $port = 3306;

  function form(&$form){ 
  	$form['mysql_cloud'] = array(
  		'#title' => 'mysql_cloud',
  		'#type' => 'hidden'
  	);
  }

}
