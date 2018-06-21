-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jun 2018 pada 10.32
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aset`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `code_loc` int(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`code_loc`, `lokasi`) VALUES
(0, 'asdfg'),
(13, 'aaa'),
(456, 'sdfghj'),
(789, 'dfghklbn'),
(5678, 'dfghj'),
(9876, 'mnbvc'),
(12345, 'asdfg'),
(32423, 'sdcs'),
(98765, 'lkjhgpoiuy'),
(2345689, 'cvbnm, '),
(12345678, 'ujkvcf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manufacturer`
--

CREATE TABLE `manufacturer` (
  `kode_manufacturer` int(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manufacturer`
--

INSERT INTO `manufacturer` (`kode_manufacturer`, `manufacturer`) VALUES
(0, 'asdfghj'),
(1, 'ab'),
(12, 'ass'),
(3243, 'svdsf'),
(123456789, 'qwerty');

-- --------------------------------------------------------

--
-- Struktur dari tabel `model`
--

CREATE TABLE `model` (
  `kode_model` int(50) NOT NULL,
  `model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `model`
--

INSERT INTO `model` (`kode_model`, `model`) VALUES
(1, 'cccccb'),
(2132, 'scds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `kode_barang` int(50) NOT NULL,
  `model_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tgl_mulai_sewa` int(50) NOT NULL,
  `tgl_akhir_sewa` int(50) NOT NULL,
  `no_po` int(50) NOT NULL,
  `supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`kode_barang`, `model_barang`, `nama_barang`, `tgl_mulai_sewa`, `tgl_akhir_sewa`, `no_po`, `supplier`) VALUES
(2345, 'ghjk', 'cvbn', 2018, 2018, 3456, '56780');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spesifikasi`
--

CREATE TABLE `spesifikasi` (
  `hardware_IDS` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `serialnumber` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `processors` varchar(50) DEFAULT NULL,
  `memorytype` varchar(50) DEFAULT NULL,
  `memorysize` varchar(50) DEFAULT NULL,
  `memorymax` int(50) DEFAULT NULL,
  `memorydim1` varchar(50) DEFAULT NULL,
  `memorydim2` varchar(50) DEFAULT NULL,
  `memorydim3` varchar(50) DEFAULT NULL,
  `memorydim4` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spesifikasi`
--

INSERT INTO `spesifikasi` (`hardware_IDS`, `model`, `product`, `serialnumber`, `manufacturer`, `processors`, `memorytype`, `memorysize`, `memorymax`, `memorydim1`, `memorydim2`, `memorydim3`, `memorydim4`) VALUES
('112345678923489', '1', 'as', '1', '12', '1', '1', '1', 1, 'sfd', 'sdcd', 'sdss', 'sdcs'),
('123', '1', 'asd', 'asdfgher56', '12', 'sdfgh', 'sdfghj', '1', 1, '12', '12', '12', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` int(50) NOT NULL,
  `supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `supplier`) VALUES
(56780, 'asdfgh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'ayu', '29c65f781a1068a41f735e1b092546de', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_karyawan`
--

CREATE TABLE `user_karyawan` (
  `no_badge` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unitname` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_karyawan`
--

INSERT INTO `user_karyawan` (`no_badge`, `username`, `email`, `jabatan`, `unitname`, `lokasi`) VALUES
(112, 'asd', 'wahyuindartiw@gmail.com', 'asdf', '234567', '32423'),
(1111, 'as', 'ayusweetheartt@yahoo.com', 'qw', '234567', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`code_loc`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`kode_manufacturer`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`kode_model`);

--
-- Indexes for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD PRIMARY KEY (`hardware_IDS`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_karyawan`
--
ALTER TABLE `user_karyawan`
  ADD PRIMARY KEY (`no_badge`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
