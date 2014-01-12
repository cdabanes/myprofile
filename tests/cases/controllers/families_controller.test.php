<?php
/* Families Test cases generated on: 2013-01-26 08:45:53 : 1359161153*/
App::import('Controller', 'Families');

class TestFamiliesController extends FamiliesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FamiliesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.family', 'app.family_affiliation', 'app.family_contact');

	function startTest() {
		$this->Families =& new TestFamiliesController();
		$this->Families->constructClasses();
	}

	function endTest() {
		unset($this->Families);
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
