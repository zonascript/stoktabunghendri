<?php
include 'db/pdo.php';

$no_pos = getNoPO();

foreach ($no_pos as $row):
	var_dump($row);
	echo "<br/>";
endforeach;
?>

<div class="container">
  
  <div class="text-center">
  

  
  
 </div>
  
</div><!-- /.container -->

<?php 
include 'footer.php';
?>