<?php include('./layouts/header.php')?>
<section id="home" class="bg-light py-5">
    <div class="container">
        <div class="text-center">
            <h3>New Arrivals</h3>
            <h1><span class="text-warning">Best Prices</span> This Season</h1>
            <p>Eshop offers the best products for the most affordable prices!</p>
            <a href="shop.php"><button class="btn btn-primary">Shop Now</button></a>
        </div>
    </div>
</section>

<section id="brand" class="container mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <img src="./assets/brand1.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <img src="./assets/brand2.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <img src="./assets/brand3.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
            <img src="./assets/puma.jpg" alt="" height="298px" width="550px">
        </div>
    </div>
</section>

<section id="featured" class="container py-5">
    <div class="text-center mb-5">
        <h2>Our Featured</h2>
    </div>
    <div class="row">
        <?php
        include('./server/get_product.php');
        ?>
        <?php
        while($r=$f_product->fetch_assoc()){
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="./assets/<?php echo $r['product_image'];?>" alt="" class="card-img-top">
                <div class="card-body">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="card-title"><?php echo $r['product_name'];?></h5>
                    <h4 class="card-text">Rs.<?php echo $r['product_price'];?></h4>
                    <a href="<?php echo 'single.php?product_id='.$r['product_id']?>" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</section>

<section id="banner" class="container py-5">
    <div class="text-center">
        <h2 class="mb-4">MID SEASON'S SALE</h2>
        <h1 class="mb-4 text-danger">Autumn Collection up to 30% off</h1>
        <button class="btn btn-primary btn-lg rounded">Shop Now</button>
    </div>
</section>


<section id="cloths" class="container py-5">
    <div class="text-center">
        <h2>Dresses & Coats</h2>
        <br>
        <p>Here you can check out amazing clothes</p>
    </div>
    <div class="row">
        <?php include('./server/get_coats.php');?>
        <?php while($r=$c_product->fetch_assoc()){?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="./assets/<?php echo $r['product_image'];?>" alt="" class="card-img-top">
                <div class="card-body">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="card-title"><?php echo $r['product_name'];?></h5>
                    <h4 class="card-text">Rs.<?php echo $r['product_price'];?></h4>
                    <a href="<?php echo 'single.php?product_id='.$r['product_id']?>" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</section>
<section id="shoes" class="container py-5">
    <div class="text-center">
        <h2>Shoes</h2>
        <br>
        <p>Here you can check out amazing shoes</p>
    </div>
    <div class="row">
        <?php include('./server/get_shoes.php');?>
        <?php while($r=$s_product->fetch_assoc()){?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="./assets/<?php echo $r['product_image'];?>" alt="" class="card-img-top">
                <div class="card-body">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="card-title"><?php echo $r['product_name'];?></h5>
                    <h4 class="card-text">Rs.<?php echo $r['product_price'];?></h4>
                    <a href="<?php echo 'single.php?product_id='.$r['product_id']?>" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</section>

<section id="watches" class="container py-5">
    <div class="text-center">
        <h2>Watches</h2>
        <br>
        <p>Here you can check out amazing watches</p>
    </div>
    <div class="row">
        <?php include('./server/get_watches.php');?>
        <?php while($r=$w_product->fetch_assoc()){?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="./assets/<?php echo $r['product_image'];?>" alt="" class="card-img-top">
                <div class="card-body">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="card-title"><?php echo $r['product_name'];?></h5>
                    <h4 class="card-text"><?php echo $r['product_price'];?></h4>
                    <a href="<?php echo 'single.php?product_id='.$r['product_id']?>" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</section>

<?php include('./layouts/footer.php');?>