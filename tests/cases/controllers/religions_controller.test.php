<?php
/* Religions Test cases generated on: 2013-01-26 08:45:55 : 1359161155*/
App::import('Controller', 'Religions');

class TestReligionsController extends ReligionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ReligionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.religion');

	function startTest() {
		$this->Religions =& new TestReligionsController();
		$this->Religions->constructClasses();
	}

	function endTest() {
		unset($this->Religions);
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
