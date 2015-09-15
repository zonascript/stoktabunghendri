<?php
include 'db/pdo.php';

$jumlah_tabung = $_GET['jumlah_tabung'];
$barangs = getBarangAvail();
$customers = getCustomer();

?>
<div id='customer' class="inner-faktur-choice"><span>Customer : </span>
	<select name="pilih_customer" id="customer" onchange="showCustomer(this.value)">
	<option value=""></option>
	<?php foreach($customers as $row) :?>
	<option value="<?php echo $row['nama_cust'];?>"><?php echo $row['nama_cust'];?></option>
	<?php endforeach;?>
	</select>
</div>
<?php 
for ($i=1; $i<=$jumlah_tabung; $i++) {
?>

<div id='tabung-$i' class="inner-faktur-choice"><span>Tabung ke <?php echo $i;?> : </span>
	<select name='pilih_barang_<?php echo $i;?>' id='barang'>
	<option value=''></option>
	<?php foreach($barangs as $row) :?>
	<option value='<?php echo $row['no_seri'];?>'><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</select></div>
<?php 
}
?>
<input type="hidden" name="jumlah_tabung" value="<?php echo $jumlah_tabung;?>"/>

<!--div class="cust_bio" style="text-align: left; margin-left: 30px;">Harga Khusus Per Tabung : <input type="text" name="harga_khusus" /></div-->