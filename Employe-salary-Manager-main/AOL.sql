-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2024 at 09:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aoldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Kontak` int(11) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `ID_departemen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_admin`, `Nama`, `Kontak`, `Email`, `ID_departemen`) VALUES
(6, 'Budi', 8111111, '23@paskal', 2);

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `ID_departemen` int(11) NOT NULL,
  `Nama_departemen` varchar(255) DEFAULT NULL,
  `Kepala_departemen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`ID_departemen`, `Nama_departemen`, `Kepala_departemen`) VALUES
(2, 'Binus', 'Paskal');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `ID_karyawan` int(11) NOT NULL,
  `Gaji_pokok` int(11) DEFAULT NULL,
  `Bonus` int(11) DEFAULT NULL,
  `Potongan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`ID_karyawan`, `Gaji_pokok`, `Bonus`, `Potongan`) VALUES
(6, 20000000, 15000000, 100000),
(7, 20000000, 15000000, 100000),
(8, 20000000, 15000000, 100000),
(9, 20000000, 15000000, 100000),
(10, 20000000, 15000000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `ID_karyawan` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Posisi` varchar(255) DEFAULT NULL,
  `Kontak` varchar(15) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`ID_karyawan`, `Nama`, `Posisi`, `Kontak`, `Email`, `Alamat`) VALUES
(6, 'Muhammad Noufal R', 'Ketua', '2602147704', 'muhammad.putra086@binus.ac.id', 'LC75'),
(7, 'Rai Aufa Kamillia', 'Anggota', '2602129310', 'rai.kamilia@binus.ac.id', '23 Paskal'),
(8, 'Nikolae Neo Parlindungan Nathanael', 'Anggota', '2602117216', 'nikolae.nathanael@binus.ac.id', '23 Paskal'),
(9, 'Ahmad Mansyur Syaifuddin', 'Anggota', '2602134670', 'ahmad.syaifuddin@binus.ac.id', '23 Paskal'),
(10, 'felli', 'Anggota', '2602150182', 'felisha.levana@binus.ac.id', '23 Paskal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`),
  ADD KEY `ID_departemen` (`ID_departemen`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`ID_departemen`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`ID_karyawan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`ID_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `ID_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `ID_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`ID_departemen`) REFERENCES `departemen` (`ID_departemen`);

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`ID_karyawan`) REFERENCES `karyawan` (`ID_karyawan`),
  ADD CONSTRAINT `gaji_ibfk_2` FOREIGN KEY (`ID_karyawan`) REFERENCES `karyawan` (`ID_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
