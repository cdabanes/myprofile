<?php
/* Positions Test cases generated on: 2013-01-26 08:45:55 : 1359161155*/
App::import('Controller', 'Positions');

class TestPositionsController extends PositionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PositionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.position');

	function startTest() {
		$this->Positions =& new TestPositionsController();
		$this->Positions->constructClasses();
	}

	function endTest() {
		unset($this->Positions);
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
