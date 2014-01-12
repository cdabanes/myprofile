<?php
/* GroupsUser Fixture generated on: 2013-01-21 15:19:59 : 1358752799 */
class GroupsUserFixture extends CakeTestFixture {
	var $name = 'GroupsUser';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 5),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 15),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '50fcec1f-7f78-4b83-bc93-4c3cb7fb8490',
			'group_id' => 1,
			'user_id' => 1
		),
	);
}
