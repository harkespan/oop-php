<?php
	include "../classes/Kendaraan.php";

	$del = new Kendaraan();

	$id = $_GET['id'];
	$data = $del->getKendaraan($id);
	$d = mysqli_fetch_array($data);
	
	unlink("../uploads/".$d['files']);
	$del->delKendaraan($id);

	header("Location:read.php");
?>
