<?php
class RelationsController extends AppController {

	var $name = 'Relations';

	function index() {
		$this->Relation->recursive = 0;
		$this->set('relations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid relation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('relation', $this->Relation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Relation->create();
			if ($this->Relation->save($this->data)) {
				$this->Session->setFlash(__('The relation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relation could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid relation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Relation->save($this->data)) {
				$this->Session->setFlash(__('The relation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Relation->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for relation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Relation->delete($id)) {
			$this->Session->setFlash(__('Relation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Relation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
