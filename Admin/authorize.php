<?php

include '../dbh.php';
error_reporting(0);

$rollno=$_GET['rn'];
$sql = "INSERT INTO adminreg (admin_id, password, fullname, birthdate, contact, email) Select admin_id, password, fullname, birthdate, contact, email FROM initial_reg WHERE id = '$rollno'";
$data=mysqli_query($conn, $sql);

if($data) {
	$sql2 = "DELETE FROM initial_reg WHERE id = '$rollno'";
	$data1=mysqli_query($conn, $sql2);

	echo "<font color='green'>Admin become authorized";

}

else {

	echo "<font color='red'>Failed to authorize";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin University of Makati</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
.btn{
 margin-top: 20px;   
padding: 10px;
border-radius: 20px;


}

button a{
	font-size: 15px;
	font-weight: bold;
    padding-left: 200px ;
    padding-right: 200px;
    padding-top: 0;
    padding-bottom: 0;
    text-decoration: none;
    color:white;
  
	
}

button a:hover{
	font-size: 15px;
	font-weight: bold;
    padding-left: 200px ;
    padding-right: 200px;
    padding-top: 0;
    padding-bottom: 0;
    text-decoration: none;
    color:white;
  
	
}

</style>
<body>

<div class="container-fluid" style="text-align: center;">
  <button type="button" class="btn btn-danger "><a href="unverified.php">Back To Table</a></button>

</div>

</body>
</html>