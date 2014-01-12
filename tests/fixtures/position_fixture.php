<?php
/* Position Fixture generated on: 2013-01-21 15:20:05 : 1358752805 */
class PositionFixture extends CakeTestFixture {
	var $name = 'Position';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 'Lor',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-01-21 15:20:05',
			'modified' => '2013-01-21 15:20:05'
		),
	);
}
