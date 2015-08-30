<?php
include 'db/pdo_nonsession.php';

@$transaksis= getTransaksiTerjual();
//@$tanggal_transaksis= getTanggalTransaksiTerjual();
$i = "1";
$content = '';

$values = getMasaAktifTabung();
$day = $values[0]['value'] - 1;

foreach ($transaksis as $row):
	$yellow = $day - ($day/3);
	$now=time();
	$selling_date = strtotime($row['tgl_keluar']);
	//$selling_date = strtotime('2015-06-29');
	$datediff = $now - $selling_date;
	$days = floor($datediff/(60*60*24));
	$remainingdays = $day - $days;
	if($days>=$yellow && $days<$day):
		$no_po = $row['no_po'];
		$no_seri = $row['no_seri'];
		$tgl_keluar = $row['tgl_keluar'];
		$nama_cust = $row['nama_cust'];
		
	  $contenttmp = $i.'. Nomor PO : '.$no_po.'
    Nomor Seri : '.$no_seri.'
    Tanggal Keluar : '.$tgl_keluar.'
    Sisa Waktu Tabung : '.$remainingdays.'
    Nama Customer : '.$nama_cust.'

';
	  $content .= $contenttmp;
	  $i++;
	  $send_email=true;
	  
	endif;
endforeach;





if ($send_email==true):
	$email_target = "rully.lukman@gmail.com";
	$user_sender = "From : rully.lukman@gmail.com";
	$email_subject = "Warning, Kami Mendeteksi Ada Tabung Yang Hampir Kadaluarsa";
	$email_message =  "Hi Hendri,\n\nBerikut adalah daftar tabung yang harus segera ditarik, karena sudah masuk masa kadaluarsa (expired).\n\n".$content."\n\nTerima kasih atas perhatiannya.\n\nSalam,\n\n\nAdministrator";
	mail($email_target,$email_subject,$email_message,$user_sender);
endif;

?>


	</table>
    </div>
