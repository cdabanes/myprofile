<?php
/* Developers Test cases generated on: 2013-03-07 11:48:20 : 1362628100*/
App::import('Controller', 'Developers');

class TestDevelopersController extends DevelopersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DevelopersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.developer');

	function startTest() {
		$this->Developers =& new TestDevelopersController();
		$this->Developers->constructClasses();
	}

	function endTest() {
		unset($this->Developers);
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
