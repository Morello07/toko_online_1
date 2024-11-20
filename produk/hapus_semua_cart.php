<?php
    session_start();
    unset($_SESSION['cart']); // Menghapus semua isi dari variabel sesi 'cart'
    header('location: keranjang.php');
?>