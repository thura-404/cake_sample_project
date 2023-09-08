<?php $this->extend('../Layouts/Admin/admin'); ?>
<div class="card m-0" style="width: 100%; height: 100vh">
	<div class="card-body">
		<?php echo $this->element('MessageBox/default'); ?>

		<h2 class="card-title"><?php echo __('Edit Product Details'); ?></h2>
		<?php
		echo $this->Form->create('Product', array('class' => 'form-group'));
		echo $this->Form->input('id', array('class' => 'form-control mb-3'));
		echo $this->Form->input('name', array('class' => 'form-control mb-3'));
		echo $this->Form->input('price', array('class' => 'form-control mb-3'));
		echo $this->Form->input('quantity', array('class' => 'form-control mb-3'));
		echo $this->Form->button('Save', array('class' => 'btn btn-primary'));
		echo $this->Form->end();
		?>
	</div>
</div>