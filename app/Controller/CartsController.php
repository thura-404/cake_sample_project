<?php
App::uses('AppController', 'Controller');
/**
 * Carts Controller
 *
 * @property Cart $Cart
 * @property PaginatorComponent $Paginator
 */
class CartsController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Flash', 'Session');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Cart->recursive = 0;
		$this->set('carts', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		if (!$this->Cart->exists($id)) {
			throw new NotFoundException(__('Invalid cart'));
		}
		$options = array('conditions' => array('Cart.' . $this->Cart->primaryKey => $id));
		$this->set('cart', $this->Cart->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function items()
	{
		$this->set('cart', $this->Session->read('cart'));

		// if ($this->request->is('post')) {
		// 	$this->Cart->create();
		// 	if ($this->Cart->save($this->request->data)) {
		// 		$this->Flash->success(__('The cart has been saved.'));
		// 		return $this->redirect(array('action' => 'index'));
		// 	} else {
		// 		$this->Flash->error(__('The cart could not be saved. Please, try again.'));
		// 	}
		// }
		// $customers = $this->Cart->Customer->find('list');
		// $cartDetails = $this->Cart->CartDetail->find('list');
		// $this->set(compact('customers', 'cartDetails'));
	}

	/**
	 * add to Cart method
	 * 
	 * @param int $productId
	 * @return array
	 */
	public function addToCart($productId, $quantity = 1)
	{
		$this->loadModel('Product');
		$product = $this->Product->findById($productId);

		if (!$product) {
			$this->Session->setFlash(__('Invalid product'));
		}

		if (!$this->Session->check('cart')) {
			$this->Session->write('cart', array());
		}

		$cart = $this->Session->read('cart');

		$index = $this->searchCartItem($productId, $cart);

		if ($index >= 0) {
			$cart[$index]['quantity'] += $quantity;
		} else {
			$cart[] = array('product' => $product, 'quantity' => $quantity);
		}

		$this->Session->write('cart', $cart);

		$this->Session->setFlash(__('Product added to cart'));
		return $this->redirect(array('controller' => 'carts', 'action' => 'items'));
	}

	/**
	 * remove from cart method
	 * 
	 * @param int $productId
	 * @return array
	 */
	public function removeFromCart($productId, $quantity = 1)
	{
		if (!$this->Session->check('cart')) {
			$this->Session->setFlash(__('No Items in the Cart'));
		}

		$this->loadModel('Product');
		$product = $this->Product->findById($productId);

		if (!$product) {
			$this->Session->setFlash(__('Invalid product'));
		}

		$cart = $this->Session->read('cart');

		$index = $this->searchCartItem($productId, $cart);

		if ($index >= 0) {
			$cart[$index]['quantity'] -= $quantity;
		} else {
			$this->Session->setFlash(__('Invalid product'));
		}

		$this->Session->write('cart', $cart);

		$this->Session->setFlash(__('Product Removed from cart'));

		return $this->redirect(array('controller' => 'carts', 'action' => 'items'));
	}


	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Cart->create();
			if ($this->Cart->save($this->request->data)) {
				$this->Flash->success(__('The cart has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cart could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Cart->Customer->find('list');
		$cartDetails = $this->Cart->CartDetail->find('list');
		$this->set(compact('customers', 'cartDetails'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		if (!$this->Cart->exists($id)) {
			throw new NotFoundException(__('Invalid cart'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cart->save($this->request->data)) {
				$this->Flash->success(__('The cart has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cart could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cart.' . $this->Cart->primaryKey => $id));
			$this->request->data = $this->Cart->find('first', $options);
		}
		$customers = $this->Cart->Customer->find('list');
		$cartDetails = $this->Cart->CartDetail->find('list');
		$this->set(compact('customers', 'cartDetails'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null)
	{
		if (!$this->Cart->exists($id)) {
			throw new NotFoundException(__('Invalid cart'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cart->delete($id)) {
			$this->Flash->success(__('The cart has been deleted.'));
		} else {
			$this->Flash->error(__('The cart could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function searchCartItem($productId, $array)
	{
		$index = -1;

		for ($i = 0; $i < count($array); $i++) {
			if ($array[$i]['product']['Product']['id'] == $productId) {
				$index = $i;
			}
		}

		return $index;
	}
}
