<?php
/* FamilyAffiliations Test cases generated on: 2013-01-26 08:45:54 : 1359161154*/
App::import('Controller', 'FamilyAffiliations');

class TestFamilyAffiliationsController extends FamilyAffiliationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FamilyAffiliationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.family_affiliation', 'app.family', 'app.family_contact');

	function startTest() {
		$this->FamilyAffiliations =& new TestFamilyAffiliationsController();
		$this->FamilyAffiliations->constructClasses();
	}

	function endTest() {
		unset($this->FamilyAffiliations);
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
