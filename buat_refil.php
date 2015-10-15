<?php
include 'db/pdo.php';

$jumlah_tabung = $_GET['jumlah_tabung'];
$barangs = getBarangAvail();

for ($i=1; $i<=$jumlah_tabung; $i++) {
?>

<div id='tabung-$i' class="inner-faktur-choice"><span>Tabung ke <?php echo $i;?> : </span>
	<input type="text" name="pilih_barang_<?php echo $i;?>" id="barang" list="datalist1">
	<datalist id="datalist1">
	  <?php foreach($barangs as $row) :?>
	<option value='<?php echo $row['no_seri'];?>'><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</datalist>
	</div>
<?php 
}
?>
<input type="hidden" name="jumlah_tabung" value="<?php echo $jumlah_tabung;?>"/>
