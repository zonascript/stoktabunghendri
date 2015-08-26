<?php
include 'db/pdo.php';

$no_po = $_GET['no_po'];

$transaksis = getTransaksiPerPo($no_po);

//var_dump($transaksis);
?>
  	
	<table border="1" cellpadding="10" cellspacing="0">
	  <tr>
	    <th>Nomor PO</th>
	    <th>Nomor Seri</th>
	    <th>Tanggal Keluar</th>
	    <th>Tanggal Kembali</th>
	    <th>Nama Customer</th>
	    <th>Alamat</th>
	    <th>Status</th>
	  </tr>
	  
	<?php 
	foreach($transaksis as $row)
	{
		echo "<tr>";
		echo "<td>".$row['no_po']."</td>";
		echo "<td>".$row['no_seri']."</td>";
		echo "<td>".$row['tgl_keluar']."</td>";
		echo "<td>".$row['tgl_kembali']."</td>";
		echo "<td>".$row['nama_cust']."</td>";
		echo "<td>".$row['alamat']."</td>";
		echo "<td>".$row['status']."</td>";
		//echo "<td><a href='edit_barang?no_seri=$row->no_seri' target='_blank'>Edit</a>  <a href='hapus_barang?no_seri=$row->no_seri' target='_blank'>Delete</a></td>";
		echo "</tr>";
		
	}
	
	?>
	</table>


