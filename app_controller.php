<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
		var $components = array(
            'Session',
			'Auth',
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
				'version'=>'1.0.0'
            ),
        );
		var $OAuth;
		var $OAuthServer;
		function beforeFilter(){
			$this->Auth->autoRedirect = false;
			$this->Auth->logoutRedirect = array('controller'=>'pages','action'=>'display','home');
			$this->Auth->allowedActions = array('*');
			$this->set('user',$this->Auth->user());
			if(isset($_REQUEST['callback'])){
				$_SESSION['callback'] = $_REQUEST['callback'];
			}
		
			if($this->Rest->isActive()){
				// Always announce XRDS OAuth discovery
				header('X-XRDS-Location: http://' . $_SERVER['SERVER_NAME'] . '/profile/oauth/services.xdrs');
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
					return $this->Rest->abort(array('status' => '403', 'error' => $e->getMessage()));
				}
				//Instantiate OAuthServer
				try{
					$this->OAuthServer =  new OAuthServer();
				}catch(OAuthException2 $e){
					return $this->Rest->abort(array('status' => '403', 'error' => $e->getMessage()));
				}
				
				try{
					$signed = $this->OAuthServer->verifyIfSigned();
					if(!$signed){
						 return $this->Rest->abort(array('status' => '403', 'error' => 'Could not process unsigned request.'));
					}
				}catch(OAuthException2 $e){
						return $this->Rest->abort(array('status' => '403', 'error' => $e->getMessage()));
				}
			}
		}
}
