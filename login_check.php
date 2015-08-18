<?php
include 'db/pdo.php';
$username = $_POST['username'];
$password = $_POST['password'];
if($_POST['submit']=="Login"){
	if(empty($username)){
		header("Location: $base_url/login.php?empty=username");
	}
	elseif(empty($password)){
		header("Location: $base_url/login.php?empty=password");
	}
	else {
		$users = getDataUser($username);
		//echo "username is $username and password is $password";
		foreach ($users as $row_user){
			if($password==$row_user['password']){
				$_SESSION['username']=$row_user['username'];
				$_SESSION['permission']=$row_user['permission'];
				header("Location: $base_url/");
			} else {
				header("Location: $base_url/login.php?nopass=true");
			}
		}
	}	
}
