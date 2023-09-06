<!DOCTYPE html>
<html>

<head>

	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css('cake.generic');

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>

<body>




	<?php echo $this->Flash->render(); ?>

	<?php echo $this->fetch('content'); ?>



</body>

</html>