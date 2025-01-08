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

<body style="background-color: #edfbfc;">
    
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

  
  <!-- Contact Us -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <p class="text-start mb-4"><strong>FILL IN THE FORM TO GET MORE DETAILS</strong></p>
        <form action="#" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Your name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your e-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Your message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-info">SUBMIT</button>
          </div>
          <div class="mt-3"></div>
        </form>
      </div>
    </div>
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