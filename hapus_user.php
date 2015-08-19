<?php
include 'db/pdo.php';

$no_id = $_GET["no_id"];

$users = getDataUserById($no_id);

foreach ($users as $row) {
	$username=$row['username'];
}

$hapus_user = deleteUser($no_id);

if (isset($hapus_user)){
	header("Location: $base_url/create_user.php?hapus=$username");
}
