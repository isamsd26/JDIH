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

    <h3> Tambah Rapat </h3>

    <form action="koneksi.php" method="POST">
        <table>
            <tr>
                <td> Tanggal </td>
                <td> <input type="date" name="tanggal"> </td>
            </tr>
            <tr>
                <td> Waktu </td>
                <td> <input type="time" name="waktu"> </td>
            </tr>
            <tr>
                <td> Tempat </td>
                <td> <input type="text" name="tempat"> </td>
            </tr>
            <tr>
                <td> Rapat </td>
                <td> <input type="text" name="rapat"> </td>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan_rapat" class="btn btn-primary" value="Simpan"> </td>
            </tr>
        </table>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>