<?php
/* Subjects Test cases generated on: 2013-01-26 08:45:56 : 1359161156*/
App::import('Controller', 'Subjects');

class TestSubjectsController extends SubjectsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SubjectsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.subject', 'app.course', 'app.curriculum', 'app.department', 'app.level', 'app.section', 'app.classlist', 'app.student', 'app.student_affiliation', 'app.student_contact', 'app.section_affiliation', 'app.teaching_load', 'app.employee', 'app.employee_affiliation', 'app.employee_contact');

	function startTest() {
		$this->Subjects =& new TestSubjectsController();
		$this->Subjects->constructClasses();
	}

	function endTest() {
		unset($this->Subjects);
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
