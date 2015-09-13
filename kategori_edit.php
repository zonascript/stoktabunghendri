<?php
include 'db/pdo.php';

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

$edit_kategori= editKategori($id_kategori, $nama_kategori);

//$edit_barang= editBarang($no_id, $no_seri, $no_ketok, $harga_dasar, $harga_jual);
if (isset($edit_kategori)){
	header("Location: $base_url/kategori.php?edit=$nama_kategori");
}
