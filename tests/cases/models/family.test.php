<?php
/* Family Test cases generated on: 2013-01-21 15:19:52 : 1358752792*/
App::import('Model', 'Family');

class FamilyTestCase extends CakeTestCase {
	var $fixtures = array('app.family', 'app.family_affiliation', 'app.family_contact');

	function startTest() {
		$this->Family =& ClassRegistry::init('Family');
	}

	function endTest() {
		unset($this->Family);
		ClassRegistry::flush();
	}

}
