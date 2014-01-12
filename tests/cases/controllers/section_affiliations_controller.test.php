<?php
/* SectionAffiliations Test cases generated on: 2013-01-26 08:45:55 : 1359161155*/
App::import('Controller', 'SectionAffiliations');

class TestSectionAffiliationsController extends SectionAffiliationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SectionAffiliationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.section_affiliation', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.employee', 'app.employee_affiliation', 'app.employee_contact', 'app.classlist', 'app.student', 'app.student_affiliation', 'app.student_contact');

	function startTest() {
		$this->SectionAffiliations =& new TestSectionAffiliationsController();
		$this->SectionAffiliations->constructClasses();
	}

	function endTest() {
		unset($this->SectionAffiliations);
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
