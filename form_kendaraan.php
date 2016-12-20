<?php
	session_start();
	if($_SESSION['is_logged']!=true)
	{
		header("Location:login.php?logout=true");
		exit;
	}
?>
<h4>Selamat Datang, <strong><?php echo $_SESSION['nama']?></strong></h4>
<p>
informasi : Anda login pada <?php echo date("d m Y H:i:s"),", browser : ", $_SERVER['HTTP_USER_AGENT'],", IP: ", $_SERVER['REMOTE_ADDR']?>
</p>
<form method="post" enctype="multipart/form-data" action="act/simpan.php">
Nama Kendaraan : <input type="text" name="nama"><br/>
Tahun Pembuatan : <input type="text" name="tahun"><br/>
Warna Kendaraan : <input type="text" name="warna"><br/>
Gambar : <input type="file" name="userfile"><br/>
<input type="submit" value="Simpan">
</form>

<br/>
<br/>
<a href="act/read.php">Lihat hasil input data</a><br/>
<a href="login.php?logout=true">Logout</a><br/>
