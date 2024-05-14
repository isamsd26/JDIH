<?php
include 'koneksi.php';

// Tentukan jumlah item per halaman
$items_per_page = 5;
// Ambil nomor halaman dari parameter URL, default ke halaman 1 jika tidak ada
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $items_per_page;

// Query untuk mendapatkan surat masuk dengan urutan dari yang terbaru
$query = "SELECT id_surat, alamat_pengirim, tanggal_surat, nomor_surat, perihal, alamat_tujuan, isi_disposisi, keterangan 
          FROM surat_masuk 
          ORDER BY tanggal_surat DESC 
          LIMIT $items_per_page OFFSET $offset";

$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    echo "Error: " . mysqli_error($koneksi);
    exit();
}

// Query untuk mendapatkan total item
$total_query = "SELECT COUNT(*) AS total FROM surat_masuk";
$total_result = mysqli_query($koneksi, $total_query);
if ($total_result) {
    $total_row = mysqli_fetch_assoc($total_result);
    $total_items = $total_row['total'];
    $total_pages = ceil($total_items / $items_per_page);
} else {
    $total_items = 0;
    $total_pages = 1;
}

echo '<div class="container">';
if (mysqli_num_rows($hasil) > 0) {
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '  <tr>';
    echo '    <th>ID SURAT</th>';
    echo '    <th>ALAMAT PENGIRIM</th>';
    echo '    <th>TANGGAL SURAT</th>';
    echo '    <th>NOMOR SURAT</th>';
    echo '    <th>PERIHAL</th>';
    echo '    <th>ALAMAT TUJUAN</th>';
    echo '    <th>ISI DISPOSISI</th>';
    echo '    <th>KETERANGAN</th>';
    echo '  </tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = mysqli_fetch_assoc($hasil)) {
        echo '<tr>';
        echo "  <td>{$row['id_surat']}</td>";
        echo "  <td>{$row['alamat_pengirim']}</td>";
        echo "  <td>{$row['tanggal_surat']}</td>";
        echo "  <td>{$row['nomor_surat']}</td>";
        echo "  <td>{$row['perihal']}</td>";
        echo "  <td>{$row['alamat_tujuan']}</td>";
        echo "  <td>{$row['isi_disposisi']}</td>";
        echo "  <td>{$row['keterangan']}</td>";
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';

    echo '<nav aria-label="Page navigation">';
    echo '  <ul class="pagination d-flex justify-content-center">';

    if ($page > 1) {
        $previous_page = $page - 1;
        echo "    <li class='page-item'><a class='page-link' href='surat_masuk.php?page=$previous_page'>Previous</a></li>";
    } else {
        echo "    <li class='page-item disabled'><a class='page-link'>Previous</a></li>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        $active = ($i === $page) ? 'active' : '';
        echo "    <li class='page-item $active'><a class='page-link' href='surat_masuk.php?page=$i'>$i</a></li>";
    }

    if ($page < $total_pages) {
        $next_page = $page + 1;
        echo "    <li class='page-item'><a class='page-link' href='surat_masuk.php?page=$next_page'>Next</a></li>";
    } else {
        echo "    <li class='page-item disabled'><a class='page-link'>Next</a></li>";
    }

    echo '  </ul>';
    echo '</nav>';
} else {
    echo "Tidak ada data surat masuk yang ditemukan.";
}
echo '</div>';
