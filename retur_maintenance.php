<?php
include 'header.php';

$transaksis= getTransaksiTerjual();
?>

<div class="container">
  
  <div class="text-center">

	<form name="input_retur" method="post" action="retur_input_maintenance.php">
    
    <div>Pengembalian Tanggal : <input type="text" name="tanggal"/> (Contoh : 2016-08-17)</div><br /><br />
    
	<table border="1" cellpadding="10" cellspacing="0">
	  <tr>
	    <th>Nomor PO</th>
	    <th>Nomor Seri</th>
	    <th>Tanggal Keluar</th>
	    <th>Nama Customer</th>
	    <th>Alamat</th>
	    <th>Status</th>
	    <th>Action</th>
	  </tr>
	
	 <?php 
	foreach($transaksis as $row)
	{
	//	var_dump($row);
		echo "<tr>";
		echo "<td>".$row['no_po']."</td>";
		echo "<td>".$row['no_seri']."</td>";
		echo "<td>".$row['tgl_keluar']."</td>";
		echo "<td>".$row['nama_cust']."</td>";
		echo "<td>".$row['alamat']."</td>";
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
		if(@$_GET['retur']=="done"){
			echo "<span>Transaksi Retur Tabung Berhasil!!!</span>";
		}
	?>
	
 </div>
  
</div><!-- /.container -->

<?php include 'footer.php';?>