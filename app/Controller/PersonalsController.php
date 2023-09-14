<?php
App::uses('AppController', 'Controller');
/**
 * Personals Controller
 */

class PersonalsController extends AppController
{

    public $components = array('Session');

    public function index()
    {
        // Cargar el modelo Personal
        $this->loadModel('Personal');

        // Obtener una lista de personal desde la base de datos
        $personals = $this->Personal->find('all');

        // Pasar la lista de personal a la vista
        $this->set('personals', $personals);
    }

    public function add()
    {
        // Verificar si se ha enviado un formulario (POST)
        if ($this->request->is('post')) {
            // Guardar los datos del formulario en el modelo
            $this->Personal->create();
            if ($this->Personal->save($this->request->data)) {
                // Los datos se guardaron correctamente
                $this->Session->setFlash(__('El registro ha sido guardado correctamente.'), 'success');
                return $this->redirect(array('action' => 'index'));
            } else {
                // Los datos no se pudieron guardar
                $this->Session->setFlash(__('No se pudo guardar el registro. Por favor, inténtalo de nuevo.'), 'error');
            }
        }

        // Renderizar la vista del formulario para agregar nuevos registros
        // Aquí debes asegurarte de que tu vista tenga un formulario para ingresar los datos.
        // También debes tener en cuenta la validación de datos en el modelo.
        // Por ejemplo: $this->Personal->validates();
        $this->render('add');
    }

    public function verPersonal($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('ID inválido'));
        }

        $personal = $this->Personal->findById($id);
        if (!$personal) {
            throw new NotFoundException(__('Personal inválido'));
        }

        $this->set('personal', $personal);
    }

    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('ID inválido'));
        }

        $personal = $this->Personal->findById($id);
        if (!$personal) {
            throw new NotFoundException(__('Personal inválido'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Personal->id = $id;
            if ($this->Personal->save($this->request->data)) {
                $this->Flash->success(__('Tu personal ha sido actualizado.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('No se pudo actualizar tu personal.'));
        }

        if (!$this->request->data) {
            $this->request->data = $personal;
        }
    }

    public function delete()
    {
        // Verificar si se recibió una solicitud POST
        if ($this->request->is('post')) {
            // Obtener los IDs de los registros a eliminar de los datos de la solicitud
            $ids = $this->request->data['id'];

            // Verificar si se proporcionaron IDs válidos
            if (!empty($ids)) {
                // Intentar eliminar los registros
                if ($this->Personal->deleteAll(array('Personal.id' => $ids))) {
                    $this->Session->setFlash(__('Los registros han sido eliminados correctamente.'), 'success');
                } else {
                    $this->Session->setFlash(__('No se pudieron eliminar los registros. Por favor, inténtalo de nuevo.'), 'error');
                }
            } else {
                $this->Session->setFlash(__('No se proporcionaron IDs válidos para eliminar.'), 'error');
            }
        } else {
            $this->Session->setFlash(__('Solicitud no válida.'), 'error');
        }

        // Redirigir a la página anterior o a donde desees después de la eliminación
        return $this->redirect(array('action' => 'index'));
    }
}
