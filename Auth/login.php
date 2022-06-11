<?php
session_start();

include '../../db/_db.php';

if (isset($_POST['loginEmail'])) {
	$email = mysqli_real_escape_string($con, $_POST['loginEmail']);
	$password = mysqli_real_escape_string($con, $_POST['loginPassword']);
	$email_search = "SELECT * from users where email='$email'";
	$query = mysqli_query($con, $email_search);
	$email_count = mysqli_num_rows($query);


	if ($email_count) {
		$row = mysqli_fetch_assoc($query);
		$status = $row['status'];
		if ($status == 'active' ) {

			$user_id = $row['UserID'];
			$user_name = $row['username'];
			$user_email = $row['email'];
			$birthday = $row['dob'];
			$user_pass_hash = $row['password'];
			$mobile = $row['mobile'];
			$type = $row['type'];
			$pass_decode = password_verify($password, $user_pass_hash);
			if ($pass_decode) {
				$active_status = "Active now";
                $sql2 = mysqli_query($con, "UPDATE users SET active_status = '{$active_status}' WHERE UserID = {$row['UserID']}");
				$_SESSION["loggedin"] = true;
				$_SESSION["userName"] =  $user_name;
				$_SESSION["userEmail"] =  $user_email;
				$_SESSION["birthday"] =   $birthday;
				$_SESSION["userId"] =   $user_id;
				$_SESSION["mobile"] =   $mobile;
				$_SESSION["type"] =   $type;
				echo 1;
			} else {
				echo 3;
			}
		} else {
			echo 2;
		}
	} else {
		echo "Invalid mail";
	}
}
