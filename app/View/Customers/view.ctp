<?php $this->extend('../Layouts/Admin/admin'); ?>

<div class="card m-0" style="width: 100%; height: 100vh">
	<div class="card-body">
		<?php echo $this->element('MessageBox/default'); ?>

		<h2 class="card-title"><?php echo __('Customer Detail'); ?></h2>
		<ul class="list-group mb-4">
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('ID'); ?></div>
				</div>
				<span class="badge bg-dark rounded-pill"><?php echo h($customer['Customer']['id']); ?></span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('Name'); ?></div>
					<div class="ms-4"><?php echo h($customer['Customer']['name']); ?></div>
				</div>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('Email'); ?></div>
					<div class="ms-4"><?php echo h($customer['Customer']['email']); ?></div>
				</div>
			</li>
		</ul>
		<?php if (!empty($customer['Cart'])) : ?>
			<div class="card m-0" style="width: 100%;">
				<div class="card-body">
					<h2 class="card-title"><?php echo __('Related Carts'); ?></h2>
					<table class="table table-striped-columns">
						<thead>
							<tr>
								<th><?php echo __('Id'); ?></th>
								<th><?php echo __('Customer Id'); ?></th>
								<th><?php echo __('Cart Details Id'); ?></th>
								<th><?php echo __('Date'); ?></th>
								<th colspan="3"><?php echo __('Actions'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($customer['Cart'] as $cart) : ?>
								<tr>
									<td><?php echo $cart['id']; ?></td>
									<td><?php echo $cart['customer_id']; ?></td>
									<td><?php echo $cart['cart_details_id']; ?></td>
									<td><?php echo $cart['date']; ?></td>
									<td>
										<?php echo $this->Html->link(__('View'), array('controller' => 'carts', 'action' => 'view', $cart['id'])); ?>
									</td>
									<td>
										<?php echo $this->Html->link(__('Edit'), array('controller' => 'carts', 'action' => 'edit', $cart['id'])); ?>
									</td>
									<td>
										<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carts', 'action' => 'delete', $cart['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cart['id']))); ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>