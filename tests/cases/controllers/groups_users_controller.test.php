<?php
/* GroupsUsers Test cases generated on: 2013-01-26 08:45:54 : 1359161154*/
App::import('Controller', 'GroupsUsers');

class TestGroupsUsersController extends GroupsUsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GroupsUsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.groups_user', 'app.group', 'app.user');

	function startTest() {
		$this->GroupsUsers =& new TestGroupsUsersController();
		$this->GroupsUsers->constructClasses();
	}

	function endTest() {
		unset($this->GroupsUsers);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
