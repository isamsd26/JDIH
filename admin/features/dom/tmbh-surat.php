<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BIRO HUKUM INFORMATION CENTER</title>
    <link rel="icon" type="image/x-icon" href="../assets/jateng.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
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

    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #FAE633;">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-dark" href="index.html">BIRO HUKUM INFORMATION CENTER</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars" style="color:black;"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <span class="text-dark text-capitalize"><?= "Admin" ?></span>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw" style="color:black;"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Profil Admin</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../features/login.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion" id="sidenavAccordion" style="background-color: #FAE633;">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link text-dark" href="../index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <hr class="mb-0">
                        <a class="nav-link collapsed text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-book-open"></i></div>
                            Form
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#"> Tagihan Iuran</a>
                                <a class="nav-link" href="#">Slip gaji pelatih</a>
                                <a class="nav-link" href="#">Pengumuman pertandingan</a>
                                <a class="nav-link" href="#">Berita</a>
                                <a class="nav-link" href="#">Jadwal game</a>
                            </nav>
                        </div>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mb-4">
                    <h1 class="mt-4">Pusat Agenda</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Rapat dan Kegiatan</li>
                    </ol>
                </div>
    <h3> Tambah Barang </h3>

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
                <td> Alamat tujuan </td>
                <td> <input type="text" name="alamat_tujuan"> </td>
            </tr>
            <tr>
                <td> Isi Disposisi </td>
                <td> <input type="text" name="isi_disposisi"> </td>
            </tr>
            <tr>
                <td> Keterangan </td>
                <td> <input type="text" name="keterangan"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save" class="btn btn-primary" value="Simpan"> </td>
            </tr>
        </table>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>