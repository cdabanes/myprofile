<?php
/* Document Fixture generated on: 2013-05-10 07:05:17 : 1368162317 */
class DocumentFixture extends CakeTestFixture {
	var $name = 'Document';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dir' => array('type' => 'binary', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'dir' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-05-10 07:05:17',
			'modified' => '2013-05-10 07:05:17'
		),
	);
}
