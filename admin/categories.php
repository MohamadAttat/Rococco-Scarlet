<?php
include 'db.php';
include 'header.php';

$editMode = false;
$editCategory = [];

// Load category for editing
if (isset($_GET['edit'])) {
  $editId = (int) $_GET['edit'];
  $res = $conn->query("SELECT * FROM tbl_menu_categories WHERE category_id = $editId LIMIT 1");
  if ($res && $res->num_rows > 0) {
    $editCategory = $res->fetch_assoc();
    $editMode = true;
  }
}

if (isset($_GET['delete'])) {
  $deleteId = (int) $_GET['delete'];

  // Step 1: Get category_uuid of the category being soft-deleted
  $getCat = $conn->query("SELECT category_uuid FROM tbl_menu_categories WHERE category_id = $deleteId LIMIT 1");
  if ($getCat && $getCat->num_rows > 0) {
    $cat = $getCat->fetch_assoc();
    $categoryUUID = $cat['category_uuid'];

    // Step 2: Soft delete the category
    $conn->query("DELETE FROM tbl_menu_categories WHERE category_id = $deleteId");

    // Step 3: Unlink items linked to this category
    $stmt = $conn->prepare("UPDATE tbl_menu_items SET linked_to_category_uuid = NULL WHERE linked_to_category_uuid = ?");
    $stmt->bind_param("s", $categoryUUID);
    $stmt->execute();
    $stmt->close();
  }

  // Redirect back
  header("Location: categories.php");
  exit;
}
// Handle Create or Update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['category_name'];
  $desc = $_POST['category_description'];
  $image = $_POST['category_image'];
  $order = (int) $_POST['category_order'];
  $visible = isset($_POST['is_visible']) ? 1 : 0;
  $available = isset($_POST['is_available']) ? 1 : 0;

  if (isset($_POST['category_id']) && $_POST['category_id'] !== '') {
    // Update existing
    $id = (int) $_POST['category_id'];
    $stmt = $conn->prepare("UPDATE tbl_menu_categories 
            SET category_name=?, category_description=?, category_image=?, category_order=?, is_visible=?, is_available=?, updated_at=NOW() 
            WHERE category_id=?");
    $stmt->bind_param("sssiiii", $name, $desc, $image, $order, $visible, $available, $id);
    $stmt->execute();
    $stmt->close();
  } else {
    // Insert new
    $uuid = uniqid('cat_', true);
    $stmt = $conn->prepare("INSERT INTO tbl_menu_categories 
            (category_uuid, category_name, category_description, category_image, category_order, is_visible, is_available, created_at, updated_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
    $stmt->bind_param("ssssiii", $uuid, $name, $desc, $image, $order, $visible, $available);
    $stmt->execute();
    $stmt->close();
  }

  header("Location: categories.php");
  exit;
}
?>

<h2><?= $editMode ? 'Edit Category' : 'Add Category' ?></h2>
<form method="post" class="mb-4 border p-4 rounded bg-light">
  <input type="hidden" name="category_id" value="<?= $editMode ? $editCategory['category_id'] : '' ?>">

  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="category_name" class="form-control" required
      value="<?= $editMode ? htmlspecialchars($editCategory['category_name']) : '' ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="category_description"
      class="form-control"><?= $editMode ? htmlspecialchars($editCategory['category_description']) : '' ?></textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Image URL</label>
    <input name="category_image" class="form-control"
      value="<?= $editMode ? htmlspecialchars($editCategory['category_image']) : '' ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Display Order</label>
    <input name="category_order" type="number" class="form-control"
      value="<?= $editMode ? $editCategory['category_order'] : '' ?>">
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="is_visible" <?= $editMode && $editCategory['is_visible'] ? 'checked' : '' ?>>
    <label class="form-check-label">Visible</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="is_available" <?= $editMode && $editCategory['is_available'] ? 'checked' : '' ?>>
    <label class="form-check-label">Available</label>
  </div>

  <br><br>
  <button class="btn btn-primary"><?= $editMode ? 'Update' : 'Add' ?> Category</button>
  <?php if ($editMode): ?>
    <a href="categories.php" class="btn btn-secondary ms-2">Cancel</a>
  <?php endif; ?>
</form>


<h4>Existing Categories</h4>
<table id="data-table" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>UUID</th>
      <th>Description</th>
      <th>Image</th>
      <th>Order</th>
      <th>Visible</th>
      <th>Available</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $res = $conn->query("SELECT * FROM tbl_menu_categories ORDER BY category_order ASC");
    while ($row = $res->fetch_assoc()):
      ?>
      <tr>
        <td><?= htmlspecialchars($row['category_name']) ?></td>
        <td><?= htmlspecialchars($row['category_uuid']) ?></td>
        <td><?= htmlspecialchars($row['category_description']) ?></td>
        <td><img src="../assets/images/product/<?= htmlspecialchars($row['category_image']) ?>" height="40"></td>
        <td><?= $row['category_order'] ?></td>
        <td><?= $row['is_visible'] ? 'Yes' : 'No' ?></td>
        <td><?= $row['is_available'] ? 'Yes' : 'No' ?></td>
        <td>
          <a href="categories.php?edit=<?= $row['category_id'] ?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;&nbsp;
          <a href="categories.php?delete=<?= $row['category_id'] ?>" class="btn btn-sm btn-danger"
            onclick="return confirm('Are you sure you want to delete this category?');">
            Delete
          </a>
        </td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>