<?php
include 'header.php';

?>

<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
    
<div class="container">
  
  <div class="text-center">
<?php 

$po_fak = $_POST['po_fak'];
$tanggal = $_POST['tanggal'];
$nama_cust = $_POST['nama_cust'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$status = $_POST['status'];
$jumlah_tabung = $_POST['jumlah_tabung'];

if($jumlah_tabung==""){
	echo "Tidak ada tabung yang dipilih";
} else {
	for ($i=1; $i<=$jumlah_tabung; $i++) {
		 if ($_POST['pilih_barang_'.$i.'']==""){
		 	echo "Tabung ke $i belum diisi<br/>";
		 } else {
		 	$nomor_seri_tabung = $_POST['pilih_barang_'.$i.''];
		 	inputTransaksi($po_fak,$nomor_seri_tabung,$tanggal,$nama_cust,$alamat,$status);
		 	updateBarangKeluar($nomor_seri_tabung);
		 }
	}
}

$barang = getDataOneBarang();
?>
<form name="input_penjualan" method="post" action="">
	<div id="po" style="width:640px;">
		<div class="container" style="width: 100%; border:2px solid #000;">
			<h3>Purchasing Order</h3>
			<div class="title">Nomor Faktur: <?php echo $po_fak;?> <input type="hidden" name="po_fak" value="<?php echo $po_fak;?>"/></div>
			<div class="title" style="text-align: left; margin-left: 30px; margin-top:3%;">Tanggal : <?php echo date("Y/m/d") ?> <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d") ?>"/></div>
		<div id="txtHintCustomer">
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nama : <?php echo $nama_cust;?></div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Alamat : <?php echo $alamat;?></div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nomor Telepon : <?php echo $no_telp;?></div>
		</div>
		<div class="table" style="padding:3%;">
			<table id="mytable" border="1" cellpadding="10" cellspacing="0" width="100%">
				<tr>
			    <th>Nama Barang</th>
			    <th>Jumlah</th>
			    <th>Harga Satuan</th>
			    <th>Total Harga</th>
			  </tr>
			  <tr>
			  	<td>Tabung Oksigen</td>
			    <td><?php echo $jumlah_tabung;?></td>
			    <td><?php echo $barang[0]['harga_jual'];?></td>
			    <td><?php echo $jumlah_tabung * $barang[0]['harga_jual'];?></td>
			  </tr>
			</table>
		</div>
		<div class="ttd-author">
			<div class="ttd tanda-terima">
				<div>Tanda Terima</div>
				<div class="tanda-tangan">.........................</div>
			</div>
			<div class="ttd hormat-kami">
				<div>Hormat Kami</div>
				<div class="tanda-tangan">.........................</div>
			
			</div>
		</div>
	</div>
	</div>
	<div class="button" style="text-align: left; margin-left: 30px; margin-top:3%;">
		<input type="button" name="submit" value="Cetak Faktur" onclick="javascript:printDiv('po')"/>
	</div>
	</form>

  </div>
  
</div><!-- /.container -->

<?php 
	include 'footer.php';
?>