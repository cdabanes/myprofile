<?php
/* SystemDialog Test cases generated on: 2013-01-21 15:20:26 : 1358752826*/
App::import('Model', 'SystemDialog');

class SystemDialogTestCase extends CakeTestCase {
	var $fixtures = array('app.system_dialog');

	function startTest() {
		$this->SystemDialog =& ClassRegistry::init('SystemDialog');
	}

	function endTest() {
		unset($this->SystemDialog);
		ClassRegistry::flush();
	}

}
