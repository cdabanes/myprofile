<?php
/* Relationships Test cases generated on: 2013-01-26 08:45:55 : 1359161155*/
App::import('Controller', 'Relationships');

class TestRelationshipsController extends RelationshipsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RelationshipsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.relationship', 'app.relation');

	function startTest() {
		$this->Relationships =& new TestRelationshipsController();
		$this->Relationships->constructClasses();
	}

	function endTest() {
		unset($this->Relationships);
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
