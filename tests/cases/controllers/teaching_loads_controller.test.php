<?php
/* TeachingLoads Test cases generated on: 2013-01-26 08:45:57 : 1359161157*/
App::import('Controller', 'TeachingLoads');

class TestTeachingLoadsController extends TeachingLoadsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TeachingLoadsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.teaching_load', 'app.employee', 'app.employee_affiliation', 'app.employee_contact', 'app.subject', 'app.course', 'app.curriculum', 'app.department', 'app.level', 'app.section', 'app.classlist', 'app.student', 'app.student_affiliation', 'app.student_contact', 'app.section_affiliation');

	function startTest() {
		$this->TeachingLoads =& new TestTeachingLoadsController();
		$this->TeachingLoads->constructClasses();
	}

	function endTest() {
		unset($this->TeachingLoads);
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
