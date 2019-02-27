<?php
session_start();
include("dbh.php");

  // $fname = $_POST['fname'];
  // $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $roomtype = $_POST['roomtype'];
  $indate = $_POST['indate'];
  $outdate = $_POST['outdate'];
  $days = $_POST['days'];
  $price = "";
  $useremail = $_SESSION['email'];
  $user_id = $_SESSION['id'];

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

  // $password = sha1($password);
  $q = "SELECT * FROM reservation WHERE email like '$useremail'";

   $Sql_Query = "INSERT INTO reservation (email, phone, roomtype, indate, outdate, days, price, user_id)
   VALUES ('$email', '$phone', '$roomtype', '$indate', '$outdate', '$days', '$price', '$user_id')";

   $result = mysqli_query($con, $q);

   if(mysqli_num_rows($result) > 1) {

     header("Location: http://localhost:8080/bbe/user/userbooking.php?error=1");
     return false;

   }
   else {
   echo "oops sorry.";
 }


   if(mysqli_query($con, $Sql_Query)){
     // echo 'Data Inserted Successfully';
     header("Location: http://localhost:8080/bbe/user/userbooking.php?message=1");
     exit();
   }
   else{
     echo 'Try Again later';
   }


   //       echo "try again.";
   // }
  mysqli_close($con);
?>
