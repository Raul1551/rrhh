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

    public function add()
    {
        // Verificar si se ha enviado un formulario (POST)
        if ($this->request->is('post')) {
            // Guardar los datos del formulario en el modelo
            $this->Talla->create();
            if ($this->Talla->save($this->request->data)) {
                // Los datos se guardaron correctamente
                $this->Session->setFlash(__('El registro ha sido guardado correctamente.'), 'success');
                return $this->redirect(array('action' => 'index'));
            } else {
                // Los datos no se pudieron guardar
                $this->Session->setFlash(__('No se pudo guardar el registro. Por favor, inténtalo de nuevo.'), 'error');
            }
        }

    }
}