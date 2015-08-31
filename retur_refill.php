<?php
include 'header.php';

$transaksis= getTransaksiRefillKeluar();
?>

<div class="container">
  
  <div class="text-center">

	<form name="input_retur" method="post" action="retur_refill_input.php">
	<table border="1" cellpadding="10" cellspacing="0">
	  <tr>
	    <th>Nomor Seri</th>
	    <th>Tanggal Keluar</th>
	    <th>Status</th>
	    <th>Action</th>
	  </tr>
	
	 <?php 
	foreach($transaksis as $row)
	{
	//	var_dump($row);
		echo "<tr>";
		echo "<td>".$row['no_seri']."</td>";
		echo "<td>".$row['tgl_keluar']."</td>";
		echo "<td>".$row['status']."</td>";
		//echo "<td><a href='edit_barang?no_seri=$row->no_seri' target='_blank'>Edit</a>  <a href='hapus_barang?no_seri=$row->no_seri' target='_blank'>Delete</a></td>";
	?>
		<td><input name="checkbox[]" type="checkbox" value="<?php echo $row['no_seri']; ?>"></td>
	<?php 
		echo "</tr>";
		
	}
	
	?>
	</table>
	<br/><br/>
	<div>
		<span><input type="submit" name="submit" value="Retur"> </span>
	</div>
	
	</form>
	
	<?php 
		if($_GET['retur']=="done"){
			echo "<span>Transaksi Retur Tabung dari Refill Berhasil!!!</span>";
		}
	?>
	
 </div>
  
</div><!-- /.container -->

<?php include 'footer.php';?>