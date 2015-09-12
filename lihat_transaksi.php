<?php
include 'header.php';

//$_SESSION['harga1'] = 0;

@$transaksis= getTransaksi();
?>

<div class="container">
  
  <div class="text-center">
  
	<h3>Lihat Transaksi</h3>
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
	 $values = getMasaAktifTabung();
	 $day = $values[0]['value'] - 1;
	 //echo $day;
	 $yellow = $day - ($day/3);
	 //echo $yellow;
	foreach($transaksis as $row)
	{
		$now=time();
		$selling_date = strtotime($row['tgl_keluar']);
		$datediff = $now - $selling_date;
		$days = floor($datediff/(60*60*24));
	//	var_dump($row);
		if($days>=$yellow && $days<$day && $row['status']=='terjual'){
			echo "<tr style='background:yellow'>";
		} elseif ($days>=$day-1 && $row['status']=='terjual'){
			echo "<tr style='background:red'>";
		} else {
			echo "<tr>";
		}
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
	
	

 </div>
  
</div><!-- /.container -->

<?php 
include 'footer.php';
?>