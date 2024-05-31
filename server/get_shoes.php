<?php
include('connection.php');
$st= $conn->prepare("SELECT * from products where product_category='shoes' or product_category='shoe' limit 4");
$st->execute();
$s_product= $st->get_result();
?>
