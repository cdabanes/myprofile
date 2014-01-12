<?php
class Family extends AppModel {
	var $name = 'Family';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'FamilyAffiliation' => array(
			'className' => 'FamilyAffiliation',
			'foreignKey' => 'family_id',
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
		'FamilyContact' => array(
			'className' => 'FamilyContact',
			'foreignKey' => 'family_id',
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
