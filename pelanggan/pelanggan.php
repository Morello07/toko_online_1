<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Tambah Pelanggan</title>
    <style>
        body {
            background-color: #393E46;
            color: #393E46;
            font-family: SF Pro Display, bold;
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
        }
        .btn-custom:hover {
            background-color: #506163;
            border-color: #506163;
        }
        .password-toggle-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #607274;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center mb-4">Tambah Pelanggan</h3>
        <form action="proses_pelanggan.php" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pelanggan</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
                <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3 position-relative">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="passwordInput" class="form-control" required>
                <i class="fas fa-eye password-toggle-icon" onclick="togglePasswordVisibility()"></i>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control">
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">Telepon</label>
                <input type="text" name="telp" id="telp" class="form-control">
            </div>
            <div class="d-grid">
                <input type="submit" name="simpan" value="Tambah Pelanggan" class="btn btn-custom">
            </div>

        </form>
    </br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('passwordInput');
            const passwordToggleIcon = document.querySelector('.password-toggle-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggleIcon.classList.add('fa-eye-slash');
                passwordToggleIcon.classList.remove('fa-eye');
            } else {
                passwordInput.type = 'password';
                passwordToggleIcon.classList.add('fa-eye');
                passwordToggleIcon.classList.remove('fa-eye-slash');
            }
        }
    </script>
</body>
</html>
