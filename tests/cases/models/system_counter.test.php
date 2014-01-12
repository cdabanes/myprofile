<?php
/* SystemCounter Test cases generated on: 2013-01-21 15:20:23 : 1358752823*/
App::import('Model', 'SystemCounter');

class SystemCounterTestCase extends CakeTestCase {
	var $fixtures = array('app.system_counter');

	function startTest() {
		$this->SystemCounter =& ClassRegistry::init('SystemCounter');
	}

	function endTest() {
		unset($this->SystemCounter);
		ClassRegistry::flush();
	}

}
