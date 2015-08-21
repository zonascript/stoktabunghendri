<?php
include 'db/pdo.php';

$po_fak = $_POST['po_fak'];
$tanggal = $_POST['tanggal'];
$nama_cust = $_POST['nama_cust'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$status = $_POST['status'];
$jumlah_tabung = $_POST['jumlah_tabung'];

if($jumlah_tabung==""){
	echo "Tidak ada tabung yang dipilih";
} else {
	for ($i=1; $i<=$jumlah_tabung; $i++) {
		 if ($_POST['pilih_barang_'.$i.'']==""){
		 	echo "Tabung ke $i belum diisi<br/>";
		 }
	}
}
