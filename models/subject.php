<?php
class Subject extends AppModel {
	var $name = 'Subject';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'subject_id',
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
		'TeachingLoad' => array(
			'className' => 'TeachingLoad',
			'foreignKey' => 'subject_id',
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
