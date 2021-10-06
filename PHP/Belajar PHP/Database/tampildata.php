<?php 

// Konek ke database
$conn = mysqli_connect("localhost", "root", "", "loginform");

// mengabmbil data dari tabel database / query data
$result = mysqli_query($conn, "SELECT * FROM biodata");

// ambil data (fetch) siswa dari object result
// mysqli_fetch_row()    || mengembalikan array numerik
// mysqli_fetch_assoc()  || mengembalikan array associative/string
// mysqli_fetch_array()  || mengembalikan array keduanya
// mysqli_fetch_object() || mengembalikan object

// $siswa = mysqli_fetch_row($result);
// var_dump($siswa[1]);

// $siswa = mysqli_fetch_assoc($result);
// var_dump($siswa[NISN]);

// $siswa = mysqli_fetch_array($result);
// var_dump($siswa);

// $siswa = mysqli_fetch_object($result);
// var_dump($siswa->Nama);

// while( $siswa = mysqli_fetch_assoc($result) ) {
// 	var_dump($siswa);
// };

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td colspan="10"><h2><center>Tabel Data Siswa</center></h2></td>
		</tr>
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>Tempat/Tanggal Lahir</th>
			<th>No. Handphone</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>NISN</th>
			<th>Sekolah</th>
			<th>Jurusan</th>
		</tr>
		<tr>
			<?php $i = 1; ?>
			<?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
		</tr>
		<tr>
			<td><?php echo "$i"; ?>
			</td>
			<td><a href="">Ubah</a> | <a href="">Hapus</a>
			</td>
			<td><?= $row["nama"]?></td>
			<td><?= $row["ttl"] ?></td>
			<td><?= $row["handphone"] ?></td>
			<td><?= $row["email"] ?></td>
			<td><?= $row["alamat"] ?></td>
			<td><?= $row["nisn"] ?></td>
			<td><?= $row["sekolah"] ?></td>
			<td><?= $row["jurusan"] ?></td>
		</tr>
			<?php $i++; ?>
			<?php endwhile; ?>
			<tr>
				<td colspan="10"><center>SELESAI</center></td>
			</tr>
		
	</table>

</body>
</html>