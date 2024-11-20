<?php include "../pelanggan/header.php"; ?>
<style>
    body {
        background-color: #393E46;
    }

    table {
        background-color: #DFD0B8;
        color: #393E46;
        border-collapse: collapse; /* Menggabungkan batas antar sel */
        width: 100%; /* Lebar tabel 100% dari container */
        border-radius: 8px; /* Mengatur border radius untuk sudut tabel */
        overflow: hidden; /* Menghilangkan overflow konten tabel */
        margin-bottom: 0; /* Menghilangkan margin bawah */
    }

    th, td {
        padding: 10px;
        text-align: center;
        color: #393E46; /* Warna font untuk isi tabel */
        border-bottom: 1px solid #393E46; /* Tambahkan garis bawah */
    }

    th {
        font-weight: bold;
        border-top: 1px solid #393E46; /* Tambahkan garis atas */
    }

    .btn-primary, .btn-danger {
        color: #DFD0B8 !important;
    }

    /* Style button beli */
    .btn-beli {
        background-color: #607274 !important;
        border-color: #607274 !important;
        color: #DFD0B8 !important;
        font-weight: bold;
        transition: background-color 0.3s, border-color 0.3s, color 0.3s;
        padding: 8px 16px;
        font-size: 0.9rem;
        border: none; /* Menghapus border */
        outline: none; /* Menghapus highlight saat focus */
    }

    .btn-beli:hover {
        background-color: #393E46;
        border-color: #393E46;
        color: #393E46 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h2 {
        font-size: 2.25rem; /* setara dengan display-3 di Bootstrap */
        margin-bottom: 1.5rem; /* setara dengan mb-4 di Bootstrap */
        font-weight: bold; /* setara dengan fw-bold di Bootstrap */
        font-family: SF Pro Display; /* Mengatur jenis font */
        text-align: center; /* Posisi teks ke tengah */
        color: #DFD0B8; /* Warna teks */
        margin-top: 20px; /* Jarak atas dari elemen sebelumnya */
        margin-bottom: 20px; /* Jarak bawah dari elemen setelahnya */
    }

    p {
        font-size: 2rem; /* setara dengan display-3 di Bootstrap */
        margin-bottom: 1.5rem; /* setara dengan mb-4 di Bootstrap */
        font-weight: bold; /* setara dengan fw-bold di Bootstrap */
        font-family: SF Pro Display; /* Mengatur jenis font */
        text-align: left; /* Posisi teks ke kiri */
        color: #393E46; /* Warna teks */
        margin-top: 1px; /* Jarak atas dari elemen sebelumnya */
        margin-bottom: 1px; /* Jarak bawah dari elemen setelahnya */
    }

    p.additional-message {
        font-size: 1.2rem; /* Ukuran font */
        text-align: left; /* Posisi teks ke tkiri*/
        color: #393E46; /* Warna teks */
        margin-top: 1px; /* Jarak atas dari elemen sebelumnya */
    }

    /* Gaya untuk card */
    .empty-cart-card {
        background-color: #DFD0B8; /* Warna background kartu */
        border-radius: 8px; /* Mengatur border radius */
        padding: 20px; /* Padding kartu */
        text-align: center; /* Posisi teks ke tengah */
        margin-top: 20px; /* Jarak atas dari elemen sebelumnya */
        margin-bottom: 20px; /* Jarak bawah dari elemen setelahnya */
        width: 600px; /* Lebar kartu */
        max-width: 90%; /* Lebar maksimum kartu */
        height: auto; /* Tinggi kartu */
    }

    .btn-kembali {
        background-color: #607274 !important;
        border-color: #607274 !important;
        color: #DFD0B8 !important;
        font-weight: bold;
        transition: background-color 0.3s, border-color 0.3s, color 0.3s;
        padding: 8px 16px;
        font-size: 0.9rem;
        margin-right: 10px;
    }

    .btn-kembali:hover {
        background-color: #393E46;
        border-color: #393E46;
        color: #393E46 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-home {
        background-color: #607274 !important;
        border-color: #607274 !important;
        color: #DFD0B8 !important;
        font-weight: bold;
        transition: background-color 0.3s, border-color 0.3s, color 0.3s;
        padding: 8px 16px;
        font-size: 0.9rem;
    }

    .btn-home:hover {
        background-color: #393E46;
        border-color: #393E46;
        color: #393E46 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>

<h2>Keranjang Belanja Anda</h2>
<div class="container">
    <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_harga = 0;
                foreach ($_SESSION['cart'] as $key_produk => $val_produk): 
                ?>
                    <tr>
                    <td><?=($key_produk+1)?></td>
                    <td><?=$val_produk['nama_produk']?></td>
                    <td><?=$val_produk['harga']?></td>
                    <td><?=$val_produk['qty']?></td>
                    <td><?=$subtotal = $val_produk['harga'] * $val_produk['qty'];
                $total_harga += $subtotal;?></td>
                    <td>
                        <a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a>
                    </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" align="right"><strong>Total Harga:</strong></td>
                    <td><?=$total_harga?></td>
                    <td>
                        <a href="hapus_semua_cart.php" class="btn btn-danger"><strong>Hapus Semua</strong></a>
                    </td>
                </tr>
            </tfoot>
        </table>
        <a href="show_produk.php" class="btn btn-beli">Beli lagi</a>
        <a href="checkout.php" class="btn btn-beli">Check Out</a>

    <?php else: ?>
        <!-- Konten jika keranjang kosong -->
        <div class="card empty-cart-card">
            <div class="card-body">
                <p class="empty-cart-message">Keranjang belanja Anda telah kosong.</p>
                <p class="additional-message">Silahkan isi barang belanjaan Anda kembali !!</p>
                </br>
                <div style="text-align: left;">
                    <a href="show_produk.php" class="btn btn-kembali">Beli Lagi</a>
                    <a href="../pelanggan/home.php" class="btn btn-home">Home</a>
                </div>
            </div>
        </div>
    <?php endif ?>
</div>

<?php include "../pelanggan/footer.php"; ?>
