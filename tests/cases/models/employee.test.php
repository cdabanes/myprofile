<?php
/* Employee Test cases generated on: 2013-01-21 15:19:49 : 1358752789*/
App::import('Model', 'Employee');

class EmployeeTestCase extends CakeTestCase {
	var $fixtures = array('app.employee', 'app.employee_affiliation', 'app.employee_contact', 'app.teaching_load');

	function startTest() {
		$this->Employee =& ClassRegistry::init('Employee');
	}

	function endTest() {
		unset($this->Employee);
		ClassRegistry::flush();
	}

}
