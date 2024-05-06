<?php
include_once 'koneksi.php';  // Pastikan koneksi ke database

$query = "SELECT id_acara, tanggal_acara, waktu_acara, tempat_acara, hadir FROM kegiatan";  // Ambil data kegiatan
$hasil = mysqli_query($koneksi, $query);  // Jalankan query

if ($hasil && mysqli_num_rows($hasil) > 0) {
    echo '<table class="table table-striped bg-tabel rounded-top">';
    echo '<thead>';
    echo '<tr>';
    echo '  <th>ACARA</th>';
    echo '  <th>TANGGAL ACARA</th>';
    echo '  <th>WAKTU ACARA</th>';
    echo '  <th>TEMPAT ACARA</th>';
    echo '  <th>HADIR</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = mysqli_fetch_assoc($hasil)) {
        echo '<tr>';
        echo "  <td>{$row['id_acara']}</td>";  // ID acara
        echo "  <td>{$row['tanggal_acara']}</td>";  // Tanggal acara
        echo "  <td>{$row['waktu_acara']}</td>";  // Waktu acara
        echo "  <td>{$row['tempat_acara']}</td>";  // Tempat acara
        echo "  <td>" . ($row['hadir'] ? 'Ya' : 'Tidak') . "</td>";  // Hadir atau tidak
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo "Tidak ada data kegiatan yang ditemukan.";  // Pesan jika tidak ada data
}
