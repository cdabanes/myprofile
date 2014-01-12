<?php
class StaffsController extends AppController {

	var $name = 'Staffs';

	function index() {
		$this->Staff->recursive = 0;
		$this->set('staffs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid staff', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('staff', $this->Staff->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Staff->create();
			if ($this->Staff->save($this->data)) {
				$this->Session->setFlash(__('The staff has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Staff->User->find('list');
		$positions = $this->Staff->Position->find('list');
		$this->set(compact('users', 'positions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid staff', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Staff->save($this->data)) {
				$this->Session->setFlash(__('The staff has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Staff->read(null, $id);
		}
		$users = $this->Staff->User->find('list');
		$positions = $this->Staff->Position->find('list');
		$this->set(compact('users', 'positions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for staff', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Staff->delete($id)) {
			$this->Session->setFlash(__('Staff deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Staff was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
