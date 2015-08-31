<?php
include 'header.php';

@$refills= getTransaksiRefill();
?>
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
		xmlhttp.open("GET","buat_refil.php?jumlah_tabung="+str,true);
		xmlhttp.send();
	}
</script>
<div class="container">
  
  <div class="text-center">
  
  <?php 
  	if($_GET['status']=="done"){
  		echo "<span>Transaksi Refill Berhasil</span>";
  	} elseif ($_GET['status']=="none") {
  		echo "<span>Tidak ada Tabung yang dipilih untuk di Refill</span>";
  	}else {
  		
  	}
  ?>
	<table border="1" cellpadding="10" cellspacing="0">
	  <tr>
	    <th>Nomor Seri</th>
	    <th>Tanggal Keluar</th>
	    <th>Tanggal Kembali</th>
	    <th>Status</th>
	  </tr>
	
	 <?php 
	 foreach ($refills as $row):
		echo "<tr>";
		echo "<td>".$row['no_seri']."</td>";
		echo "<td>".$row['tgl_keluar']."</td>";
		echo "<td>".$row['tgl_kembali']."</td>";
		echo "<td>".$row['status']."</td>";
		//echo "<td><a href='edit_barang?no_seri=$row->no_seri' target='_blank'>Edit</a>  <a href='hapus_barang?no_seri=$row->no_seri' target='_blank'>Delete</a></td>";
		echo "</tr>";
		
	endforeach;
	?>
	</table>  
  	<br/><br/>
  	<div>
		<span>Jumlah Tabung Keluar :  <input type='text' name='total_tabung' id='totalTabung' onkeydown="if (event.keyCode == 13) totalTabung()"/> <button id="click" onclick="totalTabung()">Pilih Tabung</button></span>
	</div>
	<br/><br/>
	<form name="input_refill" method="post" action="refill_input.php">
	<div id="po" style="width:640px;">
		<div class="container" style="width: 100%; border:2px solid #000;">
			<div class="title" style="text-align: left; margin-left: 30px; margin-top:3%;">Refill Tabung Tanggal : <?php echo date("Y/m/d") ?> <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d") ?>"/></div>
		<div id="txtHintTabung"></div>
		
		<input type="hidden" name="status" value="refill"/>
		<div class="button" style="text-align: left; margin-left: 30px; margin-top:3%;">
		
		</div>
	</div>
	</div>
	<input type="submit" name="submit" value="Input Refil"/>
	</form>
  
 </div>
  
</div><!-- /.container -->

<?php 
include 'footer.php';
?>