<?php
session_start();
include '../dom/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Lakukan insert data ke tabel "admin"
    $query = "INSERT INTO admin (username, password) VALUES ('$username', '$hashed_password')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $_SESSION['pesan'] = "Registrasi berhasil!";
        header("Location: ../login.php");
        exit;
    } else {
        $_SESSION['pesan'] = "Registrasi gagal. Silakan coba lagi.";
        header("Location: register.php");
        exit;
    }
}
