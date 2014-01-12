<?php
/* TeachingLoad Test cases generated on: 2013-01-21 15:20:31 : 1358752831*/
App::import('Model', 'TeachingLoad');

class TeachingLoadTestCase extends CakeTestCase {
	var $fixtures = array('app.teaching_load', 'app.employee', 'app.employee_affiliation', 'app.employee_contact', 'app.subject', 'app.course', 'app.curriculum', 'app.department', 'app.level', 'app.section', 'app.classlist', 'app.student', 'app.student_affiliation', 'app.student_contact', 'app.section_affiliation');

	function startTest() {
		$this->TeachingLoad =& ClassRegistry::init('TeachingLoad');
	}

	function endTest() {
		unset($this->TeachingLoad);
		ClassRegistry::flush();
	}

}
