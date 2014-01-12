<?php
class StudentsController extends AppController {

	var $name = 'Students';
	var $uses =  array('Student','SystemCounter');

	function index() {
		$this->Student->recursive = 0;
		$this->set('data', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid student', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('student', $this->Student->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Student->create();
			$emp_id = $this->SystemCounter->find('first',array('fields'=>array('SystemCounter.value'),'conditions'=>array('SystemCounter.id'=>'PRFLESTDNT')));
			$this->data['Student']['id'] = $emp_id['SystemCounter']['value'];
			if ($this->Student->save($this->data)) {
				$this->Session->write('Actor',$this->Student->id);
				$this->SystemCounter->doIncrement('PRFLESTDNT',1,'value');
				$this->Session->setFlash(__('The student has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid student', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Student->save($this->data)) {
				$this->Session->setFlash(__('The student has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Student->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for student', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Student->delete($id)) {
			$this->Session->setFlash(__('Student deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Student was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function confirm(){
		if(!empty($this->data)){
			$response = array();
			$response['actor'] = $actor  = $this->Session->read('Actor');
			$this->data['Student']['id'] = $actor;
			if($this->Student->save($this->data)){
				$response['status'] ="OK";
				$response['message'] ="Student account confirmed.";
			}else{
				$response['status'] ="ERROR";
				$response['message'] ="Unable to confirm account!";
			}
			if ($this->RequestHandler->isAjax()) {
				echo json_encode($response);
				Configure::write('debug', 0);
				exit;
			}
		}
	}
}
