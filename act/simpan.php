<?php
	error_reporting(E_ALL);
	include_once("../classes/Kendaraan.php");

	$act = new Kendaraan();

	$nama = $_POST['nama'];
	$thn = $_POST['tahun'];
	$wrn = $_POST['warna'];

	$act->simpankendaraan($nama,$wrn,$thn);

	header("Location:read.php");

?>