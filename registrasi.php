<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eaf7e0;
        }
        .card {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
            <div class="card-header bg-success text-white text-center fs-4">
                <strong>Registrasi</strong>
            </div>
            <div class="card-body">
                <form action="config/registrasiprocess.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Daftar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <small>Sudah punya akun? <a href="login.php" class="text-success">Login di sini</a></small>
            </div>
        </div>
    </div>
</body>
</html>
