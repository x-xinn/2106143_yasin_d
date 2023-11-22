<?php

include './koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];

$query = "INSERT INTO jamaah VALUES (NULL, '$nik', '$nama', '$alamat', '$tanggal_lahir', '$jenis_kelamin', '$no_telp', '$email')";
mysqli_query($koneksi, $query);

header("Location: ./index.php");
exit;

?>
