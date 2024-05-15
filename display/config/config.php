<?php

date_default_timezone_set('Asia/Jakarta');

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'akj';

$koneksi = mysqli_connect("localhost", "root", "", "akj");

//if ((mysqli_connect_errno())) {
//    echo "Gagal tersambung ke database";
//} else {
//    echo "Berhasil tersambung ke database";
//}

