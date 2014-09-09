<?php

	App::uses('AppModel', 'Model');

	class User extends AppModel {
		public $belongsTo = array(
			'Country' => array(
				'className' => 'Country',
				'foreignKey' => 'country_id'
			),
			'User' => array(
				'className' => 'User',
				'foreignKey' => 'sponsor_id'
			),
			'MemebershipMlmType' => array(
				'className' => 'MlmType',
				'foreignKey' => 'membership_mlm_type',
				'condition' => array('MlmType.purpose' => 'membership')
			),
			'ProductMlmType' => array(
				'className' => 'MlmType',
				'foreignKey' => 'product_mlm_type',
				'condition' => array('MlmType.purpose' => 'product')
			)
		);

		public $hasMany = array(
			'User' => array(
				'className' => 'User',
				'foreignKey' => 'sponsor_id'
			),
			'Transaction' => array(
				'className' => 'Transaction',
				'foreignKey' => 'user_id'
			),
			'Epin' => array(
				'className' => 'Epin',
				'foreignKey' => 'user_id'
			)
		);
	}

?>