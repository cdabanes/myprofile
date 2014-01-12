<?php
class ApiController extends AppController {
	var $name = 'Api';
	var $uses =array();
	var $OAuth;
	var $OAuthServer;
	function index() {
		try{
	
			$signed = $this->OAuthServer->verifyIfSigned();
			if($signed){
				echo 'Request granted';
			}else{
				echo 'Not signed';
			}
		}catch(OAuthException2 $e){
			echo $e->getMessage();
		}
		exit;
	
	}
}
?>