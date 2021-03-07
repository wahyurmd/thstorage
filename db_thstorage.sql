-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2021 pada 15.05
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thstorage`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuci_helm`
--

CREATE TABLE `cuci_helm` (
  `id` int(11) NOT NULL,
  `kode_penitipan` varchar(20) NOT NULL,
  `status_cuci` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuci_helm`
--

INSERT INTO `cuci_helm` (`id`, `kode_penitipan`, `status_cuci`) VALUES
(1, 'THS20201219121948', 2),
(2, 'THS20201220125739', 0),
(3, 'THS20201220130138', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_penitipan`
--

CREATE TABLE `deskripsi_penitipan` (
  `kode_deskripsi` varchar(20) NOT NULL,
  `kode_merk` varchar(20) NOT NULL,
  `kode_helm` varchar(20) NOT NULL,
  `warna_helm` varchar(50) NOT NULL,
  `cuci_helm` varchar(50) NOT NULL,
  `titip_barang` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deskripsi_penitipan`
--

INSERT INTO `deskripsi_penitipan` (`kode_deskripsi`, `kode_merk`, `kode_helm`, `warna_helm`, `cuci_helm`, `titip_barang`, `keterangan`, `status`) VALUES
('THSD20201219121948', 'H08SNI', 'JN02', 'Biru', 'Ya', 'Tas', 'Tidak ada baret', 1),
('THSD20201220125739', 'H02SNI', 'JN04', 'Hijau', 'Tidak', 'Tidak', 'Mulus ges', 1),
('THSD20201220130138', 'H13SNI', 'JN02', 'Biru', 'Tidak', '-', '-', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `helm`
--

CREATE TABLE `helm` (
  `kode_helm` varchar(20) NOT NULL,
  `jenis_helm` varchar(20) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `helm`
--

INSERT INTO `helm` (`kode_helm`, `jenis_helm`, `createtime`, `status`) VALUES
('JN01', 'FULL FACE', '2020-11-14 10:18:53', 1),
('JN02', 'HALF FACE', '2020-11-14 10:18:53', 1),
('JN03', 'OPEN FACE', '2020-11-14 10:18:53', 1),
('JN04', 'OFF ROAD', '2020-11-14 10:18:53', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
--

CREATE TABLE `loker` (
  `kode_loker` varchar(20) NOT NULL,
  `nomor_loker` varchar(20) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`kode_loker`, `nomor_loker`, `status`) VALUES
('LK01', '01', 0),
('LK02', '02', 0),
('LK03', '03', 1),
('LK04', '04', 1),
('LK05', '05', 1),
('LK06', '06', 1),
('LK07', '07', 1),
('LK08', '08', 1),
('LK09', '09', 1),
('LK10', '10', 1),
('LK11', '11', 1),
('LK12', '12', 1),
('LK13', '13', 1),
('LK14', '14', 1),
('LK15', '15', 1),
('LK16', '16', 1),
('LK17', '17', 1),
('LK18', '18', 1),
('LK19', '19', 1),
('LK20', '20', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `kode_merk` varchar(20) NOT NULL,
  `nama_merk` varchar(20) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`kode_merk`, `nama_merk`, `createtime`, `status`) VALUES
('H01SNI', 'NHK', '2020-11-08 11:46:59', 1),
('H02SNI', 'GM', '2020-11-08 11:46:59', 1),
('H03SNI', 'VOG', '2020-11-08 11:46:59', 1),
('H04SNI', 'MAZ', '2020-11-08 11:46:59', 1),
('H05SNI', 'MIX', '2020-11-08 11:46:59', 1),
('H06SNI', 'INK', '2020-11-08 11:46:59', 1),
('H07SNI', 'KYT', '2020-11-08 11:46:59', 1),
('H08SNI', 'MDS', '2020-11-08 11:46:59', 1),
('H09SNI', 'BMC', '2020-11-08 11:46:59', 1),
('H10SNI', 'HIU', '2020-11-08 11:46:59', 1),
('H11SNI', 'JPN', '2020-11-08 11:46:59', 1),
('H12SNI', 'CARGLOSS', '2020-11-08 11:46:59', 1),
('H13SNI', 'BESTI', '2020-11-08 11:46:59', 1),
('H14SNI', 'CROSX', '2020-11-08 11:46:59', 1),
('H15SNI', 'SMI', '2020-11-08 11:46:59', 1),
('H16SNI', 'SHC', '2020-11-08 11:46:59', 1),
('H17SNI', 'HBC', '2020-11-08 11:46:59', 1),
('H18SNI', 'CABERG', '2020-11-08 11:46:59', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_user`
--

CREATE TABLE `mst_user` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT current_timestamp(),
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mst_user`
--

INSERT INTO `mst_user` (`nip`, `nama`, `email`, `nohp`, `password`, `createtime`, `last_login`, `status`) VALUES
('101000001', 'Fadhilah Nur Laili', 'dhil@gmail.com', '081384423587', '05948f7039a32d92786d7f1500e2567b', '2020-12-09 02:10:28', '2020-12-09 02:10:28', 1),
('101000002', 'Wahyu Ramadhani', 'wahyurmd0512@gmail.com', '085772386898', '05948f7039a32d92786d7f1500e2567b', '2020-11-13 17:25:36', '2020-12-19 04:55:54', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penitipan`
--

CREATE TABLE `penitipan` (
  `kode_penitipan` varchar(20) NOT NULL,
  `kode_deskripsi` varchar(20) NOT NULL,
  `kode_loker` varchar(20) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama_penitip` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `time_in` timestamp NOT NULL DEFAULT current_timestamp(),
  `time_out` timestamp NULL DEFAULT NULL,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penitipan`
--

INSERT INTO `penitipan` (`kode_penitipan`, `kode_deskripsi`, `kode_loker`, `nip`, `nama_penitip`, `tgl_lahir`, `time_in`, `time_out`, `status`) VALUES
('THS20201219121948', 'THSD20201219121948', 'LK01', 101000002, 'Fadhilah Nur Laili', '2000-10-11', '2020-12-19 05:19:48', '2020-12-19 05:27:27', 0),
('THS20201220125739', 'THSD20201220125739', 'LK01', 101000002, 'Toriq Manugel', '2003-01-01', '2020-12-19 05:57:39', NULL, 1),
('THS20201220130138', 'THSD20201220130138', 'LK02', 101000002, 'Teguh Sabara', '2001-02-02', '2020-12-19 06:01:38', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase`
--

CREATE TABLE `purchase` (
  `kode_pembayaran` varchar(20) NOT NULL,
  `kode_penitipan` varchar(20) NOT NULL,
  `kode_deskripsi` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_penitip` varchar(50) NOT NULL,
  `time_in` timestamp NOT NULL DEFAULT current_timestamp(),
  `time_out` timestamp NOT NULL DEFAULT current_timestamp(),
  `lama_penitipan` varchar(20) NOT NULL,
  `tarif_penitipan` int(20) NOT NULL,
  `uang_diterima` int(20) NOT NULL,
  `uang_dikembalikan` int(20) NOT NULL,
  `denda` int(20) NOT NULL,
  `tarif_cuci` int(20) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `purchase`
--

INSERT INTO `purchase` (`kode_pembayaran`, `kode_penitipan`, `kode_deskripsi`, `nip`, `nama_penitip`, `time_in`, `time_out`, `lama_penitipan`, `tarif_penitipan`, `uang_diterima`, `uang_dikembalikan`, `denda`, `tarif_cuci`, `status`) VALUES
('PTHS20201219122725', 'THS20201219121948', 'THSD20201219121948', '101000002', 'Fadhilah Nur Laili', '2020-12-19 05:19:48', '2020-12-19 05:27:27', '1', 2000, 25000, 3000, 10000, 10000, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuci_helm`
--
ALTER TABLE `cuci_helm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `deskripsi_penitipan`
--
ALTER TABLE `deskripsi_penitipan`
  ADD PRIMARY KEY (`kode_deskripsi`);

--
-- Indeks untuk tabel `helm`
--
ALTER TABLE `helm`
  ADD PRIMARY KEY (`kode_helm`);

--
-- Indeks untuk tabel `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`kode_loker`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`kode_merk`);

--
-- Indeks untuk tabel `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `penitipan`
--
ALTER TABLE `penitipan`
  ADD PRIMARY KEY (`kode_penitipan`);

--
-- Indeks untuk tabel `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`kode_pembayaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cuci_helm`
--
ALTER TABLE `cuci_helm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
