<?php
class SystemCountersController extends AppController {

	var $name = 'SystemCounters';

	function index() {
		$this->SystemCounter->recursive = 0;
		$this->set('systemCounters', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid system counter', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('systemCounter', $this->SystemCounter->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SystemCounter->create();
			if ($this->SystemCounter->save($this->data)) {
				$this->Session->setFlash(__('The system counter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The system counter could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid system counter', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SystemCounter->save($this->data)) {
				$this->Session->setFlash(__('The system counter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The system counter could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SystemCounter->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for system counter', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SystemCounter->delete($id)) {
			$this->Session->setFlash(__('System counter deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('System counter was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
