<?php
/* Staff Test cases generated on: 2013-01-03 11:03:47 : 1357182227*/
App::import('Model', 'Staff');

class StaffTestCase extends CakeTestCase {
	var $fixtures = array('app.staff', 'app.user', 'app.family', 'app.family_affiliation', 'app.family_contact', 'app.student', 'app.classlist', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.teacher', 'app.teacher_affiliation', 'app.teacher_contact', 'app.section_affiliation', 'app.student_affiliation', 'app.student_contact', 'app.position', 'app.staff_affiliation', 'app.staff_contact');

	function startTest() {
		$this->Staff =& ClassRegistry::init('Staff');
	}

	function endTest() {
		unset($this->Staff);
		ClassRegistry::flush();
	}

}
