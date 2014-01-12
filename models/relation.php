<?php
class Relation extends AppModel {
	var $name = 'Relation';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Relationship' => array(
			'className' => 'Relationship',
			'foreignKey' => 'relation_id',
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
