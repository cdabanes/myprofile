<?php
class Place extends AppModel {
	var $name = 'Place';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'School' => array(
			'className' => 'School',
			'foreignKey' => 'place_id',
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
