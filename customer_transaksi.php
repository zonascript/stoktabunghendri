<?php
include 'db/pdo.php';

$nama_cust = $_GET['nama_cust'];
$customers = getDataCustomer($nama_cust);

//var_dump($barangs);
foreach ($customers as $row):
?>
	<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nama : <?php echo $row['nama_cust']; ?> <input type="hidden" name="nama_cust" value="<?php echo $row['nama_cust'];?>"/></div>
	<div class="cust_bio" style="text-align: left; margin-left: 30px;">Alamat : <?php echo $row['alamat']; ?> <input type="hidden" name="alamat" value="<?php echo $row['alamat'];?>"/></div>
	<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nomor Telepon : <?php echo $row['no_telp']; ?> <input type="hidden" name="no_telp" value="<?php echo $row['no_telp'];?>"/></div>
<?php endforeach;?>