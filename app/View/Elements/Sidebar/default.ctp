<div id="accordion" style=" height: 100vh; overflow-y: auto;">
  <div class="card" style="border: none;">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Back
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body p-0">
        <ul class="list-group list-group-flush m-0">
          <?php echo $this->HTML->link(__('Employees'), array('controller' => 'employees', 'action' => 'index'), array('class' => 'btn btn-link')); ?>
          <?php echo $this->HTML->link(__('Products'), array('controller' => 'products', 'action' => 'index'), array('class' => 'btn btn-link')); ?>
          <?php echo $this->HTML->link(__('Customers'), array('controller' => 'customers', 'action' => 'index'), array('class' => 'btn btn-link')); ?>
          <?php echo $this->HTML->link(__('Carts'), array('controller' => 'carts', 'action' => 'index'), array('class' => 'btn btn-link')); ?>
          <?php echo $this->HTML->link(__('Cart Details'), array('controller' => 'cartdetails', 'action' => 'index'), array('class' => 'btn btn-link')); ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <?php echo __('Employees') ?>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body p-0">
        <ul class="list-group list-group-flush m-0">
          <?php echo $this->HTML->link(__('Index'), array('controller' => 'employees', 'action' => 'index'), array('class' => 'btn btn-link')); ?>
          <?php echo $this->HTML->link(__('Add'), array('controller' => 'employees', 'action' => 'add'), array('class' => 'btn btn-link')); ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <?php echo __('Products'); ?>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body p-0">
        <ul class="list-group list-group-flush m-0">
          <?php echo $this->HTML->link(__('Index'), array('controller' => 'products', 'action' => 'index'), array('class' => 'btn btn-link')); ?>
          <?php echo $this->HTML->link(__('Add'), array('controller' => 'products', 'action' => 'add'), array('class' => 'btn btn-link')); ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <?php echo __('Customers') ?>
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body p-0">
        <ul class="list-group list-group-flush m-0">
          <?php echo $this->HTML->link(__('Index'), array('controller' => 'customers', 'action' => 'index'), array('class' => 'btn btn-link')); ?>
          <?php echo $this->HTML->link(__('Add'), array('controller' => 'customers', 'action' => 'add'), array('class' => 'btn btn-link')); ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <?php echo __('Carts') ?>
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body p-0">
        <ul class="list-group list-group-flush m-0">
          <?php echo $this->HTML->link(__('Index'), array('controller' => 'carts', 'action' => 'index'), array('class' => 'btn btn-link')); ?>
          <?php echo $this->HTML->link(__('Add'), array('controller' => 'carts', 'action' => 'add'), array('class' => 'btn btn-link')); ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingSix">
      <h5 class="mb-0">
        <button class="btn collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <?php echo __('Cart Items') ?>
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body p-0">
        <ul class="list-group list-group-flush m-0">
          <?php echo $this->HTML->link(__('Index'), array('controller' => 'cartdetails', 'action' => 'index'), array('class' => 'btn btn-link')); ?>
          <?php echo $this->HTML->link(__('Add'), array('controller' => 'cartdetails', 'action' => 'add'), array('class' => 'btn btn-link')); ?>
        </ul>
      </div>
    </div>
  </div>
</div>