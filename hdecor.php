<?php
session_start();
require_once("connection/connection.php");
echo $phone = $_SESSION["phone"];
$SQL = "SELECT * FROM user WHERE UPhoneNumber =$phone";
$phone = $_SESSION["phone"];


$SQL_SELECT_ALL_PRODUCTS = "SELECT * FROM product ";


$result = mysqli_query($conn, $SQL_SELECT_ALL_PRODUCTS);

if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;

    // To check whether the same products are already added to card
    $select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE name = '$product_name'");
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'product already added to cart';
           //    echo "<script>alert('Product already added to cart.')";
       
    }else{
    
        // Insert product data into the cart 
       $insert_product = mysqli_query($conn, "INSERT INTO cart(name, price, image, quantity, UPhoneNumber) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity' , '$phone')");
       $message[] = 'product added to cart succesfully';
        // echo "<script>alert('Product added to cart succesfully.')";
    }
 
 }
 
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


    <?php
 
if(isset($message)){
    foreach($message as $message){
        echo "<div class='message'><span>$message</span> 
        </div";
    };
 }; 


?>

    <!-- Products -->
    <section class="product-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Home Decor</h2>
            <!-- Row 1 -->
            <div class="row g-4">

            <?php 
            
            if(mysqli_num_rows($result)>0){
                // output data of each row
                while($row = mysqli_fetch_assoc($result)){

                $productID = $row["PrdID"];
                $phone = $_SESSION["phone"];
                
                
            ?>
                <!-- Product Card -->
                <div class="col-md-4 col-sm-6">
                <form action="" method="POST" style="display:inline;">
                    <div class="card product-card">
                    <img src="Common/img/<?php echo $row['PrdImg']; ?>" class="card-img-top img-fluid sm-4" alt="ProductImage" />
                    <div class="card-body">
                            <h5 class="card-title"><?php echo $row['PrdName']; ?></h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="price"><?php echo $row['PrdPrice']; ?> LKR</p>
                                
                                    <input type="hidden" name="productID" value="<?php echo $productID; ?>">
                                    <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                                    <input type="hidden" name="product_name" value="<?php echo $row['PrdName']; ?>">
                                    <input type="hidden" name="product_price" value="<?php echo $row['PrdPrice']; ?>">
                                    <input type="hidden" name="product_image" value="<?php echo $row['PrdImg']; ?>">
                                    <input type="submit" value="Add to Cart" name="add_to_cart" class="btn btn-warning cart-btn">
                                
                                
                            </div>
                            
                        </div>
                    </div>
                    </form>
                </div>
                

            <?php
                  }
                }else{
                    echo "No Products";
                }
               
            ?>
    
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
                <li><a href="#">Clothing</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Artisanal Crafts</a></li>
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