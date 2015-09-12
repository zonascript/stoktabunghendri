<?php
include 'db/pdo.php';

$no_seri= $_POST['no_seri'];
$no_ketok= $_POST['no_ketok'];
$harga_dasar= $_POST['harga_dasar'];
$harga_jual= $_POST['harga_jual'];
$status = "Available";

$a= input_barang($no_seri, $no_ketok, $harga_dasar, $harga_jual, $status);

if (isset($a)){
	header("Location: $base_url/barang.php");
}

$barangs = getBarang();
//var_dump($customers);
?>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>Nomor Seri</th>
    <th>Nomor Ketok</th>
    <th>Harga Dasar</th>
    <th>Harga Jual</th>
  </tr>

 <?php 
foreach($barangs as $row)
{
//	var_dump($row);
	echo "<tr>";
	echo "<td>".$row['no_seri']."</td>";
	echo "<td>".$row['no_ketok']."</td>";
	echo "<td>".$row['harga_dasar']."</td>";
	echo "<td>".$row['harga_jual']."</td>";
	//echo "<td><a href='edit_barang?no_seri=$row->no_seri' target='_blank'>Edit</a>  <a href='hapus_barang?no_seri=$row->no_seri' target='_blank'>Delete</a></td>";
	echo "</tr>";
	
}

?>
</table>
