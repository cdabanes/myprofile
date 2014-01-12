<?php
/* EmployeeAffiliations Test cases generated on: 2013-01-26 08:45:53 : 1359161153*/
App::import('Controller', 'EmployeeAffiliations');

class TestEmployeeAffiliationsController extends EmployeeAffiliationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EmployeeAffiliationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.employee_affiliation', 'app.employee', 'app.employee_contact', 'app.teaching_load', 'app.subject', 'app.course', 'app.curriculum', 'app.department', 'app.level', 'app.section', 'app.classlist', 'app.student', 'app.student_affiliation', 'app.student_contact', 'app.section_affiliation');

	function startTest() {
		$this->EmployeeAffiliations =& new TestEmployeeAffiliationsController();
		$this->EmployeeAffiliations->constructClasses();
	}

	function endTest() {
		unset($this->EmployeeAffiliations);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
