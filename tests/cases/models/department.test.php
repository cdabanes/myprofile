<?php
/* Department Test cases generated on: 2013-01-21 15:19:44 : 1358752784*/
App::import('Model', 'Department');

class DepartmentTestCase extends CakeTestCase {
	var $fixtures = array('app.department', 'app.curriculum', 'app.course', 'app.subject', 'app.level', 'app.section_affiliation');

	function startTest() {
		$this->Department =& ClassRegistry::init('Department');
	}

	function endTest() {
		unset($this->Department);
		ClassRegistry::flush();
	}

}
