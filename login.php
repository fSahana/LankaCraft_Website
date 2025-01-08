<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LankaCraft Login Page</title>
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
                                <!-- <li><button type="button" class="btn btn-primary btn-sm"><a href="index.php"><i class="fa fa-home"> Home</i></a></button></li> -->
                                <li><button type="button" class="btn btn-sm btn-outline-primary"><a href="SignUp.php"><i class="fas fa-user-plus"> Sign Up</i></a></button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <form action="handler/handlerUserLogin.php" method="post">
                <div class="login-body container-fluid">
                    
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-7">
                                    <div class="login-text">
                                        <h4>Login to Store</h4>
                                        
                                        <input type="text" placeholder="Enter Phone Number" name="phone" class="form-control " required>
                                        
                                        <input type="password" placeholder="Enter Password" name="password1" class="form-control" required>
                                       
                                        
                                         <button class="btn btn-primary">Sign In</button>
                                         <p>Dont have an account <a href="SignUp.php">Sign Up!</a></p>
                                        
                                    </div>
                                </div>
                               
                                </div>
                            </div>
                            
                        </div>
                   
                    </div>
            </div>
            </form>
    </body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
