<?php
include 'db/pdo.php';

$no_id = $_POST['no_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$permission = $_POST['permission'];

$edit_user = editUser($no_id, $username, $password, $permission);

if (isset($edit_user)){
	header("Location: $base_url/create_user.php?edit=$username");
}
