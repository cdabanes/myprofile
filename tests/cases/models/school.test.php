<?php
/* School Test cases generated on: 2013-01-21 15:20:11 : 1358752811*/
App::import('Model', 'School');

class SchoolTestCase extends CakeTestCase {
	var $fixtures = array('app.school', 'app.place');

	function startTest() {
		$this->School =& ClassRegistry::init('School');
	}

	function endTest() {
		unset($this->School);
		ClassRegistry::flush();
	}

}
