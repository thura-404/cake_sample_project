<div class="carts view">
<h2><?php echo __('Cart'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cart['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $cart['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cart Details'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cart['CartDetails']['id'], array('controller' => 'cart_details', 'action' => 'view', $cart['CartDetails']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cart'), array('action' => 'edit', $cart['Cart']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cart'), array('action' => 'delete', $cart['Cart']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cart['Cart']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cart Details'), array('controller' => 'cart_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Details'), array('controller' => 'cart_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
