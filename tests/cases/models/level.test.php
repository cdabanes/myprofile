<?php
/* Level Test cases generated on: 2013-01-21 15:20:01 : 1358752801*/
App::import('Model', 'Level');

class LevelTestCase extends CakeTestCase {
	var $fixtures = array('app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.section_affiliation', 'app.section');

	function startTest() {
		$this->Level =& ClassRegistry::init('Level');
	}

	function endTest() {
		unset($this->Level);
		ClassRegistry::flush();
	}

}
