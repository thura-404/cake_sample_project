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
