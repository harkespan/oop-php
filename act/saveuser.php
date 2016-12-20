<?php
	include "../classes/Users.php";
	$d  = new Users();

	$u = $_POST['uname'];
	$p = md5('GHE74629()$%^#Q&&#;;"FHWG7362hdfgbahl'.$_POST['upass']);
	$nm = $_POST['nama'];

	$d->simpanUser($u,$p,$nm);
	header("Location:../login.php");
?>