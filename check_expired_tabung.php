<?php
include 'db/pdo_nonsession.php';

@$transaksis= getTransaksiTerjual();
//@$tanggal_transaksis= getTanggalTransaksiTerjual();
$content1 = '<div id="tabung-expired">
	<table border="1" cellpadding="10" cellspacing="0">
	  <tr>
	    <th>Nomor PO</th>
	    <th>Nomor Seri</th>
	    <th>Tanggal Keluar</th>
	    <th>Sisa Waktu Tabung</th>
	    <th>Nama Customer</th>
	  </tr>';
$content2 = '';

$values = getMasaAktifTabung();
$day = $values[0]['value'] - 1;

foreach ($transaksis as $row):
	$yellow = $day - ($day/3);
	$now=time();
	$selling_date = strtotime($row['tgl_keluar']);
	//$selling_date = strtotime('2015-08-29');
	$datediff = $now - $selling_date;
	$days = floor($datediff/(60*60*24));
	$remainingdays = $day - $days;
	if($days>=$yellow && $days<$day):
		$no_po = $row['no_po'];
		$no_seri = $row['no_seri'];
		$tgl_keluar = $row['tgl_keluar'];
		$nama_cust = $row['nama_cust'];
		
	  $content2tmp = '<tr>
		<td>'.$no_po.'</td>
		<td>'.$no_seri.'</td>
		<td>'.$tgl_keluar.'</td>
		<td>'.$remainingdays.' Hari</td>
		<td>'.$nama_cust.'</td>
		</tr>';
	  $content2 .= $content2tmp;
	  
	  $send_email=true;
	  
	endif;
endforeach;


$content3 = '</table>
    </div>';



if ($send_email==true):
	$email_target = "rully.lukman@gmail.com";
	$user_sender = "Reminder Tabung Oksigen";
	$email_subject = "Warning, Kami Mendeteksi Ada Tabung Yang Hampir Kadaluarsa";
	$email_message =  "Hi Hendri,<br/><br/>Berikut adalah daftar tabung yang harus segera ditarik, karena sudah masuk masa kadaluarsa (expired).<br/><br/>".$content1 . $content2 . $content3."<br/><br/>Terima kasih atas perhatiannya.<br/><br/>Salam,<br/><br/><br/>Administrator";
	mail($email_target,$email_subject,$email_message,"From : ".$user_sender);
endif;

?>


	</table>
    </div>