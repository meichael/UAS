<?php
if(isset($_POST['save'])){
	$kodea= $_POST['kodea'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$anggota->tambah($kodea,$nama,$keterangan);
	
}
?>