<!DOCTYPE html>
<html>
<head>
	<title>Student Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#CCCCCC" font-face="arial">
	
	<div>
		<h2>Isi Biodata Siswa</h2>
		<center>
	<form method="post" action="input.php">
		<table cellpadding="10" cellspacing="0">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Masukkan Nama" class="input"></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td><input type="text" name="ttl" placeholder="Masukkan Tempat Tanggal Lahir" class="input"></td>
			</tr>
			<tr>
				<td>Handphone</td>
				<td>:</td>
				<td><input type="text" name="handphone" placeholder="Masukkan No. Handphone" class="input"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" placeholder="Masukkan Email" class="input"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea type="text" name="alamat" placeholder="Masukkan Alamat" class="alamat"></textarea></td>
			</tr>
			<tr>
				<td>NISN</td>
				<td>:</td>
				<td><input type="text" name="nisn" placeholder="Masukkan NISN" class="input"></td>
			</tr>
			<tr>
				<td>Sekolah</td>
				<td>:</td>
				<td><input type="text" name="sekolah" placeholder="Masukkan Sekolah" class="input"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><input type="text" name="jurusan" placeholder="Masukkan Jurusan" class="input"></td>
			</tr>
		</table>
	</center>
		<center>
			<input type="submit" name="insert" value="SUBMIT" class="button">
		</center>
	</div>
	</form>
</body>
</html>	