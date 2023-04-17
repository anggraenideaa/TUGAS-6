<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Form Pendaftaran Bimbingan Belajar</h2>
	<form method="POST" action="postForm.php">
		<table>
			<tr>
				<td>Nama Lengkap </td>
				<td>
					: 
					<input type="text" name="nama"> 
				</td>
			</tr>

			<tr>
				<td>Tempat & Tanggal Lahir </td>
				<td>
					:
					<input type="text" name="tempat">
					<input type="date" name="ttl"> 
				</td>
			</tr>

			<tr>
				<td>Jenis Kelamin </td>
				<td>
					:
					<input type="radio" name="gender" value="Laki-laki"> Laki-laki
					<input type="radio" name="gender" value="Perempuan"> Perempuan
				</td>
			</tr>

			<tr>
				<td>Pendidikan </td>
				<td>
					:
					<input type="radio" name="pendidikan" value="SD"> SD
					<input type="radio" name="pendidikan" value="SMP"> SMP
					<input type="radio" name="pendidikan" value="SMA"> SMA
				</td>
			</tr>

			<tr>
				<td>Kelas </td>
				<td>
					:
					<input type="text" name="kelas">
				</td>
			</tr>

			<tr>
				<td>Nama Orang Tua </td>
				<td>
					:
					<input type="text" name="namaOrtu"> 
				</td>
			</tr>

			<tr>
				<td>No Telepon </td>
				<td>
					:
					<input type="text" name="telp"> 
				</td>
			</tr>

			<tr>
				<td>Alamat Lengkap </td>
				<td>
					:
					<textarea name="alamat" cols="45" rows="6"></textarea>
				</td>
			</tr>

			<tr>
				<td>Jadwal Les </td>
				<td>
					:
					<input type="checkbox" name="jadwal" value="Senin">Senin

					<input type="checkbox" name="jadwal" value="Selasa">Selasa

					<input type="checkbox" name="jadwal" value="Rabu">Rabu

					<input type="checkbox" name="jadwal" value="Kamis">Kamis

					<input type="checkbox" name="jadwal" value="Jumat">Jumat
				</td>
			</tr>

			<tr>
				<td>Jam Les </td>
				<td>
					:
					<input type="checkbox" name="jam" value="16.00 - 17.20 "> 16.00 - 17.20 

					<input type="checkbox" name="jam" value="16.30 - 17.50">16.30 - 17.50

					<input type="checkbox" name="jam" value="18.30 - 20.30 ">18.30 - 20.30 

					<input type="checkbox" name="jam" value="08.30 - 09.50">08.30 - 09.50
				</td>
			</tr>

			<tr>
				<td>Catatan Khusus </td>
				<td>
					:
					<textarea name="catatan" cols="45" rows="6"></textarea>
				</td>
			</tr>

			<td>
				<input type="submit" name="btnLogin" value="Submit">
				<input type="reset" name="Reset">	
			</td>
			

		</table>
	</form>

</body>
</html>