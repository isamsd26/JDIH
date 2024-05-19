<?php
session_start();
include '../dom/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil hash password dari tabel "admin" berdasarkan username
    $query = "SELECT username, password 
              FROM admin
              WHERE username = '$username'";

    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $admin_info = mysqli_fetch_assoc($result);
        $hashed_password = $admin_info['password'];

        // Verifikasi password yang diinput dengan hash password di tabel "admin"
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $admin_info['username'];
            $_SESSION['pesan'] = "Login berhasil!";
            header("Location: ../../index.php");
            exit;
        } else {
            $_SESSION['pesan'] = "Username atau password salah.";
            header("Location: ../login.php");
            exit;
        }
    } else {
        $_SESSION['pesan'] = "Username atau password salah.";
        header("Location: ../login.php");
        exit;
    }
}
