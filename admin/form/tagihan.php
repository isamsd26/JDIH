<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin AKJ Baketball School</title>
        <link rel="icon" type="image/x-icon" href="../assets/Logo_AKJ_Basketball.png" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../index.html">AKJ Basketball School </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <span class="text-white text-capitalize"><?= "Admin"?></span>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Profil Admin</a></li>                      
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="../index.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a> 
                                <hr class="mb-0">
                                <a class="nav-link" href="features/atlit.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></i></div>
                                    Data Atlit
                                </a> 
                                <hr class="mb-0">
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></i></div>
                                    Penilaian Atlit
                                </a> 
                                <hr class="mb-0">   
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-book-open"></i></div>
                                    Form
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#">Tagihan Iuran</a>
                                        <a class="nav-link" href="#">Slip gaji pelatih</a>
                                        <a class="nav-link" href="#">Pengumuman pertandingan</a>
                                        <a class="nav-link" href="#">Berita</a>
                                        <a class="nav-link" href="#">Jadwal game</a>
                                    </nav>
                                </div>  
                                <hr class="mb-0">                                                       
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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Form Tagihan Siswa</h1>
                                            
                        <div class="container-fluid">
                            <ol class="breadcrumb mt-5">
                                <li class="breadcrumb-item active text-dark">Kelompok Umur</li>
                            </ol>
                            <div class="btn-group" role="group" aria-label="Default button group">
                                <button type="button" class="btn btn-outline-dark mb-5">SD</button>
                                <button type="button" class="btn btn-outline-dark mb-5">SMP</button>
                                <button type="button" class="btn btn-outline-dark mb-5">SMA</button>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4><i class="fa-solid fa-money-check-dollar "></i>
                                Form Tagihan
                                <button type="submit" name="simpan" class="btn btn-primary btn-sm float-end ">
                                    <i class="fa-regular fa-floppy-disk"></i>
                                    simpan
                                </button>
                                <button type="submit" name="simpan" class="btn btn-danger btn-sm float-end me-2">
                                    <i class="fa-solid fa-trash"></i>
                                    delete
                                </button>
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8 mb-3">
                                        <div class="form-group mb-3">
                                            <label for="id_laporan" class="fw-bolder">ID Laporan</label>
                                            <input type="text" name="id_laporan" id="id_laporan" class="form-control" placeholder="Masukkan ID laporan">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="id_siswa" class="fw-bolder">ID Siswa</label>
                                            <input type="text" name="id_siswa" id="id_siswa" class="form-control" placeholder="Masukkan ID Siswa">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="bulan" class="fw-bolder">Bulan</label>
                                            <input type="text" name="bulan" id="bulan" class="form-control" placeholder="Masukkan Bulan">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="bulan" class="fw-bolder">Jumlah Pembayaran</label>
                                            <input type="text" name="jumlah_pembayaran" id="jumlah_pembayaran" class="form-control" placeholder="Masukkan Jumlah Iuran Siswa">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
