<?php
include 'header.php';

$transaksis= getTransaksiRefil();
?>

<div class="container">
  
  <div class="text-center">
  
	<table border="1" cellpadding="10" cellspacing="0">
	  <tr>
	    <th>Nomor Seri</th>
	    <th>Tanggal Keluar</th>
	    <th>Tanggal Kembali</th>
	    <th>Status</th>
	  </tr>
	
	 <?php 
//		echo "<tr>";
//		echo "<td>".$row['no_seri']."</td>";
//		echo "<td>".$row['tgl_keluar']."</td>";
//		echo "<td>".$row['tgl_kembali']."</td>";
//		echo "<td>".$row['status']."</td>";
		//echo "<td><a href='edit_barang?no_seri=$row->no_seri' target='_blank'>Edit</a>  <a href='hapus_barang?no_seri=$row->no_seri' target='_blank'>Delete</a></td>";
//		echo "</tr>";
		
	
	?>
	</table>  
  
  
 </div>
  
</div><!-- /.container -->

<?php 
include 'footer.php';
?>