<?php
include_once '../dom/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai input dari form
    $alamat_pengirim = $_POST['alamat_pengirim'];
    $tanggal_surat = $_POST['tanggal_surat'];
    $nomor_surat = $_POST['nomor_surat'];
    $perihal = $_POST['perihal'];
    $alamat_tujuan = $_POST['alamat_tujuan'];
    $isi_disposisi = $_POST['isi_disposisi'];

    // Query SQL untuk menyimpan data ke dalam tabel agenda_masuk
    $query = "INSERT INTO agenda_masuk (alamat_pengirim, tanggal_surat, nomor_surat, perihal, alamat_tujuan, isi_disposisi) 
                VALUES ('$alamat_pengirim', '$tanggal_surat', '$nomor_surat', '$perihal', '$alamat_tujuan', '$isi_disposisi')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika penyimpanan berhasil, redirect ke halaman tambah-agenda.php dengan status sukses
        header("Location: ../sidebar/tambah-agenda.php?status=sukses");
        exit;
    } else {
        // Jika penyimpanan gagal, redirect ke halaman tambah-agenda.php dengan status gagal
        header("Location: ../sidebar/tambah-agenda.php?status=gagal");
        exit;
    }
} else {
    // Jika request bukan POST, redirect kembali ke halaman tambah-agenda.php
    header("Location: ../sidebar/tambah-agenda.php");
    exit;
}
