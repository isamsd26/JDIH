<?php
include_once '../dom/koneksi.php';
include_once 'function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['simpan'])) {
    $alamat_pengirim = $_POST['alamat_pengirim'];
    $tanggal_surat = $_POST['tanggal_surat'];
    $nomor_surat = $_POST['nomor_surat'];
    $perihal = $_POST['perihal'];
    $tanggal_pelaksanaan = $_POST['tanggal_pelaksanaan'];
    $tempat = $_POST['tempat'];
    $tujuan = $_POST['tujuan'];
    $isi_disposisi = $_POST['isi_disposisi'];

    $query = "INSERT INTO undangan (alamat_pengirim, tanggal_surat, nomor_surat, perihal, tanggal_pelaksanaan, tempat, tujuan, isi_disposisi) 
                VALUES ('$alamat_pengirim', '$tanggal_surat', '$nomor_surat', '$perihal', '$tanggal_pelaksanaan', '$tempat', '$tujuan', '$isi_disposisi')";
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['pesan'] = "Data undangan berhasil disimpan!";
        addTindakan($koneksi, 'Undangan', "Menambahkan undangan: $nomor_surat");
        header("Location: ../sidebar/tambah-undangan.php?status=sukses");
        exit;
    } else {
        header("Location: ../sidebar/tambah-undangan.php?status=gagal");
        exit;
    }
} else {
    header("Location: ../sidebar/tambah-undangan.php");
    exit;
}
