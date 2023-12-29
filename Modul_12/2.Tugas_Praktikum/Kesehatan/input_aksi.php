<?php
session_start(); // Mulai sesi

include "koneksi.php";

// Tangkap data dari formulir
$id_pasien = $_POST['id_pasien'];
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$jenis_kelamin = $_POST['jenis-kelamin'];
$keluhan = $_POST['keluhan'];

// Query untuk menambah data
$query = "INSERT INTO pasien (id_pasien, nama, usia, jenis_kelamin, keluhan) VALUES ('$id_pasien', '$nama', '$usia', '$jenis_kelamin', '$keluhan')";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil ditambahkan';
    header('Location: index.php');
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>