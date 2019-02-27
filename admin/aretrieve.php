<?php
include("../user/dbh.php");

$admin = $_POST['admin'];
$pass = $_POST['pass'];

if ($con) {
      $q = "SELECT * FROM users WHERE email like '$admin' AND password like '$pass'";

      $result = mysqli_query($con,$q);

      if (mysqli_num_rows($result) > 0) {

        header("Location: http://localhost:8080/bbe/admin/adminhome.php");

      }else {

        header("Location: http://localhost:8080/bbe/admin/adminsignup.php?error=1");
        return false;

      }

}else {
  echo "not connected";
}



 ?>
