-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2022 pada 09.19
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inihotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_kamar`
--

CREATE TABLE `tbl_jenis_kamar` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jenis_kamar`
--

INSERT INTO `tbl_jenis_kamar` (`id_jenis`, `nama_jenis`, `keterangan`, `harga`, `foto`) VALUES
(1, 'Standar Room', 'hdsgbvuynlocjm', 111, 's'),
(4, '1', 'q', 10, 's');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id` int(11) NOT NULL,
  `no_kamar` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `ket_kamar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id`, `no_kamar`, `id_jenis`, `ket_kamar`) VALUES
(6, '3', 9, '9'),
(8, '1', 2, '9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konsumen`
--

CREATE TABLE `tbl_konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_tengah` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `no_identitas` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_konsumen`
--

INSERT INTO `tbl_konsumen` (`id_konsumen`, `nama_depan`, `nama_tengah`, `nama_belakang`, `alamat`, `kota`, `provinsi`, `negara`, `no_identitas`, `no_telp`, `email`) VALUES
(1, 'Risma', 'Nur', 'Nurhasanah', 'BNR1', 'TASIK', 'JAWA BARAT', 'INDONESIA', '123', '089756432657', 'nur@gmai.com'),
(2, 'duar', '', 'uchul', 'paseh', 'tasikmalaya', 'jawa barat', 'indonesia', '8666666656978', '0892842', 'duar@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `konsumen` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `durasi` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `id_user`, `konsumen`, `tgl`, `id_jenis`, `durasi`) VALUES
(2, 'risma', 'Rema', '2022-04-05', 1, '00:00:00'),
(6, 'indri', 'rema', '2022-04-05', 2, '00:00:00'),
(7, '2', 'Rema', '2022-04-06', 0, '16:18:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `hak_akses` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `nama_lengkap`, `no_hp`, `hak_akses`) VALUES
(1, 'risma@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Risma Nurhasanah', '085834663856', 'user'),
(2, 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'admin 1', '089515280850', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
