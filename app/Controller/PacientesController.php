<?php
App::uses('AppController', 'Controller');

class PacientesController extends AppController {

	public $components = array('RequestHandler');
	public $helpers = array('Js' => array('Jquery'));
	public $paginate = array(
		'limit' => 5,
		'order' => array(
				'Paciente.id' => 'asc'
				)
		);
       public function index() {
               $this->Paciente->recursive = 0;
	       $pacientes = $this->paginate();
                if ($this->request->is('requested')) { // Para el funcionamiento del llamado asíncrono
                return $pacientes;}
                else { $this->set('pacientes', $pacientes);}
	}
	

	public function view($id = null) {
		if (!$this->Paciente->exists($id)) {
			throw new NotFoundException(__('El paciente no existe'));
		}
		$options = array('conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id));
		$this->set('paciente', $this->Paciente->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Paciente->create();

			// Antes de guardar se calcula la edad
			$day 	= $this->request->data['Paciente']['fecha_nac']['day'];
			$month 	= $this->request->data['Paciente']['fecha_nac']['month'];
			$year 	= $this->request->data['Paciente']['fecha_nac']['year'];

			// Se calcula la edad y se deja en los datos que se intentaran guardar
			$this->request->data['Paciente']['edad'] = $this->__getEdad($day, $month, $year);
                        
                        // Antes de guardar se calcula el codigo del paciente y se pasa a mayusculas el nombre y apellido
                        $sex 	= $this->request->data['Paciente']['sexo'];
                        $nom	= $this->request->data['Paciente']['nombre'] = strtoupper( $this->request->data['Paciente']['nombre']);
			$ap	= $this->request->data['Paciente']['apellido'] = strtoupper( $this->request->data['Paciente']['apellido']);
                       
                        //Se calcula el codigo y se deja en los datos que se intentaran guardar
                        $this->request->data['Paciente']['codigo'] = $this->__getCodigo($sex,$nom,$ap,$day, $month, $year);
                        
              
			if ($this->Paciente->save($this->request->data)) {
				$this->Session->setFlash(__('El paciente a sido guardado correctamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El paciente no fue guardado, intente nuevamente'));
			}
		}
	}
	private function __getEdad($day, $month, $year){
		$year_diff  = date("Y") - $year;
		$month_diff = date("m") - $month;
		$day_diff   = date("d") - $day;
		if ($day_diff < 0 && $month_diff==0) $year_diff--;
		if ($day_diff < 0 && $month_diff < 0) $year_diff--;
                return $year_diff;
	}
        private function __getCodigo($sex,$nom,$ap,$day, $month, $year){
                $difsex= substr ("$sex",0,1);
                $difnom= substr ("$nom",0,2);
                $difap= substr ("$ap",0,2);
                $codigo= $difsex.$difnom.$difap.$day.$month.$year;
                return $codigo;
        }
        
	public function edit($id = null) {
		if (!$this->Paciente->exists($id)) {
			throw new NotFoundException(__('El paciente no existe'));
		}
		if ($this->request->is(array('post', 'put'))) {

			// Antes de guardar se calcula la edad
			$day 	= $this->request->data['Paciente']['fecha_nac']['day'];
			$month 	= $this->request->data['Paciente']['fecha_nac']['month'];
			$year 	= $this->request->data['Paciente']['fecha_nac']['year'];

			// Se calcula la edad y se deja en los datos que se intentaran guardar
			$this->request->data['Paciente']['edad'] = $this->__getEdad($day, $month, $year);
                        
                        // Antes de guardar se calcula el codigo del paciente y se pasa a mayusculas el nombre y el apellido
                        $sex 	= $this->request->data['Paciente']['sexo'];
                        $nom	= $this->request->data['Paciente']['nombre'] = strtoupper( $this->request->data['Paciente']['nombre']);
			$ap	= $this->request->data['Paciente']['apellido'] = strtoupper( $this->request->data['Paciente']['apellido']);
                       
                        //Se calcula el codigo y se deja en los datos que se intentaran guardar
                        $this->request->data['Paciente']['codigo'] = $this->__getCodigo($sex,$nom,$ap,$day, $month, $year);

			if ($this->Paciente->save($this->request->data)) {
				$this->Session->setFlash(__('El paciente a sido guardado correctamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El paciente no fue guardado, intente nuevamente'));
			}
		} else {
			$options = array('conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id));
			$this->request->data = $this->Paciente->find('first', $options);
		}		
	}

	public function delete($id = null) {
		$this->Paciente->id = $id;
		if (!$this->Paciente->exists()) {
			throw new NotFoundException(__('El paciente no existe'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Paciente->delete()) {
			$this->Session->setFlash(__('El paciente fue eliminado'));
		} else {
			$this->Session->setFlash(__('El paciente no pudo ser eliminado, intente nuevamente'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        }
