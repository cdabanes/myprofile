<?php
/* SystemCounters Test cases generated on: 2013-01-26 08:45:56 : 1359161156*/
App::import('Controller', 'SystemCounters');

class TestSystemCountersController extends SystemCountersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SystemCountersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.system_counter');

	function startTest() {
		$this->SystemCounters =& new TestSystemCountersController();
		$this->SystemCounters->constructClasses();
	}

	function endTest() {
		unset($this->SystemCounters);
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
