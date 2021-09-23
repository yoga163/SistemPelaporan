-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2021 pada 06.20
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_agt` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_agt`, `nama`, `username`, `pass`, `alamat`, `level`) VALUES
(2, 'Admin', 'admin', 'admin', 'Sumber', 1),
(3, 'Agustinus K', 'lurah', 'lurah', 'Sendangguwo', 2),
(8, 'yoga', 'yoga', 'yoga', 'sumber', 2),
(9, 'yoga2', 'yoga2', 'yoga2', 'Sumber', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor`
--

CREATE TABLE `lapor` (
  `id_lapor` int(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `laporan` varchar(800) NOT NULL,
  `tgl` date NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lapor`
--

INSERT INTO `lapor` (`id_lapor`, `nama`, `nohp`, `alamat`, `laporan`, `tgl`, `foto`) VALUES
(11, 'tuti', '087213765341', 'RT02', 'jalan rusak pak', '2020-12-12', 'Jellyfish1.jpg'),
(14, 'Yoki', '2147483647', 'RT 04', 'cctv mati', '2020-12-13', 'Penguins.jpg'),
(15, 'Aan', '2147483647', 'Sendangguwo rt 09', 'Pos ronda cctv nya rusak', '2020-12-15', 'Chrysanthemum.jpg'),
(16, 'Lia', '2147483647', 'Rt 02 rw 01', 'Jalan berlubang', '2020-12-17', 'Hydrangeas.jpg'),
(17, 'Kita', '2147483647', 'rt02 rw08', 'Jalan rusak', '2020-12-17', 'Jellyfish.jpg'),
(18, 'bu sri', '08123141512', 'RT 08', 'jalan rusak', '2020-12-20', 'Desert.jpg'),
(19, 'Agung', '08765341721', 'Rt 4', 'cctv mati', '2020-12-20', 'Koala.jpg'),
(20, 'Pras', '098712312341', 'RT 03', 'cctv mati', '2020-12-20', 'Jellyfish2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(1) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `status`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_agt`);

--
-- Indeks untuk tabel `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id_lapor`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_agt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id_lapor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
