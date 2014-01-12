<?php
class StaffAffiliationsController extends AppController {

	var $name = 'StaffAffiliations';

	function index() {
		$this->StaffAffiliation->recursive = 0;
		$this->set('staffAffiliations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid staff affiliation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('staffAffiliation', $this->StaffAffiliation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->StaffAffiliation->create();
			if ($this->StaffAffiliation->save($this->data)) {
				$this->Session->setFlash(__('The staff affiliation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff affiliation could not be saved. Please, try again.', true));
			}
		}
		$staffs = $this->StaffAffiliation->Staff->find('list');
		$this->set(compact('staffs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid staff affiliation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->StaffAffiliation->save($this->data)) {
				$this->Session->setFlash(__('The staff affiliation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff affiliation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->StaffAffiliation->read(null, $id);
		}
		$staffs = $this->StaffAffiliation->Staff->find('list');
		$this->set(compact('staffs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for staff affiliation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->StaffAffiliation->delete($id)) {
			$this->Session->setFlash(__('Staff affiliation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Staff affiliation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
