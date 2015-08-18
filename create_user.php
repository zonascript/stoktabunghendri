<?php 
	include "header.php";
	
?>

<div class="container">
  
  <div class="text-center">
  	

  <?php 
  	if($_SESSION['permission']!="admin"){
		echo "Anda Tidak Memiliki Akses Untuk Halaman Ini!!!!";
	} else {
		echo "selamat datang di create user.";
	}
  ?>
  
  </div>
  
</div><!-- /.container -->

<?php 
	include "footer.php";
?>