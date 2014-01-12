<?php
/* TeachingLoad Fixture generated on: 2013-01-21 15:20:31 : 1358752831 */
class TeachingLoadFixture extends CakeTestFixture {
	var $name = 'TeachingLoad';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 8),
		'subject_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'section_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'esp' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '6,2'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '50fcec3f-f068-4c20-9a63-43bcb7fb8490',
			'employee_id' => 1,
			'subject_id' => 'Lorem ',
			'section_id' => 1,
			'esp' => 1
		),
	);
}
