<?php
session_start();
if(isset($_POST['order_pay'])){
    $os = $_POST['order_status'];
    $otp = $_POST['total_order'];
}
?>
<?php include('./layouts/header.php'); ?>
<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-3">
        <h1>Payment</h1>
        <br>
    </div>
    <div class="mx-auto container text-center">
        <?php if(isset($_SESSION['total']) && $_SESSION['total'] != 0) { ?>
            <p>Total Payment: Rs. <?php echo $_SESSION['total']; ?></p>
            <br>
            <form action="payment_processing.php" method="POST">
                <div class="form-check d-flex justify-content-center">
                    <input type="radio" name="payment_method" value="cash-on-delivery" class="form-check-input ml-3" id="cod" required> 
                    <label for="cod" class="form-check-label">Cash On Delivery (COD)</label>
                </div>
                <div class="form-check d-flex justify-content-center">
                    <input type="radio" name="payment_method" value="upi" class="form-check-input ml-3" id="upi" disabled> 
                    <label for="upi" class="form-check-label">UPI</label>
                </div>
                <br>
                <input type="submit" name="pay_now" value="Pay Now" class="btn btn-primary">
            </form>
        <?php } else if(isset($otp) && $os == 'Not Paid') { ?>
            <p>Total Payment: Rs. <?php echo $otp; ?></p>
            <form action="payment_processing.php" method="POST">
                <div class="form-check d-flex justify-content-center">
                    <input type="radio" name="payment_method" value="cash-on-delivery" class="form-check-input ml-3" id="cod" required> 
                    <label for="cod" class="form-check-label">Cash On Delivery (COD)</label>
                </div>
                <div class="form-check d-flex justify-content-center">
                    <input type="radio" name="payment_method" value="upi" class="form-check-input ml-3" id="upi" disabled> 
                    <label for="upi" class="form-check-label">UPI</label>
                </div>
                <br>
                <input type="submit" name="pay_now" value="Pay Now" class="btn btn-primary">
            </form>
        <?php } else { ?>
            <p>You don't have any orders</p>
        <?php } ?>
    </div>
</section>
<?php include('./layouts/footer.php'); ?>