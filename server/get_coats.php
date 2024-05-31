<?php
include('connection.php');
$st= $conn->prepare("SELECT * from products where product_category='cloth' or product_category='clothes' limit 4");
$st->execute();
$c_product= $st->get_result();
?>