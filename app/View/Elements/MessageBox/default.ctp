<?php
$message = $this->Flash->render(); // Render the flash message

if (!empty($message)) :
  // Check if it contains the 'success' class
  if (strpos($message, 'success') !== false) :
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> <?php echo $message ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
  elseif (strpos($message, 'error') !== false) :
  ?>
    <div class="alert alert-error alert-dismissible fade show" role="alert">
      <strong>Error!</strong> <?php echo $message ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
  else :
  ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>ALert!</strong> <?php echo $message ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
  endif;
endif;
?>