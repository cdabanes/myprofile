<?php
/* SectionAffiliation Fixture generated on: 2013-01-21 15:20:13 : 1358752813 */
class SectionAffiliationFixture extends CakeTestFixture {
	var $name = 'SectionAffiliation';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'section_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'curriculum_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 6, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'esp' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '6,2'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '50fcec2d-9370-49a6-9070-499bb7fb8490',
			'section_id' => 1,
			'curriculum_id' => 'Lore',
			'esp' => 1,
			'created' => '2013-01-21 15:20:13',
			'modified' => '2013-01-21 15:20:13'
		),
	);
}
