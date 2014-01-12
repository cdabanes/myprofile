<?php
/* Teachers Test cases generated on: 2013-01-03 11:05:11 : 1357182311*/
App::import('Controller', 'Teachers');

class TestTeachersController extends TeachersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TeachersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher', 'app.user', 'app.family', 'app.family_affiliation', 'app.family_contact', 'app.staff', 'app.position', 'app.staff_affiliation', 'app.staff_contact', 'app.student', 'app.classlist', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.section_affiliation', 'app.student_affiliation', 'app.student_contact', 'app.teacher_affiliation', 'app.teacher_contact');

	function startTest() {
		$this->Teachers =& new TestTeachersController();
		$this->Teachers->constructClasses();
	}

	function endTest() {
		unset($this->Teachers);
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
