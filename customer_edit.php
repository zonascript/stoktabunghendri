<?php
include 'db/pdo.php';

$no_cust = $_POST['no_cust'];
$nama_cust = $_POST['nama_cust'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$edit_customer = editCustomer($no_cust, $nama_cust, $alamat, $no_telp);

if (isset($edit_customer)){
	header("Location: $base_url/customer.php?edit=$nama_cust");
}
