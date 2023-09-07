<div class="card m-0" style="width: 100%; height: 100vh">
	<div class="card-body">
		<?php echo $this->element('MessageBox/default'); ?>

		<h2 class="card-title"><?php echo __('Employee Detail'); ?></h2>
		<ul class="list-group">
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('ID'); ?></div>
				</div>
				<span class="badge bg-dark rounded-pill"><?php echo h($employee['Employee']['id']); ?></span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('Name'); ?></div>
					<div class="ms-4"><?php echo h($employee['Employee']['name']); ?></div>
				</div>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-start">
				<div class="ms-2 me-auto">
					<div class="fw-bold"><?php echo __('Email'); ?></div>
					<div class="ms-4"><?php echo h($employee['Employee']['email']); ?></div>
				</div>
			</li>
		</ul>
	</div>
</div>