<?php
class SystemModulesController extends AppController {

	var $name = 'SystemModules';

	function index() {
		$this->SystemModule->recursive = 0;
		$this->set('systemModules', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid system module', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('systemModule', $this->SystemModule->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SystemModule->create();
			if ($this->SystemModule->save($this->data)) {
				$this->Session->setFlash(__('The system module has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The system module could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid system module', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SystemModule->save($this->data)) {
				$this->Session->setFlash(__('The system module has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The system module could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SystemModule->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for system module', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SystemModule->delete($id)) {
			$this->Session->setFlash(__('System module deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('System module was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
