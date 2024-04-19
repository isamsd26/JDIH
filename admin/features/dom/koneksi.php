<?php
session_start();

// Create connection
$koneksi = mysqli_connect('localhost','root','', 'jdih');

// Check connection
 
if (!$koneksi) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";


if(isset($_POST['save']))
{ 
    $alamat_pengirim = $_POST['alamat_pengirim'];
    $tanggal_surat = date('Y-m-d', strtotime($_POST['tanggal_surat']));
    $nomor_surat = $_POST['nomor_surat'];
    $perihal = $_POST['perihal'];
    $alamat_tujuan = $_POST['alamat_tujuan'];
    $isi_disposisi = $_POST['isi_disposisi'];
    $keterangan = $_POST['keterangan'];
    
    $query = "INSERT INTO surat_masuk (alamat_pengirim, tanggal_surat, nomor_surat, perihal, alamat_tujuan, isi_disposisi, keterangan) 
    VALUES ('$alamat_pengirim', '$tanggal_surat', '$nomor_surat', '$perihal', '$alamat_tujuan', '$isi_disposisi','$keterangan')";
    $query_run = mysqli_query($koneksi, $query);
    
    if($query_run){
        $_SESSION['status'] = "berhasil menyimpan";
        header("Location: tmbh-surat.php");
    }
    else{
        $_SESSION['status'] = "gagal";
        header("Location: tmbh-surat.php");
    }

}

mysqli_close($koneksi);
?>