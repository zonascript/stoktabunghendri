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
//$harga_khusus = $_POST['harga_khusus'];

if($jumlah_tabung==""){
	echo "Tidak ada tabung yang dipilih";
} else {
	for ($i=1; $i<=$jumlah_tabung; $i++) {
		 if ($_POST['pilih_barang_'.$i.'']==""){
		 	echo "Tabung ke $i belum diisi<br/>";
		 } else {
		 	$nomor_seri_tabung = $_POST['pilih_barang_'.$i.''];
			$kategoris = getDataKategoriBarang($nomor_seri_tabung);
			$kategori = $kategoris[0]['kategori'];
			$harga_jual = getHargaBarangKategori($kategori[0]['harga_jual']);
			var_dump($harga_jual);
		 	//inputTransaksi($po_fak,$nomor_seri_tabung,$kategori,$tanggal,$nama_cust,$alamat,$status);
		 	//updateBarangKeluar($nomor_seri_tabung);
		 }
	}
}

//$barang = getDataOneBarang();
//$harga_jual_faktur = $barang[0]['harga_jual'];


//$kategori_from_po = getKategoriFromPO($po_fak);

//foreach($kategori_from_po as $kategori_row):
//	var_dump($kategori_row);
//endforeach;

?>
<form name="edit_faktur" method="post" action="edit_faktur.php">
	<div id="po" style="">
		<div class="container" style="text-align:center;margin-top:-20px;letter-spacing:8px;font-size:12px;">
			<h3>Toko Sumber Mas</h3>
			<div class="title">Nomor Faktur: <?php echo $po_fak;?> <input type="hidden" name="po_fak" value="<?php echo $po_fak;?>"/></div>
			<div class="title" style="text-align: left; margin-left: 30px; margin-top:1%;">Tanggal : <?php echo date("Y/m/d") ?> <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d") ?>"/></div>
		<div id="txtHintCustomer">
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nama : <?php echo $nama_cust;?><input type="hidden" name="nama_cust" value="<?php echo $nama_cust ?>"/></div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Alamat : <?php echo $alamat;?><input type="hidden" name="alamat" value="<?php echo $alamat ?>"/></div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nomor Telepon : <?php echo $no_telp;?><input type="hidden" name="no_telp" value="<?php echo $no_telp ?>"/></div>
		</div>
		<div class="table" style="border:1px solid black;margin-top:1%;margin-bottom:1%;text-align:center;">
			<table id="mytable" border="1" cellpadding="10" cellspacing="0" width="100%">
				<tr>
			    <th style="text-align:center;">Nama Barang</th>
			    <th style="text-align:center;border-right:1px solid black;">Jumlah</th>
			    <th style="text-align:center;border-right:1px solid black;">Harga Satuan</th>
			    <th style="text-align:center;">Total Harga</th>
			  </tr>
			  <?php
				$kategoris = getKategori();
				$total = 0;
				$i = 1;
				foreach ($kategoris as $row):
					$row_kategori = $row['nama_kategori'];
					$jumlah_per_kategoris = getJumlahKategoriTransaksi($po_fak,$row_kategori);
					$jumlah_per_kategori = $jumlah_per_kategoris[0]['COUNT(*)'];
					//var_dump($jumlah_per_kategoris[0]['COUNT(*)']);
					if($jumlah_per_kategori != "0"):
						$hargas = getHargaBarangKategori($row_kategori);
						$harga_jual_faktur = $hargas[0]['harga_jual'];
			?>	
			  <tr>
			  	<td style="border-top: 1px solid black;"><?php echo $row_kategori; ?><input type="hidden" name="nama_kategori_<?php echo $i;?>" value="<?php echo $row_kategori ?>"/></td>
			    <td style="border-right:1px solid black;border-top: 1px solid black;"><?php echo $jumlah_per_kategori;?><input type="hidden" name="jumlah_per_kategori_<?php echo $i;?>" value="<?php echo $jumlah_per_kategori ?>"/></td>
			    <td style="border-right:1px solid black;border-top: 1px solid black;"><?php echo $harga_jual_faktur;?><input type="hidden" name="harga_jual_faktur_<?php echo $i;?>" value="<?php echo $harga_jual_faktur ?>"/></td>
			    <td style="border-top: 1px solid black;"><?php $jumlah = $jumlah_per_kategori * $harga_jual_faktur; $total +=$jumlah; echo $jumlah;?><input type="hidden" name="jumlah_<?php echo $i;?>" value="<?php echo $jumlah ?>"/></td>
			  </tr>				
			<?php
					endif;
				endforeach;
		//		echo $total;
			  ?>
			  <tr>
			  	<td colspan="3" style="border-right:1px solid black;">Total</td>
			    <td><?php echo $total;?></td>
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
	<div class="button" style="margin:auto; margin-top:3%;">
		<input type="button" name="submit" value="Cetak Faktur" onclick="javascript:printDiv('po')"/> atau <input type="submit" name="submit" value="Beri Diskon"/>
	</div>
	</form>

  </div>
  
</div><!-- /.container -->

<?php 
	include 'footer.php';
?>