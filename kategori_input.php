<?php
include 'db/pdo.php';

$nama_kategori= $_POST['nama_kategori'];
echo $nama_kategori;

//$a= input_barang($no_seri, $no_ketok, $harga_dasar, $harga_jual, $status);

if (isset($a)){
	header("Location: $base_url/barang.php");
}

