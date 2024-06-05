<?php
session_start();
include('./layouts/header.php');
?>
<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-3">
        <h1>Payment Confirmation</h1>
        <br>
        <?php
        if(isset($_SESSION['payment_status']) && $_SESSION['payment_status'] == 'success') {
            echo "<p>Thank you! Your order of Rs. {$_SESSION['total']} was successful.</p>";
        } else {
            echo "<p>There was an issue with your payment. Please try again.</p>";
        }
        ?>
    </div>
</section>
<?php
include('./layouts/footer.php');

// Unset the payment status session variable
unset($_SESSION['payment_status']);
?>
