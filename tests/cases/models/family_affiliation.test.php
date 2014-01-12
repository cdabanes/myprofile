<?php
/* FamilyAffiliation Test cases generated on: 2013-01-21 15:19:54 : 1358752794*/
App::import('Model', 'FamilyAffiliation');

class FamilyAffiliationTestCase extends CakeTestCase {
	var $fixtures = array('app.family_affiliation', 'app.family', 'app.family_contact');

	function startTest() {
		$this->FamilyAffiliation =& ClassRegistry::init('FamilyAffiliation');
	}

	function endTest() {
		unset($this->FamilyAffiliation);
		ClassRegistry::flush();
	}

}
