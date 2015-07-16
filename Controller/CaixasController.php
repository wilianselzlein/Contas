<?php
App::uses('AppController', 'Controller');
/**
 * Caixas Controller
 *
 * @property Caixa $Caixa
 */
class CaixasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Caixa->recursive = 0;
		$this->set('caixas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Caixa->exists($id)) {
			throw new NotFoundException(__('Invalid caixa'));
		}
		$options = array('conditions' => array('Caixa.' . $this->Caixa->primaryKey => $id));
		$this->set('caixa', $this->Caixa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Caixa->create();
			if ($this->Caixa->save($this->request->data)) {
				$this->Session->setFlash(__('The caixa has been saved'));
				$this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('The caixa could not be saved. Please, try again.'));
			}
		}
		$grupos = $this->Caixa->Grupo->find('list');
		$this->set(compact('grupos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Caixa->exists($id)) {
			throw new NotFoundException(__('Invalid caixa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Caixa->save($this->request->data)) {
				$this->Session->setFlash(__('The caixa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The caixa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Caixa.' . $this->Caixa->primaryKey => $id));
			$this->request->data = $this->Caixa->find('first', $options);
		}
		$grupos = $this->Caixa->Grupo->find('list');
		$this->set(compact('grupos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Caixa->id = $id;
		if (!$this->Caixa->exists()) {
			throw new NotFoundException(__('Invalid caixa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Caixa->delete()) {
			$this->Session->setFlash(__('Caixa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Caixa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
