<?php
include 'header.php';

$id_kategori = $_GET["id_kategori"];

$ketegoris = getDataKategori($id_kategori);

//var_dump($barangs);
?>

<div class="container">
  
  <div class="text-center">
  
	<form method="post" name="edit_kategori" action="kategori_edit.php">
	<?php 
	foreach ($ketegoris	as $row):
	?>
	<input type="hidden" name="id_kategori" value="<?php echo $row['id_kategori'];?>"/>
	
	<table>
		  <tr>
		  	<td><span>Nama Kategori : </span></td>
		  	<td><input type="text" name="nama_kategori" value="<?php echo $row['nama_kategori']?>"/></td>
		  </tr>
		</tr>
	</table>
	<input type="submit" name="submit" value="Edit Data Kategori"/>
	</form>

  </div>
  
</div><!-- /.container -->
<?php include 'footer.php';?>