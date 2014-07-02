<?php
App::uses('AppModel', 'Model');

class Paciente extends AppModel {

        public $displayField = 'nombre';
    
	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El nombre es obligatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apellido' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El apellido es obligatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telefono' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Ingrese solo numeros',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            'contacto_al' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Ingrese solo numeros',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'edad' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_nac' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
