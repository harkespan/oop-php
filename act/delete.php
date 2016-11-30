<?php
	include "../classes/Kendaraan.php";

	$del = new Kendaraan();

	$id = $_GET['id'];
	$del->delKendaraan($id);

	header("Location:read.php");
?>