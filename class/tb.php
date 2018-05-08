<?php
if(isset($_POST['save'])){
	$idbuku = $_POST['idbuku'];
	$judul_buku = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];
	$jumlah = $_POST['jumlah'];
	
	$tambah = new Buku();
	$tambah->tambah($idbuku,$judul_buku,$penerbit,$tahun,$jumlah);
}

?>