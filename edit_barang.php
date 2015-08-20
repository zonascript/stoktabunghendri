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
	?>
	<input type="hidden" name="no_id" value="<?php echo $row['no_id'];?>"/>
	<div>
		<span>Nomor Seri : </span> <input type="text" name="no_seri" value="<?php echo $row['no_seri']?>"/>
	</div>
	<div>
		<span>Nomor Ketok : </span> <input type="text" name="no_ketok" value="<?php echo $row['no_ketok']?>"/>
	</div>
	<div>
		<span>Harga Dasar : </span>  <input type="text" name="harga_dasar" value="<?php echo $row['harga_dasar']?>"/>
	</div>
	<div>
		<span>Harga Jual : </span> <input type="text" name="harga_jual" value="<?php echo $row['harga_jual']?>"/>
	</div>
	<?php 
	if ($_SESSION['permission']=="admin"|$_SESSION['permission']=="owner"):
	?>
	<div>
	<span>Status : </span>
	<select name="status" id="status">
	<option value=""></option>
	<option value="Available" <?php if ($row['status']=="Available"){echo"selected";}?>>Available</option>
	<option value="Not Available" <?php if ($row['status']=="Not Available"){echo"selected";}?>>Not Available</option>
	<option value="Refill" <?php if ($row['status']=="Refill"){echo"selected";}?>>Not Available</option>
	</select>
	</div>
	<?php 
	else:
	?>
	<div>
		<input type="hidden" name="status" value="<?php echo $row['status']?>"/>
	</div>
	<?php 
	endif;
	endforeach;
	?>
	<input type="submit" name="submit" value="Edit Data Barang"/>
	</form>

  </div>
  
</div><!-- /.container -->
<?php include 'footer.php';?>