<?php
include 'header.php';

//$_SESSION['harga1'] = 0;

@$transaksis= getTransaksi();
?>

<div class="container">
  
  <div class="text-center">
  
	
	<script type="text/javascript">
	function totalTabung(){
		//document.getElementById("txtHintTabung").innerHTML+= "halo"; 
		var str = document.getElementById("totalTabung").value;
		//document.getElementById("txtHintTabung").innerHTML= '<?php for($i=0;$i<'+x';$i++){echo "halo";}?>'; 
		var xmlhttp;    
		if (str=="")
		  {
		  document.getElementById("txtHintTabung").innerHTML="";
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
		    document.getElementById("txtHintTabung").innerHTML=xmlhttp.responseText;
		    }
		  }
		xmlhttp.open("GET","buat_faktur.php?jumlah_tabung="+str,true);
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
	</script>
	<br/><br/>
	<div>
		<span>Jumlah Tabung Keluar :  <input type='text' name='total_tabung' id='totalTabung' onkeydown="if (event.keyCode == 13) totalTabung()"/> <button id="click" onclick="totalTabung()">Pilih Tabung</button></span>
	</div>
	<br/><br/>
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
		echo $current_date['0'];
		echo "<br/>";
		echo $current_po['1'];
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
	
	<form name="input_penjualan" method="post" action="penjualan_input.php" target="_blank">
	<div id="po" style="width:640px;">
		<div class="container" style="width: 100%; border:2px solid #000;">
			<div class="title" style="text-align: left; margin-left: 30px; margin-top:3%;">Purchasing Order Tanggal : <?php echo date("Y/m/d") ?> <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d") ?>"/></div>
			<div class="title" style="text-align: left; margin-left: 30px;">Nomor Faktur: <?php echo $po_fak;?> <input type="hidden" name="po_fak" value="<?php echo $po_fak;?>"/></div>
		<div id="txtHintCustomer">
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nama : </div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Alamat : </div>
			<div class="cust_bio" style="text-align: left; margin-left: 30px;">Nomor Telepon : </div>
		</div>
		<div id="txtHintTabung"></div>
		
		<input type="hidden" name="status" value="terjual"/>
		<div class="button" style="text-align: left; margin-left: 30px; margin-top:3%;">
		
		</div>
	</div>
	</div>
	<input type="submit" name="submit" value="Input Transaksi"/>
	</form>

 </div>
  
</div><!-- /.container -->

<?php 
include 'footer.php';
?>