<?php
	// include("Koneksi.php");
	class Kendaraan
	{
		function __construct()
		{
			$this->a = mysqli_connect("localhost","root","");
			mysqli_select_db($this->a,"test");
		}

		function getKendaraan($id=null)
		{
			$q = "SELECT * FROM kendaraan";
			if($id!=null)
			{
				$q .= " WHERE id=".$id;
			}
			$rs = mysqli_query($this->a,$q);
			return $rs;
		}

		function simpankendaraan($nama,$warna,$tahun)
		{
			mysqli_query($this->a,"INSERT INTO kendaraan (nama,warna,tahun) VALUES ('".$nama."','".$warna."','".$tahun."')");
		}

		function delKendaraan($id)
		{
			mysqli_query($this->a,"DELETE FROM kendaraan WHERE id=".$id);
		}

		function editKendaraan($nama,$tahun,$warna,$id)
		{

			mysqli_query($this->a,"UPDATE kendaraan SET nama='".$nama."',tahun='".$tahun."',warna='".$warna."' WHERE id=".$id);
		}

		function hello()
		{
			echo "Hello World";
		}
	}

?>