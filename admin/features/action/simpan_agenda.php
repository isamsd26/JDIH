<?php
include_once '../dom/koneksi.php';
include_once 'function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alamat_pengirim = $_POST['alamat_pengirim'];
    $tanggal_surat = $_POST['tanggal_surat'];
    $nomor_surat = $_POST['nomor_surat'];
    $perihal = $_POST['perihal'];
    $alamat_tujuan = $_POST['alamat_tujuan'];
    $isi_disposisi = $_POST['isi_disposisi'];

    $query = "INSERT INTO agenda_masuk (alamat_pengirim, tanggal_surat, nomor_surat, perihal, alamat_tujuan, isi_disposisi) 
                VALUES ('$alamat_pengirim', '$tanggal_surat', '$nomor_surat', '$perihal', '$alamat_tujuan', '$isi_disposisi')";

    if (mysqli_query($koneksi, $query)) {
        addTindakan($koneksi, 'Agenda Masuk', "Menambahkan agenda masuk: $nomor_surat");
        header("Location: ../sidebar/tambah-agenda.php?status=sukses");
        exit;
    } else {
        header("Location: ../sidebar/tambah-agenda.php?status=gagal");
        exit;
    }
} else {
    header("Location: ../sidebar/tambah-agenda.php");
    exit;
}
