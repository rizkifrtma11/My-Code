<?php 
require 'connect.php';
if (isset($_POST['insert'])) { // ['ini adalah nama dari masing2 form']
	$nama      = $_POST['nama'];
	$ttl       = $_POST['ttl'];
	$handphone = $_POST['handphone']; 
	$email     = $_POST['email'];
	$alamat    = $_POST['alamat'];
	$nisn      = $_POST['nisn'];
	$sekolah   = $_POST['sekolah'];
	$jurusan   = $_POST['jurusan'];

	$sql = 'INSERT INTO biodata (nama, ttl, handphone, email, alamat, nisn, sekolah, jurusan) 
	VALUES ("'.$nama.'", "'.$ttl.'", "'.$handphone.'", "'.$email.'", "'.$alamat.'", "'.$nisn.'", "'.$sekolah.'", "'.$jurusan.'")';

	$query = mysqli_query($conn, $sql);
	if ($query) {
		header('location: login.php');
	} else {
		echo("<h3>Gagal Melakukan Proses Registrasi, Harap Coba Lagi Nanti</h3>");
	}
}
?>