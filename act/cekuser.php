<?php
	include "../classes/Users.php";
	$d  = new Users();

	$u = $_POST['uname'];
	$p = md5('GHE74629()$%^#Q&&#;;"FHWG7362hdfgbahl'.$_POST['upass']);

	$d->cekUser($u,$p);
	header("Location:../form_kendaraan.php");
?>