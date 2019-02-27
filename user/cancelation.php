<?php
session_start();
include("dbh.php");
$id = $_SESSION['id'];

if ($_GET['no'] == 0) {
  $query = "DELETE FROM reservation WHERE user_id like '$id' ORDER BY id DESC LIMIT 1";
  $result = mysqli_query($con, $query);

  header("Location: http://localhost:8080/bbe/user/appointment.php");

}else{
  $query = "DELETE FROM reservation WHERE user_id like '$id' ORDER BY id ASC LIMIT 1";
  $result = mysqli_query($con,$query);

      header("Location: http://localhost:8080/bbe/user/appointment.php");

}


?>
