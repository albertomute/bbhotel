<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/admincss.css">
    <title>Admin</title>
  </head>
  <body class="body">
    <div class="signbody">
      <form class="adminform" action="aretrieve.php" method="post">
        <fieldset>
          <h1>Admin Login</h1>
          <input type="text" name="admin" id="admin" placeholder="Username" required>
          <input type="password" name="pass" id="pass" placeholder="Password" required>
          <input type="submit" name="submit" value="Login">
          <?php
            if (isset($_GET['error'])==true) {
              echo '<p style="color: red;font-family: sans-serif;">Does not exist, sorry.</p>';
            }
           ?>
        </fieldset>
      </form>
    </div>
  </body>
</html>
