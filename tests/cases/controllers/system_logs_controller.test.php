<?php
/* SystemLogs Test cases generated on: 2013-01-26 08:45:57 : 1359161157*/
App::import('Controller', 'SystemLogs');

class TestSystemLogsController extends SystemLogsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SystemLogsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.system_log');

	function startTest() {
		$this->SystemLogs =& new TestSystemLogsController();
		$this->SystemLogs->constructClasses();
	}

	function endTest() {
		unset($this->SystemLogs);
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
