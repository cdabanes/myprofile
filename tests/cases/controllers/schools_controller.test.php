<?php
/* Schools Test cases generated on: 2013-01-26 08:45:55 : 1359161155*/
App::import('Controller', 'Schools');

class TestSchoolsController extends SchoolsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SchoolsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.school', 'app.place');

	function startTest() {
		$this->Schools =& new TestSchoolsController();
		$this->Schools->constructClasses();
	}

	function endTest() {
		unset($this->Schools);
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
