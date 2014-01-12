<?php
/* RelativeContact Test cases generated on: 2012-12-06 02:14:28 : 1354756468*/
App::import('Model', 'RelativeContact');

class RelativeContactTestCase extends CakeTestCase {
	var $fixtures = array('app.relative_contact', 'app.relative', 'app.user', 'app.staff', 'app.staff_affiliation', 'app.staff_contact', 'app.student', 'app.classlist', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.teacher', 'app.teacher_affiliation', 'app.teacher_contact', 'app.section_affiliation', 'app.student_affiliation', 'app.student_contact', 'app.relative_affiliation');

	function startTest() {
		$this->RelativeContact =& ClassRegistry::init('RelativeContact');
	}

	function endTest() {
		unset($this->RelativeContact);
		ClassRegistry::flush();
	}

}
