<?php
App::uses('AppController', 'Controller');
App::uses('Talla', 'Model');
/**
 * Tallas Controller
 */

class TallasController extends AppController
{

    public $components = array('Session');

    public function index()
    {
        // Cargar el modelo Personal
        $this->loadModel('Talla');

        // Obtener una lista de personal desde la base de datos
        $tallas = $this->Talla->find('all');

        // Pasar la lista de personal a la vista
        $this->set('tallas', $tallas);
    }
}