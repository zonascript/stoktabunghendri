<?php
include 'db/pdo.php';
$username = $_POST['username'];
$password = $_POST['password'];
$permission = $_POST['permission'];

if($_POST['submit']=="Submit"){
	if(empty($username)){
		header("Location: $base_url/create_user.php?empty=username");
	}
	elseif(empty($password)){
		header("Location: $base_url/create_user.php?empty=password");
	}
	elseif(empty($permission)){
		header("Location: $base_url/create_user.php?empty=permission");
	}
	else {
		$create_user = input_user($username, $password, $permission);
		header("Location: $base_url/create_user.php?input=success");
	}	
}