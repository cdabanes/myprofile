<?php
/* Place Fixture generated on: 2013-01-21 15:20:03 : 1358752803 */
class PlaceFixture extends CakeTestFixture {
	var $name = 'Place';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 8, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 80, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'longitude' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,6'),
		'latitude' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,6'),
		'type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'longitude' => 1,
			'latitude' => 1,
			'type' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-01-21 15:20:03',
			'modified' => '2013-01-21 15:20:03'
		),
	);
}
