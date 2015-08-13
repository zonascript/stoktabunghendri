<?php
include 'db/pdo.php';

$nama_cust = $_GET['nama_cust'];
$customers = getDataCustomer($nama_cust);

//var_dump($barangs);
foreach ($customers as $row):
?>
<div>
	<span>Nama Customer : </span><span><input type="text" name="nama_cust" value="<?php echo $row['nama_cust']; ?>"/></span>
</div>
<div>
	<span>Alamat : </span><span><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"/></span>
</div>
<div>
	<span>Nomor Telepon : </span><span><input type="text" name="no_telp" value="<?php echo $row['no_telp']; ?>"/></span>
</div>
<?php endforeach;?>