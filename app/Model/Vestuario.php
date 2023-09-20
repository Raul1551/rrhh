<?php
App::uses('AppModel', 'Model');
/**
 * Vestuario Model
 *
 */

class Vestuario extends AppModel{
    public $useTable = 'vestuario';

    public $belongsTo = array(
        'Personal' => array(
            'className' => 'Personal',
            'foreignKey' => 'id_personal' // Nombre del campo clave foránea en la tabla de vestuario que se relaciona con personal
        )
    );

}
?>