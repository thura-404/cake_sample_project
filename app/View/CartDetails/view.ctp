<div class="cartDetails view">
<h2><?php echo __('Cart Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cartDetail['CartDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cartDetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $cartDetail['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($cartDetail['CartDetail']['quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cart Detail'), array('action' => 'edit', $cartDetail['CartDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cart Detail'), array('action' => 'delete', $cartDetail['CartDetail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cartDetail['CartDetail']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Cart Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
