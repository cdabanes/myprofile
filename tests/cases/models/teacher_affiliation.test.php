<?php
/* TeacherAffiliation Test cases generated on: 2013-01-03 10:51:32 : 1357181492*/
App::import('Model', 'TeacherAffiliation');

class TeacherAffiliationTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher_affiliation', 'app.teacher');

	function startTest() {
		$this->TeacherAffiliation =& ClassRegistry::init('TeacherAffiliation');
	}

	function endTest() {
		unset($this->TeacherAffiliation);
		ClassRegistry::flush();
	}

}
