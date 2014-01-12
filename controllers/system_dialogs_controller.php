<?php
class SystemDialogsController extends AppController {

	var $name = 'SystemDialogs';

	function index() {
		$this->SystemDialog->recursive = 0;
		$this->set('systemDialogs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid system dialog', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('systemDialog', $this->SystemDialog->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SystemDialog->create();
			if ($this->SystemDialog->save($this->data)) {
				$this->Session->setFlash(__('The system dialog has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The system dialog could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid system dialog', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SystemDialog->save($this->data)) {
				$this->Session->setFlash(__('The system dialog has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The system dialog could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SystemDialog->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for system dialog', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SystemDialog->delete($id)) {
			$this->Session->setFlash(__('System dialog deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('System dialog was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
