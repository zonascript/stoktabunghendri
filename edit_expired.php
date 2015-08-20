<?php
include 'db/pdo.php';

$expired_days = $_POST['expired_days'];
$expired_result = updateMasaAktifTabung($expired_days);

if (isset($expired_result)){
	header("Location: $base_url/barang.php?expired_tabung=$expired_days");
}