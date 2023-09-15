<?php
App::uses('AppController', 'Controller');
App::uses('Personal', 'Model');
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

        $this->render('add');
    }

    public function edit($id = null)
    {
        // Verificar si se proporciona un ID de registro válido
        if (!$id) {
            throw new NotFoundException(__('ID de registro no válido'));
        }

        // Buscar el registro en la base de datos por su ID
        $registro = $this->Personal->findById($id);

        // Verificar si el registro existe
        if (!$registro) {
            throw new NotFoundException(__('Registro no encontrado'));
        }

        // Verificar si se ha enviado un formulario (POST)
        if ($this->request->is(['post', 'put'])) {
            // Establecer el ID del registro en los datos enviados
            $this->request->data['Personal']['id'] = $id;

            // Intentar guardar los datos del formulario en el modelo
            if ($this->Personal->save($this->request->data)) {
                // Los datos se guardaron correctamente
                $this->Flash->success(__('Los cambios se guardaron correctamente.'));
                return $this->redirect(['action' => 'index']);
            } else {
                // Los datos no se pudieron guardar
                $this->Flash->error(__('No se pudieron guardar los cambios. Por favor, inténtalo de nuevo.'));
            }
        } else {
            // Si no es una solicitud POST, cargar los datos del registro en el formulario
            $this->request->data = $registro;
        }

        // Renderizar la vista del formulario de edición
        $this->set('registro', $registro);
        $this->render('index');
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

        // Redirigir a la página anterior
        return $this->redirect(array('action' => 'index'));
    }
}
