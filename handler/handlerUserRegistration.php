<?php
// MySQLi Procedural
//opening the connection
require_once("../connection/connection.php");     

$fname = $_POST["fname"];    //initializibg variable to the signup page form names(name="")
$lname = $_POST["lname"];
$Number = $_POST["Number"];
$password = $_POST["password"];


// check if number is already exist
$sql = "SELECT * FROM user WHERE UPhoneNumber = '$Number'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
  echo "<script>alert('Phone Number Already In Use'); window.setTimeout(function(){ window.location.href = '../index.php'; }, );</script>";

  exit;
}

else{
  // insert data
  $sql = "INSERT INTO user (UPhoneNumber,FirstName,LastName,UPassword) VALUES ('$Number','$fname','$lname','$password')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Account CREATED!! Please Login'); window.setTimeout(function(){ window.location.href = '../login.php'; }, );</script>";
    exit;

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}


  mysqli_close($conn);  //closing the connection

?>