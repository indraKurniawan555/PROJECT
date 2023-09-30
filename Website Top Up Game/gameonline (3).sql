-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2023 pada 04.29
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik`
--

CREATE TABLE `kritik` (
  `email` varchar(45) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kritik`
--

INSERT INTO `kritik` (`email`, `tanggal`, `isi`) VALUES
('indrasaya520@gmail.com', '2023-06-15', ''),
('indrasaya520@gmail.com', '2023-06-15', 'halloooo'),
('indrasaya520@gmail.com', '2023-06-15', 'pppp'),
('indrasaya520@gmail.com', '2023-06-15', 'pppp'),
('mjhm@gmail.com', '2023-06-16', 'Tolong untuk pengiriman nya lebih dipercepat ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(45) DEFAULT NULL,
  `sandi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `sandi`) VALUES
('indra@gmail.com', '12345678'),
('indra@gmail.com', '12345678'),
('indra@gmail.com', '12345678'),
('indra@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `idPembelian` int(11) NOT NULL,
  `idGame` int(11) DEFAULT NULL,
  `idServer` int(11) DEFAULT NULL,
  `item` varchar(45) DEFAULT NULL,
  `WaktuBeli` datetime DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`idPembelian`, `idGame`, `idServer`, `item`, `WaktuBeli`, `Harga`, `Status`) VALUES
(41, 1234, 123, '25 Diamond', '2023-06-16 00:20:23', 2000, 'Sukses'),
(42, 1234, 123, '25 Diamond', '2023-06-16 00:20:23', 2000, 'Sukses'),
(44, 1234, 123, '30 Diamond', '2023-06-16 00:20:23', 5000, 'Proses'),
(45, 1234567, 123, '30 Diamond', '2023-06-16 16:01:14', 5000, 'Proses'),
(46, 1234567, 123, '30 Diamond', '2023-06-16 16:01:58', 5000, 'Proses'),
(47, 2345718, 1234, '86 Diamond', '2023-06-16 09:38:01', 20000, 'Proses'),
(48, 12345, 1234, '25 Diamond', '2023-06-16 18:04:36', 2000, 'Proses'),
(49, 1234, 0, '32 UC', '2023-06-16 18:10:01', 3900, 'Proses'),
(50, 12345, 0, '720 Diamond', '2023-06-16 19:06:47', 90000, 'Proses'),
(51, 12345678, 0, '140 Diamond', '2023-06-16 02:26:42', 17000, 'Proses'),
(52, 1234567, 0, '263 UC', '2023-06-16 03:43:34', 46500, 'Proses'),
(53, 1234567, 0, '263 UC', '2023-06-16 03:44:18', 46500, 'Sukses'),
(56, 2112433123, 1234, '98 Diamond', '2023-06-16 04:02:10', 23000, 'Proses');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`idPembelian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `idPembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
