<?php
include 'header.php';

$no_pos = getNoPO();

?>
<script type="text/javascript">
	function showFaktur(str)
	{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById("txtHintFaktur").innerHTML="";
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
	    document.getElementById("txtHintFaktur").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","cari_faktur.php?no_po="+str,true);
	xmlhttp.send();
	}
</script>

<div class="container">
  
  <div class="text-center">
  	
  	<div id='faktur' class="inner-faktur-choice"><span>Nomor Faktur : </span>
		<select name="no_po" id="no_po" onchange="showFaktur(this.value)">
		<option value=""></option>
		<?php foreach($no_pos as $row) :?>
		<option value="<?php echo $row['no_po'];?>"><?php echo $row['no_po'];?></option>
		<?php endforeach;?>
		</select>
	</div>
	
	<div id="txtHintFaktur"></div>
  
 </div>
  
</div><!-- /.container -->

<?php 
include 'footer.php';
?>