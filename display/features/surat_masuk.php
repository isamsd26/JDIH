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
    <div id="container">
        <main class="margin-fil">
            <div class="row justify-content-between" style="margin-right: 0px; margin-bottom: 0px;">
                <div class="col-2 my-2 d-flex justify-content-center">
                    <img src="../assets/img/jdihn.png" class="logo-jat mx-3" alt="logo_jateng">
                    <img src="../assets/jateng.png" class="logo-jat" alt="logo_jateng">
                </div>
                <div class="col-4 d-flex flex-column justify-content-center align-items-center mt-4">
                    <div id="current-day-date" class="fs-2 text-white"></div>
                    <div id="current-time" class="fs-2 text-white"></div>
                </div>
                <div class=" col-2 d-flex justify-content-center mt-4">
                    <img src="../assets/img/wayang.png" class="logo-jat" alt="logo_jateng">
                    <img src="../assets/img/logo1.png" class="logo-jdih" alt="logo_jateng">
                </div>
            </div>
            <div class="my-3">
                <h1 class="text-white text-center">Surat Masuk</h1>
            </div>
            <div class="mx-5">
                <div class="pb-2 mb-4 bg-tbl rounded">
                    <?php include 'dom/surat-masuk.php'; ?>
                </div>
            </div>
            <div class=" ms-3">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #D6D6D6;">
                        Kegiatan
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Surat Masuk</a></li>
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
                    <a type="button" class="btn btn-light" href="../display.php" style="background-color: #D6D6D6;">rapat</a>
                </div>

            </div>
        </main>
    </div>
    </div>
    <script>
        function updateTime() {
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];
            const now = new Date();
            const day = days[now.getDay()];
            const date = now.getDate();
            const month = months[now.getMonth()];
            const year = now.getFullYear();
            const time = now.toLocaleTimeString();

            const fullDate = `${day}, ${date} ${month} ${year}`;
            document.getElementById('current-day-date').textContent = fullDate;
            document.getElementById('current-time').textContent = time;
        }

        // Initial call to set the time immediately
        updateTime();

        // Update the time every second
        setInterval(updateTime, 1000);

        const pages = [
            "../display.php",
            "surat_masuk.php",
            "undangan.php",
            "agendaA.php",
            "agendaM.php"
        ];

        // Get current index from localStorage or default to 0
        let currentIndex = parseInt(localStorage.getItem('pageIndex')) || 0;

        // Function to cycle through the pages
        function cyclePages() {
            currentIndex = (currentIndex + 1) % pages.length;
            localStorage.setItem('pageIndex', currentIndex);
            window.location.href = pages[currentIndex];
        }

        // Set interval to cycle pages every 10 seconds
        setInterval(cyclePages, 10000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>

</body>

</html>