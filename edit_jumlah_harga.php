<?php
include 'db/pdo.php';

$harga_faktur = $_GET['harga_faktur'];
$jumlah_tabung = $_GET['jumlah_tabung'];

//$barangs = getBarangAvail();
//$customers = getCustomer();
echo $harga_faktur * $jumlah_tabung;
?>
