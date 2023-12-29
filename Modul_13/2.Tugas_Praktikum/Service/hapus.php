<?php 
include 'koneksi.php';

$id_service = $_GET['id_service'];
 
mysqli_query($koneksi,"delete from service where id_service='$id_service'");
 
header("location:index.php?pesan=hapus"); 
?>