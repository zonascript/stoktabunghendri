<?php 
	include "header.php";
?>

<div class="container">
  
  <div class="text-center">

	<h2>Input Customer</h2>
	<p><span class="error">* harus diisi</span></p>
	<form name="input_barang" method="post" action="customer_input.php">
	<table>
		  <tr>
		  	<td><span>Nama Customer : </span></td>
		  	<td><input type="text" name="nama_cust"/><span class="error"> * <?php echo $codeErr;?></span></td>
		  </tr>
		  <tr>
		  	<td><span>Alamat : </span></td>
		  	<td><input type="text" name="alamat"/><span class="error"> * <?php echo $codeErr;?></span></td>
		  </tr>
		  <tr>
		  	<td><span>Nomor Telepon : </span></td>
		  	<td><input type="text" name="harga_dasar"/><span class="error"> * <?php echo $codeErr;?></span></td>
		  </tr>
	</table>
	<br/>
		<span><input type="submit" name="submit" value="Submit"> </span>
	</form>

  </div>
  
</div><!-- /.container -->

<?php 
	include "footer.php";
?>