<?php 
include 'koneksi.php';

$id_service = $_POST['id_service'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$merk = $_POST['merk'];
$jenis = $_POST['jenis'];

mysqli_query($koneksi,"update service set nama='$nama', tgl='$tgl', merk='$merk', jenis='$jenis' where id_service='$id_service'");
 
header("location:index.php?pesan=update"); 
?>