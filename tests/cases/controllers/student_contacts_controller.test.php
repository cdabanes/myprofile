<?php
/* StudentContacts Test cases generated on: 2013-01-26 08:45:56 : 1359161156*/
App::import('Controller', 'StudentContacts');

class TestStudentContactsController extends StudentContactsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StudentContactsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.student_contact', 'app.student', 'app.classlist', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.employee', 'app.employee_affiliation', 'app.employee_contact', 'app.section_affiliation', 'app.student_affiliation');

	function startTest() {
		$this->StudentContacts =& new TestStudentContactsController();
		$this->StudentContacts->constructClasses();
	}

	function endTest() {
		unset($this->StudentContacts);
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
