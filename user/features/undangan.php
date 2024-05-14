<?php
session_start();

if (!isset($_SESSION['role_name']) || $_SESSION['role_name'] !== 'user') {
    header("Location: login.php");
    exit;
}
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
    <link rel="icon" type="image/x-icon" href="../assets/jateng.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed bg-dash">
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color:  rgba(255, 255, 255, 0.5);">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-dark" href="user.php">BIRO HUKUM INFORMATION CENTER</a>
        <!-- Sidebar Toggle-->

        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <span class="text-dark text-capitalize"><?= "User" ?></span>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw" style="color:black;"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Profil User</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="container">
        <main class="margin-fil">
            <div class="row justify-content-between">
                <div class="col-2 my-2 d-flex justify-content-center">
                    <img src="../assets/jateng.png" class="logo-jat" alt="logo_jateng">
                </div>
                <div class="col-4 d-flex justify-content-center mt-4">
                    <div>
                        <h1 class="text-white fs-1">Undangan</h1>
                    </div>
                </div>
                <div class=" col-2 my-2 d-flex justify-content-center mt-4">
                    <img src="../assets/img/logo1.png" class="logo-jdih" alt="logo_jateng">
                </div>
            </div>
            <div class="mx-5">
                <div class="pb-2 mb-4 bg-tbl rounded">
                    <?php include 'dom/tbl-undangan.php'; ?>
                </div>
            </div>
            <div class=" ms-3">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #D6D6D6;">
                        Kegiatan
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="surat_masuk.php">Surat Masuk</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="undangan.php">Undangan </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="agendaM.php">Agenda Masuk</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="agendaA.php">Agenda Ajuan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </div>
                <div class="my-2">
                    <a type="button" class="btn btn-light" href="../user.php" style="background-color: #D6D6D6;">rapat</a>
                </div>

            </div>
        </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>

</body>

</html>