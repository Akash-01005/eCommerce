<?php
session_start();
include('../server/connection.php');
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
//   header('location: dashboard.php');
} else {
  header('location: admin_login.php');
  exit();
}

?>

<?php include('../layouts/admin_header.php'); ?>
<div class="container mt-5 pt-5">
        <!-- Your dashboard content goes here -->
        <h1>Welcome to the Admin Dashboard</h1>
        <p>This is where you can manage your products and view site analytics.</p>
    </div>

<div class="container mt-5">
    <h2>Product List</h2>
    <?php
    if (isset($_GET['message'])) {
        echo '<div class="alert alert-success">' . htmlspecialchars($_GET['message']) . '</div>';
    }

    $result = $conn->query("SELECT * FROM products");
    if ($result->num_rows > 0) {
        echo '<table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row['product_id'] . '</td>
                    <td>' . $row['product_name'] . '</td>
                    <td>' . $row['product_description'] . '</td>
                    <td>' . $row['product_price'] . '</td>
                    <td>
                        <a href="edit_product.php?product_id=' . $row['product_id'] . '" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_product.php?product_id=' . $row['product_id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure?\')">Delete</a>
                    </td>
                  </tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<div class="alert alert-info">No products found.</div>';
    }
    ?>
</div>

<?php include('../layouts/admin_footer.php'); ?>
