<!-- <div class="products index">
	<h2><?php echo __('Products'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($products as $product) : ?>
	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['price']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['quantity']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?></li>
	</ul>
</div> -->

<div class="container-fluid" style="height: 100vh;">
	<div class="row">
		<div class="col-2 p-0">
			<div id="accordion" style=" height: 100vh; overflow-y: auto;">
				<div class="card" style="border: none;">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Back
							</button>
						</h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body p-0">
							<ul class="list-group list-group-flush m-0">
								<li class="list-group-item btn btn-link"><?php echo __('Employees') ?></li>
								<li class="list-group-item btn btn-link"><?php echo __('Products'); ?></li>
								<li class="list-group-item btn btn-link"><?php echo __('Customers') ?></li>
								<li class="list-group-item btn btn-link"><?php echo __('Carts') ?></li>
								<li class="list-group-item btn btn-link"><?php echo __('Cart Items') ?></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<?php echo __('Employees') ?>
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body p-0">
							<ul class="list-group list-group-flush m-0">
								<li class="list-group-item btn btn-link"><?php echo __('Index') ?></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<?php echo __('Products'); ?>
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body p-0">
							<ul class="list-group list-group-flush m-0">
								<li class="list-group-item btn btn-link"><?php echo __('Index') ?></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingFour">
						<h5 class="mb-0">
							<button class="btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<?php echo __('Customers') ?>
							</button>
						</h5>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
						<div class="card-body p-0">
							<ul class="list-group list-group-flush m-0">
								<li class="list-group-item btn btn-link"><?php echo __('Index') ?></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingFive">
						<h5 class="mb-0">
							<button class="btn collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								<?php echo __('Carts') ?>
							</button>
						</h5>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
						<div class="card-body p-0">
							<ul class="list-group list-group-flush m-0">
								<li class="list-group-item btn btn-link"><?php echo __('Index') ?></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingSix">
						<h5 class="mb-0">
							<button class="btn collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								<?php echo __('Cart Items') ?>
							</button>
						</h5>
					</div>
					<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
						<div class="card-body p-0">
							<ul class="list-group list-group-flush m-0">
								<li class="list-group-item btn btn-link"><?php echo __('Index') ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-10 p-0">
			<div class="card m-0" style="width: 100%; height: 100vh">
				<div class="card-body">
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
										<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']), 'class' => 'btn btn-link')); ?>
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