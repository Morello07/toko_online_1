<?php 
    include "header.php";
?>
 <style>
    body{
      background-color: #393E46;
    }
    .card {
            background-color: #DFD0B8 !important;
            color: #948979 !important;
            border: none !important;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-weight: bold;
            color: #393E46;
            font-size: 1.5rem;
            /* Ukuran judul card */
        }

        .card-text {
            color: #393E46;
            font-size: 1 rem;
            /* Ukuran teks card */
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

        .special-name {
            color : #F3EEEA;
        }


 </style>

<body>
    <div class="container content">
            <div class="row">
                <div class="col-md-10   ">
                <h2 class="display-3 mb-4 fw-bold" style="color : #DFD0B8">Selamat datang, 
                </br>
                <span class ="special-name"><?= $_SESSION['nama'] ?></span>!</h2>
                <p class="lead mb-4 fw-bold" style="color : #DFD0B8" >Terima kasih telah mengunjungi toko online kami. Di sini Anda dapat menemukan berbagai produk-produk yang anda butuhkan dan anda dapat melakukan transaksi dengan mudah.</p>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Daftar Produk</h5>
                                <p class="card-text">Jelajahi daftar lengkap buku-buku yang tersedia di perpustakaan kami.</p>
                                </br>
                                <a href="../produk/show_produk.php" class="btn btn-primary" style="position: absolute; bottom: 10px; left: 30px;"><i class="fas fa-tag"></i> Lihat Produk</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Riwayat Pembelian</h5>
                                <p class="card-text" style="position: absolute; bottom: 20; width: 100%;">Pantau riwayat peminjaman buku Anda dan detail transaksi.</p>
                                <a href="../produk/histori_pembelian.php" class="btn btn-primary" style="position: absolute; bottom: 10px; left: 30px;"><i class="fas fa-history"></i> Lihat Riwayat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    include "footer.php";
?>