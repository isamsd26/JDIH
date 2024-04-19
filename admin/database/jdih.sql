-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2024 pada 05.05
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdih`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `alamat_pengirim` varchar(50) NOT NULL,
  `tanggal_surat` varchar(10) NOT NULL,
  `nomor_surat` varchar(10) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `alamat_tujuan` varchar(40) NOT NULL,
  `isi_disposisi` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`alamat_pengirim`, `tanggal_surat`, `nomor_surat`, `perihal`, `alamat_tujuan`, `isi_disposisi`, `keterangan`) VALUES
('surabaya', '2024-04-18', 'asde', 'apa aja', 'salatiga', 'isi aja', 'apapun'),
('dshnfkjid', '2024-04-02', 'asde/123/j', 'apa aja', 'salatiga', 'isi aja', 'apapun');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
