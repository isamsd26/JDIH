<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php 
        if(isset($_SESSION['status'])){
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <?php echo $_SESSION['status']; ?>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
            <?php
                unset($_SESSION['status']);
        }
    ?>

    <h3> Tambah Agenda Masuk </h3>

    <form action="koneksi.php" method="POST">
        <table>
            <tr>
                <td> Alamat Pengirim </td>
                <td> <input type="text" name="alamat_pengirim"> </td>
            </tr>
            <tr>
                <td> Tanggal Surat </td>
                <td> <input type="date" name="tanggal_surat"> </td>
            </tr>
            <tr>
                <td> Nomor Surat </td>
                <td> <input type="text" name="nomor_surat"> </td>
            </tr>
            <tr>
                <td> Perihal </td>
                <td> <input type="text" name="perihal"> </td>
            </tr>
            <tr>
                <td> Alamat Tujuan </td>
                <td> <input type="text" name="alamat_tujuan"> </td>
            </tr>
                <td> Isi Disposisi </td>
                <td> <input type="text" name="isi_disposisi"> </td>
            </tr>
            <tr>
                <td> Keterangan </td>
                <td> <input type="text" name="keterangan"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan_agenda_masuk" class="btn btn-primary" value="Simpan"> </td>
            </tr>
        </table>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>