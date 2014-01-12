<?php
class EmployeeAffiliationsController extends AppController {

	var $name = 'EmployeeAffiliations';

	function index() {
		if ($this->Rest->isActive()) {
			$data = $this->EmployeeAffiliation->find('all');
			$this->set('data',$data);
		}else{
			if($this->RequestHandler->isAjax()){	
				$this->EmployeeAffiliation->recursive = 2;
				$cond = array();
				if(!empty($this->data)){
					foreach($this->data['EmployeeAffiliation'] as $field=>$value){
						$cond['EmployeeAffiliation.'.$field]=$value;
					}
				}
				$curr_data = $this->EmployeeAffiliation->find('all',array('conditions'=>$cond));
				//Sanitize data
				foreach($curr_data as $index=>$data){
					$empAffs = array();
					foreach($data['Employee'] as $empAff){
						$empAffObj = array();
						if(is_array($empAff)){
							foreach( $empAff as $field => $value){
								if(is_array($value)){
									$empAffObj[$field] = $value;
								}else{
									$empAffObj['Employee'][$field] = $value;
								}
							}
							array_push($empAffs,$empAffObj);
						}
					}
					$curr_data[$index]['Employee'] = $empAffs;
				}
				echo json_encode($curr_data);
				exit;
			}else{
				$this->EmployeeAffiliation->recursive = 0;
				$this->set('employeeAffiliations', $this->paginate());
			}
			
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid employee affiliation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('employeeAffiliation', $this->EmployeeAffiliation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$value = array(
					'division_code'=>$this->data['EmployeeAffiliation']['office'],
					'organization'=>$this->data['EmployeeAffiliation']['organi'],
					'position'=>$this->data['EmployeeAffiliation']['position'],
					'title'=>$this->data['EmployeeAffiliation']['rank'],
					'since'=>$this->data['EmployeeAffiliation']['employed_date']
			);
			$this->data['EmployeeAffiliation']['value'] = json_encode($value);
			$this->EmployeeAffiliation->create();
			if ($this->EmployeeAffiliation->save($this->data)){
				if($this->RequestHandler->isAjax()){
					$response['status'] = 1;
					$response['msg'] = '<i class="icon-search"></i>&nbsp; Saving successful';
					$response['data'] = $this->data;
					echo json_encode($response);
					exit();
				}else{ 
					$this->Session->setFlash(__('Employee Affiliation has been saved', true));
				}
				
			} else {
				$this->Session->setFlash(__('Employee Affiliation could not be saved. Please, try again.', true));
				if($this->RequestHandler->isAjax()){
					$response['status'] = -1;
					$response['msg'] = '<i class="icon-search"></i>&nbsp;Employee Affiliation could not be saved. Please, try again.';
					$response['data'] = $this->data;
					echo json_encode($response);
					exit();
				}else{ 
					$this->Session->setFlash(__('Vendor could not be saved. Please, try again.', true));
				}
			}
			
		}
		$employees = $this->EmployeeAffiliation->Employee->find('list');
		$this->set(compact('employees'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid employee affiliation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EmployeeAffiliation->save($this->data)) {
				$this->Session->setFlash(__('The employee affiliation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee affiliation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EmployeeAffiliation->read(null, $id);
		}
		$employees = $this->EmployeeAffiliation->Employee->find('list');
		$this->set(compact('employees'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for employee affiliation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EmployeeAffiliation->delete($id)){
			if($this->RequestHandler->isAjax()){
					$response['status'] = 1;
					$response['msg'] = '<i class="icon-search"></i>&nbsp; Delete successful';
					$response['data'] = $this->data;
					echo json_encode($response);
					exit();
			}else{
				$this->Session->setFlash(__('Employee affiliation deleted', true));
				$this->redirect(array('action'=>'index'));
			}
		}
		$this->Session->setFlash(__('Employee affiliation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
