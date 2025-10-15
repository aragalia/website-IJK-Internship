<?php
session_start();

// Tentukan email dan password yang valid (misalnya untuk frontend)
$valid_email = "user@example.com"; // Ganti dengan email yang diinginkan
$valid_password = "password123"; // Ganti dengan password yang diinginkan

// Ambil data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// Periksa apakah email dan password sesuai
if ($email == $valid_email && $password == $valid_password) {
    // Login berhasil, set session
    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;

    // Redirect ke halaman index.php
    header("Location: index.php");
    exit();
} else {
    // Jika login gagal, arahkan kembali ke halaman login dengan pesan error
    echo "<script>alert('Email atau Password salah'); window.location.href='login.php';</script>";
}
?>
