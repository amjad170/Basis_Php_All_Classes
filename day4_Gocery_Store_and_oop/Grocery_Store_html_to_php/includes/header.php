<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <header class="header">

        <a href="index.php" class="logo"> <i class="fas fa-shopping-cart"></i> Grocery </a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="banner.php">banner</a>
            <a href="product.php">product</a>
            <a href="about.php">about</a>
            <a href="review.php">review</a>
            <a href="blog.php">blog</a>
            <a href="contact.php">contact</a>
        </nav>

        <div class="icons">
            <div id="cart-btn" class="fas fa-shopping-basket"></div>
            <div id="login-btn" class="fas fa-user"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

        <!-- shopping cart -->

        <div class="shopping-cart">

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="images/cart1.jpg" alt="">
                <div class="content">
                    <h3>side dish</h3>
                    <span class="price">$14.99</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="images/cart2.jpg" alt="">
                <div class="content">
                    <h3>side dish</h3>
                    <span class="price">$15.99</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="images/cart3.png" alt="">
                <div class="content">
                    <h3>side dish</h3>
                    <span class="price">$14.99</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="images/cart4.jpg" alt="">
                <div class="content">
                    <h3>side dish</h3>
                    <span class="price">$18.99</span>
                </div>
            </div>
            <h3 class="total"> total: <span> $56.89</span></h3>
            <a href="#" class="btn">checkout</a>
        </div>

        <!-- end -->

        <!-- login -->

        <form action="" class="login-form">

            <h3>login form</h3>

            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">

            <div class="remember">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
            </div>
            <a href="#" class="btn"> login </a>

        </form>

    </header>