<?php
/* School Fixture generated on: 2013-01-21 15:20:11 : 1358752811 */
class SchoolFixture extends CakeTestFixture {
	var $name = 'School';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'alias' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'place_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 8),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'alias' => 'Lorem ip',
			'place_id' => 1,
			'created' => '2013-01-21 15:20:11',
			'modified' => '2013-01-21 15:20:11'
		),
	);
}
