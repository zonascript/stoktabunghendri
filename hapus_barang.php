<?php
include 'db/pdo.php';

$no_seri = $_GET["no_seri"];

$hapus_barang = deleteBarang($no_seri);

//$barangs = getDataBarang($no_seri);

//var_dump($barangs);

if (isset($hapus_barang)){
	header("Location: $base_url/barang.php?hapus=$no_seri");
}