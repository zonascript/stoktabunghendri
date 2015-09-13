<?php
include 'header.php';

$id_kategori = $_GET["id_kategori"];

echo $id_kategori;

@$kategoris = getDataKategori($id_kategori);

//var_dump($barangs);
?>

<div class="container">
  
  <div class="text-center">
  
	

  </div>
  
</div><!-- /.container -->
<?php include 'footer.php';?>