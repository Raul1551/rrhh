<?php
App::uses('AppModel', 'Model');
/**
 * Personal Model
 *
 */

class Personal extends AppModel{
    public $useTable = 'personal';

    public $hasOne = array(
        'Vestuario' => array(
            'className' => 'Vestuario',
            'foreignKey' => 'id_personal' // Nombre del campo clave foránea en la tabla de vestuario
        )
    );

    public $validate = array(
        'dni' => array(
            'rule' => array('custom', '/^[0-9]{8}[a-zA-Z]$/'),
            'message' => 'El DNI debe tener 8 números seguidos de una letra.'
        )
    );
}
?>