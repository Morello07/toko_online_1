<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tampil transaksi</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>ID PELANGGAN</th>
                <th>ID TRANSAKSI</th>
                <th>ID PETUGAS</th>
                <th>TGL TRANSAKSI</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_transaksi = mysqli_query($conn,"SELECT * FROM transaksi");
            $no=0;
            while($data_transaksi = mysqli_fetch_array($qry_transaksi)){
                $no++;
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_transaksi['id_pelanggan'] ?></td>
                    <td><?= $data_transaksi['id_transaksi'] ?></td>
                    <td><?= $data_transaksi['id_petugas'] ?></td>
                    <td><?= $data_transaksi['tgl;_transaksi'] ?></td>
                    <td>
                        <a href="ubah_transaksi.php?id_transaksi=<?= $data_transaksi['id_transaksi'] ?>" class="btn btn-success">Ubah</a> | 
                        <a href="hapus_transaksi.php?id_transaksi=<?= $data_transaksi['id_transaksi'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>