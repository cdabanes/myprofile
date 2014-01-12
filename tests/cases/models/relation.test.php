<?php
/* Relation Test cases generated on: 2013-01-21 15:20:06 : 1358752806*/
App::import('Model', 'Relation');

class RelationTestCase extends CakeTestCase {
	var $fixtures = array('app.relation', 'app.relationship');

	function startTest() {
		$this->Relation =& ClassRegistry::init('Relation');
	}

	function endTest() {
		unset($this->Relation);
		ClassRegistry::flush();
	}

}
