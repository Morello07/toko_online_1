<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah transaksi</h3>
    <form action="proses_transaksi.php" method="post">
        
    ID pelanggan :
        <input type="text" name="id_pelanggan" value="" class="form-control">
        <br/>

        ID transaksi : 
        <input type="text" name="id_transaksi" value="" class="form-control">
        <br/>

        ID petugas : 
        <input type="text" name="id_petugas" value="" class="form-control">
        <br/>

        TGL transaksi :
        <input type="text" name="tgl_transaksi" value="" class="form-control">
        <br/>
        
        <input type="submit" name="simpan" value="Tambah transaksi" class="btn btn-primary">
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>