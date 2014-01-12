<?php
/* StudentAffiliation Test cases generated on: 2013-01-21 15:20:16 : 1358752816*/
App::import('Model', 'StudentAffiliation');

class StudentAffiliationTestCase extends CakeTestCase {
	var $fixtures = array('app.student_affiliation', 'app.student');

	function startTest() {
		$this->StudentAffiliation =& ClassRegistry::init('StudentAffiliation');
	}

	function endTest() {
		unset($this->StudentAffiliation);
		ClassRegistry::flush();
	}

}
