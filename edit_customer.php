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
	<div>
		<span>Nomor Seri : </span> <input type="text" name="nama_cust" value="<?php echo $row['nama_cust']?>"/>
	</div>
	<div>
		<span>Nomor Ketok : </span> <input type="text" name="alamat" value="<?php echo $row['alamat']?>"/>
	</div>
	<div>
		<span>Harga Dasar : </span>  <input type="text" name="no_telp" value="<?php echo $row['no_telp']?>"/>
	</div>
	
	<?php 
	endforeach;
	?>
	<input type="submit" name="submit" value="Edit Data Customer"/>
	</form>
	
  </div>
  
</div><!-- /.container -->

<?php include 'footer.php';?>