<?php
include_once '../dom/koneksi.php';
include_once 'function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['simpan'])) {
    $id_surat = $_POST['id_surat'];
    $alamat_pengirim = $_POST['alamat_pengirim'];
    $tanggal_surat = $_POST['tanggal_surat'];
    $nomor_surat = $_POST['nomor_surat'];
    $perihal = $_POST['perihal'];
    $alamat_tujuan = $_POST['alamat_tujuan'];
    $isi_disposisi = $_POST['isi_disposisi'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO surat_masuk (id_surat, alamat_pengirim, tanggal_surat, nomor_surat, perihal, alamat_tujuan, isi_disposisi, keterangan) 
                VALUES ('$id_surat', '$alamat_pengirim', '$tanggal_surat', '$nomor_surat', '$perihal', '$alamat_tujuan', '$isi_disposisi', '$keterangan')";

    if (mysqli_query($koneksi, $query)) {
        addTindakan($koneksi, 'Surat', "Menambahkan surat: $nomor_surat");
        header("Location: ../sidebar/tambah-surat.php?status=sukses");
        exit;
    } else {
        header("Location: ../sidebar/tambah-surat.php?status=gagal");
        exit;
    }
} else {
    header("Location: tambah-surat.php");
    exit;
}
