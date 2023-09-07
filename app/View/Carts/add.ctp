<div class="carts form">
	<?php echo $this->Form->create('Cart'); ?>
	<fieldset>
		<legend><?php echo __('Add Cart'); ?></legend>
		<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('cart_details_id');
		echo $this->Form->input('date');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Carts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cart Details'), array('controller' => 'cart_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Details'), array('controller' => 'cart_details', 'action' => 'add')); ?> </li>
	</ul>
</div>

<!-- <div class="card m-0" style="width: 100%; height: 100vh">
	<div class="card-body">
		<?php echo $this->element('MessageBox/default'); ?>

		<h2 class="card-title"><?php echo __('Add Cart'); ?></h2>
		<?php
		echo $this->Form->create('Cart', array('class' => 'form-group'));
		echo $this->Form->input('customer_id', array('class' => 'form-control mb-3'));
		echo $this->Form->input('cart_details_id', array('class' => 'form-control mb-3'));
		echo $this->Form->input('date', array('class' => 'form-control mb-3'));
		echo $this->Form->button('Save', array('class' => 'btn btn-primary'));
		echo $this->Form->end();
		?>
	</div>
</div> -->