<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin University of Makati</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <style type="text/css">
    body{
    font-family: 'Montserrat', sans-serif;
    background-image: url(bg.jpg);
    background-repeat: no-repeat;
    background-size: 100% 1600%;

  }
  
    .header{
  background-color: #333539;
  text-align: center;
  text-shadow: 2px 2px #272727;;
  margin-bottom: 5px;
  padding: 5px 0;
  color: aliceblue;
}
 

.flex-container {
  display: flex;
  flex-direction: row;
  text-align: center;
  margin-right:10px;
}
/*
.flex-item-left {
  background-color: #f1f1f1;
  flex: 50%;
}

.flex-item-right {
  background-color: dodgerblue;
  flex: 50%;
}
*/
@media (max-width: 800px) {
  .flex-container {
    flex-direction: column;
    margin-bottom: 20px;
  }
}
.buttons{
  position:absolute;
  top:35%;
  left:18%;
}
a:hover{
  text-decoration: none;
}
.buttons a,h1{ 
  list-style: none;
  text-decoration: none;
  color:white;
}
.flex-item-left{
  font-size:25px;
  padding: 40px;
  margin-right:40px;
  border: 1px solid rgb(25, 25, 26); 
  text-shadow: 2px 2px #272727;
  border-radius: 10px ;
  background-color:#062966;
  color: white;
}
.flex-item-right{
  font-size:25px;
  padding: 40px; 
  border: 1px solid rgb(25, 25, 26);  
  border-radius: 10px;
  text-shadow: 2px 2px #272727;
  background-color:#062966;
  color: white;
}

.note h1{
  position:absolute;
  text-align: center;
  float: center;
  top:110%;
  width: 95%;
  margin-right:3%;
  margin-left: 10px;
  padding: 40px;
  background-color: #B58002;
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
      <a href="index.php" class="active">
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
    <div class="bodies" style="margin-right:20px;"></div>
      <div class="container">
      <div style="overflow-x:auto;">
        <div class="buttons">
          <div class="flex-container">
            <div  class="flex-item-left" style="text-transform:uppercase;"><a href="unverified.php"><h1>Unverified Request</h1></a></div>
            <div  class="flex-item-right" style="text-transform:uppercase;"><a href="verified.php"><h1>Verified Accounts</h1></a></div>
          </div>
          <div class="note">
            <h1 style="font-size:2vw;text-transform:uppercase;">Please always check the unverified request table.</h1>
          </div>
      </div>
</div>
</div>
</div>
  </body>
</html>
