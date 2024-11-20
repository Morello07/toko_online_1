<?php 
    include "../pelanggan/header.php";
    include "koneksi.php";
    $qry_detail_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<style>
    body{
        background-color: #393E46;
    }

    .card {
        color: #948979 !important;
        border: none !important;
        border-radius: 5px;
        padding: 2%;
    }

    .judul-beli {
        color: #DFD0B8;
        font-size: 50px;
        font-weight: bold;
        margin-top: 2px; /* Mengatur margin atas */
        margin-bottom: 20px; /* Mengatur margin bawah */
        margin-left: 15px; /* Mengatur margin kiri */
        font-family: 'SF Pro Display'; /* Menyesuaikan gaya font */
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

     /* Menyesuaikan warna teks pada value "Jumlah beli" */
     input[type="number"] {
        background-color: #DFD0B8 ;
        color: #607274;
        border: none; /* Menghapus border */
        outline: none; /* Menghapus highlight saat focus */

    }

</style>

<div class="container-fluid" style="background-color: #393E46; padding: 20px; height: 100vh; overflow-y: auto;">
    <h1 class="judul-beli">Beli</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="background-color: #DFD0B8;">
                <img src="../assets/foto_produk/<?=$dt_produk['foto_produk']?>" class="card-img-top">
            </div>
        </div>
        <div class="col-md-8">
            <form action="masukkan_keranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <td style="color: #DFD0B8; font-weight: bold;">Nama produk</td><td style="color: #DFD0B8;"><?=$dt_produk['nama_produk']?></td>
                        </tr>
                        <tr>
                            <td style="color: #DFD0B8; font-weight: bold;">Deskripsi</td><td style="color: #DFD0B8;"><?=$dt_produk['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td style="color: #DFD0B8; font-weight: bold;">Harga</td><td style="color: #DFD0B8;"><?=$dt_produk['harga']?></td>
                        </tr>
                        <tr>
                            <td style="color: #DFD0B8; font-weight: bold;">Jumlah beli</td><td style="color: #DFD0B8;"><input type="number" name="jumlah_beli" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="btn btn-primary" type="submit" value="Beli"></td>
                        </tr>
                    </thead>
                </table>
            </form>
        </div>
    </div>
</div>
<?php 
    include "../pelanggan/footer.php";
?>
<script>
    function hitungTotal() {
        var harga = <?=$dt_produk['harga']?>; // Ambil harga dari PHP
        var jumlahBeli = document.getElementById("jumlah_beli").value;
        var totalHarga = harga * jumlahBeli;
        document.getElementById("total_harga").value = totalHarga;
    }
</script>