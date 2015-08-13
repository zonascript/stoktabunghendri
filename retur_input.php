<?php
include 'db/pdo.php';

$no_seri = $_POST['checkbox'];
if(isset($no_seri)):
	foreach ($no_seri as $row):
		$nomorseri = $row;
		updateBarangMasuk($row);
		$retur = updateTransaksiRetur($row);
	endforeach;
endif;

if(isset($retur)):
	header("Location: $base_url/retur.php?retur=$nomorseri");
	//exit();
else:
	//echo "tidak ada barang dipilih untuk diretur!!!";
	header("Location: $base_url/retur.php");
endif;
