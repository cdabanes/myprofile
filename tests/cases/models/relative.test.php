<?php
/* Relative Test cases generated on: 2012-12-06 02:14:30 : 1354756470*/
App::import('Model', 'Relative');

class RelativeTestCase extends CakeTestCase {
	var $fixtures = array('app.relative', 'app.user', 'app.staff', 'app.staff_affiliation', 'app.staff_contact', 'app.student', 'app.classlist', 'app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.teaching_load', 'app.teacher', 'app.teacher_affiliation', 'app.teacher_contact', 'app.section_affiliation', 'app.student_affiliation', 'app.student_contact', 'app.relative_affiliation', 'app.relative_contact');

	function startTest() {
		$this->Relative =& ClassRegistry::init('Relative');
	}

	function endTest() {
		unset($this->Relative);
		ClassRegistry::flush();
	}

}
