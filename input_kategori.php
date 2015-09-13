<?php 
	include "header.php";
?>

<div class="container">
  
  <div class="text-center">
  
	<h2>Input Kategori</h2>
	<p><span class="error">* harus diisi</span></p>
	<form name="input_kategori" method="post" action="kategori_input.php">
	<table>
		  <tr>
		  	<td><span>Nama Kategori : </span></td>
		  	<td><input type="text" name="nama_kategori"/><span class="error"> * <?php echo $codeErr;?></span></td>
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