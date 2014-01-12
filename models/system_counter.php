<?php
class SystemCounter extends AppModel {
	var $name = 'SystemCounter';
	var $actsAs = array('Increment'=>array('incrementFieldName'=>'value'));
}
