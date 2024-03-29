<?php
/**
 * Routes Configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
 // Default pages route 
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display')); 
//User vanity url
	App::import('Lib', 'routes/SlugRoute');
	Router::connect( '/:slug/*',  array( 'controller' => 'users',  'action' => 'view' ),  array( 'pass'=>array('slug'),'slug' => '[a-zA-Z0-9_-]+', 'routeClass' => 'SlugRoute' ));
	Router::parseExtensions('rss', 'json', 'xml', 'json', 'pdf','xdrs');
	Router::connect('/oauth', array('plugin' => 'oauth', 'controller' => 'oauth_app','action'=>'index'));
	Router::connect('/oauth/:action', array('plugin' => 'oauth', 'controller' => 'oauth_app'));
