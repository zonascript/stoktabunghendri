<?php 
	include "header.php";
?>

<div class="container">
  
  <div class="text-center">

	<h2>Input Customer</h2>
	<p><span class="error">* harus diisi</span></p>
	<form name="input_barang" method="post" action="customer_input.php">
	<div>
		<span>Nama Customer : </span><span><input type="text" name="nama_cust"/></span> <span class="error">* <?php echo $codeErr;?></span>
	</div>
	<div>
		<span>Alamat : </span><span><input type="text" name="alamat"/></span> <span class="error">* <?php echo $nameErr;?></span>
	</div>
	<div>
		<span>Nomor Telepon : </span><span><input type="text" name="no_telp"/></span> <span class="error">* <?php echo $beliErr;?></span>
	</div>
	<div>
		<span><input type="submit" name="submit" value="Submit"> </span>
	</div>
	</form>

  </div>
  
</div><!-- /.container -->

<?php 
	include "footer.php";
?>