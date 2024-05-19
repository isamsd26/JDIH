<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/Logo_AKJ_Basketball.png" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-log">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #FAE633;">
                    <a class="navbar-brand ps-3 text-dark fw-bold">BIRO HUKUM INFORMATION CENTER</a>
                </nav>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card bg-card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Admin Account</h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['toast_message'])) {
                                        echo '<div class="toast align-items-center text-white bg-' . $_SESSION['toast_type'] . ' border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                                                <div class="d-flex">
                                                    <div class="toast-body">' . $_SESSION['toast_message'] . '</div>
                                                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                              </div>';
                                        unset($_SESSION['toast_message']);
                                        unset($_SESSION['toast_type']);
                                    }
                                    ?>
                                    <form action="action/check-register.php" method="POST">
                                        <div class="row mb-3">
                                            <div>
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="username" name="username" type="text" placeholder="Enter your username" required />
                                                    <label for="username">Username</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password" name="password" type="password" placeholder="Create a password" required />
                                                    <label for="password">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="passwordConfirm" name="passwordConfirm" type="password" placeholder="Confirm password" required />
                                                    <label for="passwordConfirm">Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button class="btn btn-dark btn-block text-dark" style="background-color: #FFE401;" type="submit">Create Account</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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
    <script src="js/scripts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl)
            })
            toastList.forEach(toast => toast.show())
        });
    </script>
</body>

</html>