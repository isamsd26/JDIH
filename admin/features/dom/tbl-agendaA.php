<?php
include 'koneksi.php';

$items_per_page = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $items_per_page;

// Query untuk mendapatkan agenda ajuan dengan urutan dari yang terbaru
$query = "SELECT no_id, alamat_pengirim, tanggal_surat, nomor_surat, tanggal_naik, tanggal_turun, perihal, alamat_tujuan, isi_disposisi 
          FROM agenda_ajuan 
          ORDER BY tanggal_surat DESC 
          LIMIT $items_per_page OFFSET $offset";

$hasil = mysqli_query($koneksi, $query);

$total_query = "SELECT COUNT(*) AS total FROM agenda_ajuan";
$total_result = mysqli_query($koneksi, $total_query);
$total_row = mysqli_fetch_assoc($total_result);
$total_items = $total_row['total'];
$total_pages = ceil($total_items / $items_per_page);

echo '<div class="container">';
if ($hasil && mysqli_num_rows($hasil) > 0) {
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '  <tr>';
    echo '    <th>NO AGENDA</th>';
    echo '    <th>ALAMAT PENGIRIM</th>';
    echo '    <th>TANGGAL SURAT</th>';
    echo '    <th>NOMOR SURAT</th>';
    echo '    <th>TANGGAL NAIK</th>';
    echo '    <th>TANGGAL TURUN</th>';
    echo '    <th>PERIHAL</th>';
    echo '    <th>ALAMAT TUJUAN</th>';
    echo '    <th>ISI DISPOSISI</th>';
    echo '  </tr>';
    echo '</thead>';
    echo '<tbody>';

    $no_agenda = $offset + 1; // Mengatur nomor agenda awal berdasarkan halaman

    while ($row = mysqli_fetch_assoc($hasil)) {
        echo '<tr>';
        echo "  <td>{$no_agenda}</td>";
        echo "  <td>{$row['alamat_pengirim']}</td>";
        echo "  <td>{$row['tanggal_surat']}</td>";
        echo "  <td>{$row['nomor_surat']}</td>";
        echo "  <td>{$row['tanggal_naik']}</td>";
        echo "  <td>{$row['tanggal_turun']}</td>";
        echo "  <td>{$row['perihal']}</td>";
        echo "  <td>{$row['alamat_tujuan']}</td>";
        echo "  <td>{$row['isi_disposisi']}</td>";
        echo '</tr>';
        $no_agenda++; // Menambah nomor agenda untuk baris berikutnya
    }

    echo '</tbody>';
    echo '</table>';

    echo '<nav aria-label="Page navigation">';
    echo '  <ul class="pagination d-flex justify-content-center">';

    if ($page > 1) {
        $previous_page = $page - 1;
        echo "    <li class='page-item'><a class='page-link' href='tbl-agendaA.php?page=$previous_page'>Previous</a></li>";
    } else {
        echo "    <li class='page-item disabled'><a class='page-link'>Previous</a></li>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        $active = ($i === $page) ? 'active' : '';
        echo "    <li class='page-item $active'><a class='page-link' href='tbl-agendaA.php?page=$i'>$i</a></li>";
    }

    if ($page < $total_pages) {
        $next_page = $page + 1;
        echo "    <li class='page-item'><a class='page-link' href='tbl-agendaA.php?page=$next_page'>Next</a></li>";
    } else {
        echo "    <li class='page-item disabled'><a class='page-link'>Next</a></li>";
    }

    echo '  </ul>';
    echo '</nav>';
} else {
    echo "Tidak ada data agenda ajuan yang ditemukan.";
}
echo '</div>';
