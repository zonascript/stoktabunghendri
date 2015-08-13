<?php 
	include "header.php";
?>

<div class="container">
  
  <div class="text-center">
  
	<h2>Input Barang</h2>
	<p><span class="error">* harus diisi</span></p>
	<form name="input_barang" method="post" action="barang_input.php">
	<div>
		<span>Nomor Seri : </span><span><input type="text" name="no_seri"/></span> <span class="error">* <?php echo $codeErr;?></span>
	</div>
	<div>
		<span>Nomor Ketok : </span><span><input type="text" name="no_ketok"/></span> <span class="error">* <?php echo $nameErr;?></span>
	</div>
	<div>
		<span>Harga Dasar : </span><span><input type="text" name="harga_dasar"/></span> <span class="error">* <?php echo $beliErr;?></span>
	</div>
	<div>
		<span>Harga Jual : </span><span><input type="text" name="harga_jual"/></span> <span class="error">* <?php echo $jualErr;?></span>
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