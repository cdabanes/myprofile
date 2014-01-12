<?php
/* SystemCounter Fixture generated on: 2013-01-21 15:20:23 : 1358752823 */
class SystemCounterFixture extends CakeTestFixture {
	var $name = 'SystemCounter';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'value' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 8),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 80, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 'Lorem ip',
			'value' => 1,
			'comment' => 'Lorem ipsum dolor sit amet'
		),
	);
}
