<?php
App::uses('AppController', 'Controller');
/**
 * Personals Controller
 */

class PersonalsController extends AppController
{
    public function index()
    {
        // Cargar el modelo Personal
        $this->loadModel('Personal');

        // Obtener una lista de personal desde la base de datos
        $personals = $this->Personal->find('all');

        // Pasar la lista de personal a la vista
        $this->set('personals', $personals);
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

    public function editarPersonal($id = null)
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

    public function eliminarPersonal($id)
    {
        /// Verificar si se recibió un ID válido
        if (!$this->request->is('post')) {
            throw new NotFoundException(__('Registro no válido.'));
        }
        // Obtener los IDs de los registros a eliminar de los datos de la solicitud
        $ids = $this->request->data['id'];
        // Intentar eliminar el registro
        // Intentar eliminar los registros
        if ($this->Personal->deleteAll(array('Personal.id' => $ids))) {
            $this->Session->setFlash(__('Los registros han sido eliminados correctamente.'), 'success');
        } else {
            $this->Session->setFlash(__('No se pudieron eliminar los registros. Por favor, inténtalo de nuevo.'), 'error');
        }

        // Redirigir a la página anterior o a donde desees después de la eliminación
        return $this->redirect(array('action' => 'index'));
    }
}
