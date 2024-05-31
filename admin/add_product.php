<?php
session_start();
require('../server/connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $description = $conn->real_escape_string($_POST['description']);
    $price = $conn->real_escape_string($_POST['price']);
    $image= $conn->real_escape_string($_POST['image']);
    $color= $conn->real_escape_string($_POST['color']);
    $category=$conn->real_escape_string($_POST['category']);

    $sql = "INSERT INTO products (product_name,product_description,product_price,product_color,product_category,product_image) VALUES ('$name', '$description', '$price','$color','$category','$image')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php?message=Product+added+successfully");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php include('../layouts/admin_header.php'); ?>

<div class="container m-4 p-5">
    <h2>Add Product</h2>
    <form action="add_product.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Product Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Product Image:</label>
            <input type="text" name="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Product category:</label>
            <input type="text" name="category" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Product Description:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Product Color:</label>
            <input type="text" name="color" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Product Price:</label>
            <input type="text" name="price" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>

<?php include('../layouts/admin_footer.php'); ?>
