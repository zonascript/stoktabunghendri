<?php
include 'header.php';

$barangs = getBarang();
?>

<script type="text/javascript">
	function showEditExpired()
	{
		document.getElementById("txtHintExpired").innerHTML+= "<form action='edit_expired.php' method='post'><span>Lama expired yang baru (hitungan hari) = <input type='text' name='expired_days' id='expired_days'/></span><div><input type='submit' name='submit' value='Ubah'/></div></form>";
		document.getElementById("editExpiredButton").innerHTML= "";
		document.getElementById("expiredDateMsg").innerHTML= "";
	}
</script>

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
			<th>Kategori</th>
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
		<span>Masa Aktif Tabung : <?php echo $masa_aktif_tabung;?> hari <span id="editExpiredButton"><button onclick="showEditExpired()">Edit</button></span></span>
		<?php 
			if (isset($_GET['expired_tabung'])){
				$expired_tabung = $_GET['expired_tabung'];
				echo "<span id='expiredDateMsg'>Masa Aktif Tabung telah diubah menjadi $expired_tabung hari</span>";
			}
		?>
		
		<?php 
		endif;
		?>
		<div class="text-center" id="txtHintExpired">
		
		</div>
	</div>
	
	
  </div>
  
</div><!-- /.container -->

<?php 
	include 'footer.php';
?>