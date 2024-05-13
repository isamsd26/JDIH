<?php
include_once 'koneksi.php';

if (mysqli_ping($koneksi)) {
    // Pagination
    $limit = 5; // Jumlah data per halaman
    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Halaman saat ini
    $start = ($page - 1) * $limit; // Perhitungan offset data
    $query = "SELECT no_id,alamat_pengirim,tanggal_surat,nomor_surat,perihal,alamat_tujuan,isi_disposisi	 FROM agenda_masuk LIMIT $start, $limit";
    $hasil = mysqli_query($koneksi, $query);

    echo '<div class="table-responsive">';
    if ($hasil) {
        echo '<table class="table mt-1">';
        echo '<thead class="bg-thead">';
        echo "<tr>
                <th>No</th>
                <th>Alamat Pengirim</th>
                <th>Tanggal Surat</th>
                <th>Nomor Surat</th>
                <th>Perihal</th>
                <th>Alamat Tujuan</th>
                <th>Isi Disposisi</th>
              </tr>";
        echo '</thead>';
        echo '<tbody table table-striped>';

        $no = 1;
        while ($row = mysqli_fetch_assoc($hasil)) {
            echo "<tr>
                    <td>{$row['no_id']}</td>
                    <td>{$row['alamat_pengirim']}</td>
                    <td>{$row['tanggal_surat']}</td>
                    <td>{$row['nomor_surat']}</td>
                    <td>{$row['perihal']}</td>
                    <td>{$row['alamat_tujuan']}</td>
                    <td>{$row['isi_disposisi']}</td>
                  </tr>";
            $no++;
        }

        echo '</tbody>';
        echo '</table>';

        // Pagination links
        $query_total = "SELECT COUNT(*) AS total FROM agenda_masuk";
        $result_total = mysqli_query($koneksi, $query_total);
        $data_total = mysqli_fetch_assoc($result_total);
        $total_pages = ceil($data_total['total'] / $limit);

        echo '<nav aria-label="Page navigation">';
        echo '  <ul class="pagination justify-content-center">';
        if ($page > 1) {
            echo "    <li class='page-item'><a class='page-link' href='agendaM.php?page=" . ($page - 1) . "'>Previous</a></li>";
        } else {
            echo "    <li class='page-item disabled'><a class='page-link'>Previous</a></li>";
        }
        for ($i = 1; $i <= $total_pages; $i++) {
            $active = ($i === $page) ? 'active' : '';
            echo "    <li class='page-item $active'><a class='page-link' href='agendaM.php?page=$i'>$i</a></li>";
        }
        if ($page < $total_pages) {
            echo "    <li class='page-item'><a class='page-link' href='agendaM.php?page=" . ($page + 1) . "'>Next</a></li>";
        } else {
            echo "    <li class='page-item disabled'><a class='page-link'>Next</a></li>";
        }
        echo '  </ul>';
        echo '</nav>';
    } else {
        echo "Terjadi kesalahan saat mengambil data: " . mysqli_error($koneksi);
    }
} else {
    echo "Koneksi database tidak aktif.";
}
