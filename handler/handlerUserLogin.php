<?php
//opening the connection
require_once("../connection/connection.php");  


$phone = $_POST["phone"];
$password = $_POST["password1"];


//fetch user data
$sql = "SELECT * FROM user WHERE UPhoneNumber = '$phone'";
$result = mysqli_query($conn, $sql);
// writing the sql queries to that created table user table in xamp 

if (mysqli_num_rows($result)>0) {
    $row = mysqli_fetch_assoc($result);
    $hashedPassword = $row["UPassword"];
    
    // verify password
    if($hashedPassword == $password){
        session_start();
        $_SESSION["phone"] = $phone;
        echo "<script>alert('Login Success'); window.setTimeout(function(){ window.location.href = '../index.php'; }, );</script>";

        exit;
    } else{
        echo "<script>alert('Incorrect Password'); window.setTimeout(function(){ window.location.href = '../login.php'; }, );</script>";
        exit;
    }
    
  } else {
    echo "<script>alert('User Not Found'); window.setTimeout(function(){ window.location.href = '../SignUp.php'; }, );</script>";
    exit;
  }
  
  mysqli_close($conn);  //closing the connection


?>