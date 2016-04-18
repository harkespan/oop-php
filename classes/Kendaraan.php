<?php
	include("Koneksi.php");
	Class Kendaraan
	{
		function __construct()
		{
			$this->db = new Koneksi();
		}

		function getJenisKendaraan()
		{
			$rs = $this->db->query("SELECT * FROM kendaraan");
			return $rs;
		}
	}

?>