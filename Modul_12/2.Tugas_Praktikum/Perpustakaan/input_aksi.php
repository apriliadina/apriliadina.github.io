<?php
session_start(); // Mulai sesi

include "koneksi.php";

// Tangkap data dari formulir
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$peminjam = $_POST['peminjam'];

// Query untuk menambah data
$query = "INSERT INTO buku (id_buku, judul, penulis, tahun, peminjam ) VALUES ('$id_buku', '$judul', '$penulis', '$tahun', '$peminjam')";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil ditambahkan';
    header('Location: index.php');
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>