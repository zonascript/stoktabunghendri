<?php
include 'db/pdo.php';

$no_cust = $_GET["no_cust"];

$customers = getDataCustomer2($no_cust);

$nama_customer = $customers[0]['nama_cust'];

$hapus_customer = deleteCustomer($no_cust);

//var_dump($customers);

//echo $nama_customer;

if (isset($hapus_customer)){
	header("Location: $base_url/customer.php?hapus=$nama_customer");
}