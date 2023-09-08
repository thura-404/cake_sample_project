<div class="card m-0" style="width: 100%; height: 100vh">
	<div class="card-body">
		<?php echo $this->element('MessageBox/default'); ?>

		<div class="row">
			<h2 class="card-title col-6"><?php echo __('Customers'); ?></h2>
			<h2 class="card-title col-6"><?php echo $this->HTML->link(__('Add Customer'), array('action' => 'add'), array('class' => 'btn btn-primary float-right')); ?></h2>
		</div>
		<table class="table table-striped-columns">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('email'); ?></th>
					<th><?php echo $this->Paginator->sort('password'); ?></th>
					<th colspan="3"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($customers as $customer) : ?>
					<tr>
						<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['name']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['email']); ?>&nbsp;</td>
						<td><?php echo h($customer['Customer']['password']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $customer['Customer']['name']))); ?>
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