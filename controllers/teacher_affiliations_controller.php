<?php
class TeacherAffiliationsController extends AppController {

	var $name = 'TeacherAffiliations';

	function index() {
		$this->TeacherAffiliation->recursive = 0;
		$this->set('teacherAffiliations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid teacher affiliation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('teacherAffiliation', $this->TeacherAffiliation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TeacherAffiliation->create();
			if ($this->TeacherAffiliation->save($this->data)) {
				$this->Session->setFlash(__('The teacher affiliation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher affiliation could not be saved. Please, try again.', true));
			}
		}
		$teachers = $this->TeacherAffiliation->Teacher->find('list');
		$this->set(compact('teachers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid teacher affiliation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TeacherAffiliation->save($this->data)) {
				$this->Session->setFlash(__('The teacher affiliation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher affiliation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TeacherAffiliation->read(null, $id);
		}
		$teachers = $this->TeacherAffiliation->Teacher->find('list');
		$this->set(compact('teachers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for teacher affiliation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TeacherAffiliation->delete($id)) {
			$this->Session->setFlash(__('Teacher affiliation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Teacher affiliation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
