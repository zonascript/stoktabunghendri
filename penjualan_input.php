<?php
include 'db/pdo.php';

$po_fak = $_POST['po_fak'];
$tanggal = $_POST['tanggal'];
$nama_cust = $_POST['nama_cust'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$status = $_POST['status'];

//inputTransaksi($no_po,$no_seri,$tgl_keluar,$nama_cust,$alamat,$status);
//updateBarangKeluar($no_seri);

//echo "Transaksi dan Barang sudah terupdate, cek aja di phpmyadmin";
//echo $_POST["harga_jual_1"];

$row = array();
$total = 0;

$i = 10;
for ($i=1;$i<=10;$i++):
	if(isset($_POST["harga_jual_$i"])):
		//echo "harga jual barang ke $i = ".$_POST["harga_jual_$i"];
		//echo "<br/>";
		$total = $total + $_POST["harga_jual_$i"];
		inputTransaksi($po_fak,$_POST["no_seri_$i"],$tanggal,$nama_cust,$alamat,$status);
		updateBarangKeluar($_POST["no_seri_$i"]);
		$cell = array($_POST["no_seri_$i"],$_POST["no_ketok_$i"],$_POST["harga_jual_$i"]);
		$row[] = $cell;
	endif;
endfor;

//var_dump($row);
$total_row = count($row) -1;
?>
<div id="faktur" style="width:640px;">
<div class="container" style="width: 100%; border:2px solid #000;">
	<div class="title" style="text-align: center;"><h3>FAKTUR PENJUALAN</h3></div>
	<div class="title" style="text-align: center;">Nomor Faktur: <?php echo $po_fak; ?></div>
	<div class="tanggal" style="text-align: right; margin-right: 30px;">Tanggal : <?php echo $tanggal; ?></div>
<div>
	<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nama : <?php echo $nama_cust;?></div>
	<div class="cust_bio" style="text-align: left; margin-left: 30px;">Alamat : <?php echo $alamat; ?></div>
	<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nomor Telepon : <?php echo $no_telp; ?></div>
</div>

	<div class="table" style="padding:3%;">
		<table id="mytable" border="1" cellpadding="10" cellspacing="0" width="100%">
		  <tr>
		  	<th>No</th>
		    <th>Nomor Seri</th>
		    <th>Nomor Ketok</th>
		    <th>Harga</th>
		  </tr>
<?php 
for($i=0;$i<1;$i++):
?>
		<tr>
		  	<td style="border-bottom:none;">1</td>
<?php 
	foreach ($row[$i] as $item):
	?>
		    <td style="border-bottom:none;"><?php echo $item; ?></td>
	<?php 
	endforeach;
?>
		  </tr>
<?php 
endfor;
?>

<?php 
for($i=1;$i<$total_row;$i++):
?>
		<tr>
		  	<td style="border-bottom:none;"><?php echo $i+1; ?></td>
<?php 
	foreach ($row[$i] as $item):
	?>
		    <td style="border-bottom:none;"><?php echo $item; ?></td>
	<?php 
	endforeach;
?>
		  </tr>
<?php 
endfor;
?>

		<tr>
		  	<td style="border-bottom:none;"><?php echo $i+1; ?></td>
<?php 
	foreach ($row[$total_row] as $item):
	?>
		    <td style="border-bottom:none;"><?php echo $item; ?></td>
	<?php 
	endforeach;
?>
		  <tr>
		  	<td colspan="3" style="text-align: right; padding-right:4%; font-weight:bold;">Total</td>
		    <td><?php echo "Rp.".number_format($total,2,",","."); ?></td>
		  </tr>	
	
		</table>
	</div>
</div>
</div>

<input type="submit" name="submit" value="Cetak Faktur"/>