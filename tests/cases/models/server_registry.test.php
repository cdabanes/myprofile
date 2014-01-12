<?php
/* ServerRegistry Test cases generated on: 2013-03-07 15:24:32 : 1362641072*/
App::import('Model', 'ServerRegistry');

class ServerRegistryTestCase extends CakeTestCase {
	var $fixtures = array('app.server_registry', 'app.server_token');

	function startTest() {
		$this->ServerRegistry =& ClassRegistry::init('ServerRegistry');
	}

	function endTest() {
		unset($this->ServerRegistry);
		ClassRegistry::flush();
	}

}
