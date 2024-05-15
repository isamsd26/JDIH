<?php
//session_start();  
$koneksi = mysqli_connect('localhost', 'root', '', 'jdih');
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
