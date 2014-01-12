<?php
class ServerToken extends AppModel {
	var $name = 'ServerToken';
	var $useTable = 'oauth_server_token';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'ServerRegistry' => array(
			'className' => 'ServerRegistry',
			'foreignKey' => 'ost_osr_id_ref',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
