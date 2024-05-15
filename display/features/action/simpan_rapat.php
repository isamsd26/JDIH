<?php
session_start();
include_once '../dom/koneksi.php';

if ($koneksi && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_rapat = $_POST['id_rapat'];
    $nama_rapat = $_POST['nama_rapat'];
    $tanggal_rapat = $_POST['tanggal_rapat'];
    $waktu_rapat = $_POST['waktu_rapat'];
    $tempat_rapat = $_POST['tempat_rapat'];

    $query = "INSERT INTO rapat (id_rapat, nama_rapat, tanggal_rapat, waktu_rapat, tempat_rapat) 
              VALUES ('$id_rapat', '$nama_rapat', '$tanggal_rapat', '$waktu_rapat', '$tempat_rapat')";

    if (mysqli_query($koneksi, $query)) {
        $_SESSION['pesan'] = "Data rapat berhasil disimpan!";
    } else {
        $_SESSION['pesan'] = "Gagal menyimpan data: " . mysqli_error($koneksi);
    }

    header("Location: ../sidebar/side-rapat.php");
    exit;
}
