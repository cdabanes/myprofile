<?php
/* Classlist Test cases generated on: 2013-01-21 15:19:38 : 1358752778*/
App::import('Model', 'Classlist');

class ClasslistTestCase extends CakeTestCase {
	var $fixtures = array('app.classlist', 'app.student', 'app.section');

	function startTest() {
		$this->Classlist =& ClassRegistry::init('Classlist');
	}

	function endTest() {
		unset($this->Classlist);
		ClassRegistry::flush();
	}

}
