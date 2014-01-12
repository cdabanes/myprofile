<?php
/* FamilyContacts Test cases generated on: 2013-01-26 08:45:54 : 1359161154*/
App::import('Controller', 'FamilyContacts');

class TestFamilyContactsController extends FamilyContactsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FamilyContactsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.family_contact', 'app.family', 'app.family_affiliation');

	function startTest() {
		$this->FamilyContacts =& new TestFamilyContactsController();
		$this->FamilyContacts->constructClasses();
	}

	function endTest() {
		unset($this->FamilyContacts);
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
