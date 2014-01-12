<?php
/* ServerToken Fixture generated on: 2013-03-07 15:24:45 : 1362641085 */
class ServerTokenFixture extends CakeTestFixture {
	var $name = 'ServerToken';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'server_registry_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'uid' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'server_registry_id' => 1,
			'uid' => 1
		),
	);
}
