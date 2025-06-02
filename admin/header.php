<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

</head>

<body>
  <nav class="navbar navbar-dark bg-dark px-3">
    <a class="navbar-brand text-white" href="dashboard.php">Admin Panel</a>
    <div class="d-flex">
      <a href="categories.php" class="btn btn-outline-light btn-sm me-2">Categories</a>
      <a href="items.php" class="btn btn-outline-light btn-sm me-2">Menu Items</a>
      <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
  </nav>
  <div class="container mt-4">