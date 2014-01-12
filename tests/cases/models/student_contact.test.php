<?php
/* StudentContact Test cases generated on: 2013-01-21 15:20:18 : 1358752818*/
App::import('Model', 'StudentContact');

class StudentContactTestCase extends CakeTestCase {
	var $fixtures = array('app.student_contact', 'app.student');

	function startTest() {
		$this->StudentContact =& ClassRegistry::init('StudentContact');
	}

	function endTest() {
		unset($this->StudentContact);
		ClassRegistry::flush();
	}

}
