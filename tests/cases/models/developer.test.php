<?php
/* Developer Test cases generated on: 2013-03-07 12:09:38 : 1362629378*/
App::import('Model', 'Developer');

class DeveloperTestCase extends CakeTestCase {
	var $fixtures = array('app.developer', 'app.developer_affiliation');

	function startTest() {
		$this->Developer =& ClassRegistry::init('Developer');
	}

	function endTest() {
		unset($this->Developer);
		ClassRegistry::flush();
	}

}
