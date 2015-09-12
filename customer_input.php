<?php
include 'db/pdo.php';

$nama_cust= $_POST['nama_cust'];
$alamat= $_POST['alamat'];
$no_telp= $_POST['no_telp'];

$a= input_customer($nama_cust, $alamat, $no_telp);

if (isset($a)){
	header("Location: $base_url/customer.php");
}

// tampilkan table customer

$customers = getCustomer();
//var_dump($customers);
?>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>Nama Customer</th>
    <th>Alamat</th>
    <th>Nomor Telepon</th>
  </tr>

 <?php 
foreach($customers as $row)
{
//	var_dump($row);
	echo "<tr>";
	echo "<td>".$row['nama_cust']."</td>";
	echo "<td>".$row['alamat']."</td>";
	echo "<td>".$row['no_telp']."</td>";
	//echo "<td><a href='edit_barang?no_seri=$row->no_seri' target='_blank'>Edit</a>  <a href='hapus_barang?no_seri=$row->no_seri' target='_blank'>Delete</a></td>";
	echo "</tr>";
	
}

?>
</table>
