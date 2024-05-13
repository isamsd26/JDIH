<?php
session_start();
include '../dom/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $query = "INSERT INTO user (username, password, role_id) VALUES ('$username', '$password', 1)";
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['pesan'] = "Akun berhasil dibuat. Silakan login.";
        header("Location: ../login.php");
        exit;
    } else {
        $_SESSION['pesan'] = "Terjadi kesalahan. Silakan coba lagi.";
        header("Location: register.php");
        exit;
    }
}
