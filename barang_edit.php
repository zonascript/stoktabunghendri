<?php
include 'db/pdo.php';

$no_id = $_POST['no_id'];
$no_seri = $_POST['no_seri'];
$no_ketok = $_POST['no_ketok'];
$harga_dasar = $_POST['harga_dasar'];
$harga_jual = $_POST['harga_jual'];
//$status = $_POST['status'];

//$edit_barang= editBarang($no_id, $no_seri, $no_ketok, $harga_dasar, $harga_jual, $status);

$edit_barang= editBarang($no_id, $no_seri, $no_ketok, $harga_dasar, $harga_jual);
if (isset($edit_barang)){
	header("Location: $base_url/barang.php?edit=$no_seri");
}
