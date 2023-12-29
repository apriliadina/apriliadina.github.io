<?php 
include 'koneksi.php';

$id_pasien = $_POST['id_pasien'];
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$keluhan = $_POST['keluhan'];

mysqli_query($koneksi,"update pasien set nama='$nama', usia='$usia', jenis_kelamin='$jenis_kelamin', keluhan='$keluhan' where id_pasien='$id_pasien'");
 
header("location:index.php?pesan=update"); 
?>