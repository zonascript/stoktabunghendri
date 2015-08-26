<?php
include 'db/pdo.php';


$tanggal = $_POST['tanggal'];
$status = $_POST['status'];
$jumlah_tabung = $_POST['jumlah_tabung'];

if($jumlah_tabung==""){
	echo "Tidak ada Tabung yang dipilih, silahkan ulangi transaksi anda";
} else {
	for ($i=1; $i<=$jumlah_tabung; $i++) {
		 if ($_POST['pilih_barang_'.$i.'']==""){
		 	echo "Tabung ke $i belum diisi<br/>";
		 } else {
		 	$nomor_seri_tabung = $_POST['pilih_barang_'.$i.''];
		 	updateBarangKeluarRefill($nomor_seri_tabung);
		 	$refill = inputTransaksiRefill($nomor_seri_tabung, $tanggal, $status);
		 	
		 }
	}
}

if(isset($refill)):
	header("Location: $base_url/refil.php?status=done");
endif;


	
