<?php 
include 'koneksi.php';

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$peminjam = $_POST['peminjam'];

mysqli_query($koneksi,"update buku set judul='$judul', penulis='$penulis', tahun='$tahun', peminjam='$peminjam' where id_buku='$id_buku'");
 
header("location:index.php?pesan=update"); 
?>