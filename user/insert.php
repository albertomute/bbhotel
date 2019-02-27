<?php
include("dbh.php");

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['mail'];
  $password = $_POST['password'];

  // $password = sha1($password);

  if($con){
      $q = "select * from users where email like '$email'";

      $result = mysqli_query($con, $q);

          if(mysqli_num_rows($result) > 0){

            header("location:http://localhost:8080/bbe/user/signup.php?warning=1");

          }else {

            $Sql_Query = "INSERT INTO users (firstname, lastname, email, password)
            VALUES ('$fname', '$lname', '$email', '$password')";

            if(mysqli_query($con,$Sql_Query)){

             // echo 'Data Inserted Successfully';
             header("Location: http://localhost:8080/bbe/user/signup.php?response=1");
             exit();
            }
            else{

              echo 'Try Again';

            }
          }
        }else{
          echo "not connected.";
        }
  mysqli_close($con);
?>
