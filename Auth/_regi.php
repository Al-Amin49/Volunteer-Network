<?php
session_start();
include '../db/_db.php';
$DB = new DB();

if(isset($_POST['email'])){
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];

	if($password==$cpassword){
		$pass=password_hash($password, PASSWORD_BCRYPT);
		$inserquery="INSERT INTO users(`email`,`username`,`password`) 
		values('$email','$username','$pass')";
		$iquery = $DB->execute($inserquery);
		if($iquery){
			$msg="Account created successful! You can now login now";
			header("Location: ../auth?msg=$msg");

		}else{
			echo"Error Found! Please try again...";
		}


	}else{
		echo'Password not matched!';
	}
	}
	


?>
