<?php
include 'db/pdo.php';

$id_kategori = $_POST['id_kategori'];

$kategoris = getDataKategori($id_kategori);
var_dump($kategoris);
//$hapus_kategori = deleteKategori($id_kategori);

//$barangs = getDataBarang($no_seri);

//var_dump($barangs);

if (isset($hapus_kategori)){
	header("Location: $base_url/kategori.php?hapus=$nama_kategori");
}