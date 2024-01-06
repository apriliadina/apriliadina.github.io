<?php
// Mulai atau lanjutkan sesi
session_start();

// Hapus semua variabel sesi
$_SESSION = array();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lain setelah logout
header("Location: index.php");
exit();
?>