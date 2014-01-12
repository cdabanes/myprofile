<?php
/* StaffAffiliation Test cases generated on: 2013-01-03 10:51:14 : 1357181474*/
App::import('Model', 'StaffAffiliation');

class StaffAffiliationTestCase extends CakeTestCase {
	var $fixtures = array('app.staff_affiliation', 'app.staff');

	function startTest() {
		$this->StaffAffiliation =& ClassRegistry::init('StaffAffiliation');
	}

	function endTest() {
		unset($this->StaffAffiliation);
		ClassRegistry::flush();
	}

}
