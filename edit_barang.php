<?php
include 'header.php';

$no_seri = $_GET["no_seri"];

$barangs = getDataBarang($no_seri);

//var_dump($barangs);
?>

<div class="container">
  
  <div class="text-center">
  
	<form method="post" name="edit_barang" action="barang_edit.php">
	<?php 
	foreach ($barangs as $row):
	$current_kategori = $row['kategori'];
	?>
	<input type="hidden" name="no_id" value="<?php echo $row['no_id'];?>"/>
	
	<table>
		  <tr>
		  	<td><span>Nomor Seri : </span></td>
		  	<td><input type="text" name="no_seri" value="<?php echo $row['no_seri']?>"/></td>
		  </tr>
		  <tr>
		  	<td><span>Nomor Ketok : </span></td>
		  	<td><input type="text" name="no_ketok" value="<?php echo $row['no_ketok']?>"/></td>
		  </tr>
		  <tr>
		  	<td><span>Harga Dasar : </span></td>
		  	<td><input type="text" name="harga_dasar" value="<?php echo $row['harga_dasar']?>"/></td>
		  </tr>
		  <tr>
		  	<td><span>Harga Jual : </span></td>
		  	<td><input type="text" name="harga_jual" value="<?php echo $row['harga_jual']?>"/></td>
		  </tr>
		  <tr>
	<?php 
	if ($_SESSION['permission']=="admin"|$_SESSION['permission']=="owner"):
	?>
	<td><span>Status : </span></td>
	<td><select name="status" id="status">
	<option value=""></option>
	<option value="Available" <?php if ($row['status']=="Available"){echo"selected";}?>>Available</option>
	<option value="Not Available" <?php if ($row['status']=="Not Available"){echo"selected";}?>>Not Available</option>
	<option value="Refill" <?php if ($row['status']=="Refill"){echo"selected";}?>>Refill</option>
	</select></td>
	<?php 
	else:
	?>
		<input type="hidden" name="status" value="<?php echo $row['status']?>"/>
	<?php 
	endif;
	endforeach;
	?>
		</tr>
		<tr>
			<td><span>Kategori : </span></td>
			<td><select name="kategori" id="kategori">
			<option value=""></option>
			 <?php
			$kategoris = getKategori();
			foreach ($kategoris as $row):
			echo $current_kategori;
		    ?>
			<option value="<?php echo $row['nama_kategori'];?>"<?php if ($row['nama_kategori']==$current_kategori){echo"selected";}?>><?php echo $row['nama_kategori'];?></option>
			<?php
			endforeach;
		    ?>
			</select></td>

		</tr>
	</table>
	<input type="submit" name="submit" value="Edit Data Barang"/>
	</form>

  </div>
  
</div><!-- /.container -->
<?php include 'footer.php';?>