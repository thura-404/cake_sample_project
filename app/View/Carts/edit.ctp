<div class="card m-0" style="width: 100%; height: 100vh">
	<div class="card-body">
		<?php echo $this->element('MessageBox/default'); ?>

		<h2 class="card-title"><?php echo __('Add Cart'); ?></h2>
		<?php
		echo $this->Form->create('Cart', array('class' => 'form-group'));
		echo $this->Form->input('id', array('class' => 'form-control mb-3'));
		echo $this->Form->input('customer_id', array('class' => 'form-control mb-3'));
		echo $this->Form->input('cart_details_id', array('class' => 'form-control mb-3'));
		echo $this->Form->button('Save', array('class' => 'btn btn-primary'));
		echo $this->Form->end();
		?>
	</div>
</div>