<?php
include("dbh.php");

  $email = $_POST['mail'];
  $pass = $_POST['password'];

if($con){
    $q = "select * from users where email like '$email' and password like '$pass'";

    $result = mysqli_query($con, $q);

        if(mysqli_num_rows($result) > 0){
           $row = $result->fetch_assoc();
          session_start();
          $_SESSION['email']= $row['email'];
          $_SESSION['id']= $row['id'];
          // $row = $result->fetch_assoc();
          // echo "name: " . $row['firstname'] . "<br>";
          header("Location: http://localhost:8080/bbe/user/userbooking.php");
          exit();
        }
        else {
          // echo json_encode(['error'=>true, 'message'=>'user does not exist']);
          header("Location: http://localhost:8080/bbe/user/signup.php?message=1");
        }
      }
else {
  echo "Not Connected..";
 }
?>
