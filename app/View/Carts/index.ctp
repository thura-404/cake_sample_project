<div class="carts index">
	<h2><?php echo __('Carts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cart_details_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($carts as $cart): ?>
	<tr>
		<td><?php echo h($cart['Cart']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cart['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $cart['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cart['CartDetails']['id'], array('controller' => 'cart_details', 'action' => 'view', $cart['CartDetails']['id'])); ?>
		</td>
		<td><?php echo h($cart['Cart']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cart['Cart']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cart['Cart']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cart['Cart']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cart['Cart']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cart'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cart Details'), array('controller' => 'cart_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Details'), array('controller' => 'cart_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
