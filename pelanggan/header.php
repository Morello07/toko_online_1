<?php
session_start();
if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title></title>
    <style>
        body {
            padding-top: 70px;
            /* Mencegah navbar overlap content */
        }

        .navbar {
            background-color: #607274;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #393E46;
            transition: transform 0.3s;
        }

        .navbar-nav .nav-link:hover {
            transform: translateY(-3px);
            color : #393E46;
        }

        .navbar-nav .nav-link.active {
            font-weight: bold;
            color :#393E46;
        }

        .card {
            margin-top: 20px;
            color : #393E46;
        }
    </style>
</head>
<body></body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand"href="#"><i class="fas fa-store"></i>TokoOnline</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"> 
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'active' : ''; ?>" href="../pelanggan/home.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'show_produk.php') ? 'active' : ''; ?>" href="../produk/show_produk.php"><i class="fas fa-tag"></i> Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'histori_pembelian.php') ? 'active' : ''; ?>" href="../produk/histori_pembelian.php"><i class="fas fa-history"></i> Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'logout.php') ? 'active' : ''; ?>" href="../pelanggan/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </nav>

    <div class="container mt-4"> <!-- Container untuk konten -->
    </div> <!-- Penutup container konten -->
</body>

</html>