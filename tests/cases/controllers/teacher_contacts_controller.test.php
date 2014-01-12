<?php
/* TeacherContacts Test cases generated on: 2013-01-03 11:05:10 : 1357182310*/
App::import('Controller', 'TeacherContacts');

class TestTeacherContactsController extends TeacherContactsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TeacherContactsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher_contact', 'app.teacher', 'app.user', 'app.family', 'app.family_affiliation', 'app.family_contact', 'app.staff', 'app.position', 'app.staff_affiliation', 'app.staff_contact', 'app.student', 'app.classlist', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.section_affiliation', 'app.student_affiliation', 'app.student_contact', 'app.teacher_affiliation');

	function startTest() {
		$this->TeacherContacts =& new TestTeacherContactsController();
		$this->TeacherContacts->constructClasses();
	}

	function endTest() {
		unset($this->TeacherContacts);
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
