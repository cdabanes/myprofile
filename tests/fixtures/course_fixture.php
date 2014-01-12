<?php
/* Course Fixture generated on: 2013-01-21 15:19:39 : 1358752779 */
class CourseFixture extends CakeTestFixture {
	var $name = 'Course';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'curriculum_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 6, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'subject_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'level_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'weight_compute' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '4,2'),
		'weight_display' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '4,2'),
		'tree_index' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2),
		'order_index' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2),
		'has_child' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'has_parent' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '50fcec0b-4e08-48be-916b-4a62b7fb8490',
			'curriculum_id' => 'Lore',
			'subject_id' => 'Lorem ',
			'level_id' => '',
			'weight_compute' => 1,
			'weight_display' => 1,
			'tree_index' => 1,
			'order_index' => 1,
			'has_child' => 1,
			'has_parent' => 1
		),
	);
}
