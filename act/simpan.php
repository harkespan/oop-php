<?php
	error_reporting(E_ALL);
	include_once("../classes/Kendaraan.php");
	session_start();
	$act = new Kendaraan();

	$nama = $_POST['nama'];
	$thn = $_POST['tahun'];
	$wrn = $_POST['warna'];
	$nf =  $_FILES['userfile']['tmp_name'];
	$real = $_FILES['userfile']['name'];
	// $operator = $_SESSION['id'];
	
	move_uploaded_file($nf, '../uploads/'.$_FILES['userfile']['name']);

	$act->simpankendaraan($nama,$wrn,$thn,$real,$operator);
	#print_r($_FILES);

	header("Location:read.php");

?>
