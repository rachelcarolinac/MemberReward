-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Nov 2016 pada 15.34
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reward`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keaktifan`
--

CREATE TABLE `keaktifan` (
  `id_keaktifan` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_file` varchar(40) NOT NULL,
  `status_keaktifan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keaktifan`
--

INSERT INTO `keaktifan` (`id_keaktifan`, `id_pengguna`, `id_kegiatan`, `deskripsi`, `nama_file`, `status_keaktifan`) VALUES
(2, 2, 1, 'asd', 'cfd9454ec126dbf3b8c150cb620d4b99.jpg', 2),
(3, 2, 1, 'abc', '5cf99f72a45983f4bf6d20299ef3b2b9.PNG', 1),
(4, 2, 1, 'apalah', '0f3e6862e789fc56e0120818454d58fe.PNG', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `poin_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `poin_kegiatan`) VALUES
(1, 'Test', 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `level_pengguna` int(2) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `level_pengguna`, `username`, `password`) VALUES
(1, 'Administrator', 1, 'admin', 'admin'),
(2, 'Pengguna', 2, 'pengguna', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keaktifan`
--
ALTER TABLE `keaktifan`
  ADD PRIMARY KEY (`id_keaktifan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keaktifan`
--
ALTER TABLE `keaktifan`
  MODIFY `id_keaktifan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
