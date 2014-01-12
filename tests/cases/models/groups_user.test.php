<?php
/* GroupsUser Test cases generated on: 2013-01-21 15:19:59 : 1358752799*/
App::import('Model', 'GroupsUser');

class GroupsUserTestCase extends CakeTestCase {
	var $fixtures = array('app.groups_user', 'app.group', 'app.user');

	function startTest() {
		$this->GroupsUser =& ClassRegistry::init('GroupsUser');
	}

	function endTest() {
		unset($this->GroupsUser);
		ClassRegistry::flush();
	}

}
