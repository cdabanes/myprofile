<?php
class Employee extends AppModel {
	var $name = 'Employee';
	var $virtualFields = array('full_name'=>'CONCAT(Employee.first_name," ",Employee.last_name)');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'EmployeeAffiliation' => array(
			'className' => 'EmployeeAffiliation',
			'foreignKey' => 'employee_id',
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
		'EmployeeContact' => array(
			'className' => 'EmployeeContact',
			'foreignKey' => 'employee_id',
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
			'foreignKey' => 'employee_id',
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
