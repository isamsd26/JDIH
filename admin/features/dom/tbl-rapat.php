<?php
include 'koneksi.php';

$items_per_page = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $items_per_page;

// Query untuk mendapatkan rapat dengan urutan dari yang terbaru
$query = "SELECT id_rapat, nama_rapat, tanggal_rapat, waktu_rapat, tempat_rapat, hadir 
          FROM rapat 
          ORDER BY tanggal_rapat DESC, waktu_rapat DESC 
          LIMIT $items_per_page OFFSET $offset";

$hasil = mysqli_query($koneksi, $query);

$total_query = "SELECT COUNT(*) AS total FROM rapat";
$total_result = mysqli_query($koneksi, $total_query);
$total_row = mysqli_fetch_assoc($total_result);
$total_items = $total_row['total'];
$total_pages = ceil($total_items / $items_per_page);

echo '<div class="container">';  // Untuk memastikan perataan tengah
if ($hasil && mysqli_num_rows($hasil) > 0) {
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '  <tr>';
    echo '    <th>NO RAPAT</th>';
    echo '    <th>NAMA RAPAT</th>';
    echo '    <th>TANGGAL RAPAT</th>';
    echo '    <th>WAKTU RAPAT</th>';
    echo '    <th>TEMPAT RAPAT</th>';
    echo '    <th>HADIR</th>';
    echo '  </tr>';
    echo '</thead>';
    echo '<tbody>';

    $no_rapat = $offset + 1; // Mengatur nomor rapat awal berdasarkan halaman

    while ($row = mysqli_fetch_assoc($hasil)) {
        echo '<tr>';
        echo "  <th>{$no_rapat}</th>";
        echo "  <td>{$row['nama_rapat']}</td>";
        echo "  <td>{$row['tanggal_rapat']}</td>";
        echo "  <td>{$row['waktu_rapat']}</td>";
        echo "  <td>{$row['tempat_rapat']}</td>";
        echo "  <td>" . ($row['hadir'] ? 'Ya' : 'Tidak') . "</td>";
        echo '</tr>';
        $no_rapat++; // Menambah nomor rapat untuk baris berikutnya
    }

    echo '</tbody>';
    echo '</table>';

    echo '<nav aria-label="Page navigation">';
    echo '  <ul class="pagination d-flex justify-content-center">';

    if ($page > 1) {
        $previous_page = $page - 1;
        echo "    <li class='page-item'><a class='page-link' href='rapat.php?page=$previous_page'>Previous</a></li>";
    } else {
        echo "    <li class='page-item disabled'><a class='page-link'>Previous</a></li>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        $active = ($i === $page) ? 'active' : '';
        echo "    <li class='page-item $active'><a class='page-link' href='rapat.php?page=$i'>$i</a></li>";
    }

    if ($page < $total_pages) {
        $next_page = $page + 1;
        echo "    <li class='page-item'><a class='page-link' href='rapat.php?page=$next_page'>Next</a></li>";
    } else {
        echo "    <li class='page-item disabled'><a class='page-link'>Next</a></li>";
    }

    echo '  </ul>';
    echo '</nav>';
} else {
    echo "Tidak ada data rapat yang ditemukan.";
}
echo '</div>';
