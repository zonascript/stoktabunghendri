<?php
include 'header.php';

$customers = getCustomer();
?>

<div class="container">
  
  <div class="text-center">

	<div class="table">
		<table border="1" cellpadding="10" cellspacing="0" >
		  <tr>
		  	<th>No</th>
		    <th>Nama Customer</th>
		    <th>Alamat</th>
		    <th>Nomor Telepon</th>
		    <th>Action</th>
		  </tr>
	<?php 
	foreach ($customers as $customer):
		$no_cust = $customer['no_cust'];
	?>
		<tr>
	<?php 
		foreach ($customer as $item):
		?>
			    <td style="border-bottom:none;"><?php echo $item; ?></td>
		<?php 
		endforeach;
	?>
				<td style="border-bottom:none;"><a href="edit_customer.php?no_cust=<?php echo $no_cust;?>">Edit</a> | <a href="hapus_customer.php?no_cust=<?php echo $no_cust;?>">Hapus</a></td>
	 	 </tr>
	<?php 
	endforeach;
	?>
	
	
		
		</table>
	</div>
	<?php 
		if(isset($_GET['hapus'])){
			echo "Customer dengan nama ".$_GET['hapus']." telah dihapus!!!";
		}
	?>
	<?php 
		if(isset($_GET['edit'])){
			echo "Customer dengan nama ".$_GET['edit']." telah diedit!!!";
		}
	?>
	</div>
	</div>

  </div>
  
</div><!-- /.container -->
<?php 
include 'footer.php';
?>
