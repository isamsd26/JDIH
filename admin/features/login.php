<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login </title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../assets/jateng.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-log">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #FAE633;">
                    <!-- Navbar Brand-->
                    <a class="navbar-brand ps-3 text-dark fw-bold">BIRO HUKUM INFORMATION CENTER</a>
                    <!-- Sidebar Toggle-->
                    <!-- Navbar Search-->
                </nav>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6 my-5 d-flex justify-content-center">
                            <img src="../assets/jateng.png" class="logo-jat" alt="logo_jateng">
                        </div>
                        <div class="col-6">
                            <div class="card bg-card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="action/check_login.php">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="text" name="username" placeholder="Username" required />
                                            <label for="inputEmail">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" required />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <button type="submit" class="btn btn-dark d-flex justify-content-center text-dark" style="background-color: #FFE401;">Login</button>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="container">
            <!-- Notifikasi Toast -->
            <?php
            session_start();
            if (isset($_SESSION['pesan'])) {  // Ambil pesan dari sesi
                echo "
            <div class='toast show position-fixed bottom-0 end-0 p-3' role='alert' aria-live='assertive' aria-atomic='true'>
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
            <!-- Form Login -->
        </div>
        <div id="layoutAuthentication_footer">
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
</body>

</html>