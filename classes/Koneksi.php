<?php
	Class Koneksi
	{
		function __constuct()
		{
			try{
				$this->db = new PDO("mysql:localhost;dbname=test","root","");
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
	}


?>