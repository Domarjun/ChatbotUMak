<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin University of Makati</title>

    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/cfe5bf3218.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  </head>
  <style type="text/css">
    body{
      font-family: 'Montserrat', sans-serif;
      background-image: url(bg.jpg);
  background-repeat: no-repeat;
  background-size: 100% 120%;
    }
    .headers{
  background-color: #333539;
  text-align: center;
  text-shadow: 2px 2px #272727;
  padding: 5px 0;
  color: aliceblue;
}


:root {
    --primary: #B58002;
}


.header {
    text-align: center;
    margin: auto;
    max-width: 100vh;
    padding-block: 48px;
    margin-bottom: 20px;
    font-size: 50px;
    letter-spacing: 4px;
}

section {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-content: center;
}

.team {
    width: 320px;
    height: 480px;
    overflow: hidden;
    margin: 8px;
    border: 2px solid #B58002 ;
    border-radius: 16px;
    position: relative;
    background-color: #062966;
}

.team::before {
    content: '';
    background-image: var(--img);
    background-size: cover;
    background-position: center;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 1;
    filter: blur(4px) grayscale(100%);
}

.team img {
    position: absolute;
    top: 0;
    left: 0;
    width: 320px;
    height: 480px;
    border-radius: 16px;
    z-index: 3;
    object-fit: cover;
    border: none;
}

.team:hover img {
    width: 160px;
    height: 240px;
    border: 2px solid #B58002 ;
    left: 80px;
    top: 60px;
}

.team .info {
    background-color: white;
    position: absolute;
    bottom: 0px;
    left: 0;
    right: 0;
    z-index: 2;
    color: #000000;
    padding: 16px;
    border-top: 8px solid #B58002 ;
    border-radius: 50% 50% 0px 0px;
    padding-top: 80px;
    text-align: center;
    transform: scale(2)
}

.team .name {
    font-size: 20px;
    padding: 16px;
    text-transform: capitalize;
}

.team .title {
  color: #B58002;
    text-transform: capitalize;
}

.team:hover .info {
    transform: scale(1)
}

.team .social {
    padding-block: 16px;
    font-size: 24px;
}

.team .social i {
    display: inline-block;
    width: 48px;
    padding: 12px;
    background-color: #ededed;
    border-radius: 16px;
    margin: 4px;
    cursor: pointer;
}

.team .social i:hover {
    color: var(--primary);
    background-color: #062966;
    color: white;

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
    <h2 class="headers"> TASC Office Administrator (UMAK)</h3> <br>
      <div class="container">
      <div style="overflow-x:auto;">
      <div class="header">
       Developers
      </div>

    <section>
        <div class="team" >
            <img src="jenn.png" alt="">
            <div class="info">
                <div class="name">Jenn Rose Dela Cruz</div>
                <div class="title">Researcher</div>
                <div class="social">
                <a href="https://www.facebook.com/arflodicakes" style="text-decoration:none; color: black;"><i class="fab fa-facebook-f"></i></a>
                <a href="https://jdelacruzk1140917.wixsite.com/jennrosedeacruz"> <i class="fa-solid fa-browsers"></i></i></a>
                </div>
            </div>
        </div>
        <div class="team" style="--img: url(../res/image/pexels-andrea-piacquadio-774909.jpg)">
            <img src="jomari.png" alt="">
            <div class="info">
                <div class="name">Jomari Macabare</div>
                <div class="title">Project Manager</div>
                <div class="social">
                <a href="https://www.facebook.com/jomarimabugat10" style="text-decoration:none; color: black;"><i class="fab fa-facebook-f"></i></a>
                <a href="https://jmacabarea61930981.wixsite.com/website"> <i class="fa-solid fa-browsers"></i></i></a>   
                </div>
            </div>
        </div>

        <div class="team" style="--img: url(../res/image/pexels-creation-hill-1681010.jpg)">
            <img src="dj.png" alt="">
            <div class="info">
                <div class="name">Domarjun Magbanua</div>
                <div class="title">Front-End Designer</div>
                <div class="social">
                    <a href="https://www.facebook.com/dao.m.su.1/" style="text-decoration:none; color: black;"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://dmagbanuaa61930886.wixsite.com/magbanua"><i class="fa-solid fa-browsers"></i></i></a>
                </div>
            </div>
        </div>

        <div class="team" style="--img: url(../res/image/pexels-pixabay-220453.jpg)">
            <img src="jp.png" alt="">
            <div class="info">
                <div class="name">John Paul Villa</div>
                <div class="title">Programmer</div>
                <div class="social">
                <a href=" https://www.facebook.com/johnpaul.villa.5" style="text-decoration:none; color: black;"><i class="fab fa-facebook-f"></i></a>
                <a href="https://sites.google.com/umak.edu.ph/jpvilla/home"> <i class="fa-solid fa-browsers"></i></i></a>
                   
                </div>
            </div>
        </div>

    </section>
         
  
      </div>
      </div>
  </body>
</html>
