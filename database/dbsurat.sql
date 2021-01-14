-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2021 pada 08.19
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsurat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratkeluar`
--

CREATE TABLE `tb_suratkeluar` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_suratkeluar`
--

INSERT INTO `tb_suratkeluar` (`id`, `no_surat`, `asal_surat`, `tgl_keluar`, `penerbit`, `perihal`) VALUES
(2, '01/Bupati/XII/2021', 'H.Surya Bsc', '2021-01-07', 'Irmaya Sari', 'Musrembang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratmasuk`
--

CREATE TABLE `tb_suratmasuk` (
  `id` int(5) NOT NULL,
  `no_surat` varchar(15) NOT NULL,
  `asal_surat` varchar(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_suratmasuk`
--

INSERT INTO `tb_suratmasuk` (`id`, `no_surat`, `asal_surat`, `tgl_masuk`, `penerima`, `perihal`) VALUES
(11, '01/Bupati/2021', 'Bupati Asahan', '2021-01-06', 'Pajaruddin Manurung', 'Musrembang desa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'faraswahyuddin1909@gmail.com', 'Kelompok Open Source', 1, 'Staff Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
