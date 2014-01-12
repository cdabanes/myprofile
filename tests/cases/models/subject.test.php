<?php
/* Subject Test cases generated on: 2013-01-21 15:20:21 : 1358752821*/
App::import('Model', 'Subject');

class SubjectTestCase extends CakeTestCase {
	var $fixtures = array('app.subject', 'app.course', 'app.curriculum', 'app.department', 'app.level', 'app.section', 'app.classlist', 'app.student', 'app.student_affiliation', 'app.student_contact', 'app.section_affiliation', 'app.teaching_load');

	function startTest() {
		$this->Subject =& ClassRegistry::init('Subject');
	}

	function endTest() {
		unset($this->Subject);
		ClassRegistry::flush();
	}

}
