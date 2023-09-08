<?php

App::uses('AppController', 'Controller');


class HomeController extends AppController
{

  public function index()
  {
    $this->loadModel('Product');

    $products = $this->Product->find('all');

    $this->set(compact('products'));
  }
}
