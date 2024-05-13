<?php
include 'koneksi.php';

$items_per_page = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $items_per_page;

$query = "SELECT id_rapat, nama_rapat, tanggal_rapat, waktu_rapat, tempat_rapat, hadir 
          FROM rapat 
          LIMIT $items_per_page OFFSET $offset";

$hasil = mysqli_query($koneksi, $query);

$total_query = "SELECT COUNT(*) AS total FROM rapat";
$total_result = mysqli_query($koneksi, $total_query);
$total_row = mysqli_fetch_assoc($total_result);
$total_items = $total_row['total'];
$total_pages = ceil($total_items / $items_per_page);

echo '<div class="table-responsive">';
if ($hasil && mysqli_num_rows($hasil) > 0) {

    echo '<table class="table mt-1">';
    echo '<thead class = "bg-thead ">';
    echo '  <tr>';
    echo '    <th>NO RAPAT</th>';
    echo '    <th>NAMA RAPAT</th>';
    echo '    <th>TANGGAL RAPAT</th>';
    echo '    <th>WAKTU RAPAT</th>';
    echo '    <th>TEMPAT RAPAT</th>';
    echo '    <th>HADIR</a></th>';
    echo '  </tr>';
    echo '</thead>';
    echo '<tbody class ="table table-striped ">';

    while ($row = mysqli_fetch_assoc($hasil)) {
        echo '<tr>';
        echo "  <th>{$row['id_rapat']}</th>";
        echo "  <td>{$row['nama_rapat']}</td>";
        echo "  <td>{$row['tanggal_rapat']}</td>";
        echo "  <td>{$row['waktu_rapat']}</td>";
        echo "  <td>{$row['tempat_rapat']}</td>";
        echo "  <td>" . ($row['hadir'] ? 'Ya' : 'Tidak') . "</td>";
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';

    echo '<nav aria-label="Page navigation">';
    echo '  <ul class="pagination d-flex justify-content-center">';

    if ($page > 1) {
        $previous_page = $page - 1;
        echo "    <li class='page-item'><a class='page-link' href='user.php?page=$previous_page'>Previous</a></li>";
    } else {
        echo "    <li class='page-item disabled'><a class='page-link'>Previous</a></li>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        $active = ($i === $page) ? 'active' : '';
        echo "    <li class='page-item $active'><a class='page-link' href='user.php?page=$i'>$i</a></li>";
    }

    if ($page < $total_pages) {
        $next_page = $page + 1;
        echo "    <li class='page-item'><a class='page-link' href='user.php?page=$next_page'>Next</a></li>";
    } else {
        echo "    <li class='page-item disabled'><a class='page-link'>Next</a></li>";
    }

    echo '  </ul>';
    echo '</nav>';
} else {
    echo "Tidak ada data rapat yang ditemukan.";
}
echo '</div>';
