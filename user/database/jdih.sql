-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2024 pada 18.02
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

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
-- Struktur dari tabel `agenda_ajuan`
--

CREATE TABLE `agenda_ajuan` (
  `no_id` int(11) NOT NULL,
  `alamat_pengirim` varchar(255) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `tanggal_naik` date DEFAULT NULL,
  `tanggal_turun` date DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `alamat_tujuan` varchar(255) DEFAULT NULL,
  `isi_disposisi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda_ajuan`
--

INSERT INTO `agenda_ajuan` (`no_id`, `alamat_pengirim`, `tanggal_surat`, `nomor_surat`, `tanggal_naik`, `tanggal_turun`, `perihal`, `alamat_tujuan`, `isi_disposisi`) VALUES
(1, 'Alamat Pengirim 5', '2024-05-19', 'NA001', '2024-06-10', '2024-06-15', 'Perihal Agenda Ajuan 1', 'Alamat Tujuan 1', 'Isi Disposisi 1'),
(2, 'Alamat Pengirim 6', '2024-05-20', 'NA002', '2024-06-12', '2024-06-17', 'Perihal Agenda Ajuan 2', 'Alamat Tujuan 2', 'Isi Disposisi 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda_masuk`
--

CREATE TABLE `agenda_masuk` (
  `no_id` int(11) NOT NULL,
  `alamat_pengirim` varchar(255) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `alamat_tujuan` varchar(255) DEFAULT NULL,
  `isi_disposisi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda_masuk`
--

INSERT INTO `agenda_masuk` (`no_id`, `alamat_pengirim`, `tanggal_surat`, `nomor_surat`, `perihal`, `alamat_tujuan`, `isi_disposisi`) VALUES
(1, 'Alamat Pengirim 3', '2024-05-17', 'NA001', 'Perihal Agenda Masuk 1', 'Alamat Tujuan 1', 'Isi Disposisi 1'),
(2, 'Alamat Pengirim 4', '2024-05-18', 'NA002', 'Perihal Agenda Masuk 2', 'Alamat Tujuan 2', 'Isi Disposisi 2'),
(3, 'tegal sari', '2024-05-14', 'N2013', 'rapat penting', 'kantor daerah', 'isi disposisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_acara` int(11) NOT NULL,
  `tanggal_acara` date DEFAULT NULL,
  `waktu_acara` time DEFAULT NULL,
  `tempat_acara` varchar(255) DEFAULT NULL,
  `hadir` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_acara`, `tanggal_acara`, `waktu_acara`, `tempat_acara`, `hadir`) VALUES
(1, '2024-06-10', '15:00:00', 'Ruang Aula', 1),
(2, '2024-06-11', '10:30:00', 'Ruang Rapat', 0),
(3, '2024-06-12', '14:00:00', 'Ruang Konferensi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapat`
--

CREATE TABLE `rapat` (
  `id_rapat` int(11) NOT NULL,
  `nama_rapat` varchar(255) DEFAULT NULL,
  `tanggal_rapat` date DEFAULT NULL,
  `waktu_rapat` time DEFAULT NULL,
  `tempat_rapat` varchar(255) DEFAULT NULL,
  `hadir` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rapat`
--

INSERT INTO `rapat` (`id_rapat`, `nama_rapat`, `tanggal_rapat`, `waktu_rapat`, `tempat_rapat`, `hadir`) VALUES
(1, 'rapat penting', '2024-05-10', '14:00:00', 'Ruang Rapat Utama', 1),
(2, 'rapat penting', '2024-05-11', '10:00:00', 'Ruang Rapat Kedua', 0),
(3, 'rapat penting', '2024-05-12', '15:30:00', 'Ruang Rapat Utama', 1),
(4, 'rapat penting', '2024-05-13', '09:00:00', 'Ruang Rapat Tiga', 1),
(5, 'rapat penting', '2024-05-07', '16:04:00', 'tempat 2', NULL),
(6, 'rapat penting', '2024-05-07', '16:04:00', 'tempat 2', NULL),
(7, 'rapat penting', '2024-05-07', '16:04:00', 'tempat 2', NULL),
(8, 'rapat penting', '2024-05-07', '12:14:00', 'tempat 2', NULL),
(9, 'rapat penting', '2024-05-07', '15:15:00', 'tempat 2', NULL),
(10, 'rapat penting', '2024-05-07', '13:15:00', 'tempat 2', NULL),
(11, 'rapat penting', '2024-05-07', '15:20:00', 'tempat 1', NULL),
(12, 'rapat penting', '2024-05-14', '22:00:00', 'tempat 2', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `description`) VALUES
(1, 'user', 'Peran untuk pengguna biasa'),
(2, 'admin', 'Peran untuk administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat` int(30) NOT NULL,
  `alamat_pengirim` varchar(50) NOT NULL,
  `tanggal_surat` varchar(10) NOT NULL,
  `nomor_surat` varchar(10) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `alamat_tujuan` varchar(40) NOT NULL,
  `isi_disposisi` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat`, `alamat_pengirim`, `tanggal_surat`, `nomor_surat`, `perihal`, `alamat_tujuan`, `isi_disposisi`, `keterangan`) VALUES
(1, 'dshnfkjid', '2024-04-02', 'asde/123/j', 'apa aja', 'salatiga', 'isi aja', 'apapun'),
(2, 'tegal sari', '2024-05-13', '212', 'rapat penting', 'kantor pusat', 'isi disposisi', ''),
(3, 'tegal sari', '2024-05-13', '212', 'jalan jalan', 'kantor daerah', 'isi disposisi', ''),
(4, 'tegal sari', '2024-05-13', '213', 'jalan jalan', 'kantor daerah', 'isi disposisi', ''),
(5, 'tegal sari', '2024-05-13', '213', 'jalan jalan', 'kantor daerah', 'isi disposisi', ''),
(6, 'keraton', '2024-05-14', '214', 'jalan jalan', 'kantor daerah', 'isi disposisi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `undangan`
--

CREATE TABLE `undangan` (
  `no_id` int(11) NOT NULL,
  `alamat_pengirim` varchar(255) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `tanggal_pelaksanaan` date DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `isi_disposisi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `undangan`
--

INSERT INTO `undangan` (`no_id`, `alamat_pengirim`, `tanggal_surat`, `nomor_surat`, `perihal`, `tanggal_pelaksanaan`, `tempat`, `tujuan`, `isi_disposisi`) VALUES
(1, 'Alamat Pengirim 1', '2024-05-15', 'NS001', 'Perihal Undangan 1', '2024-06-01', 'Tempat Undangan 1', 'Tujuan Undangan 1', 'Isi Disposisi 1'),
(2, 'Alamat Pengirim 2', '2024-05-16', 'NS002', 'Perihal Undangan 2', '2024-06-02', 'Tempat Undangan 2', 'Tujuan Undangan 2', 'Isi Disposisi 2'),
(3, 'tegal sari', '2024-05-13', 'N2012', 'rapat penting', '2024-05-14', 'Tempat Rapat 2', 'seluruh anggota', 'isi disposisi'),
(4, 'tegal sari', '2024-05-13', 'N2013', 'rapat penting', '2024-05-16', 'Tempat Rapat 1', 'seluruh anggota', 'isi disposisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin_password', 2),
(2, 'user1', 'user_password', 1),
(3, 'user2', 'user_password', 1),
(7, 'jamal', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda_ajuan`
--
ALTER TABLE `agenda_ajuan`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `agenda_masuk`
--
ALTER TABLE `agenda_masuk`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indeks untuk tabel `rapat`
--
ALTER TABLE `rapat`
  ADD PRIMARY KEY (`id_rapat`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda_ajuan`
--
ALTER TABLE `agenda_ajuan`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `agenda_masuk`
--
ALTER TABLE `agenda_masuk`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rapat`
--
ALTER TABLE `rapat`
  MODIFY `id_rapat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `undangan`
--
ALTER TABLE `undangan`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
