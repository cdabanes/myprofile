<?php
class Student extends AppModel {
	var $name = 'Student';
	var $virtualFields = array('full_name'=>'CONCAT(Student.first_name," ",Student.last_name)');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Classlist' => array(
			'className' => 'Classlist',
			'foreignKey' => 'student_id',
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
		'StudentAffiliation' => array(
			'className' => 'StudentAffiliation',
			'foreignKey' => 'student_id',
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
		'StudentContact' => array(
			'className' => 'StudentContact',
			'foreignKey' => 'student_id',
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
