<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Range</title>
</head>
<body>
<div class="bar">
    <div class="logo">
        <img src="" alt="">
        <p>Range</p>
    </div>
    <div class="phone-link" id="ph">
        <ul class="link">
            <li class="links"><a href="../index.php">Home</a></li>
            <li class="links"><a href="../aboutus.php">About</a></li>
            <li class="links"><a href="../shop.php">Shop</a></li>
            <li class="links"><a href="../cart.php"><i class="bi bi-cart3"></i></a></li>
            <li class="links"><a href="../login.php"><i class="bi bi-person"></i></a></li>
            <i class="bi bi-x-lg" id="close"></i>
        </ul>
    </div>
    <i class="bi bi-list" id="menu"></i>
</div>
<script>
    let closeButton = document.getElementById('close');
let phoneLink = document.getElementById('ph');
let menuButton = document.getElementById('menu');

closeButton.addEventListener('click', () => {
    phoneLink.style.left = '-100%'; // Move offscreen
});

menuButton.addEventListener('click', () => {
    phoneLink.style.left = '0'; // Move onscreen
});

</script>