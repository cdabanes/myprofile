<?php
/* DeveloperAffiliation Test cases generated on: 2013-03-07 12:10:02 : 1362629402*/
App::import('Model', 'DeveloperAffiliation');

class DeveloperAffiliationTestCase extends CakeTestCase {
	var $fixtures = array('app.developer_affiliation', 'app.developer');

	function startTest() {
		$this->DeveloperAffiliation =& ClassRegistry::init('DeveloperAffiliation');
	}

	function endTest() {
		unset($this->DeveloperAffiliation);
		ClassRegistry::flush();
	}

}
