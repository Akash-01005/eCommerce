<?php
session_start();
require('../server/connection.php');

if (isset($_GET['product_id'])) {
    $id = intval($_GET['product_id']);
    $sql = "DELETE FROM products WHERE product_id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php?message=Product+deleted+successfully");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php include('../layouts/admin_header.php'); ?>
