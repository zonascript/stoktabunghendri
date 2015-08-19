<?php
include 'header.php';

$barangs = getBarang();
?>

<div class="container">
  
  <div class="text-center">

	<div class="table">
		<table border="1" cellpadding="10" cellspacing="0" >
		  <tr>
		  	<th>No</th>
		    <th>Nomor Seri</th>
		    <th>Nomor Ketok</th>
		    <th>Harga Dasar</th>
		    <th>Harga Jual</th>
		    <th>Status</th>
		    <th>Action</th>
		  </tr>
	<?php 
	foreach ($barangs as $barang):
		$no_seri = $barang['no_seri'];
	?>
		<tr>
	<?php 
		foreach ($barang as $item):
		?>
			    <td style="border-bottom:none;"><?php echo $item; ?></td>
		<?php 
		endforeach;
	?>
				<td style="border-bottom:none;"><a href="edit_barang.php?no_seri=<?php echo $no_seri;?>">Edit</a> | <a href="hapus_barang.php?no_seri=<?php echo $no_seri;?>">Hapus</a></td>
	 	 </tr>
	<?php 
	endforeach;
	?>
	
	
		
		</table>
	</div>
	<?php 
		if(isset($_GET['hapus'])){
			echo "Barang dengan nomor seri ".$_GET['hapus']." telah dihapus!!!";
		}
	?>
	
	<?php 
		if(isset($_GET['edit'])){
			echo "Barang dengan nomor seri ".$_GET['edit']." telah diedit!!!";
		}
	?>
	</div>
	</div>
	
	<div class="text-center">
		<?php 
		if ($_SESSION['permission']=="admin"|$_SESSION['permission']=="owner"):
			$query_masa_aktif_tabung = getMasaAktifTabung();
			foreach ($query_masa_aktif_tabung as $row) {
				$masa_aktif_tabung = $row['value'];
			}
		?>
		<span>Masa Aktif Tabung : <?php echo $masa_aktif_tabung;?> hari <button>Edit</button></span>
		
		<?php 
		endif;
		?>
	</div>
	
  </div>
  
</div><!-- /.container -->

<?php 
	include 'footer.php';
?>