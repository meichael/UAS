<?php
if(isset($_POST['save'])){
	$idpinjam = $_POST['idpinjam'];	
	$tglkembali = $_POST['tglkembali'];
	$kembali->tambah($idpinjam,$tglkembali);
}

?>