-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2022 pada 15.00
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
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_admin`
--

CREATE TABLE `table_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(128) NOT NULL,
  `username_admin` varchar(128) NOT NULL,
  `password_admin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_admin`
--

INSERT INTO `table_admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`) VALUES
(1, 'iksan', 'iksan', '123'),
(2, 'andi', 'andi', '123'),
(3, 'adi', 'adi', '123\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_mobil`
--

CREATE TABLE `table_mobil` (
  `id_mobil` int(11) NOT NULL,
  `warna_mobil` varchar(128) NOT NULL,
  `merk_mobil` varchar(128) NOT NULL,
  `plat_mobil` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_mobil`
--

INSERT INTO `table_mobil` (`id_mobil`, `warna_mobil`, `merk_mobil`, `plat_mobil`, `gambar`) VALUES
(1, 'silver', 'Kijang Innova', 'dd1405aw', 'https://imgcdn.oto.com/medium/gallery/exterior/38/1240/toyota-kijang-innova-67295.jpg'),
(17, 'hitam', 'agya', 'dw 4646 co', 'https://imgcdn.oto.com/large/gallery/color/38/1732/toyota-agya-color-331008.jpg'),
(18, 'putih', 'avanza', 'dp 68668 ai', 'https://images.autofun.co.id/file1/970f966c5ed641ba9c9d48ad28d8467c_456x258.jpg'),
(21, 'hitam', 'bmw', 'awawaawa', 'https://imgx.gridoto.com/crop/128x0:1792x1080/700x465/photo/2021/07/01/bmw-8-series-x5-japan-1jpg-20210701075239.jpg'),
(22, 'hitam', 'Fortuner', 'b 18', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3rt9vm-LdPQq9exdA9GpJQlpJe5xrRhxF-Q&usqp=CAU'),
(23, 'hitam', 'brio', 't 178', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfkkWMlQq57AG3h7BWS228h4abDWe3NAxOxA&usqp=CAU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pembeli`
--

CREATE TABLE `table_pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(128) NOT NULL,
  `alamat_pembeli` varchar(128) NOT NULL,
  `nomor_pembeli` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_pembeli`
--

INSERT INTO `table_pembeli` (`id_pembeli`, `nama_pembeli`, `alamat_pembeli`, `nomor_pembeli`) VALUES
(1, 'kusuma', 'makassar', '08222222222'),
(2, 'jaya', 'semarang', '08222222222222'),
(3, 'abdi', 'makassar', '08239999999999');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_transaksi`
--

CREATE TABLE `table_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `harga_sewa` int(128) NOT NULL,
  `waktu_pinjam` datetime NOT NULL,
  `waktu_pengembalian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_transaksi`
--

INSERT INTO `table_transaksi` (`id_transaksi`, `id_admin`, `id_mobil`, `id_pembeli`, `harga_sewa`, `waktu_pinjam`, `waktu_pengembalian`) VALUES
(1, 1, 1, 1, 500000, '2022-04-03 06:07:55', '2022-04-19 06:07:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `table_mobil`
--
ALTER TABLE `table_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `table_pembeli`
--
ALTER TABLE `table_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `table_transaksi`
--
ALTER TABLE `table_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `table_mobil`
--
ALTER TABLE `table_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `table_pembeli`
--
ALTER TABLE `table_pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `table_transaksi`
--
ALTER TABLE `table_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `table_transaksi`
--
ALTER TABLE `table_transaksi`
  ADD CONSTRAINT `table_transaksi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `table_admin` (`id_admin`),
  ADD CONSTRAINT `table_transaksi_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `table_mobil` (`id_mobil`),
  ADD CONSTRAINT `table_transaksi_ibfk_3` FOREIGN KEY (`id_pembeli`) REFERENCES `table_pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
