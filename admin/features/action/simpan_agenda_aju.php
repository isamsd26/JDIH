<?php
include_once '../dom/koneksi.php';
include_once 'function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['simpan'])) {
    $nomor_surat = $_POST['nomor_surat'];
    $alamat_pengirim = $_POST['alamat_pengirim'];
    $tanggal_surat = $_POST['tanggal_surat'];
    $tanggal_naik = $_POST['tanggal_naik'];
    $tanggal_turun = $_POST['tanggal_turun'];
    $perihal = $_POST['perihal'];
    $alamat_tujuan = $_POST['alamat_tujuan'];
    $isi_disposisi = $_POST['isi_disposisi'];

    $query = "INSERT INTO agenda_ajuan (nomor_surat, alamat_pengirim, tanggal_surat, tanggal_naik, tanggal_turun, perihal, alamat_tujuan, isi_disposisi) 
                VALUES ('$nomor_surat', '$alamat_pengirim', '$tanggal_surat', '$tanggal_naik', '$tanggal_turun', '$perihal', '$alamat_tujuan', '$isi_disposisi')";

    if (mysqli_query($koneksi, $query)) {
        addTindakan($koneksi, 'Agenda Ajuan', "Menambahkan agenda ajuan: $nomor_surat");
        header("Location: ../sidebar/tambah-agenda-aju.php?status=sukses");
        exit;
    } else {
        header("Location: ../sidebar/tambah-agenda-aju.php?status=gagal");
        exit;
    }
} else {
    header("Location: ../sidebar/tambah-agenda-aju.php");
    exit;
}
