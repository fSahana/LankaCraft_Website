<?php

session_start();

require_once("../connection/connection.php");  

$WName = $_POST["WName"];
$WPrice = $_POST["WPrice"];
$Wdesc = $_POST["Wdesc"];


$target_dir = "../Common/img/";                  //after file upload where should the file go
$target_file =  $target_dir.basename($_FILES["WImg"]["name"]);      
$image = basename($_FILES["WImg"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$SQL_Add_Workshop = "INSERT INTO product(WName, WPrice, WImg, Wdesc) VALUES ('$WName','$WPrice','$image','$Wdesc' )";
                                                                                                                        //$PrdImg -> $target_file


//upload file


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["WImg"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["WImg"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["WImg"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["WImg"]["name"])). " has been uploaded.";

    if (mysqli_query($conn, $SQL_Add_Workshop)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $SQL_Add_Workshop . "<br>" . mysqli_error($conn);
      }


  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


  mysqli_close($conn);

?>