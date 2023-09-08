<nav class="navbar navbar-expand-lg bg-body-tertiary bg bg-light shadow" style="z-index: 999;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cake Sample Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <?php echo $this->HTML->link('Home', array('controller' => 'home', 'action' => 'index'), array('class' => 'nav-link active', 'aria-current' => 'page')) ?>
        </li>
        <li class="nav-item">
          <?php echo $this->HTML->link('Carts', array('controller' => 'carts', 'action' => 'items'), array('class' => 'nav-link')) ?>
          <!-- <a class="nav-link" href="#">Cart</a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid p-4" style="max-height: calc(100vh - 80px); overflow: auto; width: 100%;">
  <?php
  echo $this->element('MessageBox/default');
  echo $this->fetch('content');
  ?>
</div>