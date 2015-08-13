<?php
include 'header.php';

//$_SESSION['harga1'] = 0;

$transaksis= getTransaksi();
?>

<div class="container">
  
  <div class="text-center">
  
	<table border="1" cellpadding="10" cellspacing="0">
	  <tr>
	    <th>Nomor PO</th>
	    <th>Nomor Seri</th>
	    <th>Tanggal Keluar</th>
	    <th>Nama Customer</th>
	    <th>Alamat</th>
	    <th>Status</th>
	  </tr>
	
	 <?php 
	foreach($transaksis as $row)
	{
		$now=time();
		$selling_date = strtotime($row['tgl_keluar']);
		$datediff = $now - $selling_date;
		$days = floor($datediff/(60*60*24));
	//	var_dump($row);
		if($days>=20 && $days<30 && $row['status']=='terjual'){
			echo "<tr style='background:yellow'>";
		} elseif ($days>=30 && $row['status']=='terjual'){
			echo "<tr style='background:red'>";
		} else {
			echo "<tr>";
		}
		echo "<td>".$row['no_po']."</td>";
		echo "<td>".$row['no_seri']."</td>";
		echo "<td>".$row['tgl_keluar']."</td>";
		echo "<td>".$row['nama_cust']."</td>";
		echo "<td>".$row['alamat']."</td>";
		echo "<td>".$row['status']."</td>";
		//echo "<td><a href='edit_barang?no_seri=$row->no_seri' target='_blank'>Edit</a>  <a href='hapus_barang?no_seri=$row->no_seri' target='_blank'>Delete</a></td>";
		echo "</tr>";
		
	}
	
	?>
	</table>
	
	<?php
	$barangs = getBarangAvail();
	$customers = getCustomer();
	?>
	<script type="text/javascript">
	function calculate()
	{
		var x = document.getElementById('harga1').textContent;
	//	var y = x.textContent;
		document.getElementById("test").innerHTML = x;
	}
	window.onload = calculate;
	</script>
	<script>
	function showBarang1(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintBarang1").innerHTML="";
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
	    document.getElementById("txtHintBarang1").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","barang_transaksi1.php?no_seri="+str,true);
	xmlhttp.send();
	
	}
	function showBarang2(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintBarang2").innerHTML="";
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
	    document.getElementById("txtHintBarang2").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","barang_transaksi2.php?no_seri="+str,true);
	xmlhttp.send();
	}
	function showBarang3(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintBarang3").innerHTML="";
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
	    document.getElementById("txtHintBarang3").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","barang_transaksi3.php?no_seri="+str,true);
	xmlhttp.send();
	}
	function showBarang4(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintBarang4").innerHTML="";
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
	    document.getElementById("txtHintBarang4").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","barang_transaksi4.php?no_seri="+str,true);
	xmlhttp.send();
	}
	function showBarang5(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintBarang5").innerHTML="";
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
	    document.getElementById("txtHintBarang5").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","barang_transaksi5.php?no_seri="+str,true);
	xmlhttp.send();
	}
	function showBarang6(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintBarang6").innerHTML="";
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
	    document.getElementById("txtHintBarang6").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","barang_transaksi6.php?no_seri="+str,true);
	xmlhttp.send();
	}
	function showBarang7(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintBarang7").innerHTML="";
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
	    document.getElementById("txtHintBarang7").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","barang_transaksi7.php?no_seri="+str,true);
	xmlhttp.send();
	}
	function showBarang8(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintBarang8").innerHTML="";
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
	    document.getElementById("txtHintBarang8").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","barang_transaksi8.php?no_seri="+str,true);
	xmlhttp.send();
	}
	function showBarang9(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintBarang9").innerHTML="";
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
	    document.getElementById("txtHintBarang9").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","barang_transaksi9.php?no_seri="+str,true);
	xmlhttp.send();
	}
	function showBarang10(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintBarang10").innerHTML="";
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
	    document.getElementById("txtHintBarang10").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","barang_transaksi10.php?no_seri="+str,true);
	xmlhttp.send();
	}
	
	
	function showCustomer(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintCustomer").innerHTML="";
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
	    document.getElementById("txtHintCustomer").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","customer_transaksi.php?nama_cust="+str,true);
	xmlhttp.send();
	}
	
	document.getElementById("test").innerHTML = "New text!";
	
	</script>
	
	
	
	<form action="">
	<span>Tabung 1 : </span>
	<select name="pilih_barang" id="barang" onchange="showBarang1(this.value)">
	<option value=""></option>
	<?php foreach($barangs as $row) :?>
	<option value="<?php echo $row['no_seri'];?>"><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</select>
	</form>
	
	<form action="">
	<span>Tabung 2 : </span>
	<select name="pilih_barang" id="barang" onchange="showBarang2(this.value)">
	<option value=""></option>
	<?php foreach($barangs as $row) :?>
	<option value="<?php echo $row['no_seri'];?>"><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</select>
	</form>
	
	<form action="">
	<span>Tabung 3 : </span>
	<select name="pilih_barang" id="barang" onchange="showBarang3(this.value)">
	<option value=""></option>
	<?php foreach($barangs as $row) :?>
	<option value="<?php echo $row['no_seri'];?>"><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</select>
	</form>
	
	<form action="">
	<span>Tabung 4 : </span>
	<select name="pilih_barang" id="barang" onchange="showBarang4(this.value)">
	<option value=""></option>
	<?php foreach($barangs as $row) :?>
	<option value="<?php echo $row['no_seri'];?>"><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</select>
	</form>
	
	<form action="">
	<span>Tabung 5 : </span>
	<select name="pilih_barang" id="barang" onchange="showBarang5(this.value)">
	<option value=""></option>
	<?php foreach($barangs as $row) :?>
	<option value="<?php echo $row['no_seri'];?>"><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</select>
	</form>
	
	<form action="">
	<span>Tabung 6 : </span>
	<select name="pilih_barang" id="barang" onchange="showBarang6(this.value)">
	<option value=""></option>
	<?php foreach($barangs as $row) :?>
	<option value="<?php echo $row['no_seri'];?>"><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</select>
	</form>
	
	<form action="">
	<span>Tabung 7 : </span>
	<select name="pilih_barang" id="barang" onchange="showBarang7(this.value)">
	<option value=""></option>
	<?php foreach($barangs as $row) :?>
	<option value="<?php echo $row['no_seri'];?>"><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</select>
	</form>
	
	<form action="">
	<span>Tabung 8 : </span>
	<select name="pilih_barang" id="barang" onchange="showBarang8(this.value)">
	<option value=""></option>
	<?php foreach($barangs as $row) :?>
	<option value="<?php echo $row['no_seri'];?>"><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</select>
	</form>
	
	<form action="">
	<span>Tabung 9 : </span>
	<select name="pilih_barang" id="barang" onchange="showBarang9(this.value)">
	<option value=""></option>
	<?php foreach($barangs as $row) :?>
	<option value="<?php echo $row['no_seri'];?>"><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</select>
	</form>
	
	<form action="">
	<span>Tabung 10 : </span>
	<select name="pilih_barang" id="barang" onchange="showBarang10(this.value)">
	<option value=""></option>
	<?php foreach($barangs as $row) :?>
	<option value="<?php echo $row['no_seri'];?>"><?php echo $row['no_seri'];?></option>
	<?php endforeach;?>
	</select>
	</form>
	
	
	<form action="">
	<span>Customer : </span>
	<select name="pilih_customer" id="customer" onchange="showCustomer(this.value)">
	<option value=""></option>
	<?php foreach($customers as $row) :?>
	<option value="<?php echo $row['nama_cust'];?>"><?php echo $row['nama_cust'];?></option>
	<?php endforeach;?>
	</select>
	</form>
	
	<?php 
	$current_date = explode("/", date("Y/m/"));
	//var_dump($current_date);
	
	?>
	
	<!-- form name="input_transaksi" method="post" action="penjualan_input.php">
	<?php 
	$po = getDataPO();
	//var_dump($po);
	if(empty($po)):
		$new_po_number = str_pad("1", 4, "0", STR_PAD_LEFT);
		$po_fak = "FAK/".date("Y/m/")."$new_po_number";
	?>
		<div>
			<span>Nomor PO : </span><span><input type="text" name="no_po" value="FAK/<?php echo date("Y/m/");?>0001"/></span> 
		</div>
	<?php
	else:
		foreach($po as $row):
			$current_po = explode("/", $row['no_po']);
		endforeach;
		//var_dump($current_po);
		if($current_date['0'] == $current_po['1'] && $current_date['1'] == $current_po['2']):
			$new_number = $current_po['3'] +1 ;
			$new_po_number = str_pad($new_number, 4, "0", STR_PAD_LEFT);
		$po_fak = "FAK/".date("Y/m/")."$new_po_number";
		?>
		<div>
			<span>Nomor PO : </span><span><input type="text" name="no_po" value="FAK/<?php echo date("Y/m/");?><?php echo $new_po_number;?>"/></span> 
		</div>
		<?php 
		else:
		$new_po_number = str_pad("1", 4, "0", STR_PAD_LEFT);
		$po_fak = "FAK/".date("Y/m/")."$new_po_number";
		?>
		<div>
			<span>Nomor PO : </span><span><input type="text" name="no_po" value="FAK/<?php echo date("Y/m/");?><?php echo str_pad("1", 4, "0", STR_PAD_LEFT);?>"/></span> 
		</div>
		<?php 
		endif;
		
	endif;
	?>
	
	<div id="txtHintBarang">Barang info will be listed here...</div>
	<div>
		<span>Tanggal Keluar : </span><span><input type="text" name="tgl_keluar" value="<?php echo date("Y/m/d") ?>"/></span> 
	</div>
	<div id="txtHintCustomer1">Customer info will be listed here...</div>
	<input type="hidden" name="status" value="terjual"/>
	<div>
		<span><input type="submit" name="submit" value="Lakukan Transaksi"> </span>
	</div>
	</form-->
	
	
	<form name="input_penjualan" method="post" action="penjualan_input.php">
	<div id="po" style="width:640px;">
	<div class="container" style="width: 100%; border:2px solid #000;">
		<div class="title" style="text-align: left; margin-left: 30px; margin-top:3%;">Purchasing Order Tanggal : <?php echo date("Y/m/d") ?> <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d") ?>"/></div>
		<div class="title" style="text-align: left; margin-left: 30px;">Nomor Faktur: <?php echo $po_fak;?> <input type="hidden" name="po_fak" value="<?php echo $po_fak;?>"/></div>
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
			    <td style="border-bottom:none;"></td>
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
		<input type="hidden" name="status" value="terjual"/>
		<div class="button" style="text-align: left; margin-left: 30px; margin-top:3%;">
		<input type="submit" name="submit" value="Input Transaksi"/>
		</div>
	</div>
	</div>
	</form>

 </div>
  
</div><!-- /.container -->

<?php 
include 'footer.php';
?>