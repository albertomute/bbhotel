<?php
include("dbh.php");

$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO messages (email, content) VALUES ('$email', '$message')";


  if(mysqli_query($con,$query)){

   // echo 'Data Inserted Successfully';
   header("Location: http://localhost:8080/bbe/user/writeMessage.php?response=1");
   exit();
  }
  else{

    echo 'Not connected.';

  }


 ?>
