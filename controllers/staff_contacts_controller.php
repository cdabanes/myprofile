<?php
class StaffContactsController extends AppController {

	var $name = 'StaffContacts';

	function index() {
		$this->StaffContact->recursive = 0;
		$this->set('staffContacts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid staff contact', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('staffContact', $this->StaffContact->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->StaffContact->create();
			if ($this->StaffContact->save($this->data)) {
				$this->Session->setFlash(__('The staff contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff contact could not be saved. Please, try again.', true));
			}
		}
		$staffs = $this->StaffContact->Staff->find('list');
		$this->set(compact('staffs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid staff contact', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->StaffContact->save($this->data)) {
				$this->Session->setFlash(__('The staff contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff contact could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->StaffContact->read(null, $id);
		}
		$staffs = $this->StaffContact->Staff->find('list');
		$this->set(compact('staffs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for staff contact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->StaffContact->delete($id)) {
			$this->Session->setFlash(__('Staff contact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Staff contact was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
