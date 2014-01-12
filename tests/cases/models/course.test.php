<?php
/* Course Test cases generated on: 2013-01-21 15:19:39 : 1358752779*/
App::import('Model', 'Course');

class CourseTestCase extends CakeTestCase {
	var $fixtures = array('app.course', 'app.curriculum', 'app.subject', 'app.level');

	function startTest() {
		$this->Course =& ClassRegistry::init('Course');
	}

	function endTest() {
		unset($this->Course);
		ClassRegistry::flush();
	}

}
