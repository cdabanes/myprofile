<?php
class DeveloperAffiliation extends AppModel {
	var $name = 'DeveloperAffiliation';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Developer' => array(
			'className' => 'Developer',
			'foreignKey' => 'developer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
