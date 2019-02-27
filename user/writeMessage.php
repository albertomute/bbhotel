<?php session_start(); ?>
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
          ?>  </p>
      </div>
      <div class="secondHeader">
        <span id="userIcon" style="float:left;font-size: medium; color: #26567e;">
          <!-- <i class="fas fa-user-circle fa-3x"></i> -->
        </span>
        <p style="font-family: 'Font Awesome 5 Free';">Blue Bird Hotel and Restaurant</p>
      </div>
    </header>
    <main>
      <aside class="aside">
        <div class="topnav">
          <div class="account">
             <p><i class="fas fa-cog"></i> Account</p>
          </div>
          <ul>
            <li> <a href="#">home</a> </li>
            <li> <a href="userbooking.php" >reservastion section</a> </li>
            <li> <a href="appointment.php">appointment</a> </li>
            <li> <a href="#" class="active">write message</a> </li>
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
        <div class="account tall">
           <p><i class="fas fa-envelope"></i> message us</p>
        </div>
        <div class="messagecontent">
          <p>If you have any concern and question kindly ask us.</p>
          <form class="messageform" action="message.php" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" autocomplete="off" placeholder="Your email" required>
            <label for="message">Message</label>
            <input type="text" id="message" name="message" autocomplete="off" placeholder="Your message here." required>
            <span>
              <input type="submit" name="submit" value="Send Now">

              <?php
              if (isset($_GET['response'])==true) {
                echo '<p style="color:darkgreen;font-family: sans-serif;margin-top: 20px;margin-left: -20px;">Message sent. </p>';
              }
              ?>
            </span>

          </form>
        </div>

      </div>
    </main>
    <footer>
        <p>@ All Rights reserved 2018 <br></p>
        <p>Designed  |  Hope4Living Co.<br></p>
        ICONS FOR G+ FACEBOOK INSTAGRAM
    </footer>
  </body>
</html>
