<?php
/* StaffContact Test cases generated on: 2013-01-03 10:51:15 : 1357181475*/
App::import('Model', 'StaffContact');

class StaffContactTestCase extends CakeTestCase {
	var $fixtures = array('app.staff_contact', 'app.staff');

	function startTest() {
		$this->StaffContact =& ClassRegistry::init('StaffContact');
	}

	function endTest() {
		unset($this->StaffContact);
		ClassRegistry::flush();
	}

}
