<?php
App::uses('NotFoundException', 'Error');

class DuplicateDataException extends NotFoundException {
    protected $_messageTemplate = 'El registro contiene datos duplicados.';
}
?>