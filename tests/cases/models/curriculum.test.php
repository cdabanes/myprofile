<?php
/* Curriculum Test cases generated on: 2013-01-21 15:19:41 : 1358752781*/
App::import('Model', 'Curriculum');

class CurriculumTestCase extends CakeTestCase {
	var $fixtures = array('app.curriculum', 'app.department', 'app.course', 'app.subject', 'app.level', 'app.section_affiliation');

	function startTest() {
		$this->Curriculum =& ClassRegistry::init('Curriculum');
	}

	function endTest() {
		unset($this->Curriculum);
		ClassRegistry::flush();
	}

}
