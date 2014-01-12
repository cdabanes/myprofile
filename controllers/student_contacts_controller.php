<?php
class StudentContactsController extends AppController {

	var $name = 'StudentContacts';

	function index() {
		$this->StudentContact->recursive = 0;
		$this->set('studentContacts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid student contact', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('studentContact', $this->StudentContact->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->StudentContact->create();
			if ($this->StudentContact->save($this->data)) {
				$this->Session->setFlash(__('The student contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student contact could not be saved. Please, try again.', true));
			}
		}
		$students = $this->StudentContact->Student->find('list');
		$this->set(compact('students'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid student contact', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->StudentContact->save($this->data)) {
				$this->Session->setFlash(__('The student contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student contact could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->StudentContact->read(null, $id);
		}
		$students = $this->StudentContact->Student->find('list');
		$this->set(compact('students'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for student contact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->StudentContact->delete($id)) {
			$this->Session->setFlash(__('Student contact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Student contact was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
