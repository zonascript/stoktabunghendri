<?php
include 'db/pdo.php';

$no_seri = $_POST['checkbox'];
if(isset($no_seri)):
	foreach ($no_seri as $row):
		$nomorseri = $row;
		$tgl_kembali = date("Y/m/d");
		//echo $tgl_kembali;
		updateBarangMasuk($row);
		$retur = updateTransaksiReturRefill($row,$tgl_kembali);
	endforeach;
endif;

if(isset($retur)):
	header("Location: $base_url/retur_refill.php?retur=done");
	//exit();
else:
	//echo "tidak ada barang dipilih untuk diretur!!!";
	header("Location: $base_url/retur_refill.php");
endif;
