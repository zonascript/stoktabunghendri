<?php 
	include "header.php";
//echo $_SESSION['username'];
//echo $_SESSION['permission'];
@$transaksis= getTransaksi();
?>

<div class="container">
  
  <div class="text-center">
    <!-- h1>Bootstrap starter template</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    <p class="lead">
    <?php 
		//echo "halo";
	?>
    </p-->
    
    <div id="tabung-expired">
    <p class="lead">Daftar Tabung Yang Mau Expired</p>
	<table border="1" cellpadding="10" cellspacing="0">
	  <tr>
	    <th>Nomor PO</th>
	    <th>Nomor Seri</th>
	    <th>Tanggal Keluar</th>
	    <th>Tanggal Kembali</th>
	    <th>Nama Customer</th>
	    <th>Alamat</th>
	    <th>Status</th>
	    <th>Expired</th>
	  </tr>
	
	 <?php 
	 $values = getMasaAktifTabung();
	 $day = $values[0]['value'];
	 //echo $day;
	 $yellow = $day - ($day/3);
	 //echo $yellow;
	foreach($transaksis as $row)
	{
		$now=time();
		$selling_date = strtotime($row['tgl_keluar']);
		$datediff = $now - $selling_date;
		$days = floor($datediff/(60*60*24));
	//	var_dump($row);
		if($days>=$yellow && $days<$day-1 && $row['status']=='terjual'){
			echo "<tr>";
			echo "<td>".$row['no_po']."</td>";
			echo "<td>".$row['no_seri']."</td>";
			echo "<td>".$row['tgl_keluar']."</td>";
			echo "<td>".$row['tgl_kembali']."</td>";
			echo "<td>".$row['nama_cust']."</td>";
			echo "<td>".$row['alamat']."</td>";
			echo "<td>".$row['status']."</td>";
			echo "<td style='background:yellow'>Hampir Expired</td>";
		} elseif ($days>=$day-1 && $row['status']=='terjual'){
			echo "<tr>";
			echo "<td>".$row['no_po']."</td>";
			echo "<td>".$row['no_seri']."</td>";
			echo "<td>".$row['tgl_keluar']."</td>";
			echo "<td>".$row['tgl_kembali']."</td>";
			echo "<td>".$row['nama_cust']."</td>";
			echo "<td>".$row['alamat']."</td>";
			echo "<td>".$row['status']."</td>";
			echo "<td style='background:red'>Sudah Expired</td>";
		} else {
			
		}
		echo "</tr>";
		
	}
	
	?>
	</table>
    </div>
    
  </div>
  
</div><!-- /.container -->

<?php 
	include "footer.php";
?>