<?php
/* SystemModule Test cases generated on: 2013-01-21 15:20:29 : 1358752829*/
App::import('Model', 'SystemModule');

class SystemModuleTestCase extends CakeTestCase {
	var $fixtures = array('app.system_module');

	function startTest() {
		$this->SystemModule =& ClassRegistry::init('SystemModule');
	}

	function endTest() {
		unset($this->SystemModule);
		ClassRegistry::flush();
	}

}
