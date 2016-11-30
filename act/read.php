<?php
	include "../classes/Kendaraan.php";

	$re = new Kendaraan();

	$rs = $re->getKendaraan();
	echo "Jumlah data ",mysqli_num_rows($rs);
?>
	<table border="1" cellpadding="5">
		<tr>
			<th>Nama Kendaraan</th>
			<th>Tahun Pembuatan</th>
			<th>Warna Kendaraan</th>
			<th>Aksi</th>
		</tr>
	<?php
		while ($data = mysqli_fetch_array($rs)) {
		?>
		<tr>
			<td><?php echo $data['nama']?></td>
			<td><?php echo $data['tahun']?></td>
			<td><?php echo $data['warna']?></td>
			<td><a href="edit.php?id=<?php echo $data['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $data['id']?>">Delete</a></td>
		</tr>
		<?php	
		}

	?>
	</table>