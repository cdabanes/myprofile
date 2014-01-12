<?php
class OrganizationsController extends AppController {

	var $name = 'Organizations';
	var $uses = array('Accounting.Organization');
	var $components = array(
		'Session',
		'RequestHandler',
		'Rest.Rest' => array(
			'catchredir' => true,
			'debug' => 1,
			'index' => array(
				'extract' => array('data'),
			),
			'view' => array(
				'extract' => array('data'),
			),
			'getAll' => array(
				'extract' => array('data'),
			),
			'version'=>'1.0.0'
		),
	);
	
	function beforeFilter(){
			$this->Auth->allowedActions = array('*');
	}
	function index() {
		$orgCharts = $this->Organization->find('list',array('fields'=>array('division_code','description')));
		if($this->Rest->isActive()){
			$this->set('data',$orgCharts);
		}else{
			$this->set(compact('orgCharts'));
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid organization', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('organization', $this->Organization->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$hasDivisionCode =  $this->data['Organization']['division_code'];
			if(!$hasDivisionCode){
				$OCseries = $this->SystemCounter->findById('ORGCHART');
				$this->data['Organization']['division_code'] = $OCseries['SystemCounter']['value'];
			}
			$this->data['Organization']['id'] = null;
			$level =  $this->data['Organization']['level_index'];
			//by pass values for sub orgs
			if($level>=1){
				$this->data['Organization']['visible']=$this->data['Organization']['is_budget'];
				$this->data['Organization']['is_sub']=false;
			}
			$this->validateDynasty($this->data['Organization']['description'],$this->data['Organization']['alias'],$this->data['Organization']['division_code']);
			if ($this->Organization->save($this->data)) {
				if(!$hasDivisionCode) $this->SystemCounter->doIncrement($OCseries['SystemCounter']['id'],1);
				$orgId=$this->Organization->id;
				$parentId = $this->data['Organization']['parent_index'];
				if($parentId!=1){
					$parent = $this->Organization->getOrg($parentId);
					$this->Organization->id = $parentId;
					$this->Organization->saveField('visible', 0);		
					$this->Organization->saveField('is_sub', 1);	
				}	
				if($this->RequestHandler->isAjax()){
					$response['status'] = 1;
					$response['msg'] = '<i class="icon-search"></i>&nbsp; Saving successful';
					$asSave = $this->data;
					$response['data'] = $asSave;
					echo json_encode($response);
					exit();
				}else{ 
					$this->Session->setFlash(__('The organization has been saved', true));
				}
			} else {
				if($this->RequestHandler->isAjax()){
					$response['status'] = -1;
					$response['msg'] = '<i class="icon-search"></i>&nbsp; The organization could not be saved. Please, try again.';
					$response['data'] = $this->data;
					echo json_encode($response);
					exit();
				}else{ 
					$this->Session->setFlash(__('The organization could not be saved. Please, try again.', true));
				}
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid organization', true));
			$this->redirect(array('action' => 'index'));
		}
		$validate =  array('description','alias','division_code','id','level_index','root_index','parent_index','is_budget');
		foreach($validate as $field){
			$$field =  $this->data['Organization'][$field];
		}
		if($level_index>=1){
				$this->data['Organization']['visible']=$this->data['Organization']['is_budget'];		
		}
		$this->validateDynasty($description,$alias,$division_code,$id,!$is_budget,$level_index,$root_index,$parent_index,$is_budget);
		if (!empty($this->data)) {
			if ($this->Organization->save($this->data)) {
				$orgId=$this->Organization->id;
				$parentId = $this->data['Organization']['parent_index'];
				$level = $this->data['Organization']['level_index'];
				$isBudget = $this->data['Organization']['is_budget'];
				//Update parent details visible and subsidiary
				if($parentId!=1){
					$parent = $this->Organization->getOrg($parentId);
					$this->Organization->id = $parentId;
					$this->Organization->saveField('visible', 0);		
					$this->Organization->saveField('is_sub', 1);	
				}
				if($this->RequestHandler->isAjax()){
					$response['status'] = 1;
					$response['msg'] = '<i class="icon-search"></i>&nbsp; Saving successful';
					$response['data'] = $this->data;
					echo json_encode($response);
					exit();
				}else{ 
					$this->Session->setFlash(__('The organization has been saved', true));
					$this->redirect(array('action' => 'index'));
				}
			} else {
				if($this->RequestHandler->isAjax()){
					$response['status'] = -1;
					$response['msg'] = '<i class="icon-search"></i>&nbsp; The organization could not be saved. Please, try again.';
					$response['data'] = $this->data;
					echo json_encode($response);
					exit();
				}else{ 
					$this->Session->setFlash(__('The organization could not be saved. Please, try again.', true));
				}
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Organization->read(null, $id);
		}
	}

	function delete($id = null) {
		$id=  $this->data['Organization']['id'];
		$parent=  $this->data['Organization']['parent_index'];
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for organization', true));
			$this->redirect(array('action'=>'index'));
		}
		if($this->Organization->hasSubsidiary($this->data['Organization']['id'])){
			$response['status'] = -1;
			$response['data'] = $this->data;
			$response['msg'] = 'Could not delete organization, subsidiary found.';
			echo json_encode($response);
			exit();
		}else{
			if ($this->Organization->delete($id)) {
				$count = $this->Organization->updateParent($parent);
				if($this->RequestHandler->isAjax()){
					$response['status'] = 1;
					$response['count'] = $count;
					$response['data'] = $this->data;
					$response['msg'] = 'Organization has been deleted';
					echo json_encode($response);
					exit();
				}else{
					$this->Session->setFlash(__('Organization deleted', true));
				}
				$this->redirect(array('action'=>'index'));
			}
		}
		$this->Session->setFlash(__('Organization was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function requestChildren($parent_index=null,$level_index=null){
		$parent = $parent_index?$parent_index:$this->data['Organization']['parent_index'];
		$level = $level_index?$level_index:$this->data['Organization']['level_index'];
		
		$orgCharts = $this->Organization->requestChildren($parent, $level);
		if($this->Rest->isActive()){
			//$this->set('data',$orgCharts);
			echo json_encode($orgCharts);
			exit();
			
		}else{
			$this->set('budgetCharts',$orgCharts);
			echo json_encode($orgCharts);
			exit();		
		}
	}
	function treeish(){
		$orgCharts = $this->Organization->getAllOrg();
		$this->set(compact('orgCharts'));
	}
	protected function validateDynasty($desc,$alias,$divcode=null,$id=null,$validate=false,$level_index=null,$root_index=null,$parent_index=null,$is_budget=null){
		$dynasty = $this->Organization->validateDynasty($desc,$alias,$divcode,$id,$validate,$level_index,$root_index,$parent_index,$is_budget);	
		if(!$dynasty['valid']){
			$response['status'] = -1;
			$response['msg'] = array();
			if(!$dynasty['unique']){
				array_push($response['msg'],'duplicate division code');
			}
			if($dynasty['dependents']){
				array_push($response['msg'],'budget conflict on dependents');
			}
			if($dynasty['hasSimilar']){
				$similar = array();
				foreach($dynasty['similarities'] as $field){
					array_push($similar,$field);
				}
				array_push($response['msg'],'similar '.implode($similar,','));
			}
			$response['msg'] = 'Invalid entry due to ' .  implode($response['msg'],' and ');
			$response['dynasty'] = $dynasty;
			echo json_encode($response);
			exit();
		}
	}
	
	function getAll() {
		
		if($this->Rest->isActive()){
			$data = $this->Organization->find('all',array('recursive'=>0));
			$this->set('data',$data);
		}
	} 

}

