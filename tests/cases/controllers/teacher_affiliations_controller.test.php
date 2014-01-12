<?php
/* TeacherAffiliations Test cases generated on: 2013-01-03 11:05:10 : 1357182310*/
App::import('Controller', 'TeacherAffiliations');

class TestTeacherAffiliationsController extends TeacherAffiliationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TeacherAffiliationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher_affiliation', 'app.teacher', 'app.user', 'app.family', 'app.family_affiliation', 'app.family_contact', 'app.staff', 'app.position', 'app.staff_affiliation', 'app.staff_contact', 'app.student', 'app.classlist', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.section_affiliation', 'app.student_affiliation', 'app.student_contact', 'app.teacher_contact');

	function startTest() {
		$this->TeacherAffiliations =& new TestTeacherAffiliationsController();
		$this->TeacherAffiliations->constructClasses();
	}

	function endTest() {
		unset($this->TeacherAffiliations);
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
