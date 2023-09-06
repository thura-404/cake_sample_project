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

	<!-- Bootstrap CSS v5.0 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>




	<?php echo $this->Flash->render(); ?>

	<?php echo $this->fetch('content'); ?>


	<!-- Bootstrap JavaScript v5.0  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>