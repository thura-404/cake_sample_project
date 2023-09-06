<?php
App::uses('AppController', 'Controller');
/**
 * CartDetails Controller
 *
 * @property CartDetail $CartDetail
 * @property PaginatorComponent $Paginator
 */
class CartDetailsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CartDetail->recursive = 0;
		$this->set('cartDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CartDetail->exists($id)) {
			throw new NotFoundException(__('Invalid cart detail'));
		}
		$options = array('conditions' => array('CartDetail.' . $this->CartDetail->primaryKey => $id));
		$this->set('cartDetail', $this->CartDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CartDetail->create();
			if ($this->CartDetail->save($this->request->data)) {
				$this->Flash->success(__('The cart detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cart detail could not be saved. Please, try again.'));
			}
		}
		$products = $this->CartDetail->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CartDetail->exists($id)) {
			throw new NotFoundException(__('Invalid cart detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CartDetail->save($this->request->data)) {
				$this->Flash->success(__('The cart detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cart detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CartDetail.' . $this->CartDetail->primaryKey => $id));
			$this->request->data = $this->CartDetail->find('first', $options);
		}
		$products = $this->CartDetail->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->CartDetail->exists($id)) {
			throw new NotFoundException(__('Invalid cart detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CartDetail->delete($id)) {
			$this->Flash->success(__('The cart detail has been deleted.'));
		} else {
			$this->Flash->error(__('The cart detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
