<?php
/* StudentAffiliations Test cases generated on: 2013-01-26 08:45:56 : 1359161156*/
App::import('Controller', 'StudentAffiliations');

class TestStudentAffiliationsController extends StudentAffiliationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StudentAffiliationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.student_affiliation', 'app.student', 'app.classlist', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.employee', 'app.employee_affiliation', 'app.employee_contact', 'app.section_affiliation', 'app.student_contact');

	function startTest() {
		$this->StudentAffiliations =& new TestStudentAffiliationsController();
		$this->StudentAffiliations->constructClasses();
	}

	function endTest() {
		unset($this->StudentAffiliations);
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
