<?php
session_start();
include_once '../dom/koneksi.php';
include_once 'function.php';  // Sesuaikan path ini jika diperlukan

if ($koneksi && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_rapat = $_POST['nama_rapat'];
    $tanggal_rapat = $_POST['tanggal_rapat'];
    $waktu_rapat = $_POST['waktu_rapat'];
    $tempat_rapat = $_POST['tempat_rapat'];

    $query = "INSERT INTO rapat ( nama_rapat, tanggal_rapat, waktu_rapat, tempat_rapat) 
              VALUES ('$nama_rapat', '$tanggal_rapat', '$waktu_rapat', '$tempat_rapat')";

    if (mysqli_query($koneksi, $query)) {
        $_SESSION['pesan'] = "Data rapat berhasil disimpan!";
        addTindakan($koneksi, 'Rapat', "Menambahkan rapat: $nama_rapat");
    } else {
        $_SESSION['pesan'] = "Gagal menyimpan data: " . mysqli_error($koneksi);
    }

    header("Location: ../sidebar/side-rapat.php");
    exit;
}
