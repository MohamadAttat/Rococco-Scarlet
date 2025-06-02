<?php
include 'db.php';
include 'header.php';

$editMode = false;
$editItem = [];

// Fetch categories for dropdown
$categories = $conn->query("SELECT category_uuid, category_name FROM tbl_menu_categories");

// Handle edit request
if (isset($_GET['edit'])) {
  $editId = (int) $_GET['edit'];
  $res = $conn->query("SELECT * FROM tbl_menu_items WHERE item_id = $editId LIMIT 1");
  if ($res && $res->num_rows > 0) {
    $editItem = $res->fetch_assoc();
    $editMode = true;
  }
}
if (isset($_GET['delete'])) {
  $deleteId = (int) $_GET['delete'];
  $conn->query("DELETE FROM tbl_menu_items WHERE item_id = $deleteId");
  header("Location: items.php");
  exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['item_name'];
  $desc = $_POST['item_description'];
  $price = (float) $_POST['item_price'];
  $image = $_POST['item_image'];
  $order = (int) $_POST['item_order'];
  $visible = isset($_POST['is_visible']) ? 1 : 0;
  $available = isset($_POST['is_available']) ? 1 : 0;
  $categoryUUID = $_POST['linked_to_category_uuid'];

  if (isset($_POST['item_id']) && $_POST['item_id'] !== '') {
    // UPDATE
    $id = (int) $_POST['item_id'];
    $stmt = $conn->prepare("UPDATE tbl_menu_items 
            SET item_name=?, item_description=?, item_price=?, item_image=?, item_order=?, is_visible=?, is_available=?, linked_to_category_uuid=?, updated_at=NOW()
            WHERE item_id=?");
    $stmt->bind_param("ssdssiisi", $name, $desc, $price, $image, $order, $visible, $available, $categoryUUID, $id);
    $stmt->execute();
    $stmt->close();
  } else {
    // INSERT
    $uuid = uniqid('item_', true);
    $stmt = $conn->prepare("INSERT INTO tbl_menu_items 
            (item_uuid, item_name, item_description, item_price, item_image, item_order, is_visible, is_available, order_count, linked_to_category_uuid, created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, 0, ?, NOW(), NOW())");
    $stmt->bind_param("sssdsiiis", $uuid, $name, $desc, $price, $image, $order, $visible, $available, $categoryUUID);
    $stmt->execute();
    $stmt->close();
  }


  header("Location: items.php");
  exit;
}
?>

<h2><?= $editMode ? 'Edit Menu Item' : 'Add Menu Item' ?></h2>

<form method="post" class="mb-4 border p-4 rounded bg-light">
  <input type="hidden" name="item_id" value="<?= $editMode ? $editItem['item_id'] : '' ?>">

  <div class="mb-3">
    <label class="form-label">Item Name</label>
    <input name="item_name" class="form-control" required
      value="<?= $editMode ? htmlspecialchars($editItem['item_name']) : '' ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="item_description"
      class="form-control"><?= $editMode ? htmlspecialchars($editItem['item_description']) : '' ?></textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Price</label>
    <input name="item_price" type="number" step="0.01" class="form-control" required
      value="<?= $editMode ? $editItem['item_price'] : '' ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Image URL</label>
    <input name="item_image" class="form-control"
      value="<?= $editMode ? htmlspecialchars($editItem['item_image']) : '' ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Display Order</label>
    <input name="item_order" type="number" class="form-control" value="<?= $editMode ? $editItem['item_order'] : '' ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Category</label>
    <select name="linked_to_category_uuid" class="form-select" required>
      <option value="">-- Select Category --</option>
      <?php
      // Reset categories for dropdown (if already fetched earlier)
      $categories->data_seek(0);
      while ($cat = $categories->fetch_assoc()):
        $selected = ($editMode && $editItem['linked_to_category_uuid'] === $cat['category_uuid']) ? 'selected' : '';
        ?>
        <option value="<?= htmlspecialchars($cat['category_uuid']) ?>" <?= $selected ?>>
          <?= htmlspecialchars($cat['category_name']) ?>
        </option>
      <?php endwhile; ?>
    </select>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="is_visible" <?= $editMode && $editItem['is_visible'] ? 'checked' : '' ?>>
    <label class="form-check-label">Visible</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="is_available" <?= $editMode && $editItem['is_available'] ? 'checked' : '' ?>>
    <label class="form-check-label">Available</label>
  </div>

  <br><br>
  <button class="btn btn-primary"><?= $editMode ? 'Update Item' : 'Add Item' ?></button>
  <?php if ($editMode): ?>
    <a href="items.php" class="btn btn-secondary ms-2">Cancel</a>
  <?php endif; ?>
</form>

<h4>Existing Menu Items</h4>
<table id="data-table" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>UUID</th>
      <th>Description</th>
      <th>Price</th>
      <th>Image</th>
      <th>Order</th>
      <th>Visible</th>
      <th>Available</th>
      <th>Category</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $res = $conn->query("
    SELECT i.*, c.category_name
    FROM tbl_menu_items i
    LEFT JOIN tbl_menu_categories c
    ON i.linked_to_category_uuid = c.category_uuid
    ORDER BY i.item_order ASC
");
    while ($row = $res->fetch_assoc()):
      ?>
      <tr>
        <td><?= htmlspecialchars($row['item_name']) ?></td>
        <td><?= htmlspecialchars($row['item_uuid']) ?></td>
        <td><?= htmlspecialchars($row['item_description']) ?></td>
        <td><?= number_format($row['item_price'], 2) ?></td>
        <td><img src="../assets/images/product/<?= htmlspecialchars($row['item_image']) ?>" height="40"></td>
        <td><?= $row['item_order'] ?></td>
        <td><?= $row['is_visible'] ? 'Yes' : 'No' ?></td>
        <td><?= $row['is_available'] ? 'Yes' : 'No' ?></td>
        <td><?= htmlspecialchars($row['category_name'] ?? '—') ?></td>
        <td>
          <a href="items.php?edit=<?= $row['item_id'] ?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;&nbsp;
          <a href="items.php?delete=<?= $row['item_id'] ?>" class="btn btn-sm btn-danger"
            onclick="return confirm('Are you sure you want to delete this item?');">
            Delete
          </a>
        </td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>