<?php
include_once 'koneksi.php';

if (mysqli_ping($koneksi)) {
    $query = "SELECT id_surat, alamat_pengirim, tanggal_surat, nomor_surat, perihal, alamat_tujuan, isi_disposisi, keterangan FROM surat_masuk";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        echo "<h3>Surat Masuk</h3>";
        echo "<table border='1'>";
        echo "<tr>
                <th>ID Surat</th>
                <th>Alamat Pengirim</th>
                <th>Tanggal Surat</th>
                <th>Nomor Surat</th>
                <th>Perihal</th>
                <th>Alamat Tujuan</th>
                <th>Isi Disposisi</th>
                <th>Keterangan</th>
                <th colspan='2'>Aksi</th>
              </tr>";

        $no = 1;
        while ($row = mysqli_fetch_assoc($hasil)) {
            echo "<tr>
                    <td>{$row['id_surat']}</td>
                    <td>{$row['alamat_pengirim']}</td>
                    <td>{$row['tanggal_surat']}</td>
                    <td>{$row['nomor_surat']}</td>
                    <td>{$row['perihal']}</td>
                    <td>{$row['alamat_tujuan']}</td>
                    <td>{$row['isi_disposisi']}</td>
                    <td>{$row['keterangan']}</td>
                    <td><a href='?kode={$row['id_surat']}'>Hapus</a></td>
                    <td><a href='barang-ubah.php?kode={$row['id_surat']}'>Ubah</a></td>
                  </tr>";
            $no++;
        }

        echo "</table>";
    } else {
        echo "Terjadi kesalahan saat mengambil data: " . mysqli_error($koneksi);
    }

    if (isset($_GET['kode'])) {
        $id_surat = $_GET['kode'];
        $delete_query = "DELETE FROM surat_masuk WHERE id_surat = '$id_surat'";

        if (mysqli_query($koneksi, $delete_query)) {
            echo "Data berhasil dihapus.";
            echo "<meta http-equiv='refresh' content='2;URL=surat-masuk.php'>";
        } else {
            echo "Gagal menghapus data: " . mysqli_error($koneksi);
        }
    }
} else {
    echo "Koneksi database tidak aktif.";
}
