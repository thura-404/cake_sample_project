<div class="container-fluid" style="height: 100vh;">
	<div class="row">
		<div class="col-2 p-0">
			<?php echo $this->element('Sidebar/default'); ?>
		</div>
		<div class="col-10 p-0">
			<div class="card m-0" style="width: 100%; height: 100vh">
				<div class="card-body">
					<?php echo $this->element('MessageBox/default'); ?>

					<h2 class="card-title"><?php echo __('Product Detail'); ?></h2>
					<ul class="list-group">
						<li class="list-group-item d-flex justify-content-between align-items-start">
							<div class="ms-2 me-auto">
								<div class="fw-bold"><?php echo __('ID'); ?></div>
							</div>
							<span class="badge bg-dark rounded-pill"><?php echo h($product['Product']['id']); ?></span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-start">
							<div class="ms-2 me-auto">
								<div class="fw-bold"><?php echo __('Name'); ?></div>
								<div class="ms-4"><?php echo h($product['Product']['name']); ?></div>
							</div>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-start">
							<div class="ms-2 me-auto">
								<div class="fw-bold"><?php echo __('Price'); ?></div>
							</div>
							<span class="badge bg-secondary rounded-pill"><?php echo h($product['Product']['price']); ?> MMK</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-start">
							<div class="ms-2 me-auto">
								<div class="fw-bold"><?php echo __('In Stock'); ?></div>
							</div>
							<span class="badge bg-secondary rounded-pill"><?php echo h($product['Product']['quantity']); ?></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>