<?php
include 'header2.php';

?>

<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title><link href='css/bootstrap.min.css' rel='stylesheet'><link href='css/styles.css' rel='stylesheet'></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
    
<div class="container">
  
  <div class="text-center">
<form name="input_penjualan" method="post" action="">
	<div id="po" style="">
		<div class="container" style="text-align:center;margin-top:-20px;letter-spacing:9px;">
			<h3>Toko Sumber Mas</h3>
			<div class="title">Nomor Faktur: FAK/2015/08/0002</div>
			<div class="title" style="text-align: left; margin-left: 30px; margin-top:3%;">Tanggal : 2015-08-31</div>
		<div id="txtHintCustomer">
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nama : asi</div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Alamat : bnp</div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nomor Telepon : 123456</div>
		</div>
		<div class="table" style="border:1px solid black;margin-top:3%;margin-bottom:3%;text-align:center;">
			<table id="mytable" border="1" cellpadding="10" cellspacing="0" width="100%">
				<tr>
			    <th style="text-align:center;">Nama Barang</th>
			    <th style="text-align:center;border-right:1px solid black;">Jumlah</th>
			    <th style="text-align:center;border-right:1px solid black;">Harga Satuan</th>
			    <th style="text-align:center;">Total Harga</th>
			  </tr>
			  <tr>
			  	<td>Tabung Oksigen</td>
			    <td style="border-right:1px solid black;">2</td>
			    <td style="border-right:1px solid black;">7000</td>
			    <td>14000</td>
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
		<input type="button" name="submit" value="Cetak Faktur" onclick="javascript:printDiv('po')"/>
	</div>
	</form>

  </div>
  
</div><!-- /.container -->

<?php 
	include 'footer.php';
?>
