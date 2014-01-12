<?php
class ServerRegistry extends AppModel {
	var $name = 'ServerRegistry';
	var $useTable = 'oauth_server_registry';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'ServerToken' => array(
			'className' => 'ServerToken',
			'foreignKey' => 'ost_osr_id_ref',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		
	);
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'osr_usa_id_ref',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
