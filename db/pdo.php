<?php
// koneksi ke database

session_start();
$base_url = "http://92.222.71.15/stoktabunghendri";

date_default_timezone_set("ASIA/MAKASSAR");


if(!isset($_SESSION['username'])){
	$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	//$_SESSION['actual_link']=$actual_link;
	if($actual_link != $base_url."/login.php") {
		header("Location: $base_url/login.php");
	}
}

global $transaksi;
//$base_url = "http://localhost/stoktabunghendri";
function testdb_connect() {
$dbh = new PDO("mysql:host=localhost;dbname=stoktabungtmp", "root", "slamdunk23");
     return ($dbh);
}

function input_kategori($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("INSERT INTO kategori (nama_kategori) VALUES(:field1)");
	$stmt->execute(array(':field1' => $a));
	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($affected_rows);
}

function input_barang($a,$b,$c,$d,$e,$f) {
	$db = testdb_connect();
	$stmt = $db->prepare("INSERT INTO barang (no_seri,no_ketok,harga_dasar,harga_jual,status,kategori) VALUES(:field1,:field2,:field3,:field4,:field5,:field6)");
	$stmt->execute(array(':field1' => $a, ':field2' => $b, ':field3' => $c, ':field4' => $d, ':field5' => $e, ':field6' => $f));
	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($affected_rows);
}

function input_customer($a,$b,$c) {
	$db = testdb_connect();
	$stmt = $db->prepare("INSERT INTO customer (nama_cust,alamat,no_telp) VALUES(:field1,:field2,:field3)");
	$stmt->execute(array(':field1' => $a, ':field2' => $b, ':field3' => $c));
	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($affected_rows);
}

function input_user($a,$b,$c) {
	$db = testdb_connect();
	$stmt = $db->prepare("INSERT INTO user_permit (username,password,permission) VALUES(:field1,:field2,:field3)");
	$stmt->execute(array(':field1' => $a, ':field2' => $b, ':field3' => $c));
	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($affected_rows);
}

function editKategori($a,$b) {
	$db = testdb_connect();
	$stmt = $db->prepare("UPDATE kategori SET nama_kategori=:field2 WHERE id_kategori=:field1");
	$stmt->execute(array(':field1' => $a, ':field2' => $b));
	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($affected_rows);
}

function editBarang($a,$b,$c,$d,$e,$f,$g) {
	$db = testdb_connect();
	$stmt = $db->prepare("UPDATE barang SET no_seri=:field2 ,no_ketok=:field3 ,harga_dasar=:field4 ,harga_jual=:field5 ,status=:field6 ,kategori=:field7 WHERE no_id=:field1");
	$stmt->execute(array(':field1' => $a, ':field2' => $b, ':field3' => $c, ':field4' => $d, ':field5' => $e, ':field6' => $f, ':field7' => $g));
	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($affected_rows);
}

//function editBarang($a,$b,$c,$d,$e) {
//	$db = testdb_connect();
//	$stmt = $db->prepare("UPDATE barang SET no_seri=:field2 ,no_ketok=:field3 ,harga_dasar=:field4 ,harga_jual=:field5 WHERE no_id=:field1");
//	$stmt->execute(array(':field1' => $a, ':field2' => $b, ':field3' => $c, ':field4' => $d, ':field5' => $e));
//	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($affected_rows);
//}

function editCustomer($a,$b,$c,$d) {
	$db = testdb_connect();
	$stmt = $db->prepare("UPDATE customer SET nama_cust=:field2 ,alamat=:field3 ,no_telp=:field4 WHERE no_cust=:field1");
	$stmt->execute(array(':field1' => $a, ':field2' => $b, ':field3' => $c, ':field4' => $d));
	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($affected_rows);
}

function editUser($a,$b,$c,$d) {
	$db = testdb_connect();
	$stmt = $db->prepare("UPDATE user_permit SET username=:field2 ,password=:field3 ,permission=:field4 WHERE no_id=:field1");
	$stmt->execute(array(':field1' => $a, ':field2' => $b, ':field3' => $c, ':field4' => $d));
	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($affected_rows);
}

function getDataUser($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("SELECT * FROM user_permit WHERE username=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getDataUserById($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("SELECT * FROM user_permit WHERE no_id=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getAllDataUser() {
	$db = testdb_connect();
	$stmt = $db->query("SELECT * FROM user_permit");
//	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getMasaAktifTabung() {
	$db = testdb_connect();
	$stmt = $db->query("SELECT * FROM one_click_setting WHERE setting_name='masa aktif tabung'");
//	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function updateMasaAktifTabung($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("UPDATE one_click_setting SET value=:field1 WHERE setting_name='masa aktif tabung'");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

//function input_jumlah($a,$b) {
//	$db = testdb_connect();
//	$stmt = $db->prepare("INSERT INTO stok_barang (kode_barang,jumlah_stok) VALUES(:field1,:field2)");
//	$stmt->execute(array(':field1' => $a, ':field2' => $b));
//	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($affected_rows);
//}

//function edit_jumlah($a,$b) {
//	$db = testdb_connect();
//	$stmt = $db->prepare("UPDATE stok_barang SET jumlah_stok=:field1 WHERE kode_barang=:field2");
//	$stmt->execute(array(':field1' => $b, ':field2' => $a));
//	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($affected_rows);
//}

//function getData($a,$b){
//	$db = testdb_connect();
//	$stmt = $db->query("SELECT * FROM $a LEFT JOIN $b ON $a.kode_barang = $b.kode_barang ORDER BY $a.kode_barang ASC");
//	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($fetch_array);
//}

//function getCode() {
//	$db = testdb_connect();
//	$stmt = $db->query("SELECT kode_barang,nama_barang FROM barang ORDER BY kode_barang ASC");
//	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($fetch_array);
//}

//function getDataBarang($a) {
//	$db = testdb_connect();
//	$stmt = $db->prepare("SELECT barang.kode_barang,barang.nama_barang,barang.harga_jual,stok_barang.jumlah_stok FROM barang,stok_barang WHERE barang.kode_barang = stok_barang.kode_barang AND barang.kode_barang=:field1");
//	$stmt->execute(array(':field1' => $a));
//	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($fetch_array);
//}

function getDataKategori($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("SELECT * FROM kategori WHERE id_kategori=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getDataBarang($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("SELECT * FROM barang WHERE no_seri=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getDataKategoriBarang($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("SELECT kategori FROM barang WHERE no_seri=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getDataOneBarang() {
	$db = testdb_connect();
	$stmt = $db->query("SELECT * FROM barang LIMIT 1");
	//$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getDataCustomer($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("SELECT * FROM customer WHERE nama_cust=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getDataCustomer2($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("SELECT * FROM customer WHERE no_cust=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getDataPO() {
	$db = testdb_connect();
	$stmt = $db->query("SELECT * FROM transaksi ORDER BY no_transaksi DESC LIMIT 1");
	//$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getKategori() {
	$db = testdb_connect();
	$stmt = $db->query("SELECT * FROM kategori ORDER BY id_kategori ASC");
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getBarang() {
	$db = testdb_connect();
//	$stmt = $db->query("SELECT * FROM barang WHERE barang.status = 'Available' ORDER BY no_id ASC");
	$stmt = $db->query("SELECT * FROM barang ORDER BY no_id ASC");
	//$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getBarangAvail() {
	$db = testdb_connect();
	$stmt = $db->query("SELECT * FROM barang WHERE barang.status = 'Available' ORDER BY no_id ASC");
//	$stmt = $db->query("SELECT * FROM barang ORDER BY no_id ASC");
	//$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getCustomer() {
	$db = testdb_connect();
	$stmt = $db->query("SELECT * FROM customer ORDER BY no_cust ASC");
	//$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getTransaksi() {
	$db = testdb_connect();
//	$stmt = $db->query("SELECT * FROM barang WHERE barang.status = 'Available' ORDER BY no_id ASC");
	$stmt = $db->query("SELECT * FROM transaksi ORDER BY no_transaksi ASC");
	//$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getTransaksiPerPo($a) {
	$db = testdb_connect();
//	$stmt = $db->query("SELECT * FROM barang WHERE barang.status = 'Available' ORDER BY no_id ASC");
	$stmt = $db->prepare("SELECT * FROM transaksi WHERE transaksi.no_po = :field1 ORDER BY no_transaksi ASC");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getTransaksiRefill() {
	$db = testdb_connect();
	$stmt = $db->query("SELECT * FROM transaksi_refil ORDER BY no_transaksi ASC");
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getNoPO() {
	$db = testdb_connect();
//	$stmt = $db->query("SELECT * FROM barang WHERE barang.status = 'Available' ORDER BY no_id ASC");
	$stmt = $db->query("SELECT no_po FROM transaksi GROUP BY no_po");
	//$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}


function getTransaksiTerjual() {
	$db = testdb_connect();
//	$stmt = $db->query("SELECT * FROM barang WHERE barang.status = 'Available' ORDER BY no_id ASC");
	$stmt = $db->query("SELECT * FROM transaksi WHERE status = 'terjual' ORDER BY no_transaksi ASC");
	//$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getTanggalTransaksiTerjual() {
	$db = testdb_connect();
//	$stmt = $db->query("SELECT * FROM barang WHERE barang.status = 'Available' ORDER BY no_id ASC");
	$stmt = $db->query("SELECT tgl_keluar FROM transaksi WHERE status = 'terjual' ORDER BY no_transaksi ASC");
	//$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getTransaksiRefillKeluar() {
	$db = testdb_connect();
//	$stmt = $db->query("SELECT * FROM barang WHERE barang.status = 'Available' ORDER BY no_transaksi ASC");
	$stmt = $db->query("SELECT * FROM transaksi_refil WHERE status = 'refill' ORDER BY no_transaksi ASC");
	//$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function getTransaksiFromPO($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("SELECT * FROM transaksi WHERE transaksi.no_po = :field1 ORDER BY no_id ASC");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function inputTransaksi($a,$b,$c,$d,$e,$f,$g) {
	$db = testdb_connect();
	$stmt = $db->prepare("INSERT INTO transaksi (no_po,no_seri,kategori,tgl_keluar,nama_cust,alamat,status) VALUES(:field1,:field2,:field3,:field4,:field5,:field6,:field7)");
	$stmt->execute(array(':field1' => $a, ':field2' => $b, ':field3' => $c, ':field4' => $d, ':field5' => $e, ':field6' => $f, ':field7' => $g));
	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($affected_rows);
}

function inputTransaksiRefill($a,$b,$c) {
	$db = testdb_connect();
	$stmt = $db->prepare("INSERT INTO transaksi_refil (no_seri,tgl_keluar,status) VALUES(:field1,:field2,:field3)");
	$stmt->execute(array(':field1' => $a, ':field2' => $b, ':field3' => $c));
	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($affected_rows);
}


function updateBarangKeluar($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("UPDATE barang SET status='Not Available' WHERE no_seri=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function updateBarangKeluarRefill($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("UPDATE barang SET status='Refill' WHERE no_seri=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function updateBarangMasuk($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("UPDATE barang SET status='Available' WHERE no_seri=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function updateTransaksiRetur($a,$b) {
	$db = testdb_connect();
	$stmt = $db->prepare("UPDATE transaksi SET tgl_kembali=:field2,status='kembali' WHERE no_seri=:field1");
	$stmt->execute(array(':field1' => $a, ':field2' => $b));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function updateTransaksiReturRefill($a,$b) {
	$db = testdb_connect();
	$stmt = $db->prepare("UPDATE transaksi_refil SET tgl_kembali=:field2,status='kembali' WHERE no_seri=:field1");
	$stmt->execute(array(':field1' => $a, ':field2' => $b));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function deleteKategori($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("DELETE FROM kategori WHERE id_kategori=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function deleteBarang($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("DELETE FROM barang WHERE no_seri=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}

function deleteCustomer($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("DELETE FROM customer WHERE no_cust=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}


function deleteUser($a) {
	$db = testdb_connect();
	$stmt = $db->prepare("DELETE FROM user_permit WHERE no_id=:field1");
	$stmt->execute(array(':field1' => $a));
	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return($fetch_array);
}
//function input_transaksi($a) {
//	$db = testdb_connect();
//	$stmt = $db->prepare("INSERT INTO transaksi (tanggal,kode_barang,nama_barang,nama_konsumen,alamat,harga_jual,jumlah_dibeli) VALUES(:field1,:field2,:field3,:field4,:field5,:field6,:field7)");
//	$stmt->execute(array(':field1' => $a["tanggal"], ':field2' => $a["kode_barang"], ':field3' => $a["nama_barang"], ':field4' => $a["nama_konsumen"], ':field5' => $a["alamat"], ':field6' => $a["harga_jual"], ':field7' => $a["jumlah_dibeli"]));
//	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($affected_rows);
//}

//function getTransTemp(){
//	$db = testdb_connect();
//	$stmt = $db->query("SELECT * FROM transaksi_temp ORDER BY id_transaksi ASC");
//	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($fetch_array);
//}

//function deleteTransTemp() {
//	$db = testdb_connect();
//	$stmt = $db->query("DELETE FROM transaksi_temp");
//	//$stmt->execute(array(':field1' => $a["kode_barang"]));
//	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($fetch_array);
//}

//function getTransNota(){
//	$db = testdb_connect();
//	//$date = date("Y-m-d");
//	$stmt = $db->query("SELECT * FROM transaksi_temp LEFT JOIN transaksi ON transaksi_temp.id_transaksi = transaksi.id_transaksi ORDER BY transaksi_temp.id_transaksi ASC");
//	//$stmt->execute(array(':field1' => $date));
//	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($fetch_array);
//}

//function transStok($a) {
//	$db = testdb_connect();
//	$stmt = $db->prepare("SELECT * FROM stok_barang WHERE kode_barang=:field1");
//	$stmt->execute(array(':field1' => $a["kode_barang"]));
//	$stok_row = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	$initiate_stok = $stok_row[0]["jumlah_stok"];
//	$stmt2 = $db->prepare("SELECT jumlah_dibeli FROM transaksi_temp WHERE kode_barang=:field1");
//	$stmt2->execute(array(':field1' => $a["kode_barang"]));
//	$stok_buy = $stmt2->fetchAll(PDO::FETCH_ASSOC);
//  	$stok_buy = $stok_buy[0]["jumlah_dibeli"];
//	$new_stok = $initiate_stok - $stok_buy;
//	$stmt3 = $db->prepare("UPDATE stok_barang SET jumlah_stok=:field1 WHERE kode_barang=:field2");
//	$stmt3->execute(array(':field1' => $new_stok, ':field2' => $a["kode_barang"]));
//	$affected_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($affected_rows);
//}

//function getTransAll(){
//	$db = testdb_connect();
//	$stmt = $db->query("SELECT * FROM transaksi ORDER BY id_transaksi ASC");
//	$fetch_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	return($fetch_array);
//}

function makePDF() {
	/**
	 * HTML2PDF Librairy - example
	 *
	 * HTML => PDF convertor
	 * distributed under the LGPL License
	 *
	 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
	 *
	 * isset($_GET['vuehtml']) is not mandatory
	 * it allow to display the result in the HTML format
	 */
	
	    // get the HTML
	    ob_start();
	    include(dirname(__FILE__).'/../nota.php');
	    $content = ob_get_clean();
	
	    // convert to PDF
	    require_once(dirname(__FILE__).'/../html2pdf.class.php');
	    try
	    {
	        $html2pdf = new HTML2PDF('P', 'A4', 'en');
	        $html2pdf->pdf->SetDisplayMode('fullpage');
	//      $html2pdf->pdf->SetProtection(array('print'), 'spipu');
	        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
	        $html2pdf->Output('nota.pdf');
	    }
	    catch(HTML2PDF_exception $e) {
	        echo $e;
	        exit;
	    }
	
}
