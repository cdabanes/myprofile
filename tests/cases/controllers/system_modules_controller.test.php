<?php
/* SystemModules Test cases generated on: 2013-01-26 08:45:57 : 1359161157*/
App::import('Controller', 'SystemModules');

class TestSystemModulesController extends SystemModulesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SystemModulesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.system_module');

	function startTest() {
		$this->SystemModules =& new TestSystemModulesController();
		$this->SystemModules->constructClasses();
	}

	function endTest() {
		unset($this->SystemModules);
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
