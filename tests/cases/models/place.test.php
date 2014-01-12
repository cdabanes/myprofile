<?php
/* Place Test cases generated on: 2013-01-21 15:20:03 : 1358752803*/
App::import('Model', 'Place');

class PlaceTestCase extends CakeTestCase {
	var $fixtures = array('app.place', 'app.school');

	function startTest() {
		$this->Place =& ClassRegistry::init('Place');
	}

	function endTest() {
		unset($this->Place);
		ClassRegistry::flush();
	}

}
