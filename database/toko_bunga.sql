-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2023 pada 12.18
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
-- Database: `toko_bunga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buket`
--

CREATE TABLE `buket` (
  `id_buket` int(11) NOT NULL,
  `nama_buket` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sizebuket` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buket`
--

INSERT INTO `buket` (`id_buket`, `nama_buket`, `gambar`, `id_kategori`, `id_sizebuket`, `id_status`, `harga`) VALUES
(1, 'White Gladioluses Bouquet', 'assets/img/WhiteGlodiolusBouquet_436x436.jpg', 1, 2, 1, '165000.00'),
(2, 'Bloom Box Lily dan Mawar', 'assets/img/bloom box bunga lily dan mawar.jpg', 1, 1, 1, '250000.00'),
(3, 'Forero Bouquet', 'assets/img/forero.jpg', 4, 2, 3, '300000.00'),
(4, 'Purple Elegant Balloon', 'assets/img/Purple Elegant Balloon Bouquet.jpg', 2, 3, 2, '150000.00'),
(5, 'Blue Snack Bouquet', 'assets/img/blue snack bouquet.jpg', 4, 2, 1, '70000.00'),
(6, 'Jasa 45-50 Lembar', 'assets/img/jasa 45-50 lembar uang 100rb.jpg', 3, 3, 2, '280000.00'),
(7, 'Jasa 20-30 Lembar', 'assets/img/jasa 15-20 lembar uang 50rb.jpg', 3, 2, 2, '170000.00'),
(8, 'Heart Shape ', 'assets/img/heart shape bouquet.jpg', 1, 2, 3, '475000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` enum('Bunga','Balon','Uang','Snack') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Bunga'),
(2, 'Balon'),
(3, 'Uang'),
(4, 'Snack');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sizebuket`
--

CREATE TABLE `sizebuket` (
  `id_sizebuket` int(11) NOT NULL,
  `nama_size` enum('Small','Medium','Large') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sizebuket`
--

INSERT INTO `sizebuket` (`id_sizebuket`, `nama_size`) VALUES
(1, 'Small'),
(2, 'Medium'),
(3, 'Large');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` enum('Available','Restock','Unavailable') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
(1, 'Available'),
(2, 'Restock'),
(3, 'Unavailable');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buket`
--
ALTER TABLE `buket`
  ADD PRIMARY KEY (`id_buket`),
  ADD KEY `FK_kategori` (`id_kategori`),
  ADD KEY `FK_sizebuket` (`id_sizebuket`),
  ADD KEY `FK_status` (`id_status`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `sizebuket`
--
ALTER TABLE `sizebuket`
  ADD PRIMARY KEY (`id_sizebuket`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buket`
--
ALTER TABLE `buket`
  MODIFY `id_buket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sizebuket`
--
ALTER TABLE `sizebuket`
  MODIFY `id_sizebuket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buket`
--
ALTER TABLE `buket`
  ADD CONSTRAINT `FK_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `FK_sizebuket` FOREIGN KEY (`id_sizebuket`) REFERENCES `sizebuket` (`id_sizebuket`),
  ADD CONSTRAINT `FK_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
