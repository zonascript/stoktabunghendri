<?php 
	include "header.php";
?>

<div class="container">
  
  <div class="text-center">
  
	<h2>Input Barang</h2>
	<p><span class="error">* harus diisi</span></p>
	<form name="input_barang" method="post" action="barang_input.php">
	<table>
		  <tr>
		  	<td><span>Nomor Seri : </span></td>
		  	<td><input type="text" name="no_seri"/><span class="error"> * <?php echo $codeErr;?></span></td>
		  </tr>
		  <tr>
		  	<td><span>Nomor Ketok : </span></td>
		  	<td><input type="text" name="no_ketok"/><span class="error"> * <?php echo $codeErr;?></span></td>
		  </tr>
		  <tr>
		  	<td><span>Harga Dasar : </span></td>
		  	<td><input type="text" name="harga_dasar"/><span class="error"> * <?php echo $codeErr;?></span></td>
		  </tr>
		  <tr>
		  	<td><span>Harga Jual :</span></td>
		  	<td><input type="text" name="harga_jual"/><span class="error"> * <?php echo $codeErr;?></span></td>
		  </tr>
		  <tr>
			<td><span>Kategori : </span></td>
			<td><select name="kategori" id="kategori">
			<option value=""></option>
			 <?php
			$kategoris = getKategori();
			foreach ($kategoris as $row):
		    ?>
			<option value="<?php echo $row['nama_kategori'];?>"><?php echo $row['nama_kategori'];?></option>
			<?php
			endforeach;
		    ?>
			</select></td>

		</tr>
	</table>
	<br/>
	<input type="submit" name="submit" value="Submit"> 
	</form>
	
  </div>
  
</div><!-- /.container -->

<?php 
	include "footer.php";
?>