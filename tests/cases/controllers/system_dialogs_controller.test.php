<?php
/* SystemDialogs Test cases generated on: 2013-01-26 08:45:56 : 1359161156*/
App::import('Controller', 'SystemDialogs');

class TestSystemDialogsController extends SystemDialogsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SystemDialogsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.system_dialog');

	function startTest() {
		$this->SystemDialogs =& new TestSystemDialogsController();
		$this->SystemDialogs->constructClasses();
	}

	function endTest() {
		unset($this->SystemDialogs);
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
