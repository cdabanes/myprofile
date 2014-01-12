<?php
/* Places Test cases generated on: 2013-01-26 08:45:55 : 1359161155*/
App::import('Controller', 'Places');

class TestPlacesController extends PlacesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PlacesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.place', 'app.school');

	function startTest() {
		$this->Places =& new TestPlacesController();
		$this->Places->constructClasses();
	}

	function endTest() {
		unset($this->Places);
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
