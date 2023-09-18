<?php
App::uses('AppController', 'Controller');
App::uses('Personal', 'Model');
App::uses('DuplicateDataException', 'Lib/Error');
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

    public function view($id = null)
    {
        // Verificar si se proporciona un ID de registro válido
        if (!$id) {
            $response = ['success' => false, 'message' => 'ID de registro no válido'];
        } else {
            // Buscar el registro en la base de datos por su ID
            $registro = $this->Personal->findById($id);

            // Verificar si el registro existe
            if (!$registro) {
                $response = ['success' => false, 'message' => 'Registro no encontrado'];
            } else {
                $response = ['success' => true, 'data' => $registro];
            }
        }

        // Devolver la respuesta como JSON
        $this->autoRender = false;
        $this->response->type('json');
        echo json_encode($response);
        $this->response->send();
    }

    public function add()
    {
        // Verificar si se ha enviado un formulario (POST)
        if ($this->request->is('post')) {
            // Verificar la unicidad del campo "dni"
            $dni = $this->request->data['Personal']['dni'];
            $existingRecord = $this->Personal->findByDni($dni);

            if ($existingRecord) {
                // Si ya existe un registro con este DNI, lanza la excepción
                throw new DuplicateDataException();
            }
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

    }

    public function edit($id = null)
    {
        // Verificar si se proporciona un ID de registro válido
        if (!$id) {
            $response = ['success' => false, 'message' => 'ID de registro no válido'];
        } else {
            // Buscar el registro en la base de datos por su ID
            $registro = $this->Personal->findById($id);

            // Verificar si el registro existe
            if (!$registro) {
                $response = ['success' => false, 'message' => 'Registro no encontrado'];
            } else {
                // Verificar si se ha enviado un formulario (POST)
                if ($this->request->is(['post', 'put'])) {
                    // Establecer el ID del registro en los datos enviados
                    $this->request->data['Personal']['id'] = $id;

                    // Intentar guardar los datos del formulario en el modelo
                    if ($this->Personal->save($this->request->data)) {
                        // Los datos se guardaron correctamente
                        $response = ['success' => true, 'message' => 'Los cambios se guardaron correctamente.'];
                    } else {
                        // Los datos no se pudieron guardar
                        $response = ['success' => false, 'message' => 'No se pudieron guardar los cambios. Por favor, inténtalo de nuevo.'];
                    }
                } else {
                    // Si no es una solicitud POST, cargar los datos del registro en el formulario
                    $this->request->data = $registro;
                    $response = ['success' => true, 'data' => $registro];
                }
            }
        }

        // Devolver la respuesta como JSON
        $this->autoRender = false;
        $this->response->type('json');
        echo json_encode($response);
        $this->response->send();
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
