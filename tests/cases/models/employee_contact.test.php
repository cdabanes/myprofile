<?php
/* EmployeeContact Test cases generated on: 2013-01-21 15:19:47 : 1358752787*/
App::import('Model', 'EmployeeContact');

class EmployeeContactTestCase extends CakeTestCase {
	var $fixtures = array('app.employee_contact', 'app.employee');

	function startTest() {
		$this->EmployeeContact =& ClassRegistry::init('EmployeeContact');
	}

	function endTest() {
		unset($this->EmployeeContact);
		ClassRegistry::flush();
	}

}
