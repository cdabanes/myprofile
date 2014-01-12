<?php
class TeachingLoadsController extends AppController {

	var $name = 'TeachingLoads';

	function index() {
		$this->TeachingLoad->recursive = 0;
		$this->set('teachingLoads', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid teaching load', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('teachingLoad', $this->TeachingLoad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TeachingLoad->create();
			if ($this->TeachingLoad->save($this->data)) {
				$this->Session->setFlash(__('The teaching load has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teaching load could not be saved. Please, try again.', true));
			}
		}
		$employees = $this->TeachingLoad->Employee->find('list');
		$subjects = $this->TeachingLoad->Subject->find('list');
		$sections = $this->TeachingLoad->Section->find('list');
		$this->set(compact('employees', 'subjects', 'sections'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid teaching load', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TeachingLoad->save($this->data)) {
				$this->Session->setFlash(__('The teaching load has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teaching load could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TeachingLoad->read(null, $id);
		}
		$employees = $this->TeachingLoad->Employee->find('list');
		$subjects = $this->TeachingLoad->Subject->find('list');
		$sections = $this->TeachingLoad->Section->find('list');
		$this->set(compact('employees', 'subjects', 'sections'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for teaching load', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TeachingLoad->delete($id)) {
			$this->Session->setFlash(__('Teaching load deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Teaching load was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
