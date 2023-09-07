<div class="card m-0" style="width: 100%; height: 100vh">
	<div class="card-body">
		<?php echo $this->element('MessageBox/default'); ?>

		<h2 class="card-title"><?php echo __('Add a new Customer'); ?></h2>
		<?php
		echo $this->Form->create('Customer', array('class' => 'form-group'));
		echo $this->Form->input('id', array('class' => 'form-control mb-3'));
		echo $this->Form->input('name', array('class' => 'form-control mb-3'));
		echo $this->Form->input('email', array('class' => 'form-control mb-3'));
		echo $this->Form->input('password', array('class' => 'form-control mb-3'));
		echo $this->Form->button('Save', array('class' => 'btn btn-primary'));
		echo $this->Form->end();
		?>
	</div>
</div>