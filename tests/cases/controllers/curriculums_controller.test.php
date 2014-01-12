<?php
/* Curriculums Test cases generated on: 2013-01-26 08:45:52 : 1359161152*/
App::import('Controller', 'Curriculums');

class TestCurriculumsController extends CurriculumsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CurriculumsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.curriculum', 'app.department', 'app.level', 'app.course', 'app.subject', 'app.teaching_load', 'app.employee', 'app.employee_affiliation', 'app.employee_contact', 'app.section', 'app.classlist', 'app.student', 'app.student_affiliation', 'app.student_contact', 'app.section_affiliation');

	function startTest() {
		$this->Curriculums =& new TestCurriculumsController();
		$this->Curriculums->constructClasses();
	}

	function endTest() {
		unset($this->Curriculums);
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
