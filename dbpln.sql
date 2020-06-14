-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 12:11 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpln`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `KodeLogin` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `NamaLengkap` varchar(50) NOT NULL,
  `Level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`KodeLogin`, `Username`, `Password`, `NamaLengkap`, `Level`) VALUES
(4, 'petugas', 'petugas', 'aditya baharma', 'Petugas'),
(5, 'admin', 'admin', 'Baharmaa', 'Admin'),
(7, 'yoga', 'yoga', 'yogapp', 'Admin'),
(8, '1', '1', 'Baharmaa', 'Pelanggan'),
(9, '1', '1', 'Baharmaa', 'Pelanggan'),
(10, '1', '1', 'Baharmaa', 'Pelanggan'),
(11, '1', '1', 'Baharmaa', 'Pelanggan'),
(12, '1', '1', 'Baharmaa', 'Pelanggan'),
(13, '', '', 'Baharmaa', 'Pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `tbpelanggan`
--

CREATE TABLE `tbpelanggan` (
  `KodePelanggan` int(11) NOT NULL,
  `NoPelanggan` int(11) NOT NULL,
  `NoMeter` int(11) NOT NULL,
  `KodeTarif` int(11) NOT NULL,
  `NamaLengkap` varchar(50) NOT NULL,
  `Telp` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpelanggan`
--

INSERT INTO `tbpelanggan` (`KodePelanggan`, `NoPelanggan`, `NoMeter`, `KodeTarif`, `NamaLengkap`, `Telp`, `Alamat`) VALUES
(17, 1234, 1221, 4, 'Baharmaa', '0987675', 'dgfdszg'),
(22, 1231, 1221, 4, 'Baharmaa', '0987675', 'dgfdszg'),
(23, 123411, 1221, 4, 'Baharmaa', '0987675', 'dgfdszg'),
(24, 21323, 1221, 6, 'Baharmaa', '0987675', 'denpasar');

-- --------------------------------------------------------

--
-- Table structure for table `tbpembayaran`
--

CREATE TABLE `tbpembayaran` (
  `KodePembayaran` int(11) NOT NULL,
  `KodeTagihan` varchar(11) NOT NULL,
  `TglBayar` date NOT NULL,
  `JumlahTagihan` double NOT NULL,
  `BuktiPembayaran` varchar(255) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpembayaran`
--

INSERT INTO `tbpembayaran` (`KodePembayaran`, `KodeTagihan`, `TglBayar`, `JumlahTagihan`, `BuktiPembayaran`, `Status`) VALUES
(1, '28', '2019-02-12', 10000, '1549855962383.png', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tbtagihan`
--

CREATE TABLE `tbtagihan` (
  `KodeTagihan` int(11) NOT NULL,
  `NoTagihan` varchar(20) NOT NULL,
  `NoPelanggan` varchar(30) NOT NULL,
  `TahunTagih` varchar(50) NOT NULL,
  `BulanTagih` varchar(20) NOT NULL,
  `JumlahPemakaian` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `TotalBayar` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbtagihan`
--

INSERT INTO `tbtagihan` (`KodeTagihan`, `NoTagihan`, `NoPelanggan`, `TahunTagih`, `BulanTagih`, `JumlahPemakaian`, `Status`, `TotalBayar`) VALUES
(28, 'QQ1PAH', '1234', '2019', 'juli', 122, 'Belum', 3660201),
(29, 'DEQ5PS', '1234', '2019', 'januari', 122, 'Belum', 3660201),
(31, 'VR7PJG', '1234', '2019', 'maret', 122, 'Belum', 3660201),
(32, 'HWGL5B', '1234', '2017', 'juli', 122, 'Belum', 3660201),
(33, 'KJ9ZI4', '1234', '2017', 'januari', 122, 'Belum', 3660201),
(34, '1EUM8V', '1234', '2018', 'januari', 122, 'Belum', 3660201);

-- --------------------------------------------------------

--
-- Table structure for table `tbtarif`
--

CREATE TABLE `tbtarif` (
  `KodeTarif` int(11) NOT NULL,
  `Daya` double NOT NULL,
  `TarifPerKwh` double NOT NULL,
  `Beban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbtarif`
--

INSERT INTO `tbtarif` (`KodeTarif`, `Daya`, `TarifPerKwh`, `Beban`) VALUES
(4, 200, 30000, 201),
(6, 222, 1111, 234),
(7, 200, 30000, 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`KodeLogin`);

--
-- Indexes for table `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
  ADD PRIMARY KEY (`KodePelanggan`),
  ADD KEY `KodeTarif` (`KodeTarif`);

--
-- Indexes for table `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  ADD PRIMARY KEY (`KodePembayaran`);

--
-- Indexes for table `tbtagihan`
--
ALTER TABLE `tbtagihan`
  ADD PRIMARY KEY (`KodeTagihan`);

--
-- Indexes for table `tbtarif`
--
ALTER TABLE `tbtarif`
  ADD PRIMARY KEY (`KodeTarif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `KodeLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
  MODIFY `KodePelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  MODIFY `KodePembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbtagihan`
--
ALTER TABLE `tbtagihan`
  MODIFY `KodeTagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbtarif`
--
ALTER TABLE `tbtarif`
  MODIFY `KodeTarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
  ADD CONSTRAINT `tbpelanggan_ibfk_1` FOREIGN KEY (`KodeTarif`) REFERENCES `tbtarif` (`KodeTarif`),
  ADD CONSTRAINT `tbpelanggan_ibfk_2` FOREIGN KEY (`KodeTarif`) REFERENCES `tbtarif` (`KodeTarif`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
