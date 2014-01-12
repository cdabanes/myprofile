<?php
/* Section Test cases generated on: 2013-01-21 15:20:14 : 1358752814*/
App::import('Model', 'Section');

class SectionTestCase extends CakeTestCase {
	var $fixtures = array('app.section', 'app.level', 'app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.section_affiliation', 'app.classlist', 'app.student', 'app.teaching_load');

	function startTest() {
		$this->Section =& ClassRegistry::init('Section');
	}

	function endTest() {
		unset($this->Section);
		ClassRegistry::flush();
	}

}
