<?php
App::uses('AppModel', 'Model');
/**
 * Vestuario Model
 *
 */

class Vestuario extends AppModel{
    public $useTable = 'vestuario';

    public $belongsTo = [
        'TallaSudadera' => [
            'foreignKey' => 'talla_sudadera_id',
            'className' => 'Tallas',
        ]
    ];

}
?>