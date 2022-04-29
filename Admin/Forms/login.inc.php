<?php 
session_start(); 
include "dbh.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$admin_id = validate($_POST['admin_id']);
	$password = validate($_POST['password']);

		// hashing the password
        $password = md5($password);

        
		$sql = "SELECT * FROM adminreg WHERE admin_id ='$admin_id' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['admin_id'] === $admin_id && $row['password'] === $password) {
            	$_SESSION['admin_id'] = $row['admin_id'];
            	$_SESSION['username'] = $row['fullname'];
            	
            	header("Location: ../index.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect username or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect username or password");
	        exit();
		}
	
	
}

else{
	header("Location: adminlogin.php");
	exit();
}