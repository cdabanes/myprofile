<?php
/* Relationship Fixture generated on: 2013-01-21 15:20:08 : 1358752808 */
class RelationshipFixture extends CakeTestFixture {
	var $name = 'Relationship';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'primary' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 8),
		'auxiliary' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 8),
		'relation_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 6, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'esp' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '6,2'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '50fcec28-fea0-4684-8501-4f9bb7fb8490',
			'primary' => 1,
			'auxiliary' => 1,
			'relation_id' => 'Lore',
			'esp' => 1,
			'modified' => '2013-01-21 15:20:08',
			'created' => '2013-01-21 15:20:08'
		),
	);
}
