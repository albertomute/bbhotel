<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/admincss.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Admin Page</title>
  </head>
  <body>
    <div class="adminhome">
      <nav>
        <p class="header">Blue Bird Hotel and Restaurant</p>
        <p class="rightheader"><span>Welcome, Admin</span> Log out</p>
        <ul class="navbar">
          <li><a href="adminhome.php">Home Page</a></li>
          <li><a href="#" class="active">Incoming clients</a></li>
          <li><a href="#">Checked In</a></li>
          <li><a href="#">Checked Out</a></li>
          <li><a href="#">Inbox</a></li>
        </ul>
      </nav>
      <main>
        <div class="mainpg">
          <h1><i class="far fa-sun"></i> Main Page</h1><p>Admin</p>
        </div>
        <aside class="aside">
          <div class="dashboard">
            <ul>
              <li class="dashtitle"><p><i class="fas fa-cog"></i> Dashboard</p></li>
              <li class="visited"><a href="#">Home Page</a></li>
              <li><a href="#">Incoming clients</a></li>
              <li><a href="#">Checked In</a></li>
              <li><a href="#">Checked Out</a></li>
              <li><a href="#">Inbox</a></li>
            </ul>
          </div>
          <div class="disk">
            <p>Disk Space Used</p>
            <div class="dcontent">
              <span class="pa">60%</span><span class="pb"></span>
            </div>
            <p>Bandwidth used</p>
            <div class="dcontent">
              <span class="pa1">49%</span><span class="pb1"></span>
            </div>
          </div>
        </aside>
        <div class="main_content">
          <div class="web_over">
            <p class="wo">Website Overview</p>
            <div class="web_overview blue">
              <h1>399</h1>
              <p>Single</p>
            </div>
            <div class="web_overview purple">
              <h1>399</h1>
              <p>Single</p>
            </div>
            <div class="web_overview tomato">
              <h1>399</h1>
              <p>Single</p>
            </div>
            <div class="web_overview orange">
              <h1>399</h1>
              <p>Single</p>
            </div>
          </div>
          <div class="web_over mtop">
            <p class="wo">Lists of Clients.</p>
            <div class="containlist">
              <div class="listclients">
                <ul class="tre">
                  <li>full name</li>
                  <li>email</li>
                  <li>contact no</li>
                  <li>status</li>
                </ul>
                <div class="mama"style="clear: both;">  </div>
                <ul class="uno">
                  <li>simon albert</li>
                  <li>sam@gmail.com</li>
                  <li>1234567899</li>
                  <li><img src="../images/cross.png" title="Unchecked"></li>
                </ul>
                <ul class="tre">
                  <li>shirima reginald</li>
                  <li>reginaldshirima@gmail.com</li>
                  <li>1234567809</li>
                  <li><img src="../images/cross.png" title="Unchecked"></li>
                </ul>
              </div>
              <div class="listclients">
                <ul class="uno">
                  <li>simon albert</li>
                  <li>sam@gmail.com</li>
                  <li>1234567899</li>
                  <li><img src="../images/tick.png" title="Checked"></li>
                </ul>
                <ul class="tre">
                  <li>shirima reginald</li>
                  <li>reginaldshirima@gmail.com</li>
                  <li>1234567809</li>
                  <li><img src="../images/tick.png" title="Checked"></li>
                </ul>
                <ul class="uno">
                  <li>simon albert</li>
                  <li>sam@gmail.com</li>
                  <li>1234567899</li>
                  <li><img src="../images/mark.png" title="Waiting"></li>
                </ul>
                <ul class="tre">
                  <li>simon albert</li>
                  <li>sam@gmail.com</li>
                  <li>1234567899</li>
                  <li><img src="../images/mark.png" title="Waiting"></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer>
        <p>©2018 BLUE BIRD. All rights reserved | Design by Hope4Living</p>
      </footer>
    </div>
  </body>
</html>
