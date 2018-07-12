-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jul 2018 pada 10.26
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
-- Database: `utsg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hardware`
--

CREATE TABLE `hardware` (
  `hardwareID` varchar(50) NOT NULL,
  `tglmsk` date NOT NULL,
  `aset` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `unitcode` varchar(50) NOT NULL,
  `unitkerja` varchar(50) NOT NULL,
  `compname` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `serialnumber` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `processors` varchar(50) NOT NULL,
  `macadd` varchar(50) NOT NULL,
  `macaddwifi` varchar(50) NOT NULL,
  `memorytype` varchar(50) NOT NULL,
  `memorysize` varchar(50) NOT NULL,
  `memorymax` int(10) NOT NULL,
  `memorydim1` varchar(50) NOT NULL,
  `memorydim2` varchar(50) NOT NULL,
  `memorydim3` varchar(50) NOT NULL,
  `memorydim4` varchar(50) NOT NULL,
  `winOSID` varchar(50) NOT NULL,
  `winOSver` varchar(50) NOT NULL,
  `winOSpk` varchar(50) NOT NULL,
  `winlabelID` varchar(50) NOT NULL,
  `winlabelver` varchar(50) NOT NULL,
  `winlabelpk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hardware`
--

INSERT INTO `hardware` (`hardwareID`, `tglmsk`, `aset`, `status`, `username`, `unitcode`, `unitkerja`, `compname`, `model`, `serialnumber`, `manufacturer`, `product`, `processors`, `macadd`, `macaddwifi`, `memorytype`, `memorysize`, `memorymax`, `memorydim1`, `memorydim2`, `memorydim3`, `memorydim4`, `winOSID`, `winOSver`, `winOSpk`, `winlabelID`, `winlabelver`, `winlabelpk`) VALUES
('A0401001', '2018-07-20', '111', 'a', 'a', 'a', 'a', 'a', 'aa', 'a', 'a', 'a', 'a', 'a', 'aa', 'a', 'a', 2, 'a', 'aa', 'a', 'a', 'a', 'a', 'aa', 'a', 'a', 'a'),
('A0659221A1', '2018-07-08', '1', 'aktif', 'admin', 'a', 'h', 'h', 'az', 'q', 'e', 'e', 'r', 'j', 'j', 'j', 'j', 4, 'h', 'h', 'k', 'h', 'h', 'h', 'h', 'k', 'k', 'l');

-- --------------------------------------------------------

--
-- Struktur dari tabel `listipaddress`
--

CREATE TABLE `listipaddress` (
  `IPadd` varchar(50) NOT NULL,
  `hardwareID` varchar(50) NOT NULL,
  `devicename` varchar(50) NOT NULL,
  `macadd` varchar(50) NOT NULL,
  `macaddwifi` varchar(50) NOT NULL,
  `unitcode` varchar(50) NOT NULL,
  `unitkerja` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `server_area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `listipaddress`
--

INSERT INTO `listipaddress` (`IPadd`, `hardwareID`, `devicename`, `macadd`, `macaddwifi`, `unitcode`, `unitkerja`, `lokasi`, `server_area`) VALUES
('192.168.1.1', '', '', '', '', '', '', '', ''),
('192.168.1.2', '1', '1', '1', '1', '1', '1', '1', '1'),
('192.168.1.3', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `network`
--

CREATE TABLE `network` (
  `idnetwork` varchar(50) NOT NULL,
  `server_area` varchar(50) NOT NULL,
  `no_switch` varchar(50) NOT NULL,
  `no_socket` varchar(50) NOT NULL,
  `no_kabel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `network`
--

INSERT INTO `network` (`idnetwork`, `server_area`, `no_switch`, `no_socket`, `no_kabel`) VALUES
('1', 'Gedung X', '1234', '1234', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `servicehardware`
--

CREATE TABLE `servicehardware` (
  `noservice` int(10) NOT NULL,
  `tglservice` date NOT NULL,
  `hardwareID` varchar(50) NOT NULL,
  `aset` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `unitcode` varchar(50) NOT NULL,
  `unitkerja` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `serialnumber` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tglkeluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `servicehardware`
--

INSERT INTO `servicehardware` (`noservice`, `tglservice`, `hardwareID`, `aset`, `username`, `unitcode`, `unitkerja`, `model`, `serialnumber`, `manufacturer`, `product`, `remarks`, `status`, `tglkeluar`) VALUES
(123, '2018-07-20', 'A0401001', 'A0401001', 'admin', 'h', 'h', 'az', 's', 's', 's', 's', 's', '2018-07-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `idsupplier` int(10) NOT NULL,
  `namasup` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`idsupplier`, `namasup`, `status`) VALUES
(1, 'PT. X', 'sewa'),
(111, 'PT AAA', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `unitcode` int(10) NOT NULL,
  `unitkerja` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`unitcode`, `unitkerja`, `lokasi`) VALUES
(1, 'IT & Bussines Analyst', 'Gedung A');

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `windowsversion`
--

CREATE TABLE `windowsversion` (
  `winID` int(10) NOT NULL,
  `winversion` varchar(50) NOT NULL,
  `productkey` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `windowsversion`
--

INSERT INTO `windowsversion` (`winID`, `winversion`, `productkey`) VALUES
(1, 'Windows 7', 'XXAD4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`hardwareID`);

--
-- Indexes for table `listipaddress`
--
ALTER TABLE `listipaddress`
  ADD PRIMARY KEY (`IPadd`);

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`idnetwork`);

--
-- Indexes for table `servicehardware`
--
ALTER TABLE `servicehardware`
  ADD PRIMARY KEY (`noservice`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idsupplier`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unitcode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `windowsversion`
--
ALTER TABLE `windowsversion`
  ADD PRIMARY KEY (`winID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
