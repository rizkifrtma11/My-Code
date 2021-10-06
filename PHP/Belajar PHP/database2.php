<?php 

// Konek ke database
$conn = mysqli_connect("localhost", "root", "", "databaserizki");

// mengabmbil data dari tabel database / query data
$result = mysqli_query($conn, "SELECT * FROM siswa");

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
	<h1>Tabel Data Siswa</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>Absen</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>NISN</th>
			<th>Jurusan</th>
			<th>Gambar</th>
		</tr>
		<tr>
			<?php $i = 1; ?>
			<?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
		</tr>
		<tr>
			<td><?php // echo "$i" ?>
				<?= $row["Absen"] ?>
			</td>
			<td><a href="">Ubah</a> | <a href="">Hapus</a>
			</td>
			<td><?= $row["Nama"]?></td>
			<td><?= $row["NISN"] ?></td>
			<td><?= $row["Jurusan"] ?></td>
			<td><?= $row["Gambar"] ?></td>
		</tr>
			<?php // $i++; ?>
			<?php endwhile; ?>
		
	</table>

</body>
</html>