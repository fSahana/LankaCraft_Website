<?php

session_start();
require_once("../connection/connection.php");  
    

// Get form data

$l_name = $_POST["LastName"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$cardno = $_POST["cardno"];



$sql = "INSERT INTO uorder (UPhoneNumber,LastName,OrAddress,cardno ) 
VALUES ('$phone','$l_name','$address', '$cardno')";


if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Payment Success!!'); window.setTimeout(function(){ window.location.href = '../hdecor.php'; }, );</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  


  mysqli_close($conn);  //closing the connection

?>