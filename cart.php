<?php
session_start();
require_once("connection/connection.php");

echo $phone = $_SESSION["phone"];
$SQL = "SELECT * FROM user WHERE UPhoneNumber =$phone";
$phone = $_SESSION["phone"];

// $SQL_SELECT_ALL_CART = "SELECT * FROM cart WHERE UPhoneNumber =$phone";
$SQL_SELECT_ALL_CART = "SELECT * FROM cart ";

$result_ALL_CART = mysqli_query($conn, $SQL_SELECT_ALL_CART);
// Grand total variable
$G_Total = 0;

// Update Query for product quantity 
    if(isset($_POST['update_update_btn'])){
        $update_value = $_POST['update_quantity'];
        $update_id = $_POST['update_quantity_id'];
        $SQL_QUANTITY_UPDATE = mysqli_query($conn, "UPDATE cart SET quantity = '$update_value' WHERE CID = '$update_id'");
        if($SQL_QUANTITY_UPDATE){
        header('location:cart.php');
        };
    };
    
    if(isset($_GET['remove'])){
        $remove_id = $_GET['remove'];
        mysqli_query($conn, "DELETE FROM cart WHERE CID = '$remove_id'");
        header('location:cart.php');
    };
    
   
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
    <link rel="stylesheet" type="text/css" href="css/cart.css">
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

   
    
    <!-- Cart Table -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                <?php
if(mysqli_num_rows($result_ALL_CART)>0){

    echo "<thead class='bg-secondary text-dark'>
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class='align-middle'>
    ";
    // not inserting above tableheads is because inside while loop, it will loop for every products.

    
     // output data of each row    
    while($row_SQL_SELECT_ALL_ORDERS = mysqli_fetch_assoc($result_ALL_CART)){
        ?>
        <tr>
                            <td class="align-middle"><img src="Common/img/<?php echo $row_SQL_SELECT_ALL_ORDERS['image']; ?>" alt="" style="width: 50px;"><?php echo $row_SQL_SELECT_ALL_ORDERS['name']; ?></td>
                            <td class="align-middle"><?php echo number_format($row_SQL_SELECT_ALL_ORDERS['price']); ?>LKR</td>
                            <td class="align-middle">
                                <form action="" method="post">
                                    <input type="hidden" name="update_quantity_id"  value="<?php echo $row_SQL_SELECT_ALL_ORDERS['CID']; ?>" >
                                    <input type="number" name="update_quantity" min="1"  value="<?php echo $row_SQL_SELECT_ALL_ORDERS['quantity']; ?>" >
                                    <input type="submit" value="update" name="update_update_btn" class="btn btn-warning cart-btn" >
                                </form>   
                                    <!-- <button class="btn btn-outline-secondary btn-sm quantity-btn" onclick="updateQuantity(-1)">-</button>
                                    <input type="text" value="1" class="quantity-input text-center" readonly>
                                    <button class="btn btn-outline-secondary btn-sm quantity-btn" onclick="updateQuantity(1)">+</button>
                                    </div> -->
                            </td>
                            
                            <td class="align-middle"><?php echo $sub_total = number_format($row_SQL_SELECT_ALL_ORDERS['price'] * $row_SQL_SELECT_ALL_ORDERS['quantity']); ?>LKR</td>
                            <!-- <td class="align-middle"><button class="btn btn-sm btn-dark">X</button></td> -->
                            <td class="align-middle"><a href="cart.php?remove=<?php echo $row_SQL_SELECT_ALL_ORDERS['CID']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn">X</a></td>
                        </tr>

    <?php
    $G_Total = $G_Total + ($row_SQL_SELECT_ALL_ORDERS['price'] * $row_SQL_SELECT_ALL_ORDERS['quantity']); 
    }
 }else {
    echo "Cart is empty!!!";
 }

?>
                     
                    </tbody>
                </table>
            </div>

            <!-- Display the Total only if the total is greater than 0 -->
            <?php
            if($G_Total>0){
                echo"<div class='col-lg-4'>
                
                <div class='card border-secondary mb-5'>
                    <div class='card-header border-0' >
                        <h4 class='font-weight-semi-bold m-0'>Cart Summary</h4>
                    </div>
                    <div class='card-body'>
                        <div class='d-flex justify-content-between mb-3 pt-1'>
                            <h6 class='font-weight-medium'>Subtotal</h6>
                            <h6 class='font-weight-medium'>$G_Total LKR</h6>
                        </div>
                    </div>
                    <div class='card-footer border-secondary bg-transparent'>
                        <div class='d-flex justify-content-between mt-2'>
                            <h5 class='font-weight-bold'>Total</h5>
                            <h5 class='font-weight-bold'>$G_Total LKR</h5>
                        </div>
                        <a href='checkout.php'><button class='btn btn-block btn-primary my-3 py-3'>Proceed To Checkout</button></a>
                    </div>
                </div>
            </div>";
            
            }
            ?>

            

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