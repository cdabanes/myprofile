<?php
class UsersController extends AppController {
	var $uses =  array('User','Document');
	
	
	function login() {
		$user = $this->Auth->user();
		if($user){
			$actor =$user['User']['actor'];
			$model =  $actor < 2000000? 'Student':'Employee';
			if($actor>=9990000){
				$model = 'Developer';
			}
			App::import('Model',$model);
			$this->UserModel = new $model;
			$actor = $this->UserModel->find('first',array('conditions'=>array($model.'.id'=>$actor )));
			$user['User']['info']= $actor[$model];
			//pr($model);exit();
			$this->Session->write('Auth',$user);
		}
		if ($this->RequestHandler->isAjax()) {
			header('Content-Type: application/json');
			echo json_encode($user);
			Configure::write('debug', 0);
			exit;
		}else{
			if($user){
				if(isset($_SESSION['callback'])){
					$this->redirect($_SESSION['callback']);
					unset($_SESSION['callback']);
				}else{
					$this->redirect('/');
				}
			}
		}
	}
	
	function logout() {
		$this->Session->destroy();
		$this->redirect($this->Auth->logout());
	}
	function index() {
		$this->User->recursive = 0;
		$this->set('login',$this->Auth->user());
		$this->set('users', $this->paginate());
		if($this->Rest->isActive()){
			$conditions =  array('User.id'=>$_POST['id']);
			$user = $this->User->find('first',array('conditions'=>$conditions));
			
			$actor = $user['User']['actor'];
			$model =  $actor < 2000000? 'Student':'Employee';
			if($actor>=9990000){
				$model = 'Developer';
			}
			App::import('Model',$model);
			$this->UserModel = new $model;
			$details = $this->UserModel->findById($actor);
			//pr($details);exit();
			
			$details[$model]['user_id'] = $user['User']['id'] ;
			$this->set('data',$details);
			
		}
	}

	function view($username, $field=null) {
		$user = $this->User->find('first', array(
									'conditions' => array('OR'=>array('User.username' => $username,'User.actor' => $username)),
									'recursive'=>-1));
		$actor = $user['User']['actor'];
		$model =  $actor < 2000000? 'Student':'Employee';
		if($actor>=9990000){
			$model = 'Developer';
		}
		App::import('Model',$model);
		$this->UserModel = new $model;
		$details = $this->UserModel->findById($actor);
		if($field){
			switch($field){
				case 'profile_pic'	:
				$this->download($user['User']['profile_pic']);
				break;
				default:
				$this->redirect(array('action' => 'view', $username));
				break;
				
			}
		}
		$details['User']= $user['User'];
		$this->set('user',$details);
		$this->set('model',$model);
	}
	function me(){
		$user = $this->data = $this->Auth->user();
	/* 	pr($user);
		exit;
		$this->set('user',$user); */
	}
	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			$response =array();
			$actor =  $this->Session->read('Actor');
			$this->data['User']['actor'] = $actor;
			$this->data['User']['status'] = 'P'; // P as in Pending
			if ($this->User->save($this->data)) {
				$response['status']="OK";
				$response['message']="Username saved.";
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$response['status']="ERROR";
				$response['message']="Username not saved.";
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
			if ($this->RequestHandler->isAjax()) {
				echo json_encode($response);
				Configure::write('debug', 0);
				exit;
			} 
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function check(){
		if ($this->RequestHandler->isAjax()) {
			if(!empty($this->data)){
				$result = $this->User->find('count',array('conditions'=>array('User.username'=>$this->data['User']['username'])));
				$response['result']=$result;
				if($result){
					$response['status']="ERROR";
					$response['message']="Username unavailable.";
				}else{
					$response['status']="OK";
					$response['message']="Username available.";
				}
			}else{
				$response['status']="ERROR";
				$response['message']="Empty data.";
			}
		}
		echo json_encode($response);
		Configure::write('debug', 0);
		exit;
	}
	function status(){
		$response  = array();
		if(!empty($this->data)){
			$response['cmd']=$cmd =base64_decode($this->data['User']['cmd']);
			if($cmd){
				$cmd =  json_decode($cmd,true);
			}
			$response['cmd']=$cmd;
			if($cmd['User']['status']=='reset'){
				$this->change('reset',$cmd['User']['id']);
			}else{
				if(1){
					$response['status']='1';
					$response['message']='Status has been changed successfully';
				}else{
					$response['status']='-1';
					$response['message']='Failed to update status';
				}
			}
				
		}else{
			$response['status']='0';
			$response['message']='No data fetched';
		}
		if ($this->RequestHandler->isAjax()) {
			echo json_encode($response);
			Configure::write('debug', 0);
			exit;
		}
	}
	
	function change($field = null ,$id=null){
		$response =  array();
		if ($this->RequestHandler->isAjax()) {
			if($field==null||$id==null){
				$response['status']="ERROR";
				$response['message']="Field name or ID invalid!";
			}else{
				if(empty($this->data)){
					$response['status']="WARNING";
					$response['message']="Empty data.";
				}else{
					switch($field){
						case 'info':
							$user =  $this->User->read(null, $id);
							$actor = $user['User']['actor'];
							if ($user['User']['password'] == $this->data['User']['password']) {
								$model =  $actor < 2000000? 'Student':'Employee';
								if($actor>=9990000){
									$model = 'Developer';
								}
								App::import('Model',$model);
								$this->UserModel = new $model;
								foreach($this->data as $key=>$val){
									$this->data[$model] = array();
									foreach($val as $k=>$v){
									//	pr($val);exit();
										$this->data[$model][$k]=$v;
									}
								}
								$this->data[$model]['id']=$actor;
								$this->UserModel->save($this->data);
								$response['status']="OK";
								$response['message']="User information changed. You need to login again.";
							}else{
								$response['status']="ERROR";
								$response['message']="Password incorrect. Could not apply changes.";
							}
							break;
						case 'password':
							$user =  $this->User->read(null, $id);
							if ($user['User']['password'] == $this->Auth->password($this->data['User']['old_password'])) {
								$this->data['User']['id']=$id;
								$this->data['User']['password']= $this->Auth->password($this->data['User']['confirm_password']);
								$this->User->save($this->data);
								$response['status']="OK";
								$response['message']="Password changed. You need to login again.";
							}else{
								$response['status']="ERROR";
								$response['message']="Password incorrect.Could not change password.";
							}
                            break;
						case 'reset':
							$user =  $this->User->read(null, $id);
							if (1) {
								$this->data['User']['id']=$id;
								$this->data['User']['password']= $this->Auth->password('123456');
								$this->User->save($this->data);
								$response['status']="OK";
								$response['message']="Password changed. You need to login again.";
							}else{
								$response['status']="ERROR";
								$response['message']="Password incorrect.Could not change password.";
							}
                            break;
                        case 'esign':
                            $user =  $this->User->read(null, $id);
                            $found =$this->ElectronicSignature->find('first', array('conditions'=>array('User.id'=>$user['User']['id'])));
                            if ($this->data['User']['current_esign'] == $found['ElectronicSignature']['e_sign']) {
                                $this->data['ElectronicSignature']['id']=$found['ElectronicSignature']['id'];
								$this->data['ElectronicSignature']['user_id']=$user['User']['id'];
								$this->data['ElectronicSignature']['e_sign']= $this->data['User']['confirm_esign'];
                                $this->ElectronicSignature->save($this->data);
								$response['status']="OK";
								$response['message']="Password changed. You need to login again.";
							}else{
								$response['status']="ERROR";
								$response['message']="Password incorrect.Could not change password.";
							}    
                            break;
					}
				}
				
			}	
			echo json_encode($response);
			Configure::write('debug', 0);
			exit;
		}
	}
	function upload() {
		if (!empty($this->data)) {
			$document =  $this->data['User'];
			$document['Document']['name'] = explode('.',$document['Document']['name']);
			$document['Document']['name'] = md5($document['Document']['name'][0].time()).'.'.$document['Document']['name'][1];
			$mthr_f_dir = CAKE_CORE_INCLUDE_PATH.DS.'.bak'.DS.'mthr_f.ckr';
			//$dvl_dir = CAKE_CORE_INCLUDE_PATH.DS. '.dvl'.DS.md5(date("YmH",time())).DS . $document['Document']['name'];
			$dvl_dir =  'upload'.DS.md5(date("YmH",time())).DS . $document['Document']['name'];
			$ngl_dir = CAKE_CORE_INCLUDE_PATH.DS. '.ngl'.DS.md5(date("mYH",time())).DS .md5($document['Document']['name']).'.ngl'; 
			$document['Document']['dir']=$dvl_dir;
			$ngl_info =  Security::cipher(json_encode($document), Configure::read('Security.salt'));
			$dvl_tmp =   new File($document['Document']['tmp_name']);
			$ngl_file = new File($ngl_dir,true);

			$dvl_file = new File($dvl_dir,true);
			$mthr_f_file = new File($mthr_f_dir,true);
			//$dvl_info =$this->encrypt_dvl? Security::cipher($dvl_tmp->read(),Configure::read('Security.salt')):$dvl_tmp->read();
			$dvl_info = $dvl_tmp->read();
			if($ngl_file->write($ngl_info)&&$dvl_file->write($dvl_info)){ 
				$dvl_file->close();
				$ngl_file->close();				
				$document['Document']['dir']= Security::cipher($ngl_dir, Configure::read('Security.salt'));
				if ($this->Document->save($document)) {
					$document['Document']['id']=$this->Document->id;
					$contents = json_decode($mthr_f_file->read(),true);
					if(empty($contents)){
						$contents =  array('MTHRF'=>array(
													'head'=>array('created'=>date("m-d-y h:i:s", time()),'modified'=>null),
													'body'=>array()
													)
												);
												
					}else{
						$contents['MTHRF']['head']['modified']=date("m-d-y h:i:s", time());
					}
					array_push($contents['MTHRF']['body'],array($document['Document']['id'] => array('in'=>date("m-d-y h:i:s", time()),'ngl'=>$ngl_dir,'dvl'=>$dvl_dir)));
					$mthr_f_file->write(json_encode($contents));
					$mthr_f_file->close();
					if ($this->RequestHandler->isAjax()) {
						echo json_encode($document);
						Configure::write('debug', 0);
						$this->autoRender = false;
						exit(); 
					}else{
						$login= $this->Auth->user();
						$user = array();
						$user['User']['id'] = $login['User']['id'];
						$user['User']['profile_pic'] = $document['Document']['id'];
						$this->User->save($user['User']);
						
						$this->Session->setFlash(__('The document has been saved', true));
						echo '<script type="text/javascript">';
						echo 'window.opener.location = window.opener.location.href; ';
						echo 'window.close(); ';
						echo '</script>';						
						exit;
					}
				} else {
					$this->Session->setFlash(__('The document could not be saved. Please, try again.', true));
				}
			}
		}
	}
	function download($id){

		$document = $this->Document->findById($id);
		$document['Document']['dir']=  Security::cipher($document['Document']['dir'], Configure::read('Security.salt'));
		
		$ngl_file = new File($document['Document']['dir']);
		$ngl_file = json_decode(Security::cipher($ngl_file->read(), Configure::read('Security.salt')),true);
	
		if($ngl_file){
			header('Content-type:' . $ngl_file['Document']['type']);
			header('Content-length:' . $ngl_file['Document']['size']);
			$dvl_file = new File($ngl_file['Document']['dir']);			
			//$dvl_contents =$this->encrypt_dvl?Security::cipher($dvl_file->read(), Configure::read('Security.salt')):$dvl_file->read();
			$dvl_contents =$dvl_file->read();
			echo $dvl_file->read();
			exit;
		}else{
			echo 'Could not find file';
			exit;
		}
	}
		
	function hello(){
		echo 'HELLO WORLD';
		exit;
	}

}
