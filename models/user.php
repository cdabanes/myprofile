<?php
class User extends AppModel {
	var $name = 'User';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $virtualFields =  array('status_text'=>
								"CASE User.status 	WHEN 'P' THEN 'Pending'
													WHEN 'A' THEN 'Active'
													WHEN 'I' THEN 'Inactive'
													WHEN 'B' THEN 'Blocked'
								END"
	);
	var $hasMany = array(
		'ServerRegistry' => array(
			'className' => 'ServerRegistry',
			'foreignKey' => 'osr_usa_id_ref',
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
	var $hasAndBelongsToMany = array(
		'Group' => array(
			'className' => 'Group',
			'joinTable' => 'groups_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'group_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
