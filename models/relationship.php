<?php
class Relationship extends AppModel {
	var $name = 'Relationship';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Relation' => array(
			'className' => 'Relation',
			'foreignKey' => 'relation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
