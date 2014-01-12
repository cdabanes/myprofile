<?php
/* EmployeeAffiliation Test cases generated on: 2013-06-03 05:37:33 : 1370230653*/
App::import('Model', 'EmployeeAffiliation');

class EmployeeAffiliationTestCase extends CakeTestCase {
	var $fixtures = array('app.employee_affiliation', 'app.employee', 'app.employee_contact', 'app.teaching_load', 'app.subject', 'app.course', 'app.curriculum', 'app.department', 'app.level', 'app.section', 'app.classlist', 'app.student', 'app.student_affiliation', 'app.student_contact', 'app.section_affiliation');

	function startTest() {
		$this->EmployeeAffiliation =& ClassRegistry::init('EmployeeAffiliation');
	}

	function endTest() {
		unset($this->EmployeeAffiliation);
		ClassRegistry::flush();
	}

}
