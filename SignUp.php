<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LankaCraft Register Page</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">

    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body class="form-login-body"> 
        <div class="container-fluid">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-9 sup">
                            <ul>
                                <li><button type="button" class="btn btn-sm btn-outline-primary"><a href="login.php"><i class="fas fa-user-plus">Sign In</i></a></button></li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>

            <form action="handler/handlerUserRegistration.php" method="post"> 
    <div class="login-body container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="login-text">
                        <h4>Sign Up</h4>
                        <input type="text" name="fname" placeholder="Enter First Name" class="form-control" required>
                        <input type="text" name="lname" placeholder="Enter Last Name" class="form-control" required>
                        <input type="text" name="Number" placeholder="Enter Phone Number" class="form-control" required>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                        <!-- Smaller Next Button -->
                        <button type="button" class="btn btn-secondary btn-sm mt-2" 
                                onclick="alert('Register to Workshop Successfully!!!')">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


        </div>
    </body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
