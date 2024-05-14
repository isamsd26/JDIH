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
    <link href="../../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed bg-dash">
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
                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="statusToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Notification</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <!-- Toast message will be dynamically inserted here -->
            </div>
        </div>
    </div>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion" id="sidenavAccordion" style="background-color: #FAE633;">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link text-dark" href="../../index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <hr class="mb-0">
                        <a class="nav-link collapsed text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-book-open"></i></div>
                            Form
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <hr class="mb-0">
                        <div class="collapse " id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-dark" href="side-rapat.php"> Tambah Rapat</a>
                                <hr class="mb-0">
                                <a class="nav-link text-dark" href="tambah-surat.php">Tambah Surat</a>
                                <hr class="mb-0">
                                <a class="nav-link text-dark" href="tambah-undangan.php">Tambah Undangan</a>
                                <hr class="mb-0">
                                <a class="nav-link text-dark" href="tambah-agenda.php">Tambah Agenda</a>
                                <hr class="mb-0">
                                <a class="nav-link text-dark" href="tambah-agenda-aju.php">Tambah Agenda Ajuan</a>
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
        <!-- Toast Container -->

        <div id="layoutSidenav_content">
            <main>

                <div class="row mt-5 mx-0">
                    <div class="col-2 ms-3">
                        <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Kegiatan
                            </button>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="../dom/surat_masuk.php">Surat Masuk</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../dom/undangan.php">Undangan </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../dom/agendaM.php">Agenda Masuk</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../dom/agendaA.php">Agenda Ajuan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </div>
                        <div class="my-2">
                            <a type="button" class="btn btn-warning w-100" href="../rapat.php">rapat</a>
                        </div>
                    </div>
                    <div class="col me-5">
                        <div class="card mb-4">
                            <div class="card-header bg-tbl d-flex justify-content-center align-items-center">
                                <div class="fs-1">
                                    Tambahkan Undangan
                                </div>
                            </div>
                            <form class="card-body bg-tbl" method="POST" action="../action/simpan_undangan.php">
                                <div class="form-group row mb-3 me-3">
                                    <label class="col-2 text-end" for="alamat_pengirim">Alamat Pengirim :</label>
                                    <input class="col-10" type="text" id="alamat_pengirim" name="alamat_pengirim">
                                </div>
                                <div class="form-group row mb-3 me-3">
                                    <label class="col-2 text-end" for="tanggal_surat">Tanggal Surat :</label>
                                    <input class="col-10" type="date" id="tanggal_surat" name="tanggal_surat">
                                </div>
                                <div class="form-group row mb-3 me-3">
                                    <label class="col-2 text-end" for="nomor_surat">Nomor Surat :</label>
                                    <input class="col-10" type="text" id="nomor_surat" name="nomor_surat">
                                </div>

                                <div class="form-group row mb-3 me-3">
                                    <label class="col-2 text-end" for="perihal">Perihal :</label>
                                    <input class="col-10" type="text" id="perihal" name="perihal">
                                </div>
                                <div class="form-group row mb-3 me-3">
                                    <label class="col-2 text-end" for="tanggal_pelaksanaan">Tanggal Pelaksanaan :</label>
                                    <input class="col-10" type="date" id="tanggal_pelaksanaan" name="tanggal_pelaksanaan">
                                </div>
                                <div class="form-group row mb-3 me-3">
                                    <label class="col-2 text-end" for="tempat">Tempat :</label>
                                    <input class="col-10" type="text" id="tempat" name="tempat">
                                </div>
                                <div class="form-group row mb-3 me-3">
                                    <label class="col-2 text-end" for="tujuan">Tujuan :</label>
                                    <input class="col-10" type="text" id="tujuan" name="tujuan">
                                </div>
                                <div class="form-group row mb-3 me-3">
                                    <label class="col-2 text-end" for="isi_disposisi">Isi Disposisi :</label>
                                    <input class="col-10" type="text" id="isi_disposisi" name="isi_disposisi">
                                </div>
                                <div class="d-flex justify-content-end me-3">
                                    <button type="submit" class="btn btn-warning" name="simpan">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../js/scripts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the URL parameter 'status'
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');

            // Function to show toast
            function showToast(message, isSuccess) {
                const toastElement = document.getElementById('statusToast');
                const toastBody = toastElement.querySelector('.toast-body');
                toastBody.textContent = message;

                if (isSuccess) {
                    toastElement.classList.add('bg-success', 'text-white');
                } else {
                    toastElement.classList.add('bg-danger', 'text-white');
                }

                const toast = new bootstrap.Toast(toastElement);
                toast.show();
            }

            // Check the status and show the corresponding toast message
            if (status === 'sukses') {
                showToast('Data agenda ajuan berhasil disimpan!', true);
            } else if (status === 'gagal') {
                showToast('Gagal menyimpan data agenda ajuan.', false);
            }
        });
    </script>

    <script src="../../js/datatables-simple-demo.js"></script>
</body>

</html>