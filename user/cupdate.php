<?php
include('dbh.php');
session_start();

print_r($_SESSION);

$idy = $_SESSION['id0'];
$idz = $_SESSION['id1'];
$phone = $_POST['phone'];
$roomtype = $_POST['roomtype'];
$indate = $_POST['indate'];
$outdate = $_POST['outdate'];
$days = $_POST['days'];
$price = "";

    if ($roomtype === "Single") {
      $price = $days*50;
    }elseif ($roomtype === "Double") {
      $price = $days*80;
    }elseif ($roomtype === "Twin") {
        $price = $days*150;
    }elseif($roomtype === "Deluxe") {
      $price = $days*200;
    }else {
      return false;
    }

if ($_SESSION['number'] == 0){

  $q = "UPDATE reservation
        SET phone='$phone', roomtype='$roomtype', indate='$indate', outdate='$outdate', days='$days', price='$price'
        WHERE id='$idy'";

  $results = mysqli_query($con, $q);
    if ($results) {

      header("Location: http://localhost:8080/bbe/user/appointment.php?edit=1");
      exit();
      
    }else {
      echo "try again.......";
    }

}
elseif ($_SESSION['number'] == 1){

  $q = "UPDATE reservation
        SET phone='$phone', roomtype='$roomtype', indate='$indate', outdate='$outdate', days='$days', price='$price'
        WHERE id='$idz'";

  $results = mysqli_query($con, $q);
    if ($results) {

      header("Location: http://localhost:8080/bbe/user/appointment.php?edit=1");
      exit();

    }else {
      echo "try again.......1";
    }

}

else{
  return false;
}




?>
