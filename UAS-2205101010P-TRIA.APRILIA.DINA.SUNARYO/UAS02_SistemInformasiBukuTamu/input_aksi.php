<?php
session_start(); // Mulai sesi

include "koneksi.php";

// Tangkap data dari formulir
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tgl = $_POST['tgl'];
$pesan = $_POST['pesan'];

// Query untuk menambah data
$query = "INSERT INTO tamu (id, nama, alamat, no_telp, tgl, pesan) VALUES ('$id', '$nama', '$alamat', '$no_telp', '$tgl', '$pesan')";

if (mysqli_query($koneksi, $query)) {
    $_SESSION['pesan'] = 'Data berhasil ditambahkan';
    header('Location: sibutam.php');
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>