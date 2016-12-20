<?php
	class Users 
	{
		function __construct()
		{
			$this->db = mysqli_connect("localhost","root","");
			mysqli_select_db($this->db,"test");
		}
		
		function cekUser($uname,$pass)
		{
			$rs = mysqli_query($this->db,"SELECT * FROM user WHERE username='".$uname."' AND paswd='".$pass."'");
			if(mysqli_num_rows($rs)==0)
			{
				header("Location:login.php?e=notfound");
			}
			else
			{
				session_start();
				$data = mysqli_fetch_array($rs);
				$_SESSION['id'] = $data['id'];
				$_SESSION['user'] = $data['username'];
				$_SESSION['nama'] = $data['nama'];
				$_SESSION['is_logged'] = true;
				header("Location:form_kendaraan.php");
			}
		}

		function simpanUser($usr,$pass,$name)
		{
			mysqli_query($this->db,"INSERT INTO user (username,paswd,nama) VALUES ('".$usr."','".$pass."','".$name."')");
		}
	}
?>