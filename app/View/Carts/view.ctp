<?php $this->extend('../Layouts/Admin/admin'); ?>

<div class="card m-0" style="width: 100%; height: 100vh">
	<div class="card-body">
		<?php echo $this->element('MessageBox/default'); ?>

		<h2 class="card-title"><?php echo __('Product Detail'); ?></h2>
		<ul class="list-group">
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('ID'); ?></div>
				</div>
				<span class="badge bg-dark rounded-pill"><?php echo h($cart['Cart']['id']); ?></span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('Customer'); ?></div>
					<div class="ms-4"><?php echo $this->Html->link($cart['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $cart['Customer']['id'])); ?>
						&nbsp;</div>
				</div>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('Cart Details'); ?></div>
					<div class="ms-4"><?php echo $this->Html->link($cart['CartDetail']['id'], array('controller' => 'cart_details', 'action' => 'view', $cart['CartDetail']['id'])); ?>
						&nbsp;</div>
				</div>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('Date'); ?></div>
				</div>
				<span class="badge bg-secondary rounded-pill"><?php echo h($cart['Cart']['date']); ?></span>
			</li>
		</ul>
	</div>
</div>