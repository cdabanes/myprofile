<?php
class FamilyAffiliationsController extends AppController {

	var $name = 'FamilyAffiliations';

	function index() {
		$this->FamilyAffiliation->recursive = 0;
		$this->set('familyAffiliations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid family affiliation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('familyAffiliation', $this->FamilyAffiliation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FamilyAffiliation->create();
			if ($this->FamilyAffiliation->save($this->data)) {
				$this->Session->setFlash(__('The family affiliation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family affiliation could not be saved. Please, try again.', true));
			}
		}
		$families = $this->FamilyAffiliation->Family->find('list');
		$this->set(compact('families'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid family affiliation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FamilyAffiliation->save($this->data)) {
				$this->Session->setFlash(__('The family affiliation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family affiliation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FamilyAffiliation->read(null, $id);
		}
		$families = $this->FamilyAffiliation->Family->find('list');
		$this->set(compact('families'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for family affiliation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FamilyAffiliation->delete($id)) {
			$this->Session->setFlash(__('Family affiliation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Family affiliation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
