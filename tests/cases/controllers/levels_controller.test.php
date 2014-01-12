<?php
/* Levels Test cases generated on: 2013-01-26 08:45:54 : 1359161154*/
App::import('Controller', 'Levels');

class TestLevelsController extends LevelsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LevelsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.employee', 'app.employee_affiliation', 'app.employee_contact', 'app.section', 'app.classlist', 'app.student', 'app.student_affiliation', 'app.student_contact', 'app.section_affiliation');

	function startTest() {
		$this->Levels =& new TestLevelsController();
		$this->Levels->constructClasses();
	}

	function endTest() {
		unset($this->Levels);
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
