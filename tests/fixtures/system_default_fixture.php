<?php
/* SystemDefault Fixture generated on: 2013-01-21 15:20:24 : 1358752824 */
class SystemDefaultFixture extends CakeTestFixture {
	var $name = 'SystemDefault';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '50fcec38-d780-49a0-b62c-4a26b7fb8490',
			'key' => 'Lorem ipsum dolor ',
			'value' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-01-21 15:20:24',
			'modified' => '2013-01-21 15:20:24'
		),
	);
}
