<?php
include 'header.php';

$kategoris = getKategori();
?>

<div class="container">
  
  <div class="text-center">

	<div class="table">
		<table border="1" cellpadding="10" cellspacing="0" >
		  <tr>
		  	<th>No</th>
		    <th>Nama Kategori</th>
			<th>Action</th>
		  </tr>
	<?php 
	foreach ($kategoris as $kategori):
		$id_kategori = $kategoris['id_kategori'];
	?>
		<tr>
	<?php 
		foreach ($kategori as $item):
		?>
			    <td style="border-bottom:none;"><?php echo $item; ?></td>
		<?php 
		endforeach;
	?>
				<td style="border-bottom:none;"><a href="edit_kategori.php?id_kategori=<?php echo $id_kategori;?>">Edit</a> | <a href="hapus_kategori.php?id_kategori=<?php echo $id_kategori;?>">Hapus</a></td>
	 	 </tr>
	<?php 
	endforeach;
	?>
	
	
		
		</table>
	</div>
	<?php 
		if(isset($_GET['hapus'])){
			echo "Kategori dengan nama ".$_GET['hapus']." telah dihapus!!!";
		}
	?>
	
	<?php 
		if(isset($_GET['edit'])){
			echo "Kategori dengan nama ".$_GET['edit']." telah diedit!!!";
		}
	?>
	</div>
	</div>
	
	
	
  </div>
  
</div><!-- /.container -->

<?php 
	include 'footer.php';
?>