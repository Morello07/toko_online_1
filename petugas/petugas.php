<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Tambah Petugas</title>
    <style>
        body {
            background-color: #393E46;
            color: #393E46;
            font-family: SF Pro Display, Bold;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 30px;
            background-color: #DFD0B8;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #607274;
        }
        .btn-custom {
            background-color: #607274;
            border-color: #607274;
            color: #DFD0B8;
            font-family: 'Roboto', sans-serif;
        }
        .btn-custom:hover {
            background-color: #506163;
            border-color: #506163;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center mb-4">Tambah Petugas</h3>
        <form action="proses_petugas.php" method="post">
            
            <div class="mb-3">
                <label for="nama_petugas" class="form-label">Nama Petugas</label>
                <input type="text" name="nama_petugas" id="nama_petugas" class="form-control">
            </div>

            <div class="mb-3">
                <label for="id_petugas" class="form-label">ID Petugas</label>
                <input type="text" name="id_petugas" id="id_petugas" class="form-control">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <input type="text" name="level" id="level" class="form-control">
            </div>
        
            <div class="d-grid">
                <input type="submit" name="simpan" value="Tambah Petugas" class="btn btn-custom">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
