<?php 
include "../pelanggan/header.php";
?>

<style>
    body {
        background-color: #393E46;
    }

    h2 {
        color: #DFD0B8;
        font-size: 50px;
        font-weight: bold;
        margin-top: 2px; /* Mengatur margin atas */
        margin-bottom: 20px; /* Mengatur margin bawah */
        margin-left: 5px; /* Mengatur margin kiri */
        font-family: 'SF Pro Display'; /* Menyesuaikan gaya font */
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #DFD0B8; /* Warna background sesuai dengan yang diinginkan */
        color: #393E46; /* Warna font untuk kontras yang baik */
        border-radius: 5px; /* Membuat sudut tabel sedikit melengkung */
    }

    th, td {
        padding: 8px;
        border-bottom: 1px solid #393E46; /* Garis bawah setiap baris */
        text-align: left;
        color: #393E46; /* Warna font untuk isi tabel */
    }

    th {
        background-color: #393E46; /* Warna latar belakang untuk header */
        color: #393E46; /* Warna font untuk header */
    }

    tr:hover {
        background-color: #A8DADC; /* Warna latar belakang saat hover */
    }

    .alert {
        padding: 5px 10px;
        border-radius: 5px;
        color: #DFD0B8; /* Warna font untuk teks dalam label */
        font-weight: SF Pro Dispaly; /* Membuat teks dalam label menjadi tebal */
    }

    .alert-success {
        background-color: #393E46; /* Warna latar belakang untuk status pembelian yang selesai */
    }

    .alert-pending {
        background-color: #3B5249; /* Warna latar belakang untuk status pembelian yang sedang diproses */
    }

    .alert-cancelled {
        background-color: #A0153E; /* Warna latar belakang untuk status pembelian yang dibatalkan */
    }
</style>

<div class="container">
    <h2>Histori Pembelian Produk</h2>
    <table class="table table-hover table-striped">
        <thead>
            <th>NO</th><th>Tanggal Pembelian</th><th>Nama Produk</th><th>Harga</th><th>Jumlah Beli</th><th>Total Harga</th><th>Status</th>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";

            $qry_histori = mysqli_query($conn, "SELECT * FROM pembelian_produk ORDER BY id_pembelian_produk DESC");

            if (!$qry_histori) {
                die("Kesalahan pada kueri: " . mysqli_error($conn));
            }

            $no = 0;
            while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                $no++;
                $qry_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '".$dt_histori['id_produk']."'");

                if ($qry_produk && mysqli_num_rows($qry_produk) > 0) {
                    $dt_produk = mysqli_fetch_array($qry_produk);
                    $nama_produk = $dt_produk['nama_produk'];
                    $harga = $dt_produk['harga'];
                    $jumlah_beli = $dt_histori['qty'];
                    $total_harga = $dt_histori['total_harga'];
                    $tgl_pembelian = $dt_histori['tgl_pembelian']; // Perbaikan: Ganti 'tgl_pembelian' menjadi 'tgl_pembelian'
                    
                    $status_pembelian = "<label class='alert alert-success'>Selesai</label>";
                    
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$tgl_pembelian?></td> <!-- Perbaikan: Gunakan variabel $tgl_pembelian yang telah diambil dari hasil query -->
                        <td><?=$nama_produk?></td>
                        <td><?=$harga?></td>
                        <td><?=$jumlah_beli?></td>
                        <td><?=$total_harga?></td>
                        <td><?=$status_pembelian?></td>
                    </tr>
                    <?php
                } else {
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$dt_histori['tgl_pembelian']?></td>
                        <td colspan="4">Produk Tidak Ditemukan</td>
                        <td><?=$status_pembelian?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>

<?php 
include "../pelanggan/footer.php";
?>
