<?php
class SystemLogsController extends AppController {

	var $name = 'SystemLogs';

	function index() {
		$this->SystemLog->recursive = 0;
		$this->set('systemLogs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid system log', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('systemLog', $this->SystemLog->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SystemLog->create();
			if ($this->SystemLog->save($this->data)) {
				$this->Session->setFlash(__('The system log has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The system log could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid system log', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SystemLog->save($this->data)) {
				$this->Session->setFlash(__('The system log has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The system log could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SystemLog->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for system log', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SystemLog->delete($id)) {
			$this->Session->setFlash(__('System log deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('System log was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
