<?php
class OauthAppController extends AppController {
	var $uses =null;
	var $name = 'OauthApp';
	var $components = array('RequestHandler');
	var $OAuth;
	var $OAuthServer;
	
	function beforeFilter(){
		parent::beforeFilter();
        $this->Auth->allow('*');
        $this->Auth->deny('authorize','user');
		// Always announce XRDS OAuth discovery
		header('X-XRDS-Location: http://' . $_SERVER['HTTP_HOST']. '/profile/oauth/services.xdrs');
		//Include OAuth Library
		App::import('Vendor', 'Oauth.OAuthStore', array('file' =>'library'.DS.'OAuthStore.php'));
		App::import('Vendor', 'Oauth.OAuthServer', array('file' =>'library'.DS.'OAuthServer.php'));
		//Initialize ConnectionManager
		ClassRegistry::init('ConnectionManager');
		$ds = & ConnectionManager::getDataSource('default');
		//Instantiate OAuthStore
		try{
			$this->OAuth  = OAuthStore::instance('MySQL', $ds->config);
		}catch(OAuthException2 $e){
			echo $e->getMessage();
			exit;
		}
		//Instantiate OAuthServer
		try{
			$this->OAuthServer =  new OAuthServer();
		}catch(OAuthException2 $e){
			echo $e->getMessage();
			exit;
		}
	}
	function services(){
		if($this->RequestHandler->ext=='xdrs'){
			$this->layout = 'xrds_xml';	
		}
	}
	function index(){
		$user_id = $this->Session->read('Auth.User.id');
		$consumer =  $this->data['OAuth'];
		try
		{
			// Register the consumer
			$key   = $this->OAuth->updateConsumer($consumer, $user_id);
			// Get the complete consumer from the store
			$consumer =  $this->OAuth->getConsumer($key,$user_id);
			$this->set('consumer',$consumer);
		}
		catch (OAuthException2 $e)
		{
			$this->set('error',$e->getMessage());
		}
		
	}
	function user(){
		$user_id = $this->Session->read('Auth.User.id');
		if($this->RequestHandler->isAjax()){
			echo json_encode(array('user'=>$user_id));
			exit;
			
		}else{

			$uri = $_GET['callback'].'?usr_id='.$user_id;
			$this->redirect($uri);
		}
	}
	function request_token(){
		$token =$this->OAuthServer->requestToken();
		exit();
	}
	function access_token(){
		try
		{
			$token =$this->OAuthServer->accessToken();
			
		}catch (OAuthException2 $e)
		{
			header('HTTP/1.1 400 Bad Request');
			header('Content-Type: text/plain');
			echo "Failed OAuth Request: " . $e->getMessage();
		}
		
	}
	function authorize(){
	
		try
		{
			$app = $this->OAuthServer->authorizeVerify();
			$this->set('app',$app);
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
				{
				$this->OAuthServer->authorizeFinish(true, $this->Session->read('Auth.User.id'));
			}
		}
		catch (OAuthException2 $e)
		{
			header('HTTP/1.1 400 Bad Request');
			header('Content-Type: text/plain');
			
			echo "Failed OAuth Request: " . $e->getMessage();
		}
		$this->set('app',$app);
	}

}

?>