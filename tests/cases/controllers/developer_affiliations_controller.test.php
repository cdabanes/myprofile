<?php
/* DeveloperAffiliations Test cases generated on: 2013-03-07 12:10:17 : 1362629417*/
App::import('Controller', 'DeveloperAffiliations');

class TestDeveloperAffiliationsController extends DeveloperAffiliationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DeveloperAffiliationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.developer_affiliation', 'app.developer');

	function startTest() {
		$this->DeveloperAffiliations =& new TestDeveloperAffiliationsController();
		$this->DeveloperAffiliations->constructClasses();
	}

	function endTest() {
		unset($this->DeveloperAffiliations);
		ClassRegistry::flush();
	}

}
