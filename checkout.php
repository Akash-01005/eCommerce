<?php
session_start();
if(!empty($_SESSION['cart'])&& isset($_POST['checkout'])){
       
}
else{
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top bg-light py-2 shadow">
        <div class="container">
           <div>
            <img src="./assets/logo.jpg" alt="">
            <a class="navbar-brand" href="#">Navbar</a>
           </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-btns" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <i class="fa-solid fa-shopping-cart"></i>
                <i class="fa-solid fa-user"></i>
              </li>
            <ul>
          </div>
        </div>
    </nav>
      
    <section class="my-1 py-1">
        <div class="container text-center mt-3 pt-5">
                <h1>Check Out</h1>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form action="./server/place_order.php" method="POST" id="checkout-form">
                <div class="form-group checkout-sm-ele">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                   </div>
               <div class="form-group checkout-sm-ele">
                <label for="">Email</label>
                <input type="email" class="form-control" id="checkout-email" name="email" placeholder="Email" required>
               </div>
               <div class="form-group checkout-sm-ele">
                <label for="">Phone</label>
                <input type="tel" class="form-control" id="checkout-password" name="phone" placeholder="Password" required>
               </div>
               <div class="form-group checkout-sm-ele">
                <label for="">City</label>
                <input type="text" class="form-control" id="checkout-city" name="city" placeholder="Confirm Password" required>
               </div>
               <div class="form-group checkout-lg-ele">
                <label for="">Address</label>
                <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Email" required>
               </div>
               <div class="form-group checkout-btn-container">
                <p>
                  Total amount:Rs.<?php echo $_SESSION['total'];?>
                </p>
                <input type="submit" class="btn" id="checkout-btn" value="place order" name="place_order">
               </div>
            </form>
        </div>
      </section>
 

      <footer class="mt-5 p-3">
        <div class="row container mx-auto">
           <div class="col-lg-3 col-md-6 col-sm-12">
              <img src="./assets/logo.jpg" alt="">
              <p class="pt-3 text">We provide the best product for the most affordable prices</p>
           </div>
           <div class="footer-one col-lg-3 col-md-6 col-sm-12">
             <h5 class="pb-2">Featured</h5>
             <ul class="">
               <li><a href="">Men</a></li>
               <li><a href="">Women</a></li>
               <li><a href="">Boys</a></li>
               <li><a href="">Girls</a></li>
               <li><a href="">New Arrivals</a></li>
               <li><a href="">Clothes</a></li>
             </ul>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
           <div class="pb-2 text">Contact Us</div>
           <div>
             <h6>Address</h6>
             <p class="text">kamarajar Nagar,Tenkasi.</p>
           </div>
           <div>
             <h6>Phone</h6>
             <p class="text">+91 044-562-2244</p>
           </div>
           <div>
             <h6>Email</h6>
             <p class="text">info@support.com</p>
           </div>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
             <h5 class="pb-2">Instagram</h5>
             <div class="row">
               <img src="./assets/footer1.jpg" alt="" class="img-fluid w-25 h-100 m-2">
               <img src="./assets/footer2.jpg" alt="" class="img-fluid w-25 h-100 m-2">
               <img src="./assets/footer3.jpg" alt="" class="img-fluid w-25 h-100 m-2">
               <img src="./assets/footer4.jpg" alt="" class="img-fluid w-25 h-100 m-2">
               <img src="./assets/footer5.jpg" alt="" class="img-fluid w-25 h-100 m-2">
             </div>
          </div>
        </div>
        <div class="copyright mt-5">
          <div class="row container mx-auto">
           <div class="col-lg-3 col-md-6 col-sm-12">
             <img src="./assets/pay.jpg" alt="">
           </div>
           <div class="col-lg-3 col-md-6 col-sm-12 text-nowrap mb-4 me-4">
             <p class="text">eCommerce &copy; 2024 All Right Reserved</p>
           </div>
           <div class="col-lg-3 col-md-6 col-sm-12">
             <a href="#"><i class="fab fa-facebook"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
           </div>
          </div>
        </div>
     </footer>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>