<?php $this->extend('../Layouts/Customer/customer'); ?>

<div class="row row-cols-1 row-cols-md-4 g-4">
  <?php
  foreach ($products as $product) :
  ?>
    <div class="col">
      <div class="card">
        <img src="<?php echo $product['Product']['image'] ?>" alt="" class="card-img-top img-fluid">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product['Product']['name'] ?></h5>
          <ul class="list-group ">
            <li class="list-group-item d-flex justify-content-between align-items-start " style="border: none;">
              <div class="me-auto">
                <div class="fw-bold"><?php echo __('Price'); ?></div>
              </div>
              <span class="badge bg-secondary rounded-pill"><?php echo h($product['Product']['price']); ?> MMK</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start" style="border: none;">
              <div class="me-auto">
                <div class="fw-bold"><?php echo __('In Stock'); ?></div>
              </div>
              <span class="badge bg-secondary rounded-pill"><?php echo h($product['Product']['quantity']); ?></span>
            </li>
          </ul>
          <?php echo $this->HTML->link('Add to Cart', '/carts/addToCart/' . $product['Product']['id'], ['class' => 'btn btn-primary btn-block']); ?>
        </div>
      </div>
    </div>
  <?php
  endforeach;
  ?>
</div>