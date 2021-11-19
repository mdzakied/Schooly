-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2021 pada 14.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb_online_2021`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb2021`
--

CREATE TABLE `psb2021` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nisn` int(10) NOT NULL,
  `level` int(1) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `sekolah_tujuan` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `psb2021`
--

INSERT INTO `psb2021` (`id`, `foto`, `nama`, `email`, `password`, `nisn`, `level`, `gender`, `place`, `date`, `sekolah_asal`, `sekolah_tujuan`, `jurusan`, `status`) VALUES
(1, '19112021133705photo-1535982368253-05d640fe0755.jpg', 'Sarah Yunita Siwi', 'sarah123@schooly.com', 'sarah123', 25858619, 2, 'Perempuan', 'Semarang', '2021-11-19', 'SMP N 11 SEMARANG', 'SMK N 7 SEMARANG', 'Sistem Informatika Jaringan dan Aplikasi', 'Diterima'),
(2, '191120211335527658697800-8.jpg', 'Iwan Putra', 'iwan123@schooly.com', 'iwan123', 25338617, 2, 'Laki-Laki', 'Semarang', '2021-11-19', 'SMP N 12 SEMARANG', 'SMK N 7 SEMARANG', 'Sistem Informatika Jaringan dan Aplikasi', 'Tahap 1 : Daftar Online'),
(3, '1911202113434132t42er897.jpg', 'Jonathan Chooper', 'jonathan123@schooly.com', 'jonathan123', 25998617, 2, 'Laki-Laki', 'Bandung', '2021-11-19', 'SMP N 31 SEMARANG', 'SMK N 9 SEMARANG', 'Teknik Elektronika Daya dan Komunikasi', 'Diterima'),
(4, '19112021134434325425.jpg', 'Nana Marina', 'nana123@schooly.com', 'nana123', 25858610, 2, 'Perempuan', 'Bandung', '2021-11-19', 'SMP N 88 SEMARANG', 'SMK N 8 SEMARANG', 'Konstruksi Gedung, Sanitasi, dan Perawatan ', 'Tahap 1 : Daftar Online'),
(5, '19112021134524q34235t.jpg', 'Ussop Jane', 'ussop123@schooly.com', 'ussop123', 25858699, 2, 'Laki-Laki', 'Solo', '2021-11-19', 'SMP N 11 SEMARANG', 'SMK N 7 SEMARANG', 'Teknik Mekatronika', 'Tahap 1 : Daftar Online');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nisn` int(10) NOT NULL,
  `level` int(1) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `foto`, `nama`, `email`, `password`, `nisn`, `level`, `gender`, `place`, `date`) VALUES
(1, '19112021130148admin.png', 'admin', 'admin@schooly.com', 'admin', 0, 1, 'Laki-Laki', 'Semarang', '2021-11-19'),
(3, '19112021131450user.png', 'user', 'user@schooly.com', 'user', 0, 2, 'Perempuan', 'Semarang', '2021-11-19'),
(4, '19112021131847photo-1535982368253-05d640fe0755.jpg', 'Sarah Yunita Siwi', 'sarah123@schooly.com', 'sarah123', 25858619, 2, 'Perempuan', 'Semarang', '2021-11-19'),
(5, '191120211334417658697800-8.jpg', 'Iwan Putra', 'iwan123@schooly.com', 'iwan123', 25338617, 2, 'Laki-Laki', 'Semarang', '2021-11-19'),
(6, '1911202113401432t42er897.jpg', 'Jonathan Chooper', 'jonathan123@schooly.com', 'jonathan123', 25998617, 2, 'Laki-Laki', 'Bandung', '2021-11-19'),
(7, '19112021134049325425.jpg', 'Nana Marina', 'nana123@schooly.com', 'nana123', 25858610, 2, 'Perempuan', 'Bandung', '2021-11-19'),
(8, '19112021134216q34235t.jpg', 'Ussop Jane', 'ussop123@schooly.com', 'ussop123', 25858699, 2, 'Laki-Laki', 'Solo', '2021-11-19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `psb2021`
--
ALTER TABLE `psb2021`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
