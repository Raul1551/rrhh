<?php
App::uses('AppController', 'Controller');
/**
 * Personals Controller
 */

class PersonalsController extends AppController {
    public function index() {
        // Cargar el modelo Personal
        $this->loadModel('Personal');
        
        // Obtener una lista de personal desde la base de datos
        $personals = $this->Personal->find('all');
        
        // Pasar la lista de personal a la vista
        $this->set('personals', $personals);
    }

    public function eliminarPersonal($id) {
        /// Verificar si se recibió un ID válido
        if (!$this->request->is('post') || empty($id)) {
            throw new NotFoundException(__('Registro no válido.'));
        }

        // Intentar eliminar el registro
        if ($this->Personal->delete($id)) {
            $this->Session->setFlash(__('El registro ha sido eliminado correctamente.'), 'success');
        } else {
            $this->Session->setFlash(__('No se pudo eliminar el registro. Por favor, inténtalo de nuevo.'), 'error');
        }

        // Redirigir a la página anterior o a donde desees después de la eliminación
        $this->redirect($this->referer());
    }
}
?>