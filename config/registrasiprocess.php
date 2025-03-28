<?php
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

        
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Registrasi berhasil!";
        } else {
            echo "Registrasi gagal: " . mysqli_error($conn);
        }
    } else {
        echo "Data tidak lengkap. Mohon isi semua kolom.";
    }
} else {
    echo "Akses ditolak!";
}
?>