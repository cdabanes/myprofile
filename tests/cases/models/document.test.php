<?php
/* Document Test cases generated on: 2013-05-10 07:05:17 : 1368162317*/
App::import('Model', 'Document');

class DocumentTestCase extends CakeTestCase {
	var $fixtures = array('app.document');

	function startTest() {
		$this->Document =& ClassRegistry::init('Document');
	}

	function endTest() {
		unset($this->Document);
		ClassRegistry::flush();
	}

}
