<?php
include 'features/action/function.php';
$actions = getLatestActions($koneksi);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BIRO HUKUM INFORMATION CENTER</title>
    <link rel="icon" type="image/x-icon" href="assets/jateng.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed ">
    <?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: features/login.php");
        exit;
    }

    if (isset($_SESSION['pesan'])) {
        echo "
        <div class='toast show position-fixed top-0 end-0 p-3' role='alert' aria-live='assertive' aria-atomic='true' id='toast-notification' style='z-index: 9999;'>
            <div class='toast-header'>
                <strong class='me-auto'>Notifikasi</strong>
                <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
            </div>
            <div class='toast-body'>
                {$_SESSION['pesan']}
            </div>
        </div>";
        unset($_SESSION['pesan']);  // Hapus pesan setelah ditampilkan
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
                    <li><a class="dropdown-item" href="features/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <section class="bg-dash">
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion" style="background-color: #FAE633;">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link text-dark" href="index.php">
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
                                    <a class="nav-link text-dark" href="features/sidebar/side-rapat.php"> Tambah Rapat</a>
                                    <hr class="mb-0">
                                    <a class="nav-link text-dark" href="features/sidebar/tambah-surat.php">Tambah Surat</a>
                                    <hr class="mb-0">
                                    <a class="nav-link text-dark" href="features/sidebar/tambah-undangan.php">Tambah Undangan</a>
                                    <hr class="mb-0">
                                    <a class="nav-link text-dark" href="features/sidebar/tambah-agenda.php">Tambah Agenda</a>
                                    <hr class="mb-0">
                                    <a class="nav-link text-dark" href="features/sidebar/tambah-agenda-aju.php">Tambah Agenda Ajuan</a>
                                    <hr class="mb-0">
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
                <?php
                include 'features/action/function.php';
                $actions = getLatestActions($koneksi);
                ?>
                <main>
                    <div class=" row mx-0">
                        <div class="container-fluid px-4 mb-4">
                            <h1 class="mt-4">Pusat Agenda</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Rapat dan Kegiatan</li>
                            </ol>
                        </div>
                        <div class="col-4 ">
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Kegiatan
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="features/surat_masuk.php">Surat Masuk</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="features/undangan.php">Undangan</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="features/agendaM.php">Agenda Masuk</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="features/agendaA.php">Agenda Ajuan</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                </ul>
                            </div>
                            <div class="my-2">
                                <a type="button" class="btn btn-warning w-100" href="features/rapat.php">rapat</a>
                            </div>
                        </div>

                        <div class="col-7 ">
                            <div class="card size-card mb-4">
                                <div class="card-header bg-tbl d-flex justify-content-center align-items-center">
                                    <div>
                                        <h1> Tindakan Terbaru</h1>
                                    </div>
                                </div>
                                <div class="card-body bg-tbl">
                                    <h3 class="fw-bold">
                                        Tindakan Saya
                                    </h3>
                                    <div class="bg-over">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Deskripsi</th>
                                                    <th>Jenis</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            include 'config/pagination.php';
                                            ?>
                                            <tbody>
                                                <?php foreach ($actions as $action) : ?>
                                                    <tr>
                                                        <td><i class="fa-solid fa-plus" style="color: #035efc;"></i></td>
                                                        <td><?= htmlspecialchars($action['deskripsi']) ?></td>
                                                        <td><?= htmlspecialchars($action['jenis']) ?></td>
                                                        <td><?= htmlspecialchars($action['tanggal']) ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center mt-2">
                                            <?php if ($page > 1) : ?>
                                                <li class="page-item">
                                                    <a class="page-link" href="index.php?page=<?= $page - 1 ?>">Previous</a>
                                                </li>
                                            <?php else : ?>
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#">Previous</a>
                                                </li>
                                            <?php endif; ?>

                                            <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                                                <?php if ($i == $page) : ?>
                                                    <li class="page-item active" aria-current="page">
                                                        <a class="page-link" href="#"><?= $i ?></a>
                                                    </li>
                                                <?php else : ?>
                                                    <li class="page-item"><a class="page-link" href="index.php?page=<?= $i ?>"><?= $i ?></a></li>
                                                <?php endif; ?>
                                            <?php endfor; ?>

                                            <?php if ($page < $total_pages) : ?>
                                                <li class="page-item">
                                                    <a class="page-link" href="index.php?page=<?= $page + 1 ?>">Next</a>
                                                </li>
                                            <?php else : ?>
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    </section>
    <script>
        setTimeout(() => {
            const toast = document.getElementById('toast-notification');
            const toastInstance = bootstrap.Toast.getOrCreateInstance(toast);
            toastInstance.hide();
        }, 5000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>