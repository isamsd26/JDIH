<?php
session_start();

// Create connection
$koneksi = mysqli_connect('localhost','root','', 'jdih');

// Check connection
 
if (!$koneksi) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";

if(isset($_POST['simpan_surat']))
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
        header("Location: pilih-keg.php");
    }
    else{
        $_SESSION['status'] = "gagal";
        header("Location: tmbh-surat.php");
    }
}

if(isset($_POST['simpan_undangan']))
{ 
    $alamat_pengirim = $_POST['alamat_pengirim'];
    $tanggal_surat = date('Y-m-d', strtotime($_POST['tanggal_surat']));
    $nomor_surat = $_POST['nomor_surat'];
    $perihal = $_POST['perihal'];
    $tgl_pelaksanaan = date('Y-m-d', strtotime($_POST['tgl_pelaksanaan']));
    $tempat = $_POST['tempat'];
    $tujuan = $_POST['tujuan'];
    $isi_disposisi = $_POST['isi_disposisi'];
    $keterangan = $_POST['keterangan'];
    
    $query = "INSERT INTO undangan(alamat_pengirim, tanggal_surat, nomor_surat, perihal, tgl_pelaksanaan, tempat, tujuan, isi_disposisi, keterangan) 
    VALUES ('$alamat_pengirim', '$tanggal_surat', '$nomor_surat', '$perihal', '$tgl_pelaksanaan', '$tempat', '$tujuan', '$isi_disposisi','$keterangan')";
    $query_run = mysqli_query($koneksi, $query);
    
    if($query_run){
        $_SESSION['status'] = "berhasil menyimpan";
        header("Location: pilih-keg.php");
    }
    else{
        $_SESSION['status'] = "gagal";
        header("Location: undangan.php");
    }

}

mysqli_close($koneksi);
?>