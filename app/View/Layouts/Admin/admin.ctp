<div class="container-fluid" style="height: 100vh;">
  <div class="row">
    <div class="col-2 p-0">
      <?php echo $this->element('Sidebar/default'); ?>
    </div>
    <div class="col-10 p-0" style="max-height: 100vh; overflow-y: auto;">
      <?php echo $this->fetch('content'); ?>
    </div>
  </div>
</div>