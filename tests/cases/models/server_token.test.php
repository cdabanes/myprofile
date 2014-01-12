<?php
/* ServerToken Test cases generated on: 2013-03-07 15:24:45 : 1362641085*/
App::import('Model', 'ServerToken');

class ServerTokenTestCase extends CakeTestCase {
	var $fixtures = array('app.server_token', 'app.server_registry');

	function startTest() {
		$this->ServerToken =& ClassRegistry::init('ServerToken');
	}

	function endTest() {
		unset($this->ServerToken);
		ClassRegistry::flush();
	}

}
