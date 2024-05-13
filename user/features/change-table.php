<?php
include 'dom/koneksi.php';

if (isset($_GET['table'])) {
    $tableType = $_GET['table'];

    switch ($tableType) {
        case 'surat_masuk':
            $path = 'dom/surat-masuk.php';
            break;
        case 'undangan':
            $path = 'dom/undangan.php';
            break;
        case 'agenda_masuk':
            $path = 'dom/agenda_masuk.php';
            break;
        case 'agenda_ajuan':
            $path = 'dom/agenda_ajuan.php';
            break;
        default:
            $path = 'dom/tbl-rapat.php';
            break;
    }

    if (file_exists($path)) {
        include $path;
    } else {
        echo 'File tidak ditemukan.';
    }
} else {
    echo 'Jenis tabel tidak ditemukan.';
}
