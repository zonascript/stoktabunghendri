<?php
include 'header.php';

$no_cust = $_GET["no_cust"];

$customers = getDataCustomer2($no_cust);
//var_dump($customers);
?>

<div class="container">
  
  <div class="text-center">

	<form method="post" name="edit_customer" action="customer_edit.php">
	<?php 
	foreach ($customers as $row):
	?>
	<input type="hidden" name="no_cust" value="<?php echo $row['no_cust'];?>"/>
	
	<table>
		  <tr>
		  	<td><span>Nama Customer : </span></td>
		  	<td><input type="text" name="nama_cust" value="<?php echo $row['nama_cust']?>"/></td>
		  </tr>
		  <tr>
		  	<td><span>Alamat : </span></td>
		  	<td><input type="text" name="alamat" value="<?php echo $row['alamat']?>"/></td>
		  </tr>
		  <tr>
		  	<td><span>Nomor Telepon : </span></td>
		  	<td><input type="text" name="no_telp" value="<?php echo $row['no_telp']?>"/></td>
		  </tr>
	</table>
	
	<?php 
	endforeach;
	?>
	<input type="submit" name="submit" value="Edit Data Customer"/>
	</form>
	
  </div>
  
</div><!-- /.container -->

<?php include 'footer.php';?>