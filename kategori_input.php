<?php
include 'db/pdo.php';

$nama_kategori= $_POST['nama_kategori'];
echo $nama_kategori;

$a= input_kategori($nama_kategori);

if (isset($a)){
	header("Location: $base_url/kategori.php");
}

