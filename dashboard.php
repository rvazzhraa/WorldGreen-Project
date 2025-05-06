<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - WorldGreen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #F0FFF0;">

    <div class="container mt-5 text-center">
        <h2>Selamat Datang, <?php echo $_SESSION['user']; ?>!</h2>
        <p>Anda telah berhasil login.</p>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

</body>
</html>
