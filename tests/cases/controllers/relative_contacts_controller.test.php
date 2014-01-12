<?php
/* RelativeContacts Test cases generated on: 2012-12-06 02:16:31 : 1354756591*/
App::import('Controller', 'RelativeContacts');

class TestRelativeContactsController extends RelativeContactsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RelativeContactsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.relative_contact', 'app.relative', 'app.user', 'app.staff', 'app.staff_affiliation', 'app.staff_contact', 'app.student', 'app.classlist', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.teacher', 'app.teacher_affiliation', 'app.teacher_contact', 'app.section_affiliation', 'app.student_affiliation', 'app.student_contact', 'app.relative_affiliation');

	function startTest() {
		$this->RelativeContacts =& new TestRelativeContactsController();
		$this->RelativeContacts->constructClasses();
	}

	function endTest() {
		unset($this->RelativeContacts);
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
