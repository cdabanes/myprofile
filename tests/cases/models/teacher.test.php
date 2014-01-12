<?php
/* Teacher Test cases generated on: 2013-01-03 10:51:35 : 1357181495*/
App::import('Model', 'Teacher');

class TeacherTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher', 'app.user', 'app.teacher_affiliation', 'app.teacher_contact', 'app.teaching_load');

	function startTest() {
		$this->Teacher =& ClassRegistry::init('Teacher');
	}

	function endTest() {
		unset($this->Teacher);
		ClassRegistry::flush();
	}

}
