<?php
App::uses('AppModel', 'Model');
/**
 * Personal Model
 *
 */

class Personal extends AppModel{
    public $useTable = 'personal';

    public $validate = array(
        'dni' => array(
            'rule' => 'isUnique',
            'message' => 'Este DNI ya está en uso'
        ),
        'telefono' => array(
            'rule' => 'isUnique',
            'message' => 'Este número de teléfono ya está en uso'
        ),
        'cuenta_corriente' => array(
            'rule' => 'isUnique',
            'message' => 'Este número de cuenta corriente ya está en uso'
        ),
        'email_particular' => array(
            'rule' => 'isUnique',
            'message' => 'Este correo electrónico particular ya está en uso'
        ),
        'email_empresa' => array(
            'rule' => 'isUnique',
            'message' => 'Este correo electrónico de empresa ya está en uso'
        )
    );

}
?>