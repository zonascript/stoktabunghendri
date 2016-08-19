<?php
include 'db/pdo.php';

var_dump($_POST);

$no_seri = $_POST['checkbox'];
if(isset($no_seri)):
	foreach ($no_seri as $row):
		$nomorseri = $row;
		$tgl_kembali = $_POST['tanggal'];
		//echo $tgl_kembali;
		updateBarangMasuk($row);
		$retur = updateTransaksiRetur($row,$tgl_kembali);
	endforeach;
endif;

if(isset($retur)):
	header("Location: $base_url/retur_maintenance.php?retur=done");
	//exit();
else:
	//echo "tidak ada barang dipilih untuk diretur!!!";
	header("Location: $base_url/retur_maintenance.php");
endif;
