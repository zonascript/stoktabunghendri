<?php
include 'db/pdo.php';
?>

<div id="faktur" style="width:640px;">
<div class="container" style="width: 100%; border:2px solid #000;">
	<div class="title" style="text-align: center;"><h3>FAKTUR PENJUALAN</h3></div>
	<div class="title" style="text-align: center;">Nomor Faktur: <?php echo $po_fak;?></div>
	<div class="tanggal" style="text-align: right; margin-right: 30px;">Tanggal : <?php echo date("d/m/Y") ?></div>
<div id="txtHintCustomer">
	<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nama : </div>
	<div class="cust_bio" style="text-align: left; margin-left: 30px;">Alamat : </div>
	<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nomor Telepon : </div>
</div>

	<div class="table" style="padding:3%;">
		<table id="mytable" border="1" cellpadding="10" cellspacing="0" width="100%">
		  <tr>
		  	<th>No</th>
		    <th>Nomor Seri</th>
		    <th>Nomor Ketok</th>
		    <th>Harga</th>
		  </tr>
		  <tr id="txtHintBarang1">
		  	<td style="border-bottom:none;"></td>
		    <td style="border-bottom:none;"></td>
		    <td style="border-bottom:none;"></td>
		    <td style="border-bottom:none;" id="xTd">7000</td>
		  </tr>
		  <tr style="border: none;" id="txtHintBarang2">
		  	<td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		  </tr>
		  <tr style="border: none;" id="txtHintBarang3">
		  	<td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		  </tr>
		  <tr style="border: none;" id="txtHintBarang4">
		  	<td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		  </tr>
		  <tr style="border: none;" id="txtHintBarang5">
		  	<td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		  </tr>
		  <tr style="border: none;" id="txtHintBarang6">
		  	<td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		  </tr>
		  <tr style="border: none;" id="txtHintBarang7">
		  	<td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		  </tr>
		  <tr style="border: none;" id="txtHintBarang8">
		  	<td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		  </tr>
		  <tr style="border: none;" id="txtHintBarang9">
		  	<td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		    <td style="border-top:none; border-bottom:none;"></td>
		  </tr>
		  <tr  id="txtHintBarang10">
		  	<td style="border-top:none;"></td>
		    <td style="border-top:none;"></td>
		    <td style="border-top:none;"></td>
		    <td style="border-top:none;"></td>
		  </tr>

		  <!-- tr>
		  	<td colspan="3" style="text-align: right; padding-right:4%; font-weight:bold;">Total</td>
		    <td><span id="test"></span></td>
		  </tr-->	
	
		</table>
	</div>
</div>
</div>