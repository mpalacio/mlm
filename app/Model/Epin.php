<?php

	App::uses('AppModel', 'Model');

	class Epin extends AppModel {
		public $belongsTo = array(
			'User' => array(
				'className' => 'User',
				'foreignKey' => 'user_id'
			)
		);
	}

?>