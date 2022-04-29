<?php
  session_start();

include "../dbh.php";

$id = 0;
$fullname = '';
$birthdate = '';
$contact = '';
$email = '';

if (isset($_GET['rn'])) {
  $id = $_GET['rn'];

  $sql = "SELECT * FROM adminreg WHERE id ='$id' ";
  $result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $fullname = $row['fullname'];
    $birthdate = $row['birthdate'];
    $contact = $row['contact'];
    $email = $row['email'];
  }
}

if (isset($_POST['up-submit'])) {
  $id = $_POST['id'];
  $fullname = $_POST['fullname'];
  $birthdate = $_POST['birthdate'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  

  $sql = "UPDATE adminreg SET fullname = '$fullname', birthdate = '$birthdate', contact = '$contact', email = '$email' WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);

  if($result) {
     header("Location: index.php");
  exit();
  
  }
  else {
     header("Location: index.php");
  exit();
  }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!--Font Link-->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
            <!--Title -->
      <title>Admin University of Makati</title>
</head>
<style>
 * {   
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body{
  background-image: url(bg.jpg);
  background-repeat: no-repeat;
  background-size: 100% 170%;
}
h1{
  color: #ffffff;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: rgb(255, 255, 255);
  color: rgb(49, 47, 41);
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

button[type=submit]:hover {
  background-color: rgb(49, 47, 41);
  color: rgb(255, 255, 255);
}

.container {
  border-radius: 5px;
  background: #062966;
  padding: 20px;
  top: 0;
  margin-top: 15vh;
  width: 30%;
  color: rgb(255, 255, 255);
  box-shadow: 5px 10px  black;
}

.col-25 {
  float: left;
  width: 30%;
  margin-top: 6px;
  padding-left: 5%;
}

.col-75 {
  float: left;
  width: 70%;
  margin-top: 6px;
  padding-left: 7%;
  padding-right: 3%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 934px) {
  .container{
    width: 50%;
    padding: 10%;
  }
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
  
.footer {
   position: fixed;
   border-top: 1px solid #e5e5e5;
   left: 0;
   bottom: 0;
   width: 100%;
   color: #999;
   text-align: center;
  
}

.button-19 {
  appearance: button;
  background-color: #000000;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: .8px;
  line-height: 20px;
  margin-left: 50px;
  margin-right: 50px;
  outline: none;
  overflow: visible;
  padding: 13px 16px;
  text-align: center;
  text-transform: uppercase;
  touch-action: manipulation;
  transform: translateZ(0);
  transition: filter .2s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
  white-space: nowrap;
  width: 100%;
}

.button-19:after {
  background-clip: padding-box;
  background-color: #B58002;
  text-shadow: 2px 2px #000000;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  bottom: -4px;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

.button-19:main,
.button-19:focus {
  user-select: auto;
}

.button-19:hover:not(:disabled) {
  filter: brightness(1.1);
  -webkit-filter: brightness(1.1);
}

.button-19:disabled {
  cursor: auto;
}
</style>
<body>
 
  <div class="container">
    <form action="" method="post">
      <h1 style="text-align: center;">Update Account</h1><br>
      
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="row">
        <div class="col-25">
          <label for="lname">Fullname:</label>
        </div>
        <div class="col-75">
          <input type="text" name="fullname" value="<?php echo $fullname; ?>" placeholder="Fullname">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Birthdate:</label>
        </div>
        <div class="col-75">
          <input type="text" name="birthdate" value="<?php echo $birthdate; ?>" placeholder="Birthdate">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Contact</label>
        </div>
        <div class="col-75">
        <input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="Contact">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Email</label>
        </div>
        <div class="col-75">
        <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Email">
        </div>
      </div>
      <br>
      

      <div class="row justify-content-center">
        <button class="button-19"type="submit" name="up-submit">Submit</button> 
      </div>
    </form>
  </div>


  
  
  <div class="footer">
</div>
</div>

<script>
  function myFunction() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
  </script>

</body>

</html>