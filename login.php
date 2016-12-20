<form method="post" action="act/cekuser.php">
Username : <input type="text" name="uname"><br/>
Password : <input type="password" name="upass"><br/>
<input type="submit" value="Simpan">
</form>

<?php
	if(isset($_GET['e']))
	{
		if($_GET['e']=="notfound")
		{
			echo "Anda tidak memiliki akses. Silakan membuat akun di ";
?>
		<a href="userbaru.php"> sini</a>
<?php
		}
	}

	if(isset($_GET['logout']))
	{
		if($_GET['logout']==true)
		{
			session_start();
			session_destroy();
		}
	}
?>
