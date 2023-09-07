<div class="container-fluid" style="height: 100vh;">
	<div class="row">
		<div class="col-2 p-0">
			<?php echo $this->element('Sidebar/default'); ?>
		</div>
		<div class="col-10 p-0">
			<div class="card m-0" style="width: 100%; height: 100vh">
				<div class="card-body">
					<?php echo $this->element('MessageBox/default'); ?>

					<h2 class="card-title"><?php echo __('Products'); ?></h2>
					<table class="table table-striped-columns">
						<thead>
							<tr>
								<th><?php echo $this->Paginator->sort('id'); ?></th>
								<th><?php echo $this->Paginator->sort('name'); ?></th>
								<th><?php echo $this->Paginator->sort('price'); ?></th>
								<th><?php echo $this->Paginator->sort('quantity'); ?></th>
								<th><?php echo __('Actions'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($products as $product) : ?>
								<tr>
									<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
									<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
									<td><?php echo h($product['Product']['price']); ?>&nbsp;</td>
									<td><?php echo h($product['Product']['quantity']); ?>&nbsp;</td>
									<td>
										<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id']), array('class' => 'btn btn-link')); ?>
										<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id']), array('class' => 'btn btn-link')); ?>
										<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Are you sure you want to delete: %s?', $product['Product']['name']), 'class' => 'btn btn-link')); ?>
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
		</div>
	</div>
</div>