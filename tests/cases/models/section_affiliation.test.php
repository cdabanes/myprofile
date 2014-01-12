<?php
/* SectionAffiliation Test cases generated on: 2013-01-21 15:20:13 : 1358752813*/
App::import('Model', 'SectionAffiliation');

class SectionAffiliationTestCase extends CakeTestCase {
	var $fixtures = array('app.section_affiliation', 'app.section', 'app.curriculum', 'app.department', 'app.level', 'app.course', 'app.subject');

	function startTest() {
		$this->SectionAffiliation =& ClassRegistry::init('SectionAffiliation');
	}

	function endTest() {
		unset($this->SectionAffiliation);
		ClassRegistry::flush();
	}

}
