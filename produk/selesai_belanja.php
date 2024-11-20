<?php
session_start();

include "../pelanggan/header.php";
include "koneksi.php";

// Simpan detail pembelian dari session ke dalam database
foreach ($_SESSION['keranjang'] as $id_produk => $detail) {
    $jumlah_beli = $detail['jumlah_beli'];
    // Query untuk menyimpan detail pembelian ke dalam database
}

// Kosongkan session keranjang setelah transaksi selesai
unset($_SESSION['keranjang']);

// Redirect ke halaman histori pembelian
header("Location: histori_pembelian.php");
exit();
?>
