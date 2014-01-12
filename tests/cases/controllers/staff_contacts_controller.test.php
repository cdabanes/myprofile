<?php
/* StaffContacts Test cases generated on: 2013-01-03 11:05:08 : 1357182308*/
App::import('Controller', 'StaffContacts');

class TestStaffContactsController extends StaffContactsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StaffContactsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.staff_contact', 'app.staff', 'app.user', 'app.family', 'app.family_affiliation', 'app.family_contact', 'app.student', 'app.classlist', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.teacher', 'app.teacher_affiliation', 'app.teacher_contact', 'app.section_affiliation', 'app.student_affiliation', 'app.student_contact', 'app.position', 'app.staff_affiliation');

	function startTest() {
		$this->StaffContacts =& new TestStaffContactsController();
		$this->StaffContacts->constructClasses();
	}

	function endTest() {
		unset($this->StaffContacts);
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
