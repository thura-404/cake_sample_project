<?php $this->extend('../Layouts/Admin/admin'); ?>

<div class="card m-0" style="width: 100%; height: 100vh">
	<div class="card-body">
		<?php echo $this->element('MessageBox/default'); ?>

		<h2 class="card-title"><?php echo __('Cart Detail'); ?></h2>
		<ul class="list-group">
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('ID'); ?></div>
				</div>
				<span class="badge bg-dark rounded-pill"> <?php echo h($cartDetail['CartDetail']['id']); ?></span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('Product'); ?></div>
					<div class="ms-4"> <?php echo $this->Html->link($cartDetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $cartDetail['Product']['id'])); ?></div>
				</div>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('Quantity'); ?></div>
				</div>
				<span class="badge bg-secondary rounded-pill"><?php echo h($cartDetail['CartDetail']['quantity']); ?></span>
			</li>
		</ul>
	</div>
</div>