<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tgl = $_POST['tgl'];
$pesan = $_POST['pesan'];

mysqli_query($koneksi,"update tamu set nama='$nama', alamat='$alamat', no_telp='$no_telp', tgl='$tgl', pesan='$pesan' where id='$id'");
 
header("location:sibutam.php?pesan=update"); 
?>