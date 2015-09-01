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
<form name="input_penjualan" method="post" action="">
	<div id="po" style="width:640px;">
		<div class="container" style="width: 100%; border:2px solid #000;">
			<h3>Purchasing Order</h3>
			<div class="title">Nomor Faktur: FAK/2015/08/0002</div>
			<div class="title" style="text-align: left; margin-left: 30px; margin-top:3%;">Tanggal : 2015-08-31</div>
		<div id="txtHintCustomer">
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nama : asi</div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Alamat : bnp</div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nomor Telepon : 123456</div>
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
			    <td>2</td>
			    <td>7000</td>
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