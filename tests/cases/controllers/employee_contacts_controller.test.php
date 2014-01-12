<?php
/* EmployeeContacts Test cases generated on: 2013-01-26 08:45:53 : 1359161153*/
App::import('Controller', 'EmployeeContacts');

class TestEmployeeContactsController extends EmployeeContactsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EmployeeContactsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.employee_contact', 'app.employee', 'app.employee_affiliation', 'app.teaching_load', 'app.subject', 'app.course', 'app.curriculum', 'app.department', 'app.level', 'app.section', 'app.classlist', 'app.student', 'app.student_affiliation', 'app.student_contact', 'app.section_affiliation');

	function startTest() {
		$this->EmployeeContacts =& new TestEmployeeContactsController();
		$this->EmployeeContacts->constructClasses();
	}

	function endTest() {
		unset($this->EmployeeContacts);
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
