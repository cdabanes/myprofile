<?php
class DevelopersController extends AppController {

	var $name = 'Developers';
	var $uses =  array('Developer','SystemCounter');
	function index() {
		$this->Developer->recursive = 0;
		$this->set('developers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid developer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('developer', $this->Developer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Developer->create();
			$dev_id = $this->SystemCounter->find('first',array('fields'=>array('SystemCounter.value'),'conditions'=>array('SystemCounter.id'=>'PRFLEDVLPR')));
			$this->data['Developer']['id'] = $dev_id['SystemCounter']['value'];
			if ($this->Developer->save($this->data)) {
				$this->Session->write('Actor',$this->Developer->id);
				$this->SystemCounter->doIncrement('PRFLEDVLPR',1,'value');
				$this->Session->setFlash(__('The developer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The developer could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid developer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Developer->save($this->data)) {
				$this->Session->setFlash(__('The developer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The developer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Developer->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for developer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Developer->delete($id)) {
			$this->Session->setFlash(__('Developer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Developer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function confirm(){
		
		if(!empty($this->data)){
			$response = array();
			$response['actor'] = $actor  = $this->Session->read('Actor');
			$this->data['Developer']['id'] = $actor;
			if($this->Developer->save($this->data)){
				$response['status'] ="OK";
				$response['message'] ="Developer account confirmed.";
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
	function tokens(){
	}
}
