<?php
	include "../classes/Kendaraan.php";
	$data = new Kendaraan();
	$id = $_GET['id'];

	$rs = $data->getKendaraan($id);
	$dtk = mysqli_fetch_array($rs);
?>
<form method="post" action="">
Nama Kendaraan : <input type="text" name="nama" value="<?php echo $dtk['nama']?>"><br/>
Tahun Pembuatan : <input type="text" name="tahun" value="<?php echo $dtk['tahun']?>"><br/>
Warna Kendaraan : <input type="text" name="warna" value="<?php echo $dtk['warna']?>"><br/>
<input type="hidden" name="id" value="<?php echo $dtk['id']?>">
<input type="submit" value="Simpan" name="tombol">
</form>

<?php
	if(isset($_POST['tombol']))
	{
		$nama = $_POST['nama'];
		$tahun = $_POST['tahun'];
		$warna = $_POST['warna'];
		$id = $_POST['id'];
		$data->editKendaraan($nama,$tahun,$warna,$id);

		header("Location:read.php");
	}
?>
