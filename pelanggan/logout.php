<?php

// Mulai sesi
session_start();

// Hapus semua data sesi
$_SESSION = array();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lainnya setelah logout
header("location: login.php");
exit;

?>
