<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController
{

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
	public function index()
	{
		$this->Product->recursive = 0;
		$this->set('products', $this->Paginator->paginate());
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
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
		$this->set('product', $this->Product->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			// Process the uploaded image
			$uploadedImage = $this->request->data['Product']['image'];

			// Check if an image was uploaded
			if (!empty($uploadedImage['tmp_name'])) {
				// Define the folder where you want to store uploaded images
				$uploadFolder = 'img/products/';

				// Create the folder if it doesn't exist
				if (!is_dir(WWW_ROOT . $uploadFolder)) {
					mkdir(WWW_ROOT . $uploadFolder, 0755, true);
				}

				// Generate a unique filename for the uploaded image
				$filename = uniqid() . '_' . $uploadedImage['name'];

				// Move the uploaded image to the upload folder
				move_uploaded_file($uploadedImage['tmp_name'], WWW_ROOT . $uploadFolder . $filename);

				// Save the filename to the database
				$this->request->data['Product']['image'] = $uploadFolder . $filename;
			}

			// Continue with your regular save logic
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Flash->success(__('The product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product could not be saved. Please, try again.'));
			}
		}
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
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Product->save($this->request->data)) {
				$this->Flash->success('The product has been saved.', ['class' => 'success']);
				// $this->Flash->success(__('The product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
			$this->request->data = $this->Product->find('first', $options);
		}
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
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Product->delete($id)) {
			$this->Flash->success(__('The product has been deleted.'), array('class' => 'alert alert-success'));
		} else {
			$this->Flash->error(__('The product could not be deleted. Please, try again.'), array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
