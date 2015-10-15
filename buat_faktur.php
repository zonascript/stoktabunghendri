<?php
include 'db/pdo.php';

$jumlah_tabung = $_GET['jumlah_tabung'];
$barangs = getBarangAvail();
$customers = getCustomer();

?>
<div id='customer' class="inner-faktur-choice"><span>Customer : </span>
<input type="text" name="pilih_customer" id="customer" list="datalist2" onchange="showCustomer(this.value)">
	<datalist id="datalist2">
	<?php foreach($customers as $row) :?>
	<option onclick="showCustomer(this.value)" value="<?php echo $row['nama_cust'];?>"><?php echo $row['nama_cust'];?></option>
	<?php endforeach;?>
	</datalist>
</div>
<?php 
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

<!--div class="cust_bio" style="text-align: left; margin-left: 30px;">Harga Khusus Per Tabung : <input type="text" name="harga_khusus" /></div-->