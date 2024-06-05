<?php
session_start();
include('./server/connection.php');
if(isset($_POST['pay_now'])) {
    $payment_method = $_POST['payment_method'];
    $order_id = $_SESSION['order_id'];  // Assuming you have the order ID stored in the session
    $total_payment = $_SESSION['total'];

    if($payment_method == 'cash-on-delivery') {
        // Update order status in the database
        $sql = "UPDATE orders SET order_status='cash on delivery' WHERE order_id='$order_id'";
        
        if ($conn->query($sql) === TRUE) {
            // Payment successful
            $_SESSION['payment_status'] = 'success';
        } else {
            // Error updating record
            $_SESSION['payment_status'] = 'error';
        }
    }

    // Redirect to confirmation page
    header("Location: payment_confirmation.php");
    exit();
}
?>
