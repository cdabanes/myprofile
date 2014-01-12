<?php
/* Relationship Test cases generated on: 2013-01-21 15:20:08 : 1358752808*/
App::import('Model', 'Relationship');

class RelationshipTestCase extends CakeTestCase {
	var $fixtures = array('app.relationship', 'app.relation');

	function startTest() {
		$this->Relationship =& ClassRegistry::init('Relationship');
	}

	function endTest() {
		unset($this->Relationship);
		ClassRegistry::flush();
	}

}
