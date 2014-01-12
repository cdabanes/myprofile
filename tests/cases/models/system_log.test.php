<?php
/* SystemLog Test cases generated on: 2013-01-21 15:20:27 : 1358752827*/
App::import('Model', 'SystemLog');

class SystemLogTestCase extends CakeTestCase {
	var $fixtures = array('app.system_log');

	function startTest() {
		$this->SystemLog =& ClassRegistry::init('SystemLog');
	}

	function endTest() {
		unset($this->SystemLog);
		ClassRegistry::flush();
	}

}
