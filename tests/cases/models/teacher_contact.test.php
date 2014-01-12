<?php
/* TeacherContact Test cases generated on: 2013-01-03 10:51:34 : 1357181494*/
App::import('Model', 'TeacherContact');

class TeacherContactTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher_contact', 'app.teacher');

	function startTest() {
		$this->TeacherContact =& ClassRegistry::init('TeacherContact');
	}

	function endTest() {
		unset($this->TeacherContact);
		ClassRegistry::flush();
	}

}
