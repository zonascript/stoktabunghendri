<?php
include 'db/pdo.php';

$no_seri = $_GET['no_seri'];
$barangs = getDataBarang($no_seri);

//var_dump($barangs);
foreach ($barangs as $row):
?>
<div>
	<span>Nomor Seri : </span><span><input type="text" name="no_seri" value="<?php echo $row['no_seri']; ?>"/></span> 
</div>
<div>
	<span>Nomor Ketok : </span><span><input type="text" name="no_ketok" value="<?php echo $row['no_ketok']; ?>"/></span>
</div>
<div>
	<span>Harga Jual : </span><span><input type="text" name="harga_jual" value="<?php echo $row['harga_jual']; ?>"/> <span class="error">
</div>
<?php endforeach;?>