<?php
class StudentAffiliationsController extends AppController {

	var $name = 'StudentAffiliations';

	function index() {
		$this->StudentAffiliation->recursive = 0;
		$this->set('studentAffiliations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid student affiliation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('studentAffiliation', $this->StudentAffiliation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->StudentAffiliation->create();
			if ($this->StudentAffiliation->save($this->data)) {
				$this->Session->setFlash(__('The student affiliation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student affiliation could not be saved. Please, try again.', true));
			}
		}
		$students = $this->StudentAffiliation->Student->find('list');
		$this->set(compact('students'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid student affiliation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->StudentAffiliation->save($this->data)) {
				$this->Session->setFlash(__('The student affiliation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student affiliation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->StudentAffiliation->read(null, $id);
		}
		$students = $this->StudentAffiliation->Student->find('list');
		$this->set(compact('students'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for student affiliation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->StudentAffiliation->delete($id)) {
			$this->Session->setFlash(__('Student affiliation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Student affiliation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
