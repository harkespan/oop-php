<?php
			try{
				$db = new PDO("mysql:localhost;dbname=test","root","");
				// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}



?>