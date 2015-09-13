<?php
include 'db/pdo.php';

$no_seri= $_POST['no_seri'];
$no_ketok= $_POST['no_ketok'];
$harga_dasar= $_POST['harga_dasar'];
$harga_jual= $_POST['harga_jual'];
$status = "Available";
$kategori = $_POST['kategori'];

$a= input_barang($no_seri, $no_ketok, $harga_dasar, $harga_jual, $status, $kategori);

if (isset($a)){
	header("Location: $base_url/barang.php");
}


?>

