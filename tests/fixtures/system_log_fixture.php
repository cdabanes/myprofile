<?php
/* SystemLog Fixture generated on: 2013-01-21 15:20:27 : 1358752827 */
class SystemLogFixture extends CakeTestFixture {
	var $name = 'SystemLog';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 8, 'key' => 'primary'),
		'actor' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 8),
		'action' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'object' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'details' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'timestamp' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'create' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'actor' => 1,
			'action' => 'Lorem ipsum dolor sit amet',
			'object' => 'Lorem ipsum dolor sit amet',
			'details' => 'Lorem ipsum dolor sit amet',
			'timestamp' => 1,
			'create' => '2013-01-21 15:20:27'
		),
	);
}
