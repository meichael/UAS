<?php
if(isset($_POST['save'])){
	$idpinjam = $_POST['idpinjam'];
	$nim = $_POST['nim'];
	$idbuku = $_POST['idbuku'];
	$jumlahbuku = $_POST['jumlahbuku'];
	$penerbit = $_POST['penerbit'];
	$tglpinjam = $_POST['tglpinjam'];
	$tglkembali = $_POST['tglkembali'];
	
	$pinjam->tambah($idpinjam,$nim,$idbuku,$jumlahbuku,$penerbit,$tglpinjam,$tglkembali);
	

}

?>