<?php
/* Classlists Test cases generated on: 2013-01-26 08:45:52 : 1359161152*/
App::import('Controller', 'Classlists');

class TestClasslistsController extends ClasslistsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ClasslistsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.classlist', 'app.student', 'app.student_affiliation', 'app.student_contact', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.employee', 'app.employee_affiliation', 'app.employee_contact', 'app.section_affiliation');

	function startTest() {
		$this->Classlists =& new TestClasslistsController();
		$this->Classlists->constructClasses();
	}

	function endTest() {
		unset($this->Classlists);
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
