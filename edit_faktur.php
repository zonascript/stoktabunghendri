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
		
		function editJumlah1(str1)
		{
		var xmlhttp;    
		var str2 = document.getElementById("jumlah_per_kategori_1").innerHTML;
		//alert(str2.innerHTML);
		if (str1=="")
		  {
		  document.getElementById("jumlah_harga_1").innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("jumlah_harga_1").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("GET","edit_jumlah_harga.php?harga_faktur="+str1+"&jumlah_tabung="+str2,true);
		xmlhttp.send();
		}
		
		function editJumlah2(str1)
		{
		var xmlhttp;    
		var str2 = document.getElementById("jumlah_per_kategori_2").innerHTML;
		//alert(str2.innerHTML);
		if (str1=="")
		  {
		  document.getElementById("jumlah_harga_1").innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("jumlah_harga_2").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("GET","edit_jumlah_harga.php?harga_faktur="+str1+"&jumlah_tabung="+str2,true);
		xmlhttp.send();
		}
		
		function editJumlah3(str1)
		{
		var xmlhttp;    
		var str2 = document.getElementById("jumlah_per_kategori_3").innerHTML;
		//alert(str2.innerHTML);
		if (str1=="")
		  {
		  document.getElementById("jumlah_harga_3").innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("jumlah_harga_3").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("GET","edit_jumlah_harga.php?harga_faktur="+str1+"&jumlah_tabung="+str2,true);
		xmlhttp.send();
		}
		
		function editJumlah4(str1)
		{
		var xmlhttp;    
		var str2 = document.getElementById("jumlah_per_kategori_4").innerHTML;
		//alert(str2.innerHTML);
		if (str1=="")
		  {
		  document.getElementById("jumlah_harga_4").innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("jumlah_harga_4").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("GET","edit_jumlah_harga.php?harga_faktur="+str1+"&jumlah_tabung="+str2,true);
		xmlhttp.send();
		}
		
		function editJumlah5(str1)
		{
		var xmlhttp;    
		var str2 = document.getElementById("jumlah_per_kategori_5").innerHTML;
		//alert(str2.innerHTML);
		if (str1=="")
		  {
		  document.getElementById("jumlah_harga_5").innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("jumlah_harga_5").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("GET","edit_jumlah_harga.php?harga_faktur="+str1+"&jumlah_tabung="+str2,true);
		xmlhttp.send();
		}
		
		function Total()
		{
			//total = document.getElementById("jumlah_harga_1").innerHTML;
			for (i = 1; i < 5; i++) {
				
				total += document.getElementById("jumlah_harga_"+[i]).innerHTML;
			}
			alert(total);
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



//$barang = getDataOneBarang();
//$harga_jual_faktur = $barang[0]['harga_jual'];


//$kategori_from_po = getKategoriFromPO($po_fak);

//foreach($kategori_from_po as $kategori_row):
//	var_dump($kategori_row);
//endforeach;

?>
<form name="faktur_edit" method="post" action="faktur_edit.php">
	<div id="po" style="">
		<div class="container" style="text-align:center;margin-top:-20px;letter-spacing:9px;">
			<h3>Toko Sumber Mas</h3>
			<div class="title">Nomor Faktur: <?php echo $po_fak;?> <input type="hidden" name="po_fak" value="<?php echo $po_fak;?>"/></div>
			<div class="title" style="text-align: left; margin-left: 30px; margin-top:3%;">Tanggal : <?php echo date("Y/m/d") ?> <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d") ?>"/></div>
		<div id="txtHintCustomer">
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nama : <?php echo $nama_cust;?><input type="hidden" name="nama_cust" value="<?php echo $nama_cust ?>"/></div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Alamat : <?php echo $alamat;?><input type="hidden" name="alamat" value="<?php echo $alamat ?>"/></div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nomor Telepon : <?php echo $no_telp;?><input type="hidden" name="no_telp" value="<?php echo $no_telp ?>"/></div>
		</div>
		<div class="table" style="border:1px solid black;margin-top:3%;margin-bottom:3%;text-align:center;">
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
			  	<td><?php echo $row_kategori; ?><input type="hidden" name="nama_kategori_<?php echo $i;?>" value="<?php echo $row_kategori ?>"/></td>
			    <td style="border-right:1px solid black;"><div id="jumlah_per_kategori_<?php echo $i;?>"><?php echo $jumlah_per_kategori;?></div><input type="hidden" name="jumlah_per_kategori_<?php echo $i;?>" value="<?php echo $jumlah_per_kategori ?>"/></td>
			    <td style="border-right:1px solid black;"><input type="text" name="harga_jual_faktur_<?php echo $i;?>" value="<?php echo $harga_jual_faktur ?>" onchange="editJumlah<?php echo $i;?>(this.value)"/></td>
			    <td><div id="jumlah_harga_<?php echo $i;?>"><?php $jumlah = $jumlah_per_kategori * $harga_jual_faktur; $total +=$jumlah; echo $jumlah;?><input type="hidden" name="jumlah_<?php echo $i;?>" value="<?php echo $jumlah ?>"/></div></td>
			  </tr>				
			<?php
					endif;
					$i += $i;
				endforeach;
		//		echo $total;
			  ?>
			  <tr>
			  	<td colspan="3" style="border-right:1px solid black;">Total <input type="button" name="submit" value="Total Ulang" onclick="javascript:Total()"/></td>
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
		<input type="submit" name="submit" value="Proses Struk"/>
	</div>
	</form>

  </div>
  
</div><!-- /.container -->

<?php 
	include 'footer.php';
?>