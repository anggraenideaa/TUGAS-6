<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (empty($_POST['nama'])) {
		header("Location:redirectTugas2.php");
	} else if(empty($_POST['tempat'])) {
		header("Location:redirectTugas2.php");
	} else if(empty($_POST['gender'])) {
		header("Location:redirectTugas2.php");
	} else if(empty($_POST['pendidikan'])) {
		header("Location:redirectTugas2.php");
	} else if(empty($_POST['kelas'])) {
		header("Location:redirectTugas2.php");
	} else if(empty($_POST['namaOrtu'])) {
		header("Location:redirectTugas2.php");
	} else if(empty($_POST['telp'])) {
		header("Location:redirectTugas2.php");
	} else if(empty($_POST['alamat'])) {
		header("Location:redirectTugas2.php");
	} else if(empty($_POST['jadwal'])) {
		header("Location:redirectTugas2.php");
	} else if(empty($_POST['jam'])) {
		header("Location:redirectTugas2.php");
	} else if(empty($_POST['catatan'])) {
		header("Location:redirectTugas2.php");
	}
	?>
	<table>
		<tr>
			<td>Nama Lengkap </td>
			<td>
				: 
				<?php echo$_POST['nama'] ?>	
			</td>
		</tr>

			<tr>
				<td>Tempat & Tanggal Lahir </td>
				<td>
					: 
					<?php echo$_POST['tempat'].", ".$_POST['ttl']?>	
				</td>
			</tr>

			<tr>
				<td>Jenis Kelamin </td>
				<td>
					:
					<?php echo$_POST['gender']?>
				</td>
			</tr>

			<tr>
				<td>Pendidikan </td>
				<td>
					:
					<?php echo$_POST['pendidikan']?>
				</td>
			</tr>

			<tr>
				<td>Kelas </td>
				<td>
					:
					<?php echo$_POST['kelas'] ?>	
				</td>
			</tr>

			<tr>
				<td>Nama Orang Tua </td>
				<td>
					:
					<?php echo$_POST['namaOrtu'] ?>	
				</td>
			</tr>

			<tr>
				<td>No Telepon </td>
				<td>
					:
					<?php echo$_POST['telp'] ?>	
				</td>
			</tr>

			<tr>
				<td>Alamat Lengkap </td>
				<td>
					:
					<?php echo$_POST['alamat'] ?>	
				</td>
			</tr>

			<tr>
				<td>Jadwal Les </td>
				<td>
					:
					<?php echo$_POST['jadwal'] ?>	
				</td>
			</tr>

			<tr>
				<td>Jam Les </td>
				<td>
					:
					<?php echo$_POST['jam'] ?>	
				</td>
			</tr>

			<tr>
				<td>Catatan Khusus </td>
				<td>
					:
					<?php echo$_POST['catatan'] ?>	
				</td>
			</tr>
		</table>
</body>
</html>