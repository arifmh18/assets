-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jul 2018 pada 09.48
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
('11', '2018-07-26', '2', 'Unknown', '', '', '30110', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '1001', '', '', '1003'),
('A0301001', '2002-08-25', '1', 'Afval', 'Magang Keuangan', '', '31210', 'Magang Keuangan', 'PC Dekstop', 'SGH4230H26', 'Hewlett-Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 Gbytes', 2, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '108', 'XP Professional', '102', '108', 'XP Professional', '101'),
('A0501003', '2002-08-25', '2', 'Used', 'Badrul', '32200', '32200', '421021A1', 'PC Dekstop', 'SGH45109JV', 'Hewlett-Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 2, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '106', 'XP Professional', '106', '103', 'XP Professional', '108'),
('A0701013', '2007-05-01', '1', 'Afval', 'Magang Keuangan', '', '31210', 'Magang Keuangan', 'PC Dekstop', '20CF30DA10EB', 'ASUSTeK Computer INC.', 'P5G41T-M LX', 'Intel(R) Pentium(R) Dual CPU E2140 @ 1.60GHz', '', '', 'DDR3', '4 GBytes', 4, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '101', 'XP Version', '104', '101', 'XP Version', '104'),
('A1001004', '2008-10-01', '3', 'Used', 'Nano', '42110', '42110', '402003A1', 'PC Dekstop', 'SGH951T3HR', 'Hewlett-Packard', 'HP dx2310 MT(KQ861AV)', 'Intel(R) Core(TM)2 Duo CPU E7400 @ 2.80GHz', '', '', 'DDR2', '3 Gbytes', 4, 'Samsung 1024 MBytes', 'Transcend Information 2048 MBytes', '', '', '109', 'XP Professional', '108', '107', 'XP Professional', '101'),
('A1101001', '2009-01-01', '1', 'Used', 'Miftah', '32120', '31300', '322002A1', 'PC Dekstop', 'SGH039Q9HS', 'Hewlett-Packard', 'HP Pro 2000 Microtower PC', 'Intel(R) Core(TM)2 Duo CPU E7500 @ 2.93GHz', '', '', 'DDR3', '3 Gbytes', 2, '(7F7F7F7F7F7F7F8A) 2048 Mbytes', 'Ramaxel Technology 1024 Mbytes', '', '', '1002', '7 Professional', '104', '102', 'XP Professional', '1001'),
('A1601007', '2011-02-20', '2', 'Used', 'Lian Entika', '31300', '31300', '313003A1', 'PC Dekstop', '81Z1T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i3-2120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Nanya Technology 2048 Mbytes', 'Kingston 2048 Mbytes', '', '', '101', 'XP Version', '103', '102', 'XP Professional', '106'),
('B01033', '2012-09-30', '4', 'Used', 'Maryono', '41410', '32310', '431002B2', 'Notebook', '2CE31410GR', 'Hewlett-Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i3-3120M CPU @ 2.50GHz', '', '', 'DDR3', '2 Gbytes', 2, 'Hyundai Electronics 2048 Mbytes', '', '', '', '1003', '7 Professional', '105', '1003', '7 Professional', '105'),
('B1201001', '2011-02-20', '3', 'Used', 'Dwi Laharto', '30110', '32300', '301003B1', 'Notebook', 'CNU1284X65', 'Hewlett-Packard', 'HP ProBook 4430s', 'Intel(R) Core(TM) i3-2310M CPU @ 2.10GHz', '', '', 'DDR3', '2 Gbytes', 2, 'Kingston 2048 Mbytes', '', '', '', '1002', '7 Professional', '108', '1002', '7 Professional', '1004');

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
('192.168.1.117', 'A1601007', '313003A1', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', '', '5002'),
('192.168.1.135', 'A0501003', '421021A1', '', '', '32200', 'TRAINING CENTER DEPT', '', '504'),
('192.168.1.183', '', '', '', '', '', '', '', ''),
('192.168.1.188', 'A1001004', '402003A1', '', '', '42110', 'MARKETING CEMENT', '', '5003'),
('192.168.1.189', '', '', '', '', '', '', '', ''),
('192.168.1176', 'B01033', '431002B2', '', '', '41410', 'PEP', '', '5003');

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
('5001', 'Pemeliharaan', '', '', ''),
('5002', 'Logistik', '', '', ''),
('5003', 'Pemasaran', '', '', ''),
('504', 'Training Center', '', '', '');

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
(101, '2018-07-23', 'A0401001', '1', 'Misyanto', '41500', 'PLANT & MAINTENC TBN ', 'PC Dekstop', 'SGH4230GZX', 'Hewlett-Packard', 'HP d220 MT(DG998AV)', 'Tidak dapat terhubung printer', 'Service', '2018-07-23'),
(5678, '2018-07-26', 'B1201001', '3', 'Dwi Laharto', '30110', '32300', 'Notebook', 'CNU1284X65', 'Hewlett-Packard', 'HP ProBook 4430s', '', '', '2018-07-26'),
(101111, '2018-07-26', 'A1001004', '', 'Nano', '42110', '42110', 'PC Dekstop', 'SGH951T3HR', 'Hewlett-Packard', 'HP dx2310 MT(KQ861AV)', '', '', '2018-07-26');

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
(1, 'PT. United Tractors Semen Gresik', 'Aset'),
(2, 'Koperasi Warga UTSG', 'Sewa'),
(3, 'PT. Tri Perwira Multi', 'Sewa'),
(4, 'PT. Astragraphia', 'Sewa');

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
(20000, 'PRESIDENT DIRECTOR', ''),
(30000, 'FINANCE DIRECTOR', ''),
(30001, 'SECRETARY', ''),
(30110, 'INTERNAL AUDIT', ''),
(31100, 'ACCOUNT DEPT. HEAD', ''),
(31110, 'ACCOUNTING', ''),
(31210, 'FINANCE', ''),
(31300, 'PROC,  ASSET & LOG DEPT.', ''),
(32000, 'HC, ESR, GA & LEGAL DIV', ''),
(32110, 'OD,  PP & INNOVATION', ''),
(32120, 'PERSONAL ADMIN & IR', ''),
(32200, 'TRAINING CENTER DEPT', ''),
(32210, 'TRAINING & DEVELOPMENT', ''),
(32300, 'SR,  GA & SHE DEPT.', ''),
(32310, 'SHE', ''),
(32340, 'SECURITY COMMANDER', ''),
(32350, 'GENERAL AFFAIR', ''),
(32360, 'SOCIAL RESPONSIBILITY', ''),
(32370, 'P. SISTEM & RISK MGT', ''),
(32380, 'LEGAL', ''),
(41200, 'MINE OPERATION TUBAN', ''),
(41210, 'PPC', ''),
(41220, 'MINE SERVICE', ''),
(41230, 'DRILLING AND BLASTING', ''),
(41240, 'LIMESTONE PRODUCTION', ''),
(41250, 'CLAY PRODUCTION', ''),
(41410, 'PEP', ''),
(41450, 'SM LAMONGAN SB', ''),
(41460, 'SM REMBANG', ''),
(41470, 'SM BATURAJA', ''),
(41480, 'SM TONASA', ''),
(41490, 'SM ACEH', ''),
(41500, 'PLANT & MAINTENC TBN ', 'Pemeliharaan'),
(41510, 'MAINTENANCE A2B', ''),
(41520, 'MAINTENANCE A2T', ''),
(41530, 'REKONDISI', ''),
(41540, 'DRILLING & SURF MINER', ''),
(41560, 'PMC', ''),
(42110, 'MARKETING CEMENT', 'PEMASARAN 1'),
(42120, 'MARKETING NON CEMENT', ''),
(42200, 'BUSDEV & IT DEPT', ''),
(42210, 'BUSDEV & ENGINEERING', ''),
(42220, 'IT & BUSSINESS ANALYST', '');

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
(101, 'XP Version', 'PPWDX-HP7YT-KCJ4K-BRJCH-MGJBW'),
(102, 'XP Professional', 'KYKVX-86GQG-2MDY9-F6J9M-K42BQ '),
(103, 'XP Professional', '2QPGR-GT7GT-87F3R-GJYDW-RD79D'),
(104, 'XP Professional', 'DXQJT-H9VWJ-V488P-Q6J7T-CFQQ3'),
(105, 'XP Professional', 'RG4TH-8TT28-XRFT7-M4822-WKWHW'),
(106, 'XP Professional', 'FWT6H-VGPYJ-JDJTX-R37F9-988BM'),
(107, 'XP Professional', 'MR49R-DRJXX-M6PX2-V96BF-8CKBJ'),
(108, 'XP Professional', 'MXVRW-QQMHR-RWCPF-3DJDV-4CPKQ'),
(109, 'XP Professional', 'GDBT8-RPQ8Y-DFDF4-VQGJR-MWKFT'),
(1001, '7 Professional', '74T2M-DKDBC-788W3-H689G-6P6GT'),
(1002, '7 Professional', 'MWY2M-9KJQV-D9BCH-H3RD9-98XFH'),
(1003, '7 Professional', '6VYVP-XVMYH-33P6K-PV3BC-X2YKR'),
(1004, '7 Professional', 'W9V3B-DCWBH-DC6YB-36XC9-F7K7M');

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
