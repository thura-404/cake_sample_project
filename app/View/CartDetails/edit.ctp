<div class="cartDetails form">
<?php echo $this->Form->create('CartDetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cart Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product__id');
		echo $this->Form->input('quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CartDetail.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('CartDetail.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Cart Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
