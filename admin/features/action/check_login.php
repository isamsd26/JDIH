<?php
session_start();
include '../dom/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password']; 

   
    $query = "SELECT user.username, role.role_name 
              FROM user 
              JOIN role ON user.role_id = role.role_id 
              WHERE user.username = '$username' 
              AND user.password = '$password'";

    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) { 
        $user_info = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $user_info['username'];
        $_SESSION['role_name'] = $user_info['role_name'];

        $_SESSION['pesan'] = "Login berhasil!"; 

        if ($user_info['role_name'] === 'admin') {
            header("Location: ../../index.php");
        } else {
            header("Location: ../../user/user.php");
        }

        exit;
    } else {  
        $_SESSION['pesan'] = "Username atau password salah.";
        header("Location: ../login.php");  
        exit;
    }
}
