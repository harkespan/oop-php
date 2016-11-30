<?php
	class Mahasiswa
	{
		function __construct($koneksi)
		{
			$this->db = $koneksi;
		}

		function getMhs()
		{
			$rs = $this->db->query("SELECT * FROM mhs");
			return $rs;
		}

		function hello()
		{
			echo "hello";
		}
	}
?>