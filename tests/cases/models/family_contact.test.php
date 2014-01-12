<?php
/* FamilyContact Test cases generated on: 2013-01-21 15:19:56 : 1358752796*/
App::import('Model', 'FamilyContact');

class FamilyContactTestCase extends CakeTestCase {
	var $fixtures = array('app.family_contact', 'app.family', 'app.family_affiliation');

	function startTest() {
		$this->FamilyContact =& ClassRegistry::init('FamilyContact');
	}

	function endTest() {
		unset($this->FamilyContact);
		ClassRegistry::flush();
	}

}
