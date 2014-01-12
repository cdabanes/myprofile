<?php
/* Religion Test cases generated on: 2013-01-21 15:20:09 : 1358752809*/
App::import('Model', 'Religion');

class ReligionTestCase extends CakeTestCase {
	var $fixtures = array('app.religion');

	function startTest() {
		$this->Religion =& ClassRegistry::init('Religion');
	}

	function endTest() {
		unset($this->Religion);
		ClassRegistry::flush();
	}

}
