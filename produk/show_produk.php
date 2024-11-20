<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>

    <style>

        .produk-heading {
            font-size: 2.25rem; /* setara dengan display-3 di Bootstrap */
            margin-bottom: 1.5rem; /* setara dengan mb-4 di Bootstrap */
            font-weight: bold; /* setara dengan fw-bold di Bootstrap */
            color : #DFD0B8;
        }

        .card {
            background-color: #DFD0B8 !important;
            color: #948979 !important;
            border: none !important;
            border-radius: 5px;
            padding: 1%;
        }

        .card-title {
            font-weight: bold;
            color: #393E46;
            font-size: 1.5rem;
            margin-bottom: 0.5rem; /* Menambahkan jarak antara card title dan deskripsi */
        }

        .card-text {
            color: #393E46;
            font-size: 1rem;
            font-family: SF pro Display;
        }

        .btn-primary {
            background-color: #607274 !important;
            border-color: #607274 !important;
            color: #DFD0B8 !important;
            font-weight: bold;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
            padding: 8px 16px;
            font-size: 0.9rem;
            /* Ukuran font dan padding tombol */
        }

        .btn-primary:hover {
            background-color: #393E46;
            border-color: #393E46;
            color: #393E46 !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/style.css">
</head>
<body style="background-color: #393E46;">
    <?php
    include "../pelanggan/header.php";
    ?>

    <div class="container content">
        <h2 class="produk-heading">Daftar produk</h2>

        <div class="row">
            <?php
            include "koneksi.php";

            $qry_produk = mysqli_query($conn, "SELECT * FROM produk");

            while ($dt_produk = mysqli_fetch_array($qry_produk)) {
                ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="../assets/foto_produk/<?= $dt_produk['foto_produk'] ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $dt_produk['nama_produk'] ?></h5>
                            <p class="card-text"><?= substr($dt_produk['deskripsi'], 0, 20) ?></p>
                            <a href="beli.php?id_produk=<?= $dt_produk['id_produk'] ?>" class="btn btn-primary" style="lead mb-4 fw-bold;">Beli</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <?php
    include "../pelanggan/footer.php";
    ?>
</body>
</html>
