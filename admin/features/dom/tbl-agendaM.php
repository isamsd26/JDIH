<?php
include 'koneksi.php';

$items_per_page = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $items_per_page;

$alert_message = "";
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM agenda_masuk WHERE no_id = '$delete_id'";
    $delete_result = mysqli_query($koneksi, $delete_query);

    if ($delete_result) {
        $alert_message = "<div class='alert alert-success' id='alert-message'>Data berhasil dihapus.</div>";
    } else {
        $alert_message = "<div class='alert alert-danger' id='alert-message'>Gagal menghapus data: " . mysqli_error($koneksi) . "</div>";
    }
}

// Query untuk mendapatkan agenda masuk dengan urutan dari yang terbaru
$query = "SELECT no_id, alamat_pengirim, tanggal_surat, nomor_surat, perihal, alamat_tujuan, isi_disposisi 
          FROM agenda_masuk 
          ORDER BY tanggal_surat DESC 
          LIMIT $items_per_page OFFSET $offset";

$hasil = mysqli_query($koneksi, $query);

$total_query = "SELECT COUNT(*) AS total FROM agenda_masuk";
$total_result = mysqli_query($koneksi, $total_query);
$total_row = mysqli_fetch_assoc($total_result);
$total_items = $total_row['total'];
$total_pages = ceil($total_items / $items_per_page);

echo '<div class="container">';
if (!empty($alert_message)) {
    echo $alert_message;
}

if ($hasil && mysqli_num_rows($hasil) > 0) {
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '  <tr>';
    echo '    <th>NO AGENDA</th>';
    echo '    <th>ALAMAT PENGIRIM</th>';
    echo '    <th>TANGGAL SURAT</th>';
    echo '    <th>NOMOR SURAT</th>';
    echo '    <th>PERIHAL</th>';
    echo '    <th>ALAMAT TUJUAN</th>';
    echo '    <th>ISI DISPOSISI</th>';
    echo '    <th>ACTION</th>';
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
        echo "  <td>{$row['perihal']}</td>";
        echo "  <td>{$row['alamat_tujuan']}</td>";
        echo "  <td>{$row['isi_disposisi']}</td>";
        echo "  <td><a href='agendaM.php?delete_id={$row['no_id']}' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'><i class='fa-solid fa-trash-can' style='color: #050505;'></i></a></td>";
        echo '</tr>';
        $no_agenda++; // Menambah nomor agenda untuk baris berikutnya
    }

    echo '</tbody>';
    echo '</table>';

    echo '<nav aria-label="Page navigation">';
    echo '  <ul class="pagination d-flex justify-content-center">';

    if ($page > 1) {
        $previous_page = $page - 1;
        echo "    <li class='page-item'><a class='page-link' href='tbl-agendaM.php?page=$previous_page'>Previous</a></li>";
    } else {
        echo "    <li class='page-item disabled'><a class='page-link'>Previous</a></li>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        $active = ($i === $page) ? 'active' : '';
        echo "    <li class='page-item $active'><a class='page-link' href='tbl-agendaM.php?page=$i'>$i</a></li>";
    }

    if ($page < $total_pages) {
        $next_page = $page + 1;
        echo "    <li class='page-item'><a class='page-link' href='tbl-agendaM.php?page=$next_page'>Next</a></li>";
    } else {
        echo "    <li class='page-item disabled'><a class='page-link'>Next</a></li>";
    }

    echo '  </ul>';
    echo '</nav>';
} else {
    echo "Tidak ada data agenda masuk yang ditemukan.";
}
echo '</div>';
?>

<script>
    // Menghilangkan alert setelah 5 detik
    setTimeout(function() {
        var alert = document.getElementById('alert-message');
        if (alert) {
            alert.style.transition = 'opacity 1s ease-out';
            alert.style.opacity = '0';
            setTimeout(function() {
                alert.remove();
            }, 1000);
        }
    }, 5000);
</script>