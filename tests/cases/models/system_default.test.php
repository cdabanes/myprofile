<?php
/* SystemDefault Test cases generated on: 2013-01-21 15:20:24 : 1358752824*/
App::import('Model', 'SystemDefault');

class SystemDefaultTestCase extends CakeTestCase {
	var $fixtures = array('app.system_default');

	function startTest() {
		$this->SystemDefault =& ClassRegistry::init('SystemDefault');
	}

	function endTest() {
		unset($this->SystemDefault);
		ClassRegistry::flush();
	}

}
