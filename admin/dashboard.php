<?php
include 'auth.php';
include 'header.php';
?>

<div class="text-center mb-5">
  <h1 class="display-5 fw-bold">Welcome to the Admin Dashboard</h1>
  <p class="lead">Manage your menu categories and items with ease.</p>
</div>

<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card text-white bg-primary mb-3 shadow-sm">
      <div class="card-body">
        <h4 class="card-title">Menu Categories</h4>
        <p class="card-text">Add, update, and organize your menu categories.</p>
        <a href="categories.php" class="btn btn-light">Manage Categories</a>
      </div>
    </div>
  </div>

  <div class="col-md-5">
    <div class="card text-white bg-success mb-3 shadow-sm">
      <div class="card-body">
        <h4 class="card-title">Menu Items</h4>
        <p class="card-text">Control menu items linked to categories.</p>
        <a href="items.php" class="btn btn-light">Manage Items</a>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>