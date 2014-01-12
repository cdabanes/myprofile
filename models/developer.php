<?php
class Developer extends AppModel {
	var $name = 'Developer';
	var $virtualFields = array('full_name'=>'CONCAT(Developer.first_name," ",Developer.last_name)');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'DeveloperAffiliation' => array(
			'className' => 'DeveloperAffiliation',
			'foreignKey' => 'developer_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
