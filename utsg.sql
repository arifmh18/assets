-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jul 2018 pada 07.34
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
('', '0000-00-00', '', 'Service IT', '', '', '', '', '', 'SGH604062C', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
('A0301001', '0000-00-00', '', 'PC Dekstop', 'Eks Magang Keuangan', '', '', '', '', 'SGH4230H26', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0401001', '0000-00-00', '', 'Used', 'Misyanto', '41500', 'PLANT & MAINTENC TBN ', '421010A3', 'PC Desktop', 'SGH4230GZX', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0401002', '0000-00-00', '', 'Used', 'Achyar', '32310', 'SHE', 'SPAREIT18', 'PC Desktop', 'SGH4110HQ2', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.66GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0401003', '0000-00-00', '', 'Used', 'Humariyanto', '32120', 'PERSONAL ADMIN & IR', '322004A1', 'PC Desktop', 'SGH4030S98', 'Hewlett0Packard', 'HP d220 MT(DU455PA)', 'Intel(R) Pentium(R) 4 CPU 2.66GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0401004', '0000-00-00', '', 'Used', 'Wildan', '32120', 'PERSONAL ADMIN & IR', '322005A1', 'PC Desktop', 'SGH4030RTM', 'Hewlett0Packard', 'HP d220 MT(DU455PA)', 'Intel(R) Pentium(R) 4 CPU 2.66GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0401005', '0000-00-00', '', 'Used', 'Edi Santoso', '32350', 'GENERAL AFFAIR', '324005A1', 'PC Desktop', 'SGH4230H3N', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '1536 MBytes', 0, 'Samsung 512 Mbytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0401006', '0000-00-00', '', 'Unknown', '0', '41210', 'PPC', '411009A1', 'PC Desktop', 'SGH43406LJ', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '512 MBytes', 0, 'Samsung 512 Mbytes', '', '', '', '', '', '', '', '', ''),
('A0401007', '0000-00-00', '', 'Used', 'Ismani', '41210', 'PPC', '411004A1', 'PC Desktop', 'SGH40409QW', 'Hewlett0Packard', 'HP d220 MT(DU455PA)', 'Intel(R) Pentium(R) 4 CPU 2.66GHz', '', '', 'DDR', '1536 MBytes', 0, 'Samsung 512 Mbytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0401008', '0000-00-00', '', 'Used', 'Syamsul', '32350', 'GENERAL AFFAIR', '324003A1', 'PC Desktop', 'SGH43406Q3', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0501001', '0000-00-00', '', 'Used', 'Rini Astutik', '32350', 'GENERAL AFFAIR', '324002A1', 'PC Desktop', 'SGH5020J1J', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0501002', '0000-00-00', '', 'Used', 'Sunarto', '41500', 'PLANT & MAINTENC TBN ', '431005A1', 'PC Desktop', 'SGH5020HYX', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0501003', '0000-00-00', '', 'Used', 'Badrul', '32200', 'TRAINING CENTER DEPT', '421021A1', 'PC Desktop', 'SGH45109JV', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0501005', '0000-00-00', '', 'Used', 'Heriyanto', '41500', 'PLANT & MAINTENC TBN ', '421008A1', 'PC Desktop', 'SGH504070B', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0501006', '0000-00-00', '', 'Used', 'Supriyadi', '41500', 'PLANT & MAINTENC TBN ', '421012A1', 'PC Desktop', 'SGH45109H8', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '1024 MBytes', 0, 'Samsung 512 Mbytes', '(0000000000000000) 512 MBytes', '', '', '', '', '', '', '', ''),
('A0501007', '0000-00-00', '', 'Unknown', 'Eks Aula2', '0', '0', '0', 'PC Desktop', 'SGH43406JQ', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0501008', '0000-00-00', '', 'Used', 'Nuryoso', '32360', 'SOCIAL RESPONSIBILITY', '325003A1', 'PC Desktop', 'SGH50407GG', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0501009', '0000-00-00', '', 'Used', 'Suhardi', '32350', 'GENERAL AFFAIR', '324009A1', 'PC Desktop', 'SGH504071R', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0501011', '0000-00-00', '', 'Unknown', 'Eks Rapat Tambang', '3140', '', 'RPTOPTAMB', 'PC Desktop', 'SGH45109GC', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '512 MBytes', 0, 'Samsung 512 Mbytes', '', '', '', '', '', '', '', '', ''),
('A0501012', '0000-00-00', '', 'Used', 'Teguh', '41210', 'PPC', '411007A1', 'PC Desktop', 'SGH5020J1H', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0501013', '0000-00-00', '', 'Used', 'Magang Prod 2 3', '41240', 'LIMESTONE PRODUCTION', '411012A1', 'PC Desktop', 'SGH45109HP', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0501014', '0000-00-00', '', 'Unknown', 'Ali Akson 0 Sluke', '4320', '', 'SLUKE', 'PC Desktop', '0', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '0', '0', '', '', '', '', '', '', '', ''),
('A0501015', '0000-00-00', '', 'Used', 'Rudi Purnomo', '32310', 'SHE', '327006A1', 'PC Desktop', 'SGH45109FW0SGH4230H4B ChasingWindows0Motherboard', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0501016', '0000-00-00', '', 'Service IT', '', '', '', '', 'PC Desktop', 'SGH45109KG', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '512 MBytes', 0, 'Infineon 256 Mbytes', 'Hyundai Electronics 256 Mbytes', '', '', '', '', '', '', '', ''),
('A0601001 ', '0000-00-00', '', 'Unknown', '0', '41460', 'SM REMBANG', 'REMBANG004', 'PC Desktop', 'SGH60406JW', 'Hewlett0Packard', 'HP Compaq dx2100 Microtower', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '2560 MBytes', 4, 'Transcend Information 2048 MBytes', 'Micron Technology 256 Mbytes', 'Micron Technology 256 Mbytes', '', '', '', '', '', '', ''),
('A0601002', '0000-00-00', '', 'Used', 'Magang PMC', '41500', 'PLANT & MAINTENC TBN ', '313002A1', 'PC Desktop', 'SGH4230GYV', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0601003', '0000-00-00', '', 'Service IT', 'Taufik', '41500', 'PLANT & MAINTENC TBN ', '421004A1', 'PC Desktop', 'SGH60406C3', 'Hewlett0Packard', 'HP Compaq dx2100 Microtower', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '2304 MBytes', 4, 'Micron Technology 256 Mbytes', 'Transcend Information 2048 MBytes', '', '', '', '', '', '', '', ''),
('A0601004', '0000-00-00', '', 'Service IT', 'Eks Edy Sugiharto', '3140', '', '421011A1', 'PC Desktop', '1C7EE52AB044_001FC6CCF1F9', 'ASUSTeK Computer INC.', 'P5GC0MX/GBL', 'Intel(R) Pentium(R) Dual CPU E2160 @ 1.80GHz', '', '', 'DDR2', '2560 MBytes', 2, 'Transcend Information 2048 MBytes', '(0000000000000000) 512 MBytes', '', '', '', '', '', '', '', ''),
('A0601005', '0000-00-00', '', 'Service IT', 'Eks Emi', '3140', '', '0', 'PC Desktop', 'SGH60406HQ', 'Hewlett0Packard', 'HP Compaq dx2100 Microtower', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '2 GBytes', 4, 'Transcend Information 2048 MBytes', '', '', '', '', '', '', '', '', ''),
('A0601007', '0000-00-00', '', 'Drilling Prod 1', 'Drilling Prod 1', '4120', '', 'DRILLINGPROD1', 'PC Desktop', '0', 'Hewlett0Packard', 'HP Compaq dx2100 Microtower', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '2 GBytes', 4, 'Hyundai Electronics 512 MBytes', 'Hyundai Electronics 512 MBytes', 'Hyundai Electronics 512 MBytes', 'Hyundai Electronics 512 MBytes', '', '', '', '', '', ''),
('A0601008', '0000-00-00', '', 'Used', 'Emi Nurhayati', '32110', 'OD', ' PP & INNOVATION', '321005A1', 'PC Desktop', 'SGH604065T', 'Hewlett0Packard', 'HP Compaq dx2100 Microtower', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', 3, '4', 'Micron Technology 256 MBytes', '(0000000000000000) 2048 MBytes', '(0000000000000000) 256 MBytes', '', '', '', '', '', ''),
('A0601009', '0000-00-00', '', 'Used', 'Agus Sutrisno', '41500', 'PLANT & MAINTENC TBN ', '421014A1', 'PC Desktop', 'SGH60406JG', 'Hewlett0Packard', 'HP Compaq dx2100 Microtower', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '2 GBytes', 4, 'Transcend Information 2048 MBytes', '', '', '', '', '', '', '', '', ''),
('A0601010', '0000-00-00', '', 'Used', 'KWUTSG 0 SITI', '41500', 'PLANT & MAINTENC TBN ', '421002A1', 'PC Desktop', '103C_53307F', 'Hewlett0Packard', 'Foxconn 0A20', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '2 GBytes', 4, 'Transcend Information 2048 MBytes', '', '', '', '', '', '', '', '', ''),
('A0701002', '0000-00-00', '', 'Service IT', '', '', '', '', 'PC Desktop', 'SGH6470RFM', 'Hewlett0Packard', 'HP dx2700 MT(RC737AV)', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '2 GBytes', 4, 'Transcend Information 2048 Mbytes', '0', '0', '0', '', '', '', '', '', ''),
('A0701003', '0000-00-00', '', 'Tanah Liat', 'Tanah Liat', '4140', '', 'TANAHLIAT', 'PC Desktop', '', 'Hewlett0Packard', 'HP dx2700 MT(RC737AV)', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '2 GBytes', 4, 'Transcend Information 2048 Mbytes', '0', '0', '0', '', '', '', '', '', ''),
('A0701004', '0000-00-00', '', 'Service IT', 'Eks Taufik', '0', '0', '0', 'PC Desktop', 'SGH6470RFQ', 'Hewlett0Packard', 'HP dx2700 MT(RC737AV)', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '1024 MBytes', 4, 'Hyundai Electronics 512 MBytes', 'Ramaxel Technology 256 MBytes', 'Nanya Technology 256 Mbytes', '0', '', '', '', '', '', ''),
('A0701005', '0000-00-00', '', 'Used', 'KWUTSG 0 Novi', '31300', 'PROC', ' ASSET & LOG DEPT.', '313010A1', 'PC Desktop', 'SGH60405X3', 'Hewlett0Packard', 'HP Compaq dx2100 Microtower', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', 2304, '4', 'Transcend Information 2048 MBytes', '(0000000000000000) 256 MBytes', '', '', '', '', '', '', ''),
('A0701006', '0000-00-00', '', 'Service IT', '', '', '', '', 'PC Desktop', 'SGH4230H31', 'Hewlett0Packard', 'HP d220 MT(DG998AV)', 'Intel(R) Pentium(R) 4 CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 0, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0701007', '0000-00-00', '', 'Service IT', 'Wulan', '32380', 'LEGAL', '323002A1', 'PC Desktop', 'SGH6040624', 'Hewlett0Packard', 'HP Compaq dx2100 Microtower', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '2 GBytes', 4, 'Transcend Information 2048 MBytes', '', '', '', '', '', '', '', '', ''),
('A0701008', '0000-00-00', '', 'Used', 'Sukarwan', '41210', 'PPC', '411011A1', 'PC Desktop', 'SGH6470R35', 'Hewlett0Packard', 'HP dx2700 MT(RC737AV)', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '2 GBytes', 4, '0', '0', '', '', '', '', '', '', '', ''),
('A0701009', '0000-00-00', '', 'Parkir Tuban 2 Checker', 'Parkir Tuban 2 Checker', '4130', '', 'PARKIRTUBAN2', 'PC Desktop', 'SGH6470R6H', 'Hewlett0Packard', 'HP dx2700 MT(RC737AV)', 'Intel(R) Pentium(R) 4 CPU 3.00GHz', '', '', 'DDR2', '2 GBytes', 4, 'Transcend Information 2048 MBytes', '0', '0', '0', '', '', '', '', '', ''),
('A0701011', '2020-05-00', '', 'Used', 'Lobby Magang', '30001', 'SECRETARY', 'LOBBYUTSG', 'PC Desktop', '1C7EE52AACA2_001BFCA2A28A', 'ASUSTeK Computer INC.', 'P5S0MX SE', 'Intel(R) Pentium(R) D CPU 2.66GHz', '', '', 'DDR2', '2560 MBytes', 2, '(0000000000000000) 512 MBytes', 'Transcend Information 2048 MBytes', '', '', '', '', '', '', '', ''),
('A0701013', '0000-00-00', '', 'AFVAL', 'Eks Magang Keuangan', '090Jun016', 'AFVAL', 'AFVAL', 'PC Desktop', '20CF30DA10EB', 'ASUSTeK Computer INC.', 'P5G41T0M LX', 'Intel(R) Pentium(R) Dual CPU E2140 @ 1.60GHz', '', '', 'DDR3', '4 GBytes', 4, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', ''),
('A0701017', '2020-05-00', '', 'Unknown', 'Eks Magang Umum', '3140', '', '324008A1', 'PC Desktop', '0050BAC40557_001BFCA24F92', 'ASUSTeK Computer INC.', 'P5S0MX SE', 'Intel(R) Pentium(R) D CPU 2.66GHz', '', '', 'DDR2', '2560 MBytes', 2, '(0000000000000000) 512 MBytes', 'Transcend Information 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A0701019', '0000-00-00', '', 'Used', 'Magang Keuangan', '31210', 'FINANCE', '312006A1', 'PC Desktop', '1C7EE52AAFDA_001BFCAD6B7A', 'ASUSTeK Computer INC.', 'P5GC0MX', 'Intel(R) Pentium(R) Dual CPU E2140 @ 1.60GHz', '', '', 'DDR2', '2560 MBytes', 2, '(0000000000000000) 512 MBytes', 'Transcend Information 2048 MBytes', '', '', '', '', '', '', '', ''),
('A0701020', '0000-00-00', '', 'Used', 'Johan', '41210', 'PPC', '411003A1', 'PC Desktop', '1C7EE52AAD0A0001BFCA9D209', 'ASUSTeK Computer INC.', 'P5GC0MX', 'Intel(R) Pentium(R) Dual CPU E2140 @ 1.60GHz', '', '', 'DDR2', '2 GBytes', 2, 'Samsung 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0701021', '0000-00-00', '', 'Used', 'Magang PPC', '41210', 'PPC', '411010A1', 'PC Desktop', '01C7EE52AAD26_001BFCAD931E', 'ASUSTeK Computer INC.', 'P5GC0MX', 'Intel(R) Pentium(R) Dual CPU E2140 @ 1.60GHz', '', '', 'DDR2', '512 MBytes', 2, '(0000000000000000) 512 MBytes', '', '', '', '', '', '', '', '', ''),
('A0701022', '2020-05-00', '', 'Service IT', 'PML Eks Sugeng', '3140', '', '421013A1', 'PC Desktop', '001BFCA24F34', 'ASUSTeK Computer INC.', 'P5S0MX SE', 'Intel(R) Pentium(R) D CPU 2.66GHz', '', '', 'DDR2', '1024 MBytes', 2, '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '', '', '', '', '', '', '', ''),
('A0701023', '2020-05-00', '', 'Used', 'Slamet Handayana', '41230', 'DRILLING AND BLASTING', '412003A1', 'PC Desktop', '1C7EE52AAD7C0001BFCA63439', 'ASUSTeK Computer INC.', 'P5S0MX SE', 'Intel(R) Pentium(R) D CPU 2.66GHz', '', '', 'DDR2', '2560 MBytes', 2, 'Micron Technology 512 Mbytes', 'Transcend Information 2048 MBytes', '', '', '', '', '', '', '', ''),
('A0701024', '2020-05-00', '', 'AFVAL', 'Eks_Rudi Purnomo', '290Mei015', 'AFVAL', 'AFVAL', 'PC Desktop', '0055D0F5CE1B0001BFC92F315', 'ASUSTeK Computer INC.', 'P5S0MX SE', 'Intel(R) Pentium(R) D CPU 2.66GHz', '', '', 'DDR2', '2 GBytes', 2, 'Transcend Information 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0701026', '2020-05-00', '', 'Used', '', '', '', '', 'PC Desktop', '001BFC92F24D', 'ASUSTeK Computer INC.', 'P5S0MX SE', 'Intel(R) Pentium(R) D CPU 2.66GHz', '', '', 'DDR2', '1024 MBytes', 2, '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '', '', '', '', '', '', '', ''),
('A0701028', '2020-05-00', '', 'Service IT', 'Eks Azis', '3140', '', '327003A1', 'PC Desktop', '001BFCA24C2B', 'ASUSTeK Computer INC.', 'P5S0MX SE', 'Intel(R) Pentium(R) D CPU 2.66GHz', '', '', 'DDR2', '1024 MBytes', 2, '(0000000000000000) 512 Mbytes', '(0000000000000000) 512 MBytes', '', '', '', '', '', '', '', ''),
('A0701030', '0000-00-00', '', 'Service IT', '', '', '', '', 'PC Desktop', 'CNX6490KM2 FD440', 'Hewlett0Packard', 'HP0Pavilion 061 g1260l Foxcon', 'Intel(R) Pentium(R) D CPU 2.80GHz', '', '', 'DDR', '2 GBytes', 4, '(0000000000000000) 1024 MBytes', '(0000000000000000) 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0801001', '0000-00-00', '', 'Used', 'Iwan 0 Sulkan 0 Agus Tri ', '41500', 'PLANT & MAINTENC TBN ', '421007A1', 'PC Desktop', '1C7EE52AAD2B_001BFCA9D213', 'ASUSTeK Computer INC.', 'P5GC0MX', 'Intel(R) Pentium(R) Dual CPU E2140 @ 1.60GHz', '', '', 'DDR2', '2560 MBytes', 2, 'Transcend Information 2048 MBytes', '(0000000000000000) 512 MBytes', '', '', '', '', '', '', '', ''),
('A0801002', '0000-00-00', '', 'Unknown', 'Eks Suhardi', '3140', '', 'SPAREIT05', 'PC Desktop', '1C7EE52AAC9F0002215B9F21F', 'ASUSTeK Computer INC.', 'P5GC0MX/GBL', 'Intel(R) Pentium(R) Dual CPU E2160 @ 1.80GHz', '', '', 'DDR2', '2 GBytes', 2, 'Transcend Information 2048 MBytes', '', '', '', '', '', '', '', '', ''),
('A0801003', '0000-00-00', '', 'Service IT', 'Eks Abdul Khafid', '3140', '', '313009A1', 'PC Desktop', '60A44C6393CA', 'ASUSTeK Computer INC.', ' P5G41T0M LX3 PLUS', 'Intel(R) Pentium(R) Dual CPU E2160 @ 1.80GHz', '', '', 'DDR3', '2 GBytes', 2, 'Kingston 2048 Mbytes', '', '', '', '', '', '', '', '', ''),
('A0901001 ', '0000-00-00', '', '', 'Reza', '41460', 'SM REMBANG', 'FORTIGATE', 'PC Desktop', 'SGH9040SPF', 'Hewlett0Packard', 'HP dx2310 MT(KQ861AV)', 'Pentium(R) Dual0Core CPU E5200 @ 2.50GHz', '', '', 'DDR2', '2 GBytes', 4, 'Micron Technology 1024 Mbytes', 'Micron Technology 1024 Mbytes', '', '', '', '', '', '', '', ''),
('A0901002', '0000-00-00', '', 'Used', 'KWUTSG 0 Andri', '31300', 'PROC', ' ASSET & LOG DEPT.', '313007A1', 'PC Desktop', 'SGH9030N40', 'Hewlett0Packard', 'HP dx2310 MT(KQ861AV)', 'Intel(R) Pentium(R) Dual CPU E2180 @ 2.00GHz', '', '', 'DDR2', 3, '4', 'Samsung 1024 MBytes', 'Transcend Information 2048 MBytes', '', '', '', '', '', '', ''),
('A0901003', '0000-00-00', '', 'Used', 'Aula 2', '42220', 'IT & BUSSINESS ANALYST', 'RPTAULA2', 'PC Desktop', 'SGH9040SPY', 'Hewlett0Packard', 'HP dx2310 MT(KQ861AV)', 'Pentium(R) Dual0Core CPU E5200 @ 2.50GHz', '', '', 'DDR2', '2 GBytes', 4, 'Samsung 1024 MBytes', 'Samsung 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0901014', '0000-00-00', '', 'Service IT', 'Eks Mujimin', '3140', '', '323003A1', 'PC Desktop', '00248C5024B2', 'ASUSTeK Computer INC.', 'P5KPL0AM', 'Pentium(R) Dual0Core CPU E5200 @ 2.50GHz', '', '', 'DDR2', '2 GBytes', 2, 'Hyundai Electronics 1024 Mbytes', 'Samsung 1024 MBytes', '', '', '', '', '', '', '', ''),
('A0901015', '0000-00-00', '', 'Kacung Kusnanto', 'Kacung Kusnanto', '41450', 'SM LAMONGAN SB', 'PROJECT LAMONGAN', 'PC Desktop', 'SGH9250DS5', 'Hewlett0Packard', 'HP dx2310 MT(KQ861AV)', 'Pentium(R) Dual0Core CPU E5200 @ 2.50GHz', '', '', 'DDR2', '1024 MBytes', 4, 'Hyundai Electronics 1024 Mbytes', '0', '0', '0', '', '', '', '', '', ''),
('A1001001 ', '2020-08-01', '', 'Dodik', 'Dodik', '41460', 'SM REMBANG', 'REMBANG003', 'PC Desktop', 'SGH951T3DL', 'Hewlett0Packard', 'HP dx2310 MT(KQ861AV)', 'Intel(R) Core(TM)2 Duo CPU E7400 @ 2.80GHz', '', '', 'DDR2', '1536 MBytes', 4, 'Samsung 1024 MBytes', '(0000000000000000) 512 MBytes', '', '', '', '', '', '', '', ''),
('A1001002', '2020-08-01', '', 'Unknown', 'Magang IT', '42220', 'IT & BUSSINESS ANALYST', 'HAMAS', 'PC Desktop', 'SGH951T39R', 'Hewlett0Packard', 'HP dx2310 MT(KQ861AV)', 'Intel(R) Core(TM)2 Duo CPU E7400 @ 2.80GHz', '', '', 'DDR2', '2 GBytes', 4, 'Samsung 1024 MBytes', 'Samsung 1024 MBytes', '', '', '', '', '', '', '', ''),
('A1001003', '0000-00-00', '', 'Used', 'Nur Ali', '31300', 'PROC', ' ASSET & LOG DEPT.', '313006A1', 'PC Desktop', '4CE05006HK', 'Hewlett0Packard', 'HP Compaq Presario CQ3321L', 'Intel(R) Core(TM) i3 CPU 550 @ 3.20GHz', '', '', 'DDR3', 2, '4', 'Samsung 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1001004', '2020-08-01', '', 'Used', 'Nano', '42110', '', '402003A1', 'PC Desktop', 'SGH951T3HR', 'Hewlett0Packard', 'HP dx2310 MT(KQ861AV)', 'Intel(R) Core(TM)2 Duo CPU E7400 @ 2.80GHz', '', '', 'DDR2', '3 GBytes', 4, 'Samsung 1024 MBytes', 'Transcend Information 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1001005', '2020-09-00', '', 'Used', 'Rusmani', '41500', 'PLANT & MAINTENC TBN ', '421003A1', 'PC Desktop', 'SGH026QLHN', 'Hewlett0Packard', 'HP Pro 2000 Microtower PC', 'Intel(R) Core(TM)2 Duo CPU E7500 @ 2.93GHz', '', '', 'DDR3', '1024 MBytes', 2, 'Hyundai Electronics 1024 Mbytes', '', '', '', '', '', '', '', '', ''),
('A1001006', '0000-00-00', '', 'Service IT', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
('A1101001', '2020-09-00', '', 'Used', 'Miftah', '32120', 'PERSONAL ADMIN & IR', '322002A1', 'PC Desktop', 'SGH039Q9HS', 'Hewlett0Packard', 'HP Pro 2000 Microtower PC', 'Intel(R) Core(TM)2 Duo CPU E7500 @ 2.93GHz', '', '', 'DDR3', '3 GBytes', 2, '(7F7F7F7F7F7F7F8A) 2048 Mbytes', 'Ramaxel Technology 1024 Mbytes', '', '', '', '', '', '', '', ''),
('A1101002', '2020-10-00', '', 'Used', 'Eks Hariyanto', '41210', 'PPC', 'PPCPLAN0HP', 'PC Desktop', 'CNX035046W', 'Hewlett0Packard', 's5589d', 'Intel(R) Core(TM) i3 CPU 540 @ 3.07GHz', '', '', 'DDR3', '4 GBytes', 4, '(7F7F7F7F7F7F7F8A) 2048 Mbytes', 'Samsung 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1101003', '2020-11-00', '', 'Used', 'Edwin', '32370', 'P. SISTEM & RISK MGT', '326001A1', 'PC Desktop', '3860772EAB7B0BTWW134017GT', 'Intel Corporation', 'Intel DH61WW', 'Intel(R) Core(TM) i302100 CPU @ 3.10GHz', '', '', 'DDR3', '2 GBytes', 2, '(0000000000000000) 2048 MBytes', '', '', '', '', '', '', '', '', ''),
('A1101004', '2020-11-00', '', 'Used', 'Sumarno / SGM', '31300', 'PROC', ' ASSET & LOG DEPT.', 'SPAREIT01', 'PC Desktop', '1C7EE52AAD0807071BCD4EF1B', 'Intel Corporation', 'DH61WW', 'Intel(R) Core(TM) i302100 CPU @ 3.10GHz', '', '', 'DDR3', 4, '2', '(7F7F7F7F7F7F7F8A) 2048 Mbytes', '(7F7F7F7F7F7F7F8A) 2048 Mbytes', '', '', '', '', '', '', ''),
('A1101005', '2020-11-00', '', 'Used', 'Amel', '41410', 'PEP', 'A1101005', 'PC Desktop', 'PTSDX0900502310E9E2700', 'Acer', 'Aspire M3910', ' Intel(R) Core(TM) i3 CPU 540 @ 3.07GHz', '', '', 'DDR3', '2 GBytes', 2, '(Samsung   2048 Mbytes', '', '', '', '', '', '', '', '', ''),
('A1101006', '0000-00-00', '', 'Unknown', '', '', 'Site Pamotan', 'PAMOTAN002', 'PC Desktop', 'MT7014018413997', 'ASUSTeK Computer INC.', 'P5G41T0M LX3', 'Pentium(R) Dual0Core CPU E5700 @ 3.00GHz', '', '', 'DDR3', '4 GBytes', 2, '(7F7F7F7F7F7F7F8A) 2048 MBytes', '(7F7F7F7F7F7F7F8A) 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1201001', '2020-11-00', '', 'Used', 'Aziz', '32310', 'SHE', '325007A1', 'PC Desktop', '4CE1240MX8', 'Hewlett0Packard', 'CQ3622L', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '2 GBytes', 2, 'Ramaxel Technology 2048 Mbytes', '', '', '', '', '', '', '', '', ''),
('A1401001', '0000-00-00', '', 'Used', 'Pratama', '31210', 'FINANCE', '312004A1', 'PC Desktop', 'J422ZY1', 'Dell Inc', 'OptiPlex 3010', 'Intel(R) Pentium(R) CPU G2030 @ 3.00GHz', '', '', 'DDR3', '2 GBytes', 2, 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', '', ''),
('A1601001', '0000-00-00', '', 'Used', 'Fadani', '31110', 'ACCOUNTING', '311003A1', 'PC Desktop', '83X1T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 4096 MBytes', '', '', '', '', '', '', '', '', ''),
('A1601002', '0000-00-00', '', 'Used', 'Hendy', '31110', 'ACCOUNTING', '311006A2', 'PC Desktop', '81X1T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 4096 MBytes', '', '', '', '', '', '', '', '', ''),
('A1601003', '0000-00-00', '', 'Used', 'Leon', '31110', 'ACCOUNTING', '311007A1', 'PC Desktop', '8144T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i306100 CPU @ 3.70GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 2048 MBytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1601004', '0000-00-00', '', 'Used', 'Ari Sriyanto', '31210', 'FINANCE', '311008A1', 'PC Desktop', '84N4T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '', '', '', '', '', ''),
('A1601005', '0000-00-00', '', 'Used', 'Putra', '31210', 'FINANCE', '312002A1', 'PC Desktop', '8557T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 4096 MBytes', '', '', '', '', '', '', '', '', ''),
('A1601006', '2020-11-00', '', 'Used', 'Maskur', '31210', 'FINANCE', '312005A1', 'PC Desktop', '8571T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Micron Technology 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1601007', '2020-11-00', '', 'Used', 'Lian Entika', '31300', 'PROC', ' ASSET & LOG DEPT.', '313003A1', 'PC Desktop', '81Z1T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', 4, '2', 'Nanya Technology 2048 Mbytes', 'Kingston 2048 Mbytes', '', '', '', '', '', '', ''),
('A1601008', '2020-11-00', '', 'Used', 'Yudi Widayat', '31300', 'PROC', ' ASSET & LOG DEPT.', '313005A1', 'PC Desktop', '81V4T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', 4, '2', 'Kingston 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', ''),
('A1601009', '2020-11-00', '', 'Used', 'A.Y. Lukman', '31300', 'PROC', ' ASSET & LOG DEPT.', '313014A1', 'PC Desktop', '8127T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', 4, '2', 'Nanya Technology 2048 Mbytes', 'Kingston 2048 Mbytes', '', '', '', '', '', '', ''),
('A1601010', '2020-11-00', '', 'Used', 'Parji', '31300', 'PROC', ' ASSET & LOG DEPT.', '313012A1', 'PC Desktop', '83X3T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', 4, '2', 'Hyundai Electronics 2048 MBytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', ''),
('A1601011', '2020-11-00', '', 'Used', 'Sumarno / Edi Lasiran', '31300', 'PROC', ' ASSET & LOG DEPT.', '313013A1', 'PC Desktop', '8447T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', 4, '2', 'Micron Technology 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', ''),
('A1601012', '2020-11-00', '', 'Used', 'Dini', '30001', 'SECRETARY', '326005A2', 'PC Desktop', '8541T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 2048 MBytes', 'Samsung 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1601013', '2020-11-00', '', 'Used', 'Firda', '32110', 'OD', ' PP & INNOVATION', '321004A2', 'PC Desktop', '84W2T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', 4, '2', 'Kingston 2048 Mbytes', 'Nanya Technology 2048 Mbytes', '', '', '', '', '', '', ''),
('A1601014', '2020-11-00', '', 'Used', 'Badrul', '32200', 'TRAINING CENTER DEPT', '322007A1', 'PC Desktop', '5KQN7C2', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Nanya Technology 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601015', '2020-11-00', '', 'Used', 'Fauzi', '32310', 'SHE', '327004A1', 'PC Desktop', '5HSN7C2', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Nanya Technology 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601016', '2020-11-00', '', 'Used', 'Zubaidi', '32310', 'SHE', '327009A1', 'PC Desktop', '84W0T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Nanya Technology 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601017', '2020-11-00', '', 'Used', 'Zakiyatul GreenRoom', '32310', 'SHE', '327008A2', 'PC Desktop', '8549T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Nanya Technology 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601018', '2020-11-00', '', 'Used', 'Purnomo', '32380', 'LEGAL', '323004A1', 'PC Desktop', '81C5T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1601019', '2020-11-00', '', 'Used', 'Bambang Murjito', '32350', 'GENERAL AFFAIR', '324004A1', 'PC Desktop', '82P3T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Nanya Technology 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601020', '2020-11-00', '', 'Used', 'Pramudita', '42120', '', '410004A1', 'PC Desktop', '84X5T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('A1601021', '2020-11-00', '', 'Used', 'Harry Susanto', '41410', 'PEP', '431003A1', 'PC Desktop', '83S5T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Nanya Technology 2048 Mbytes', 'Kingston 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601022', '2020-11-00', '', 'Used', 'Ersyad', '42210', '', '410001A1', 'PC Desktop', '8564T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Nanya Technology 2048 Mbytes', 'Kingston 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601023', '2020-11-00', '', 'Used', 'Isnaeni', '42210', '', '410007A1', 'PC Desktop', '8283T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Micron Technology 2048 Mbytes', 'Hyundai Electronics 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601024', '2020-11-00', '', 'Used', 'Fauzi', '41210', 'PPC', '411008A1', 'PC Desktop', '82J7T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Micron Technology 2048 Mbytes', 'Hyundai Electronics 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601025', '2020-11-00', '', 'Used', 'Mardika', '41230', 'DRILLING AND BLASTING', '412002A1', 'PC Desktop', '8255T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Micron Technology 2048 Mbytes', 'Hyundai Electronics 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601026', '2020-11-00', '', 'Used', 'Reza', '41240', 'LIMESTONE PRODUCTION', '410001A2', 'PC Desktop', '82W1T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Hyundai Electronics 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601027', '2020-11-00', '', 'Used', 'SGM 0 Puji', '41240', 'LIMESTONE PRODUCTION', '410003A1', 'PC Desktop', '8543T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('A1601028', '2020-11-00', '', 'Used', 'SGM', '41240', 'LIMESTONE PRODUCTION', '413002A1', 'PC Desktop', '8372T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Hyundai Electronics 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601029', '0000-00-00', '', 'Used', 'Fajri', '41240', 'LIMESTONE PRODUCTION', '413003A1', 'PC Desktop', '8317T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 2048 MBytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1601030', '0000-00-00', '', 'Used', 'Kacung Kusnanto', '41500', 'PLANT & MAINTENC TBN ', '421005A1', 'PC Desktop', '82L8T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 4096 MBytes', '', '', '', '', '', '', '', '', ''),
('A1601031', '0000-00-00', '', 'Used', 'Iwan 0 Sulkan 0 Agus Tri ', '41500', 'PLANT & MAINTENC TBN ', '421006A1', 'PC Desktop', '8279T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 4096 MBytes', '', '', '', '', '', '', '', '', ''),
('A1601032', '0000-00-00', '', 'Used', 'Ilham Elfa', '31300', 'PROC', ' ASSET & LOG DEPT.', '420001A1', 'PC Desktop', '83K1T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', 4, '2', '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '', '', '', '', ''),
('A1601033', '0000-00-00', '', 'Used', 'David Natalie', '41500', 'PLANT & MAINTENC TBN ', '420002A1', 'PC Desktop', '8336T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 4096 MBytes', '', '', '', '', '', '', '', '', ''),
('A1601034', '2020-11-00', '', 'Used', 'Andi Sujatmoko', '41500', 'PLANT & MAINTENC TBN ', '420003A1', 'PC Desktop', '83Q2T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Micron Technology 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1601035', '2020-11-00', '', 'Spare IT', 'IT 0 Sugiyono', '0', '0', '0', 'PC Desktop', '5KNJ7C2', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Nanya Technology 2048 Mbytes', 'Kingston 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601036', '2020-11-00', '', 'Used', 'Noviyanto', '41500', 'PLANT & MAINTENC TBN ', '420004A1', 'PC Desktop', '82D8T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1601037', '2020-11-00', '', 'Used', 'Fajar', '41500', 'PLANT & MAINTENC TBN ', '420008A1', 'PC Desktop', '81M4T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Nanya Technology 2048 Mbytes', 'Kingston 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1601038', '2020-11-00', '', 'Used', 'Priyanto', '41450', 'SM LAMONGAN SB', 'PROJECT LAMONGAN', 'PC Desktop', '83X6T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 2048 MBytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1601039', '2020-11-00', '', 'Used', 'Piping', '41460', 'SM REMBANG', 'REMBANG001', 'PC Desktop', '5HZJ7C2', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Micron Technology 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1601040', '2020-11-00', '', 'Spare IT', 'IT 0 Suhartono', '', '', '', 'PC Desktop', '81N7T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 2048 MBytes', 'Samsung 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1601041', '2020-11-00', '', 'Used', 'Dedy Kurniawan', '31300', 'PROC', ' ASSET & LOG DEPT.', '313008A', 'PC Desktop', '83R2T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', 4, '2', 'Kingston 2048 Mbytes', 'Nanya Technology 2048 Mbytes', '', '', '', '', '', '', ''),
('A1601042', '2020-11-00', '', 'Used', 'Aula 1', '42220', 'IT & BUSSINESS ANALYST', 'RPTAULA1', 'PC Desktop', '83R8T92', 'Dell Inc', 'OptiPlex 3040', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Nanya Technology 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1701001', '2020-11-00', '', 'Used', 'Makhrus', '41500', 'PLANT & MAINTENC TBN ', '420007A1', 'PC Desktop', '6QLB1H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('A1701002', '2020-11-00', '', 'Used', 'Gundik', '31300', 'PROC', ' ASSET & LOG DEPT.', '313004A1', 'PC Desktop', '6RF81H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', 4, '2', 'Kingston 2048 Mbytes', 'Hyundai Electronics 2048 Mbytes', '', '', '', '', '', '', ''),
('A1701003', '0000-00-00', '', 'Used', 'Sugeng', '41500', 'PLANT & MAINTENC TBN ', '421002A2', 'PC Desktop', '6R041H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 2048 MBytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1701004', '0000-00-00', '', 'Used', 'Halim', '41210', 'PPC', '411005A2', 'PC Desktop', '6QJ41H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 4096 MBytes', '', '', '', '', '', '', '', '', ''),
('A1701005', '0000-00-00', '', 'Used', 'Pradipta', '41410', 'PEP', '431004A2', 'PC Desktop', '6RH41H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 4096 MBytes', '', '', '', '', '', '', '', '', ''),
('A1701006', '0000-00-00', '', 'Used', 'Ronzin', '32360', 'SOCIAL RESPONSIBILITY', '411006A1', 'PC Desktop', '6RG61H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '', '', '', '', '', ''),
('A1701007', '0000-00-00', '', 'Used', 'Edy Sugiharto', '41500', 'PLANT & MAINTENC TBN ', '420005A1', 'PC Desktop', '6QKB1H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 4096 MBytes', '', '', '', '', '', '', '', '', ''),
('A1701008', '2020-11-00', '', 'Used', 'IT 0 Spare IT', '', '', '', 'PC Desktop', '6QDB1H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Micron Technology 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1701009', '2020-11-00', '', 'Used', 'Nurhadi', '31300', 'PROC', ' ASSET & LOG DEPT.', '313015A1', 'PC Desktop', '6Q881H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', 4, '2', 'Nanya Technology 2048 Mbytes', 'Kingston 2048 Mbytes', '', '', '', '', '', '', ''),
('A1701010', '2020-11-00', '', 'Used', 'Timbangan 01', '', '', '', 'PC Desktop', '6PN51H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1701011', '2020-11-00', '', 'Used', 'Timbangan 02', '', '', '', 'PC Desktop', '6RC81H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Nanya Technology 2048 Mbytes', 'Kingston 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1701012', '2020-11-00', '', 'Used', 'Timbangan 03', '', '', '', 'PC Desktop', '6PY71H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 2048 MBytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1701013', '2020-11-00', '', 'Used', 'Timbangan 04', '', '', '', 'PC Desktop', '6RJ51H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Micron Technology 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1701014', '2020-11-00', '', 'Used', 'Timbangan 05', '', '', '', 'PC Desktop', '6RG31H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 2048 MBytes', 'Samsung 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1701015', '2020-11-00', '', 'Used', 'IT 0 Spare IT', '', '', '', 'PC Desktop', '6PZ91H2', 'Dell Inc', 'OptiPlex 3046', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Nanya Technology 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1801001', '0000-00-00', '', 'Used', '0', '', '', '', 'PC Desktop', 'J9RNRK2', 'Dell Inc', 'OptiPlex 3050', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '(0000000000000000) 512 MBytes', '', '', '', '', '', ''),
('A1801002', '0000-00-00', '', 'Used', '0', '', '', '', 'PC Desktop', 'J6PXTK2', 'Dell Inc', 'OptiPlex 3050', 'Intel(R) Core(TM) i303240 CPU @ 3.40GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 4096 MBytes', '', '', '', '', '', '', '', '', ''),
('A1801003', '0000-00-00', '', 'Used', '0', '', '', '', 'PC Desktop', 'JFBXCK2', 'Dell Inc', 'OptiPlex 3050', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Micron Technology 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1801004', '0000-00-00', '', 'Used', '0', '', '', '', 'PC Desktop', 'JFBM862', 'Dell Inc', 'OptiPlex 3050', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Nanya Technology 2048 Mbytes', 'Kingston 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1801005', '0000-00-00', '', 'Used', '0', '', '', '', 'PC Desktop', 'J9PPRK2', 'Dell Inc', 'OptiPlex 3050', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1801006', '0000-00-00', '', 'Used', 'Timbangan 06', '', '', '', 'PC Desktop', 'J5DSRK2', 'Dell Inc', 'OptiPlex 3050', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Nanya Technology 2048 Mbytes', 'Kingston 2048 Mbytes', '', '', '', '', '', '', '', ''),
('A1801007', '0000-00-00', '', 'Used', 'Timbangan 07', '', '', '', 'PC Desktop', 'JFB0TF2', 'Dell Inc', 'OptiPlex 3050', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 2048 MBytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1801008', '0000-00-00', '', 'Used', 'Timbangan 08', '', '', '', 'PC Desktop', 'J9PSRK2', 'Dell Inc', 'OptiPlex 3050', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Micron Technology 2048 Mbytes', 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1801009', '0000-00-00', '', 'Used', 'Timbangan 09', '', '', '', 'PC Desktop', 'J9RRRK2', 'Dell Inc', 'OptiPlex 3050', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Hyundai Electronics 2048 MBytes', 'Samsung 2048 MBytes', '', '', '', '', '', '', '', ''),
('A1801010', '0000-00-00', '', 'Used', 'Timbangan 10', '', '', '', 'PC Desktop', 'J7TSRK2', 'Dell Inc', 'OptiPlex 3050', 'Intel(R) Core(TM) i302120 CPU @ 3.30GHz', '', '', 'DDR3', '4 GBytes', 2, 'Kingston 2048 Mbytes', 'Nanya Technology 2048 Mbytes', '', '', '', '', '', '', '', ''),
('B01001', '0000-00-00', '', 'Used', 'Ari Sriyanto', '41460', 'SM REMBANG', 'REMBANG', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01002', '0000-00-00', '', 'Used', 'Muhtadi', '30000', 'FINANCE DIRECTOR', 'DIRKEU', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01003', '0000-00-00', '', 'Used', 'Wakhid', '31100', 'ACCOUNT DEPT. HEAD', '310001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01004', '0000-00-00', '', 'Used', 'Wiwit', '32300', 'SR', ' GA & SHE DEPT.', '320001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', 2, '2', '', '', '', '', '', '', '', '', ''),
('B01005', '0000-00-00', '', 'Used', 'Bher', '41200', 'MINE OPERATION TUBAN', '410001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01006', '0000-00-00', '', 'Used', 'Yanto', '41500', 'PLANT & MAINTENC TBN ', '420001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01007', '0000-00-00', '', 'Used', 'Hendra ', '31110', 'ACCOUNTING', '311001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01008', '0000-00-00', '', 'Used', 'Afan Mahmud', '31210', 'FINANCE', '312001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01009', '0000-00-00', '', 'Used', 'Kasnawi', '31310', 'PROCUREMENT', '313001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01010', '0000-00-00', '', 'Used', 'Yusfi Miftachudin', '32210', 'TRAINING & DEVELOPMENT', '320101B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01011', '0000-00-00', '', 'Used', 'Dyah', '32110', 'OD', ' PP & INNOVATION', '321001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', 2, '2', '', '', '', '', '', '', '', '', ''),
('B01012', '0000-00-00', '', 'Used', 'Dimas', '42220', 'IT & BUSSINESS ANALYST', 'MADRIDISTA', 'Notebook', '2CE3141VZP', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '4 GBytes', 2, 'Samsung 2048 MBytes', 'Samsung 2048 MBytes', '', '', '', '', '', '', '', ''),
('B01013', '0000-00-00', '', 'Used', 'Agus Nurtanto', '32000', 'HC', ' ESR', ' GA & LEGAL DIV', '323001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 0, '2 GBytes', '2', '', '', '', '', '', '', '', ''),
('B01014', '0000-00-00', '', 'Used', 'Achmad Budiyono', '32120', 'PERSONAL ADMIN & IR', '322001B2', 'Notebook', '2CE3141W4S', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01015', '0000-00-00', '', 'Used', 'Marsudi', '3250', '', '325001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01016', '0000-00-00', '', 'Used', 'Warkun', '3260', '', '326001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01017', '0000-00-00', '', 'Used', 'Mashudiono', '32310', 'SHE', '327001B2', 'Notebook', '2CE3141W2P', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01018', '0000-00-00', '', 'Used', 'Mirza', '0', '', '301001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01019', '0000-00-00', '', 'Used', 'Heru', '42200', '', '401001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01020', '0000-00-00', '', 'Used', 'Sidiq', '42110', '', '402001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01021', '0000-00-00', '', 'Used', '', '', '', '', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01022', '0000-00-00', '', 'Used', 'Ujang', '41400', '', '411001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', '');
INSERT INTO `hardware` (`hardwareID`, `tglmsk`, `aset`, `status`, `username`, `unitcode`, `unitkerja`, `compname`, `model`, `serialnumber`, `manufacturer`, `product`, `processors`, `macadd`, `macaddwifi`, `memorytype`, `memorysize`, `memorymax`, `memorydim1`, `memorydim2`, `memorydim3`, `memorydim4`, `winOSID`, `winOSver`, `winOSpk`, `winlabelID`, `winlabelver`, `winlabelpk`) VALUES
('B01023', '0000-00-00', '', 'Used', 'Herry Sulistiyono', '41230', 'DRILLING AND BLASTING', '412001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01024', '0000-00-00', '', 'Used', 'Chambali', '41200', 'MINE OPERATION TUBAN', '413001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01025', '0000-00-00', '', 'Used', 'Joni Hariyanto', '41400', '', '414001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01026', '0000-00-00', '', 'Used', 'Budi Banyuarsyah', '41530', 'REKONDISI', '421001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01027', '0000-00-00', '', 'Used', 'Agus Santoso', '41400', '', '422001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01028', '0000-00-00', '', 'Used', 'Mashadi', '41400', '', '423001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01029', '0000-00-00', '', 'Used', 'Supriyono', '41520', 'MAINTENANCE A2T', '424001B2', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01030', '0000-00-00', '', 'Used', '', '', '', '', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01031', '0000-00-00', '', 'Used', 'LAPTOP RPTBOD', '42220', 'IT & BUSSINESS ANALYST', 'RPTBOD', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01032', '0000-00-00', '', 'Used', 'Fajar', '42220', 'IT & BUSSINESS ANALYST', 'DEVBAG', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '8 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01033', '0000-00-00', '', 'Used', 'Maryono', '41410', 'PEP', '431002B2', 'Notebook', '2CE31410GR', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, 'Hyundai Electronics 2048 Mbytes', '', '', '', '', '', '', '', '', ''),
('B01034', '0000-00-00', '', 'Used', 'Syaiful Amri', '41400', '', 'PROJECT PASURUAN', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01035', '0000-00-00', '', 'Used', 'Suratman', '41460', 'SM REMBANG', 'REMBANG0SM', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B01036', '0000-00-00', '', 'Used', 'Harjani', '41410', 'PEP', '301002B2', 'Notebook', '2CE3171NC5', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, 'Hyundai Electronics 2048 MBytes', '', '', '', '', '', '', '', '', ''),
('B01037', '0000-00-00', '', 'Used', 'Windu', '42110', '', '402002B2', 'Notebook', '2CE3141W44', 'Hewlett0Packard', 'HP ProBook 4441s', 'Intel(R) Core(TM) i303120M CPU @ 2.50GHz', '', '', 'DDR3', '2 GBytes', 2, 'Samsung 2048 MBytes', '', '', '', '', '', '', '', '', ''),
('B04001', '2020-11-00', '', 'Used', 'Suparman', '41450', 'SM LAMONGAN SB', 'PROJECT LAMONGAN', 'Notebook', '', 'Hewlett0Packard', 'HP ProBook 4430s', 'Intel(R) Core(TM) i302310M CPU @ 2.10GHz', '', '', 'DDR3', '2 GBytes', 2, '', '', '', '', '', '', '', '', '', ''),
('B1201001', '2020-11-00', '', 'Used', 'Dwi Laharto', '30110', 'INTERNAL AUDIT', '301003B1', 'Notebook', 'CNU1284X65', 'Hewlett0Packard', 'HP ProBook 4430s', 'Intel(R) Core(TM) i302310M CPU @ 2.10GHz', '', '', 'DDR3', '2 GBytes', 2, 'Kingston 2048 Mbytes', '', '', '', '', '', '', '', '', ''),
('B1201002', '2020-11-00', '', 'Used', '', '', '', '', 'Notebook', 'CNU1284W3H', 'Hewlett0Packard', 'HP ProBook 4430s', 'Intel(R) Core(TM) i302310M CPU @ 2.10GHz', '', '', 'DDR3', '2 GBytes', 2, 'Kingston 2048 Mbytes', '', '', '', '', '', '', '', '', '');

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
('1', 'A0501007', '', '', '', '', '', '', ''),
('10', 'A0301001', '', '', '', '', '', '', ''),
('11', 'A1601035', '', '', '', '', '', '', ''),
('12', 'A1601040', '', '', '', '', '', '', ''),
('13', 'A1701008', '', '', '', '', '', '', ''),
('14', 'A1701010', '', '', '', '', '', '', ''),
('15', 'A1701011', '', '', '', '', '', '', ''),
('16', 'A1701012', '', '', '', '', '', '', ''),
('17', 'A1701013', '', '', '', '', '', '', ''),
('18', 'A1701014', '', '', '', '', '', '', ''),
('19', 'A1701015', '', '', '', '', '', '', ''),
('192.168.1.001', 'IT001', '', '', '', '42220', 'IT & BUSSINESS ANALYST', 'OFFICE AKUNTANSI', ''),
('192.168.1.002', 'IT002', '', '', '', '42220', 'IT & BUSSINESS ANALYST', 'BOD', ''),
('192.168.1.003', 'IT003', '', '', '', '42220', 'IT & BUSSINESS ANALYST', 'MEETING TAMBANG', ''),
('192.168.1.004', 'IT004', '', '', '', '42220', 'IT & BUSSINESS ANALYST', 'AULA 1', ''),
('192.168.1.005', 'IT005', 'mirror.utsg.co.id', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.006', 'IT006', 'UTSGSTORAGE', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.007', 'IT007', '', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.008', 'IT008', '', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.009', 'IT009', 'mail.utsg.co.id', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.010', 'IT010', 'www.utsg.co.id', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.011', 'IT011', '', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.012', 'IT012', 'ns2.utsg.co.id', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.013', 'B01032', 'DEVBAG', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT_01', ''),
('192.168.1.014', 'IT014', 'SANDBOX', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.015', 'IT015', '', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.016', 'IT016', 'VCENTER', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.017', 'IT017', 'XPDEV-9D902AD36', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.018', 'IT018', 'REMOTE01', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.019', 'IT019', 'ABSENSI', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.020', 'IT020', 'SAPB1', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.021', '', '', '', '', '', '', '', ''),
('192.168.1.022', 'A1001002', 'HAMAS', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT_03', ''),
('192.168.1.023', 'B01012', 'MADRIDISTA', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT_02', ''),
('192.168.1.024', 'A0801002', 'SPAREIT05', '', '', '3140', '', 'PPC_10', ''),
('192.168.1.025', 'X14UT01', '80190047-Susilo', '', '', '20000', 'PRESIDENT DIRECTOR', 'Direktur Utama', ''),
('192.168.1.026', 'B01002', 'DIRKEU', '', '', '30000', 'FINANCE DIRECTOR', 'Direktur Keuangan', ''),
('192.168.1.027', '', '', '', '', '', '', '', ''),
('192.168.1.028', '', '80196046-AGOES', '', '', '0', '', 'BKO', ''),
('192.168.1.030', '', '', '', '', '', '', '', ''),
('192.168.1.031', 'IT031', 'BUFFALO_LS', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT_03', ''),
('192.168.1.032', 'IT032', 'LS-XL65D', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT SERVER', ''),
('192.168.1.033', 'IT033', 'CCTV', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT RUANG SERVER', ''),
('192.168.1.034', '', '', '', '', '', '', '', ''),
('192.168.1.035', '', '', '', '', '', '', '', ''),
('192.168.1.036', '', '', '', '', '', '', '', ''),
('192.168.1.037', '', '', '', '', '', '', '', ''),
('192.168.1.038', 'IT038', 'HPLASERJET', '', '', '42220', 'IT & BUSSINESS ANALYST', 'Kepegawaian', ''),
('192.168.1.039', 'IT039', 'NPIF8CFF0PPCPLO', '', '', '42220', 'IT & BUSSINESS ANALYST', 'PPC', ''),
('192.168.1.040', '', '', '', '', '', '', '', ''),
('192.168.1.041', 'B01031', 'RPTBOD', '', '', '42220', 'IT & BUSSINESS ANALYST', 'Rapat BOD', ''),
('192.168.1.042', 'A0901003', 'RPTAULA2', '', '', '42220', 'IT & BUSSINESS ANALYST', 'Rapat AULA 2', ''),
('192.168.1.043', 'A1601042', 'RPTAULA1', '', '', '42220', 'IT & BUSSINESS ANALYST', 'Rapat AULA 1', ''),
('192.168.1.044', 'IT044', 'ABSENSI', '', '', '42220', 'IT & BUSSINESS ANALYST', 'IT SERVER', ''),
('192.168.1.045', '', '', '', '', '', '', '', ''),
('192.168.1.046', '', '', '', '', '', '', '', ''),
('192.168.1.047', '', '', '', '', '', '', '', ''),
('192.168.1.048', '', '', '', '', '', '', '', ''),
('192.168.1.049', '', '', '', '', '', '', '', ''),
('192.168.1.050', '', '', '', '', '', '', '', ''),
('192.168.1.051', 'B01003', '310001B2', '', '', '31100', 'ACCOUNT DEPT. HEAD', 'Mgr. Akunt & Keuangan', ''),
('192.168.1.052', 'B01004', '320001B2', '', '', '32300', 'SR,  GA & SHE DEPT.', 'Mgr. HRD', ''),
('192.168.1.053', 'B01005', '410001B2', '', '', '41200', 'MINE OPERATION TUBAN', 'Mgr. Operasi Tambang', ''),
('192.168.1.054', 'B01006', '420001B2', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Mgr. Pemeliharaan', ''),
('192.168.1.055', '', '', '', '', '', '', '', ''),
('192.168.1.056', '', '420101B2', '', '', '4201', '', '', ''),
('192.168.1.057', '', '', '', '', '', '', '', ''),
('192.168.1.058', '', '', '', '', '32200', 'TRAINING CENTER DEPT', '', ''),
('192.168.1.059', '', '', '', '', '31300', 'PROCUREMENT', '', ''),
('192.168.1.060', '', '', '', '', '', '', '', ''),
('192.168.1.061', 'B01007', '311001B2', '', '', '31110', 'ACCOUNTING', 'Spv. Akuntansi', ''),
('192.168.1.062', 'B01008', '312001B2', '', '', '31210', 'FINANCE', 'Spv. SPI', ''),
('192.168.1.063', 'B01009', '313001B2', '', '', '31310', 'PROCUREMENT', 'Spv. Kepegawaian', ''),
('192.168.1.064', '', '', '', '', '', '', '', ''),
('192.168.1.065', 'B01010', '320101B2', '', '', '32210', 'TRAINING & DEVELOPMENT', 'Spv. Umum', ''),
('192.168.1.066', 'B01011', '321001B2', '', '', '32110', 'OD,  PP & INNOVATION', 'Spv. SDM', ''),
('192.168.1.067', 'B01014', '322001B2', '', '', '32120', 'PERSONAL ADMIN & IR', 'Spv. A2T', ''),
('192.168.1.068', 'B01013', '323001B2', '', '', '32000', 'HC,  ESR,  GA & LEGAL DIV', 'Spv. Hukum', ''),
('192.168.1.069', '', '324001B2', '', '', '32370', 'P. SISTEM & RISK MGT', 'Spv. Hukum', ''),
('192.168.1.070', 'B01015', '325001B2', '', '', '3250', '', 'Spv. Bina Lingkungan', ''),
('192.168.1.071', 'B01016', '326001B2', '', '', '3260', '', 'Spv. Peng. Sistem', ''),
('192.168.1.072', 'B01017', '327001B2', '', '', '32310', 'SHE', 'Spv. SHE', ''),
('192.168.1.073', '', '', '', '', '32360', 'SOCIAL RESPONSIBILITY', '', ''),
('192.168.1.074', '', '324000B2', '', '', '32380', 'LEGAL', 'Spv. Umum', ''),
('192.168.1.075', 'B01018', '301001B2', '', '', '0', '', 'SGM', ''),
('192.168.1.076', '', '', '', '', '', '', '', ''),
('192.168.1.077', 'B01019', '401001B2', '', '', '42200', '', 'Spv. CPD', ''),
('192.168.1.078', 'B01020', '402001B2', '', '', '42110', '', 'Spv. Pemasaran 1', ''),
('192.168.1.079', '', '403001B2', '', '', '42120', '', 'Spv. Pemasaran 1', ''),
('192.168.1.080', '', '', '', '', '', '', '', ''),
('192.168.1.081', '', '', '', '', '41210', 'PPC', 'Spv. PPC', ''),
('192.168.1.082', 'B01022', '411001B2', '', '', '41400', '', 'Spv. PPC', ''),
('192.168.1.083', 'B01023', '412001B2', '', '', '41230', 'DRILLING AND BLASTING', 'Spv. Produksi 1', ''),
('192.168.1.084', 'B01024', '413001B2', '', '', '41200', 'MINE OPERATION TUBAN', 'Spv. Produksi 2', ''),
('192.168.1.085', 'B01025', '414001B2', '', '', '41400', '', 'Spv. Produksi 3', ''),
('192.168.1.086', '', '', '', '', '41250', 'CLAY PRODUCTION', '', ''),
('192.168.1.087', '', '', '', '', '', '', '', ''),
('192.168.1.088', 'B01026', '421001B2', '', '', '41530', 'REKONDISI', 'Spv. A2B', ''),
('192.168.1.089', 'B01027', '422001B2', '', '', '41400', '', 'Spv. Logistik', ''),
('192.168.1.090', 'B01028', '423001B2', '', '', '41400', '', 'Spv. PMC', ''),
('192.168.1.091', 'B01029', '424001B2', '', '', '41520', 'MAINTENANCE A2T', 'Spv. Rekondisi', ''),
('192.168.1.092', '', '', '', '', '41540', '', '', ''),
('192.168.1.093', '', '', '', '', '41560', '', '', ''),
('192.168.1.094', '', '', '', '', '32340', 'SECURITY COMMANDER', '', ''),
('192.168.1.095', '', '', '', '', '', '', '', ''),
('192.168.1.096', '', 'KANITRA', '', '', '', '', 'Kamaju Security', ''),
('192.168.1.097', '', 'user-VAIO', '', '', '3020', '', 'Kamaju Security', ''),
('192.168.1.098', '', 'KAMAJU-SI', '', '', '3020', '', 'Kamaju Security', ''),
('192.168.1.099', '', '', '', '', '', '', '', ''),
('192.168.1.100', '', '', '', '', '', '', '', ''),
('192.168.1.101', 'A02016', '311002A2', '', '', '31110', 'ACCOUNTING', 'Akuntansi_01', ''),
('192.168.1.102', 'A02019', '312003A2', '', '', '31110', 'ACCOUNTING', 'Keuangan_02', ''),
('192.168.1.103', 'A1601001', '311003A1', '', '', '31110', 'ACCOUNTING', 'Akuntansi_03', ''),
('192.168.1.104', 'A02003', '311005A2', '', '', '31110', 'ACCOUNTING', 'Akuntansi_04', ''),
('192.168.1.105', 'A1601002', '311006A2', '', '', '31110', 'ACCOUNTING', 'Akuntansi_05', ''),
('192.168.1.106', 'A1601004', '311008A1', '', '', '31210', 'FINANCE', 'Akuntansi_06', ''),
('192.168.1.107', 'A1601003', '311007A1', '', '', '31110', 'ACCOUNTING', 'Akuntansi_04', ''),
('192.168.1.108', '', '', '', '', '', '', '', ''),
('192.168.1.109', 'A1601005', '312002A1', '', '', '31210', 'FINANCE', 'Keuangan_01', ''),
('192.168.1.110', '', '', '', '', '', '', '', ''),
('192.168.1.111', 'A1401001', '312004A1', '', '', '31210', 'FINANCE', 'Keuangan_03', ''),
('192.168.1.112', 'A1601006', '312005A1', '', '', '31210', 'FINANCE', 'Keuangan_04', ''),
('192.168.1.113', 'A0701019', '312006A1', '', '', '31210', 'FINANCE', 'Keuangan_05', ''),
('192.168.1.114', '', '', '', '', '', '', '', ''),
('192.168.1.115', '', '', '', '', '', '', '', ''),
('192.168.1.116', 'A0601002', '313002A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'PMC', ''),
('192.168.1.117', 'A1601007', '313003A1', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_02', ''),
('192.168.1.118', 'A1701002', '313004A1', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_03', ''),
('192.168.1.119', 'A1601008', '313005A1', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_04', ''),
('192.168.1.120', 'A1001003', '313006A1', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_05', ''),
('192.168.1.121', 'A0901002', '313007A1', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_06', ''),
('192.168.1.122', 'A1601041', '313008A', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_07', ''),
('192.168.1.123', 'A1101004', 'SPAREIT01', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_08', ''),
('192.168.1.124', 'A0701005', '313010A1', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_10', ''),
('192.168.1.125', 'A1601009', '313014A1', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_09', ''),
('192.168.1.126', 'A1601010', '313012A1', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_11', ''),
('192.168.1.127', 'A1601011', '313013A1', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_12', ''),
('192.168.1.128', 'A1701009', '313015A1', '', '', '31300', 'PROC,  ASSET & LOG DEPT.', 'Logistik_13', ''),
('192.168.1.129', '', '', '', '', '', '', '', ''),
('192.168.1.130', '', '', '', '', '', '', '', ''),
('192.168.1.131', 'A0601008', '321005A1', '', '', '32110', 'OD,  PP & INNOVATION', 'SDM_01', ''),
('192.168.1.132', '', '322103B2', '', '', '32110', 'OD', ' PP & INNOVATION', ''),
('192.168.1.133', 'A1601013', '321004A2', '', '', '32110', 'OD', ' PP & INNOVATION', ''),
('192.168.1.134', '', '322102B2', '', '', '32110', 'OD', ' PP & INNOVATION', ''),
('192.168.1.135', 'A1601014', '322007A1', '', '', '32200', 'TRAINING CENTER DEPT', '', ''),
('192.168.1.136', 'A1101001', '322002A1', '', '', '32120', 'PERSONAL ADMIN & IR', 'Kepegawaian_01', ''),
('192.168.1.137', 'A02009', '322003A2', '', '', '32120', 'PERSONAL ADMIN & IR', 'Kepegawaian_02', ''),
('192.168.1.138', 'A0401003', '322004A1', '', '', '32120', 'PERSONAL ADMIN & IR', 'Kepegawaian_03', ''),
('192.168.1.139', 'A0401004', '322005A1', '', '', '32120', 'PERSONAL ADMIN & IR', 'Kepegawaian_04', ''),
('192.168.1.140', '', '', '', '', '', '', '', ''),
('192.168.1.141', '', '', '', '', '32380', 'LEGAL', '', ''),
('192.168.1.142', 'A1601018', '323004A1', '', '', '32380', 'LEGAL', '', ''),
('192.168.1.143', 'A0701007', '323002A1', '', '', '32380', 'LEGAL', 'Hukum_01', ''),
('192.168.1.144', '', '', '', '', '', '', '', ''),
('192.168.1.145', '', '', '', '', '', '', '', ''),
('192.168.1.146', '', '421015A1', '', '', '3230', '', 'Hukum_02', ''),
('192.168.1.147', 'A0501001', '324002A1', '', '', '32350', 'GENERAL AFFAIR', 'Umum_01', ''),
('192.168.1.148', 'A0401008', '324003A1', '', '', '32350', 'GENERAL AFFAIR', 'Umum_02', ''),
('192.168.1.149', 'A1601019', '324004A1', '', '', '32350', 'GENERAL AFFAIR', 'Umum_03', ''),
('192.168.1.150', 'A0401005', '324005A1', '', '', '32350', 'GENERAL AFFAIR', 'Umum_04', ''),
('192.168.1.151', '', '', '', '', '', '', '', ''),
('192.168.1.152', 'A0501009', '324009A1', '', '', '32350', 'GENERAL AFFAIR', 'Umum_06', ''),
('192.168.1.153', '', '', '', '', '', '', '', ''),
('192.168.1.154', '', '', '', '', '', '', '', ''),
('192.168.1.155', 'A0501008', '325003A1', '', '', '32360', 'SOCIAL RESPONSIBILITY', 'Sekper_01', ''),
('192.168.1.156', '', '', '', '', '', '', '', ''),
('192.168.1.157', 'A1701006', '411006A1', '', '', '32360', 'SOCIAL RESPONSIBILITY', 'Bina Lingkungan_03', ''),
('192.168.1.158', '', '', '', '', '', '', '', ''),
('192.168.1.159', 'A1601017', '327008A2', '', '', '32310', 'SHE', '', ''),
('192.168.1.160', '', '', '', '', '', '', '', ''),
('192.168.1.161', '', '', '', '', '', '', '', ''),
('192.168.1.162', 'A1101003', '326001A1', '', '', '32370', 'P. SISTEM & RISK MGT', 'Sekper_02', ''),
('192.168.1.163', 'A1601012', '326005A2', '', '', '30001', 'SECRETARY', 'Sekper_03', ''),
('192.168.1.164', 'A1601016', '327009A1', '', '', '32310', 'SHE', '', ''),
('192.168.1.165', 'A1201001', '325007A1', '', '', '32310', 'SHE', 'SHE_04', ''),
('192.168.1.166', 'A0401002', 'SPAREIT18', '', '', '32310', 'SHE', 'SHE_01', ''),
('192.168.1.167', '', '', '', '', '', '', '', ''),
('192.168.1.168', 'A1601015', '327004A1', '', '', '32310', 'SHE', 'SHE_03', ''),
('192.168.1.169', 'A0501015', '327006A1', '', '', '32310', 'SHE', 'SHE_05', ''),
('192.168.1.170', '', '', '', '', '', '', '', ''),
('192.168.1.171', 'A1701005', '431004A2', '', '', '41410', 'PEP', 'PEP_03', ''),
('192.168.1.172', 'A1601021', '431003A1', '', '', '41410', 'PEP', 'PEP_02', ''),
('192.168.1.173', 'A1101005', 'A1101005', '', '', '41410', 'PEP', 'PEP_04', ''),
('192.168.1.174', '', '', '', '', '', '', '', ''),
('192.168.1.175', 'IT173', 'VMware ESXi 4.1', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.176', 'B01033', '431002B2', '', '', '41410', 'PEP', 'PEP_01', ''),
('192.168.1.177', 'B1201001', '301003B1', '', '', '30110', 'INTERNAL AUDIT', 'SPI', ''),
('192.168.1.178', 'B01036', '301002B2', '', '', '41410', 'PEP', 'SPI', ''),
('192.168.1.179', '', '', '', '', '', '', '', ''),
('192.168.1.180', '', '', '', '', '', '', '', ''),
('192.168.1.181', 'IT181', 'ILO3', '', '', '', '', 'IT RUANG SERVER', ''),
('192.168.1.182', 'IT182', 'SANDBOX', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.183', '', '', '', '', '', '', '', ''),
('192.168.1.184', '', 'VDI0000', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.185', '', 'VDI0001', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.186', '', '', '', '', '', '', '', ''),
('192.168.1.187', 'B01037', '402002B2', '', '', '42110', '', 'Pemasaran 1_01', ''),
('192.168.1.188', 'A1001004', '402003A1', '', '', '42110', '', 'Pemasaran 1_02', ''),
('192.168.1.189', '', '', '', '', '', '', '', ''),
('192.168.1.190', 'A1601026', '410001A2', '', '', '41240', 'LIMESTONE PRODUCTION', '', ''),
('192.168.1.191', 'A1601022', '410001A1', '', '', '42210', '', '', ''),
('192.168.1.192', 'A1601027', '410003A1', '', '', '41240', 'LIMESTONE PRODUCTION', '', ''),
('192.168.1.193', 'A1601020', '410004A1', '', '', '42120', '', 'Pemasaran 2_01', ''),
('192.168.1.194', 'A1601023', '410007A1', '', '', '42210', '', '', ''),
('192.168.1.195', 'A1101002', 'PPCPLAN-HP', '', '', '41210', 'PPC', 'PPC_01', ''),
('192.168.1.196', 'A0701020', '411003A1', '', '', '41210', 'PPC', 'PPC_02', ''),
('192.168.1.197', 'A0401007', '411004A1', '', '', '41210', 'PPC', 'PPC_03', ''),
('192.168.1.198', 'A1701004', '411005A2', '', '', '41210', 'PPC', 'PPC_04', ''),
('192.168.1.199', '', '', '', '', '', '', '', ''),
('192.168.1.200', 'A0501012', '411007A1', '', '', '41210', 'PPC', 'PPC_06', ''),
('192.168.1.201', 'A1601024', '411008A1', '', '', '41210', 'PPC', 'PPC_07', ''),
('192.168.1.202', 'A0401006', '411009A1', '', '', '41210', 'PPC', 'PPC_08', ''),
('192.168.1.203', 'A0701021', '411010A1', '', '', '41210', 'PPC', 'PPC_09', ''),
('192.168.1.204', 'A0701008', '411011A1', '', '', '41210', 'PPC', 'PPC_10', ''),
('192.168.1.205', 'A0501013', '411012A1', '', '', '41240', 'LIMESTONE PRODUCTION', 'PPC_12', ''),
('192.168.1.206', '', '', '', '', '', '', '', ''),
('192.168.1.207', '', '', '', '', '', '', '', ''),
('192.168.1.208', 'A1601025', '412002A1', '', '', '41230', 'DRILLING AND BLASTING', 'Produksi 1_01', ''),
('192.168.1.209', 'A0701023', '412003A1', '', '', '41230', 'DRILLING AND BLASTING', 'Produksi 1_02', ''),
('192.168.1.210', '', '', '', '', '', '', '', ''),
('192.168.1.211', '', '', '', '', '', '', '', ''),
('192.168.1.212', 'A1601028', '413002A1', '', '', '41240', 'LIMESTONE PRODUCTION', 'Produksi 2_01', ''),
('192.168.1.213', 'A1601029', '413003A1', '', '', '41240', 'LIMESTONE PRODUCTION', 'Produksi 2_02', ''),
('192.168.1.214', '', '', '', '', '', '', '', ''),
('192.168.1.215', 'A1601037', '420008A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_18', ''),
('192.168.1.216', 'A1701001', '420007A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_17', ''),
('192.168.1.217', 'A1701003', '421002A2', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_01', ''),
('192.168.1.218', 'A1001005', '421003A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_02', ''),
('192.168.1.219', 'A0601003', '421004A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_03', ''),
('192.168.1.220', 'A0601010', '421002A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_04', ''),
('192.168.1.221', 'A0501003', '421021A1', '', '', '32200', 'TRAINING CENTER DEPT', 'Pemeliharaan_05', ''),
('192.168.1.222', 'A1601031', '421006A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_05', ''),
('192.168.1.223', 'A0801001', '421007A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_06', ''),
('192.168.1.224', 'A0501002', '431005A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_07', ''),
('192.168.1.225', 'A0501005', '421008A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_07', ''),
('192.168.1.226', '', '', '', '', '', '', '', ''),
('192.168.1.227', 'A0401001', '421010A3', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_12', ''),
('192.168.1.228', 'A0501006', '421012A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_13', ''),
('192.168.1.229', 'A1601030', '421005A1', '', '', '41500', 'PLANT & MAINTENC TBN ', 'Pemeliharaan_11', ''),
('192.168.1.230', 'A0601009', '421014A1', '', '', '41500', 'PLANT & MAINTENC TBN ', '', ''),
('192.168.1.231', 'A1601032', '420001A1', '', '', '31300', 'PROC', ' ASSET & LOG DEPT.', ''),
('192.168.1.232', 'A1601033', '420002A1', '', '', '41500', 'PLANT & MAINTENC TBN ', '', ''),
('192.168.1.233', 'A1601034', '420003A1', '', '', '41500', 'PLANT & MAINTENC TBN ', '', ''),
('192.168.1.234', 'A1601036', '420004A1', '', '', '41500', 'PLANT & MAINTENC TBN ', '', ''),
('192.168.1.235', 'A1701007', '420005A1', '', '', '41500', 'PLANT & MAINTENC TBN ', '', ''),
('192.168.1.236', 'IT236', 'Cisco Sytems', '', '', '3140', '', 'IT', ''),
('192.168.1.237', '', '', '', '', '', '', '', ''),
('192.168.1.238', '', '', '', '', '', '', '', ''),
('192.168.1.239', '', '', '', '', '', '', '', ''),
('192.168.1.240', '', 'ILOCN734106MV ', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.241', '', 'ILOCN734200D3  ', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.242', '', 'ILOSGH110XCKR  ', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.243', '', 'ILOSGH244F38F', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.244', '', '', '', '', '', '', '', ''),
('192.168.1.245', '', 'ML370G7', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.246', '', '', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.247', 'IT247', 'Cisco-Linksys,  LLC', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.248', 'IT248', 'Cisco', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.249', 'IT249', '', '', '', '3140', '', 'Server Tambang', ''),
('192.168.1.250', 'IT250', '', '', '', '3140', '', 'R1,  HO Datacenter', ''),
('192.168.1.251', 'IT251', 'FORTIGATE', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.252', 'IT252', '', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.253', 'IT253', '', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.254', 'IT254', '', '', '', '3140', '', 'IT RUANG SERVER', ''),
('192.168.1.255', 'A0601007', 'DRILLINGPROD1', '', '', '4120', '', 'Produksi', ''),
('192.168.1.256', 'A0701009', 'PARKIRTUBAN2', '', '', '4130', '', 'Produksi02', ''),
('192.168.1.257', 'A0701003', 'TANAHLIAT', '', '', '4140', '', 'Produksi02', ''),
('192.168.2.102', 'A00931', 'Melak-02', '', '', '4330', '', 'Site Melak', ''),
('192.168.2.155', 'A00932', 'Melak-03', '', '', '4330', '', 'Site Melak', ''),
('192.168.2.184', 'A00933', 'Melak-04', '', '', '4330', '', 'Site Melak', ''),
('192.168.3.117', 'A00941', 'BATURAJA2', '', '', '41470', 'SM BATURAJA', 'Site Baturaja', ''),
('192.168.3.179', 'A00942', '', '', '', '41470', 'SM BATURAJA', 'Site Baturaja', ''),
('192.168.3.220', 'A00943', 'SMBATURAJA', '', '', '41470', 'SM BATURAJA', 'Site Baturaja', ''),
('192.168.5.001', 'B01035', 'REMBANG-SM', '', '', '41460', 'SM REMBANG', 'Site Sale', ''),
('192.168.5.005', 'A0601001 ', 'REMBANG-04', '', '', '41460', 'SM REMBANG', 'Site Sale', ''),
('192.168.5.112', 'A1601039', 'REMBANG-01', '', '', '41460', 'SM REMBANG', 'Site Sale', ''),
('192.168.5.147', 'A1001001 ', 'REMBANG-03', '', '', '41460', 'SM REMBANG', 'Site Sale', ''),
('192.168.5.193', 'A0901001 ', 'FORTIGATE', '', '', '41460', 'SM REMBANG', 'Site Sale', ''),
('192.168.5.201', 'A0501014', 'SLUKE', '', '', '4320', '', 'Rembang - Sluke', ''),
('192.168.5.301', 'B01001', 'REMBANG', '', '', '41460', 'SM REMBANG', 'Project Rembang', ''),
('192.168.6.201', 'B04001', 'PROJECT LAMONGAN', '', '', '41450', 'SM LAMONGAN SB', 'Project Lamongan_01', ''),
('192.168.6.202', 'A02017', 'PROJECT LAMONGAN', '', '', '41450', 'SM LAMONGAN SB', 'Project Lamongan_02', ''),
('192.168.6.203', 'A1601038', 'PROJECT LAMONGAN', '', '', '41450', 'SM LAMONGAN SB', 'Project Lamongan_03', ''),
('192.168.6.204', 'A0901015', 'PROJECT LAMONGAN', '', '', '41450', 'SM LAMONGAN SB', 'Project Lamongan_04', ''),
('192.168.7.201', 'B01034', 'PROJECT PASURUAN', '', '', '41400', '', 'Project Pasuruan', ''),
('2', 'A0601005', '', '', '', '3140', '', 'Service', ''),
('20', 'A1801001', '', '', '', '', '', '', ''),
('21', 'A1801002', '', '', '', '', '', '', ''),
('22', 'A1801003', '', '', '', '', '', '', ''),
('23', 'A1801004', '', '', '', '', '', '', ''),
('24', 'A1801005', '', '', '', '', '', '', ''),
('25', 'A1801006', '', '', '', '', '', '', ''),
('26', 'A1801007', '', '', '', '', '', '', ''),
('27', 'A1801008', '', '', '', '', '', '', ''),
('28', 'A1801009', '', '', '', '', '', '', ''),
('29', 'A1801010', '', '', '', '', '', '', ''),
('3', 'A0401001', '326004A1', '', '', '3140', '', 'Service', ''),
('4', 'A0701028', '327003A1', '', '', '3140', '', 'Service', ''),
('5', 'A0701022', '421013A1', '', '', '3140', '', 'Service', ''),
('6', 'A0601003', '', '', '', '', '', '', ''),
('7', 'A0701004', '', '', '', '', '', '', ''),
('8', 'A0701024', 'AFVAL', '', '', 'AFVAL', 'AFVAL', 'AFVAL', ''),
('9', 'A0701013', 'AFVAL', '', '', 'AFVAL', 'AFVAL', 'AFVAL', '');

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
(12, '2018-07-16', 'A0401007', 'a', 'Ismani', '41210', 'PPC', 'PC Desktop', 'SGH40409QW', 'Hewlett0Packard', 'HP d220 MT(DU455PA)', 'asdfghjklvbngvhtilouqsljuqwnioehwurgbdcjfegfrnhlogvfmrgljffffgjhg kjgsjk dgjwsqaasdfghjklvbngvhtilouqsljuqwnioehwurgbdcjfegfrnhlogvfmrgljffffgjhg kjgsjk dgjwsqaasdfghjklvbngvhtilouqsljuqwnioehwurgbdcj', 'Selesai', '2018-07-27'),
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
(111, 'PT AAA', 'Sewa');

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
(41500, 'PLANT & MAINTENC TBN ', ''),
(41510, 'MAINTENANCE A2B', ''),
(41520, 'MAINTENANCE A2T', ''),
(41530, 'REKONDISI', ''),
(41540, 'DRILLING & SURF MINER', ''),
(41560, 'PMC', ''),
(42110, 'MARKETING CEMENT', ''),
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
(1, 'Windows 7', 'XXAD4'),
(12, '', ''),
(11111, 'zxz', 'zXzX');

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
