<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LankaCraft</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  

</head>

<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="LankaCraft Logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PRODUCTS 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="hdecor.php">HOME DECOR</a></li>
                            <li><a class="dropdown-item" href="skincare.php">SKINCARE</a></li>
                            <li><a class="dropdown-item" href="#">CLOTHING</a></li>
                            <li><a class="dropdown-item" href="#">ACCESSORIES</a></li>
                            <li><a class="dropdown-item" href="#">ARTISANAL CRAFTS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="workshop.php">WORKSHOPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">CART</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><button class="btn login-btn">Login /SignUp</button></a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slideshow -->
    <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="images/b1.jpg" style="width:100%">
          <div class="text"><h3>Discover the Art of Sri Lankan Craftsmanship</h3></div>
        </div>
        
        <div class="mySlides fade">
          <img src="images/b5.jpg" style="width:100%">
          <div class="text"><h3>Crafted with Passion, Delivered to You</h3></div>
        </div>
        
        <div class="mySlides fade">
          <img src="images/b3.jpg" style="width:100%">
          <div class="text"><h3>Unique Handmade Products & Book Craft Workshops</h3></div>
        </div>
        
    </div>
    <br>
        
    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>


<!-- Main Content Section -->
<div class="main-content">
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
            <h2>Discover Handmade Sri Lankan Treasures</h2>
            <p>At LankaCraft, we specialize in handcrafted products that showcase the rich heritage of Sri Lanka. From home décor to skincare, our items are crafted with care to bring you a touch of Sri Lankan artistry.</p>
        </div>
    </div>
   
    <br><br>
    <!-- Featured Products Section -->
    <section class="featured-products">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h2>Explore Our Collections</h2>
            </div>
        </div>
        <br>
        <div class="products">
            <div class="product">
                <img src="images/homehd.jpg" alt="Home Decor">
                <p>Discover beautifully handcrafted home décor items that bring a touch of Sri Lankan artistry to your space. From traditional to contemporary designs, our collection is perfect for every home.</p>
                <a href="hdecor.php" class="btn">Shop Now</a>
            </div>
            <div class="product">
                <img src="images/homeskn.jpeg" alt="Skincare Products">
                <p>Our organic skincare products are made with natural ingredients sourced from Sri Lanka, providing your skin with nourishment and care. Explore our range of soaps, creams, and oils.</p>
                <a href="skincare.php" class="btn">Shop Now</a>
            </div>
            <div class="product">
                <img src="images/homeclth.jpg" alt="Clothing">
                <p>Our clothing collection features stylish and comfortable garments that reflect the vibrant culture of Sri Lanka. From casual wear to traditional attire, find something that suits every occasion.</p>
                <a href="hdecor.php" class="btn">Shop Now</a>
            </div>
            <div class="product">
                <img src="images/homeacs.webp" alt="Accessories">
                <p>Complete your look with our handcrafted accessories. From jewelry to bags, each piece is made with attention to detail, showcasing the rich craftsmanship of Sri Lanka.</p>
                <a href="hdecor.php" class="btn">Shop Now</a>
            </div>
            <div class="product">
                <img src="images/homecrt2.jpg" alt="Artisanal Crafts">
                <p>Explore our unique collection of artisanal crafts that celebrate Sri Lanka’s rich heritage. Each item is handmade with care, offering a perfect blend of tradition and creativity.</p>
                <a href="hdecor.php" class="btn">Shop Now</a>
            </div>
        </div>
    </section>

    
    <!-- Workshops Section -->
    <section class="workshops text-center my-5">
        <div class="row">
            <div class="col-md-8 mx-auto text-start">
                <h2 class="text-danger">Join Our Workshops</h2>
                <p>Learn the art of handmade crafts with our expert workshops. Sign up today and be part of the creative process.</p>
                <a href="workshop.php" class="btn btn-danger">View Workshops</a>
            </div>
        </div>
    </section>

</div>


<!-- Footer Section -->
<footer class="footer">
    <div class="footer-content">
        <!-- Logo Section -->
        <div class="footer-logo">
            <img src="images/logo.png" alt="LankaCraft Logo">
        </div>

        <!-- Navigation Links Section -->
        <div class="footer-nav">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="workshop.php">Workshops</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>

        <!-- Product Categories Section -->
        <div class="footer-categories">
            <h3>Our Products</h3>
            <ul>
                <li><a href="hdecor.php">Home Decor</a></li>
                <li><a href="skincare.php">Skincare</a></li>
                <li><a href="clothing.php">Clothing</a></li>
                <li><a href="accessories.php">Accessories</a></li>
                <li><a href="Acraft.php">Artisanal Crafts</a></li>
            </ul>
        </div>

        <!-- Contact Info Section -->
        <div class="footer-contact">
            <h3>Contact Us</h3>
            <p>Email: kasunj114@gmail.com</p>
            <p>Phone: +94 7255 5555</p>
        </div>
    </div>

    <!-- Footer Bottom Section -->
    <div class="footer-bottom">
        <p>&copy; 2024 LankaCraft. All Rights Reserved.</p>
    </div>
</footer>



    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>