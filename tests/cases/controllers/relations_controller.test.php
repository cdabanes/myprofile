<?php
/* Relations Test cases generated on: 2013-01-26 08:45:55 : 1359161155*/
App::import('Controller', 'Relations');

class TestRelationsController extends RelationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RelationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.relation', 'app.relationship');

	function startTest() {
		$this->Relations =& new TestRelationsController();
		$this->Relations->constructClasses();
	}

	function endTest() {
		unset($this->Relations);
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
