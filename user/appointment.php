<?php session_start();
  include("dbh.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bookCSS.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <title>booking bb</title>
  </head>
  <body>
    <header>
      <div class="firstHeader">
        <a href="#">Log Out</a>
        <p id="userdetails"> Welcome
          <?php
            echo $_SESSION['email'];
            $user = $_SESSION['email'];
          ?>  </p>
      </div>
      <div class="secondHeader">
        <span id="userIcon" style="float:left;font-size: medium; color: #26567e;">
          <i class="fas fa-user-circle fa-3x"></i>
        </span>
        <p style="font-family: 'Font Awesome 5 Free';">Blue Bird Hotel and Restaurant</p>
      </div>
    </header>
    <main>
      <?php print_r($_SESSION); ?>
      <aside class="aside">
        <div class="topnav">
          <div class="account">
             <p><i class="fas fa-cog"></i> Account</p>
          </div>
          <ul>
            <li> <a href="#">home</a> </li>
            <li> <a href="userbooking.php" >reservastion section</a> </li>
            <li> <a href="#" class="active">appointment</a> </li>
            <li> <a href="writeMessage.php">write message</a> </li>
          </ul>
        </div>
        <div class="roomrates">
          <div class="account">
             <p><i class="fas fa-bed"></i> room rates</p>
          </div>
          <div class="rates">
            <ul>
              <li> <p><strong>single</strong> PHP $50 per day</p> </li>
              <li> <p><strong>double</strong> PHP $80 per day</p> </li>
              <li> <p><strong>twin</strong> PHP $150 per day</p> </li>
              <li> <p><strong>deluxe</strong> PHP $200 per day</p> </li>
            </ul>
          </div>
        </div>
      </aside>
      <div class="maincontent">
        <div class="modal" id="simpleModal">
          <div class="modal-content">
            <div class="modal-header">
              <h3>Message</h3>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to cancel your appointment?</p>
            </div>
            <div class="modal-footer">
              <a href="cancelation.php" id="linkdel"><button id="yesbtn" class="yesbutton" type="button" name="button">YES</button></a>
              <button id="nobtn" type="button" name="button">NO</button>

            </div>
          </div>
        </div>
        <div class="account tall">
           <p><i class="far fa-check-square"></i> reserved room</p>
        </div>
        <div class="table heading">
          <ul>
            <!-- <li>First Name</li>
            <li>Last Name</li> -->
            <li>Email</li>
            <li>Phone</li>
            <li>Bed Type</li>
            <li>Check In</li>
            <li>Check Out</li>
            <li>Payment</li>
            <li>No. of Days</li>
          </ul>
        </div>
        <div>
          <?php
            $sql = "SELECT * FROM reservation WHERE email like '$user' ORDER BY id DESC LIMIT 2";
            $results = mysqli_query($con, $sql);
            $id0 = $_SESSION['id0'];
            $id1 = $_SESSION['id1'];

            if (mysqli_num_rows($results) > 0) {
              $n = 0;

                while ($row = mysqli_fetch_assoc($results)) {
                  echo '<div class="table"><ul>';
                  // <li>'.$row['firstname']."</li>"
                  // echo"<li>".$row['lastname']."</li>";
                  echo"<li>".$row['email']."</li>";
                  echo"<li>".$row['phone']."</li>";
                  // echo'<li class="bedlink">'.$row['email'].'</li>';
                  echo"<li>".$row['roomtype']."</li>";
                  echo"<li>".$row['indate']."</li>";
                  echo"<li>".$row['outdate']."</li>";
                  echo"<li> $".$row['price']."</li>";
                  echo"<li> ".$row['days']."days</li></ul></div>";
                  echo'<div class="btns"><a href="client_update.php?no='.$n.'" style="text-decoration:none;"> <button class="blue">Update</button> </a>';
                  echo'<button type="button" class="red">Delete</button></div>';
                  echo'<script type="text/javascript">
                  var bttn = document.getElementsByClassName("red")[0];
                  var bttn1 = document.getElementsByClassName("red")[1];
                  var modal = document.getElementById("simpleModal");
                  var nobtn = document.getElementById("nobtn");
                  var yesbtn = document.getElementById("yesbtn");
                  var linkdel = document.getElementById("linkdel");

                  bttn.onclick = btnClicked;
                  try{
                    bttn1.onclick = function(){
                      modal.style.display = "block";
                      linkdel.attributes.href.value = "cancelation.php?no=1";
                    };
                  }
                  catch(err){

                  }

                  function btnClicked(){
                      modal.style.display = "block";
                      linkdel.attributes.href.value = "cancelation.php?no=0";
                    };
                  nobtn.onclick = function(){
                    modal.style.display = "none";
                  };
                  modal.onclick = function(e){
                    if(e.target == modal){
                      modal.style.display = "none";
                    }
                  };

                  </script>';
                  // echo'<button type="button" class="red"> del</button></div>';
                  // $_SESSION['id'.$n]= $n;
                  $_SESSION['id'.$n]= $row['id'];
                  echo $_SESSION['id'.$n];
                  // $_SESSION[$n] = $row['id'];
                  // echo $_SESSION[$n];
                  $n++;
                }
            }else {
              echo '<p class="noreserves">There are no Reservations.</p>';
            }

            echo $_SESSION['id'](0);

           ?>
        </div>
      </div>
    </main>
    <footer>
        <p>All copyights reserved &copy;2019 <br></p>
        <p>Designed  by |  Hope4Living Co.<br></p>
    </footer>
  </body>
</html>
