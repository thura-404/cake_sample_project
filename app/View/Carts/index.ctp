<?php $this->extend('../Layouts/Admin/admin'); ?>


<div class="card m-0" style="width: 100%; height: 100vh">
	<div class="card-body">
		<?php echo $this->element('MessageBox/default'); ?>

		<div class="row">
			<h2 class="card-title col-6"><?php echo __('Carts'); ?></h2>
			<h2 class="card-title col-6"><?php echo $this->HTML->link(__('Add Cart'), array('action' => 'add'), array('class' => 'btn btn-primary float-right')); ?></h2>
		</div>
		<table class="table table-striped-columns">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
					<th><?php echo $this->Paginator->sort('cart_details_id'); ?></th>
					<th><?php echo $this->Paginator->sort('date'); ?></th>
					<th colspan="3"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($carts as $cart) : ?>
					<tr>
						<td><?php echo h($cart['Cart']['id']); ?>&nbsp;</td>
						<td><?php echo $this->Html->link($cart['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $cart['Customer']['id'])); ?></td>
						<td><?php echo $this->Html->link($cart['CartDetail']['id'], array('controller' => 'cart_details', 'action' => 'view', $cart['CartDetail']['id'])); ?></td>
						<td><?php echo h($cart['Cart']['date']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $cart['Cart']['id'])) ?>
						</td>
						<td>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cart['Cart']['id'])) ?>
						</td>
						<td>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cart['Cart']['id']), array('confirm' => __('Are you sure you want to delete: %s?', $cart['Cart']['id']))); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<p>
			<?php
			echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total')
			));
			?> </p>
		<div class="paging">
			<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>
</div>