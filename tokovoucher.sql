-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 12:37 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokovoucher`
--

-- --------------------------------------------------------

--
-- Table structure for table `bundle`
--

CREATE TABLE `bundle` (
  `id_bundle` varchar(5) NOT NULL,
  `nama_bundle` varchar(70) NOT NULL,
  `harga_bundle` int(10) NOT NULL,
  `id_valo` int(4) NOT NULL,
  `id_genshin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bundle`
--

INSERT INTO `bundle` (`id_bundle`, `nama_bundle`, `harga_bundle`, `id_valo`, `id_genshin`) VALUES
('A001', 'mantap', 50000, 1, 3),
('A002', 'Special Winter', 500000, 1, 5),
('B001', 'Special Spring', 700000, 2, 1),
('B002', 'Special Summer', 949000, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `genshin`
--

CREATE TABLE `genshin` (
  `id_genshin` int(4) NOT NULL,
  `nama_genshin` varchar(70) NOT NULL,
  `harga_genshin` int(10) NOT NULL,
  `is_delete` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genshin`
--

INSERT INTO `genshin` (`id_genshin`, `nama_genshin`, `harga_genshin`, `is_delete`) VALUES
(1, 'Voucher Genshin 300 Crystal', 60000, b'0'),
(2, 'Voucher', 199000, b'0'),
(3, 'Voucher Genshin 3000 Crystal', 499000, b'0'),
(5, 'Voucher 200crystal', 10000009, b'0'),
(6, 'adada', 22323, b'1'),
(7, 'coolant', 123, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `valorant`
--

CREATE TABLE `valorant` (
  `id_valo` int(4) NOT NULL,
  `nama_valo` varchar(70) NOT NULL,
  `harga_valo` int(10) NOT NULL,
  `is_delete` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `valorant`
--

INSERT INTO `valorant` (`id_valo`, `nama_valo`, `harga_valo`, `is_delete`) VALUES
(1, 'Valorant Voucher 20k', 22000, b'0'),
(2, 'Valorant 50000k', 530000, b'0'),
(3, 'Valorant Voucher 100k', 101000, b'0'),
(4, '\'mantap jiwa\'', 1000000, b'1'),
(5, 'adsad23', 23232, b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bundle`
--
ALTER TABLE `bundle`
  ADD PRIMARY KEY (`id_bundle`),
  ADD KEY `FK_genshin` (`id_genshin`),
  ADD KEY `FK_valo` (`id_valo`);

--
-- Indexes for table `genshin`
--
ALTER TABLE `genshin`
  ADD PRIMARY KEY (`id_genshin`);

--
-- Indexes for table `valorant`
--
ALTER TABLE `valorant`
  ADD PRIMARY KEY (`id_valo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genshin`
--
ALTER TABLE `genshin`
  MODIFY `id_genshin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `valorant`
--
ALTER TABLE `valorant`
  MODIFY `id_valo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bundle`
--
ALTER TABLE `bundle`
  ADD CONSTRAINT `FK_genshin` FOREIGN KEY (`id_genshin`) REFERENCES `genshin` (`id_genshin`),
  ADD CONSTRAINT `FK_valo` FOREIGN KEY (`id_valo`) REFERENCES `valorant` (`id_valo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
