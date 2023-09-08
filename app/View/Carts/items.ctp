<?php $this->extend('../Layouts/Customer/customer'); ?>

<div class="card m-0" style="width: 100%; height: 100vh">
  <div class="card-body">
    <?php echo $this->element('MessageBox/default'); ?>

    <h2 class="card-title"><?php echo __('Shopping Cart'); ?></h2>

    <table class="table table-striped">
      <thead class="sticky-top">
        <tr>
          <th>No.</th>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (empty($cart)) :
          echo '<tr><th colspan="3" style="text-align:center;">Cart is empty</th></tr>';
        endif;
        if (!empty($cart)) :
          $total = 0;
          $no = 1;
          foreach ($cart as $ct) :
            $total += $ct['product']['Product']['price'] * $ct['quantity'];
        ?>
            <tr>
              <th><?php echo $no ?></th>
              <th><?php echo $ct['product']['Product']['name'] ?></th>
              <th>
                <?php
                echo $this->HTML->link('Add', '/carts/addToCart/' . $ct['product']['Product']['id'], ['class' => 'btn btn-link-secondary']);
                echo $ct['quantity'];
                echo $this->HTML->link('Remove', '/carts/removeFromCart/' . $ct['product']['Product']['id'], ['class' => 'btn btn-link-secondary']);
                ?>
              </th>
              <th><?php echo $ct['product']['Product']['price'] * $ct['quantity'] . " MMK" ?></th>
            </tr>
          <?php
            $no++;
          endforeach;
          ?>
          <tr>
            <th colspan="3" style="text-align:right;">Total</th>
            <th><?php echo $total . " MMK" ?></th>
          </tr>
          <tr>
            <th colspan="4" style="text-align:rigth;"><?php echo $this->HTML->link('Checkout', '/carts/removeFromCart/' . $ct['product']['Product']['id'], ['class' => 'btn btn-secondary float-end']); ?> </th>
          </tr>
        <?php
        endif;
        ?>
      </tbody>
    </table>
  </div>
</div>