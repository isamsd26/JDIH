<?php
include_once dirname(__FILE__) . '/../dom/koneksi.php';

if (!function_exists('getLatestActions')) {
    function getLatestActions($koneksi)
    {
        $query = "SELECT * FROM tindakan ORDER BY tanggal DESC LIMIT 5";
        $result = mysqli_query($koneksi, $query);

        $actions = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $actions[] = $row;
        }
        return $actions;
    }
}

if (!function_exists('addTindakan')) {
    function addTindakan($koneksi, $jenis, $deskripsi)
    {
        $query = "INSERT INTO tindakan (jenis, deskripsi, tanggal) VALUES (?, ?, NOW())";
        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, "ss", $jenis, $deskripsi);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}
