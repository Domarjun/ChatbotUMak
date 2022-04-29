<?php 
session_start(); 
include "../../dbh.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$admin_id = validate($_POST['student_id']);
	$password = validate($_POST['password']);
	$repassword = validate($_POST['repassword']);
	$fullname = validate($_POST['fullname']);
	$birthdate = validate($_POST['birthdate']);
	$contact = validate($_POST['contact']);
	$email = validate($_POST['email']);
	
	$user_data = 'name='. $fullname. '&admin_id='. $admin_id;

if ($password != $repassword){
	header("Location: register.php?error=The password and confirm password does not match&$user_data");
	        exit();
	    }
	    else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM adminreg WHERE admin_id='$admin_id' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO initial_reg (admin_id, password, fullname, birthdate, contact, email) VALUES('$admin_id', '$password', '$fullname', '$birthdate', '$contact', '$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: register.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.php?error=database error&$user_data");
		        exit();
           }
		}
	}
}
	
else{
	header("Location: register.php");
	exit();
}