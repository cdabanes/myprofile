<?php
class TeacherContactsController extends AppController {

	var $name = 'TeacherContacts';

	function index() {
		$this->TeacherContact->recursive = 0;
		$this->set('teacherContacts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid teacher contact', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('teacherContact', $this->TeacherContact->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TeacherContact->create();
			if ($this->TeacherContact->save($this->data)) {
				$this->Session->setFlash(__('The teacher contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher contact could not be saved. Please, try again.', true));
			}
		}
		$teachers = $this->TeacherContact->Teacher->find('list');
		$this->set(compact('teachers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid teacher contact', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TeacherContact->save($this->data)) {
				$this->Session->setFlash(__('The teacher contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher contact could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TeacherContact->read(null, $id);
		}
		$teachers = $this->TeacherContact->Teacher->find('list');
		$this->set(compact('teachers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for teacher contact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TeacherContact->delete($id)) {
			$this->Session->setFlash(__('Teacher contact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Teacher contact was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
