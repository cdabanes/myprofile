<?php
/* SystemDefaults Test cases generated on: 2013-01-26 08:45:56 : 1359161156*/
App::import('Controller', 'SystemDefaults');

class TestSystemDefaultsController extends SystemDefaultsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SystemDefaultsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.system_default');

	function startTest() {
		$this->SystemDefaults =& new TestSystemDefaultsController();
		$this->SystemDefaults->constructClasses();
	}

	function endTest() {
		unset($this->SystemDefaults);
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
