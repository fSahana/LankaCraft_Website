<?php
session_start();
require_once("connection/connection.php");
?>


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
                            <li><a class="dropdown-item" href="clothing.php">CLOTHING</a></li>
                            <li><a class="dropdown-item" href="accessories.php">ACCESSORIES</a></li>
                            <li><a class="dropdown-item" href="Acraft.php">ARTISANAL CRAFTS</a></li>
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

    <!-- Workshop Section -->
<section class="workshop-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Workshops</h2>
        <!-- Row 1 -->
        <div class="row g-4">

         <!-- Workshop Card -->
          <!-- Workshop 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="card workshop-card">
                <img src="images/WorksshopMaskMaking.jpeg" class="card-img-top img-fluid sm-4" alt="Workshop Image" />
                    <div class="card-body">
                        <h5 class="card-title">Traditional Mask Making Workshop</h5>
                        <p class="card-text">Learn to craft and paint intricate Sri Lankan traditional masks.</p>
                        <p class="date">Date: 2025-02-23</p>
                        <p class="price">Fee: 2,700LKR</p>
                        <a href="SignUp.php"><button class="btn btn-danger register-btn">Register Now</button></a>
                    </div>
                </div>
            </div>

            <!-- Workshop 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="card workshop-card">
                <img src="images/Batik_Workshop.jpg" class="card-img-top img-fluid sm-4" alt="Workshop Image" />
                    <div class="card-body">
                        <h5 class="card-title">Batik Workshop</h5>
                        <p class="card-text">Discover the traditional art of batik fabric dyeing and pattern creation.</p>
                        <p class="date">Date: 2025-01-13</p>
                        <p class="price">Fee: 3,000LKR</p>
                        <a href="SignUp.php"><button class="btn btn-danger register-btn">Register Now</button></a>
                    </div>
                </div>
            </div>

            <!-- Workshop 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="card workshop-card">
                <img src="images/WorkshopWoodCarving.jpg" class="card-img-top img-fluid sm-4" alt="Workshop Image" />
                    <div class="card-body">
                        <h5 class="card-title">Wood Carving Workshop</h5>
                        <p class="card-text">Learn the intricate art of carving wood into beautiful designs.</p>
                        <p class="date">Date: 2025-02-09</p>
                        <p class="price">Fee: 3,500LKR</p>
                        <a href="SignUp.php"><button class="btn btn-danger register-btn">Register Now</button></a>
                    </div>
                </div>
            </div>

            <!-- Workshop 4 -->
            <div class="col-md-4 col-sm-6">
                <div class="card workshop-card">
                <img src="images/gallery10.jpeg" class="card-img-top img-fluid sm-4" alt="Workshop Image" />
                    <div class="card-body">
                        <h5 class="card-title">Traditional Weaving Workshop</h5>
                        <p class="card-text">Master the techniques of weaving using traditional tools.</p>
                        <p class="date">Date: 2025-02-19</p>
                        <p class="price">Fee: 2,800LKR</p>
                        <a href="SignUp.php"><button class="btn btn-danger register-btn">Register Now</button></a>
                    </div>
                </div>
            </div>

            <!-- Workshop 5 -->
            <div class="col-md-4 col-sm-6">
                <div class="card workshop-card">
                <img src="images/Painting_Workshop.jpg" class="card-img-top img-fluid sm-4" alt="Workshop Image" />
                    <div class="card-body">
                        <h5 class="card-title">Painting and Art Workshop</h5>
                        <p class="card-text"></p>
                        <p class="date">Date: 2025-01-25</p>
                        <p class="price">Fee: 3,000LKR</p>
                        <a href="SignUp.php"><button class="btn btn-danger register-btn">Register Now</button></a>
                    </div>
                </div>
            </div>

            <!-- Workshop 6 -->
            <div class="col-md-4 col-sm-6">
                <div class="card workshop-card">
                <img src="images/Candle_Workshop.jpeg" class="card-img-top img-fluid sm-4" alt="Workshop Image" />
                    <div class="card-body">
                        <h5 class="card-title">Candle Making Workshop</h5>
                        <p class="card-text">Create unique and decorative candles with professional guidance.</p>
                        <p class="date">Date: 2025-02-08</p>
                        <p class="price">Fee: 1,800LKR</p>
                        <a href="SignUp.php"><button class="btn btn-danger register-btn">Register Now</button></a>
                    </div>
                </div>
            </div>
                      
        </div>
    </div>
</section>


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