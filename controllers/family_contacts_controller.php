<?php
class FamilyContactsController extends AppController {

	var $name = 'FamilyContacts';

	function index() {
		$this->FamilyContact->recursive = 0;
		$this->set('familyContacts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid family contact', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('familyContact', $this->FamilyContact->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FamilyContact->create();
			if ($this->FamilyContact->save($this->data)) {
				$this->Session->setFlash(__('The family contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family contact could not be saved. Please, try again.', true));
			}
		}
		$families = $this->FamilyContact->Family->find('list');
		$this->set(compact('families'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid family contact', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FamilyContact->save($this->data)) {
				$this->Session->setFlash(__('The family contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family contact could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FamilyContact->read(null, $id);
		}
		$families = $this->FamilyContact->Family->find('list');
		$this->set(compact('families'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for family contact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FamilyContact->delete($id)) {
			$this->Session->setFlash(__('Family contact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Family contact was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
