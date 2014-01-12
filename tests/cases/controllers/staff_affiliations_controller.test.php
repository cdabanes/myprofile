<?php
/* StaffAffiliations Test cases generated on: 2013-01-03 11:05:08 : 1357182308*/
App::import('Controller', 'StaffAffiliations');

class TestStaffAffiliationsController extends StaffAffiliationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StaffAffiliationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.staff_affiliation', 'app.staff', 'app.user', 'app.family', 'app.family_affiliation', 'app.family_contact', 'app.student', 'app.classlist', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.teacher', 'app.teacher_affiliation', 'app.teacher_contact', 'app.section_affiliation', 'app.student_affiliation', 'app.student_contact', 'app.position', 'app.staff_contact');

	function startTest() {
		$this->StaffAffiliations =& new TestStaffAffiliationsController();
		$this->StaffAffiliations->constructClasses();
	}

	function endTest() {
		unset($this->StaffAffiliations);
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
