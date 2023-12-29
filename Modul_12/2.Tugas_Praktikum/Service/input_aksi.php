<?php
session_start(); // Mulai sesi

include "koneksi.php";

// Tangkap data dari formulir
$id_service = $_POST['id_service'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$merk = $_POST['merk'];
$jenis = $_POST['jenis'];

// Query untuk menambah data
$query = "INSERT INTO service (id_service, nama, tgl, merk, jenis ) VALUES ('$id_service', '$nama', '$tgl', '$merk', '$jenis')";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil ditambahkan';
    header('Location: index.php');
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>