<?php
/* Position Test cases generated on: 2013-01-21 15:20:05 : 1358752805*/
App::import('Model', 'Position');

class PositionTestCase extends CakeTestCase {
	var $fixtures = array('app.position');

	function startTest() {
		$this->Position =& ClassRegistry::init('Position');
	}

	function endTest() {
		unset($this->Position);
		ClassRegistry::flush();
	}

}
