<?php
  session_start();
  include "../dbh.php";

   $sql = "SELECT * FROM adminreg";
  $records = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin University of Makati</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  </head>
  <style type="text/css">
    body{
      background-image: url(bg.jpg);
  background-repeat: no-repeat;
  background-size: 100% 150%;
  font-family: 'Montserrat', sans-serif;
    }
    .header{
  background-color: #333539;
  text-align: center;
  text-shadow: 2px 2px #272727;
  margin-bottom: 5px;
  padding: 5px 0;
  color: aliceblue;
}

.logout {
  text-align: center;
  color:white;
  background-color:#D14242;
  padding: 15px 40px;
  border-radius: 5px;
  text-decoration:none;
  position: absolute;
  width: 50%;
  bottom: 10px;
  margin-left:15px;
}
  </style>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fa fa-bars" id="btn"></i>
      <i class="fa fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header><img src="umak_logo.png" style="width:45px; margin-top: 25px;" > &nbsp Menus</header>
      <a href="index.php" >
        <i class="fa fa-home"></i>
        <span>Home</span>
      </a>
      <a href="account.php">
        <i class="fa fa-table"></i>
        <span>Accounts</span>
      </a>
      <a href="bank.php">
        <i class="fa fa-table"></i>
        <span >DataBank</span>
      </a>
      <a href="about.php">
        <i class="fa fa-male"></i>
        <span>About</span>
      </a>

     
        <span class="logout">LOGOUT</span>


    </div>

    <!-- Content-->
    <h2 class="header"> TASC Office Administrator (UMAK)</h3> <br>
      <div class="container">
      <div style="overflow-x:auto;">
      <p style="text-align:center;padding:230px; font-size:50px;" >WELCOME BACK!<br>DAVID</p>
    
</div>
</div>
  </body>
</html>
