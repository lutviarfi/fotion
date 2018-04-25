-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 01:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fotion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `nama`, `password`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `idmakanan` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `expire` varchar(50) NOT NULL,
  `halal` varchar(50) NOT NULL,
  `available` int(50) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `ingredients` varchar(200) DEFAULT NULL,
  `lokasi` varchar(200) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`idmakanan`, `nama`, `expire`, `halal`, `available`, `gambar`, `ingredients`, `lokasi`, `username`) VALUES
(2, 'buah', 'no', 'halal', 1, 'f00e1f58c06c043ceb57d27775e1f329.jpg', 'rujak', 'jakarta', NULL),
(3, 'gurame kipas', '2 days', 'halal', 3, '84dc52158278550b3c18969922661df5.jpg', 'ikan gurame, tepung tapioka, penyedap makanan, maizena', 'jakarta', 'serba sambal'),
(4, 'ayam bakar', '2 days', 'halal', 7, '0f52c96737731c95858e8897af7037ea.jpg', 'ayam, kecap, penyedap makanan', 'jakarta', 'pecelele'),
(5, 'nasi goreng', '1 days', 'halal', 5, '2cef981c49d8a3086d115dd8e65200cd.jpg', 'nasi, bumbu penyedap, sambal', 'tangerang', 'nasi goreng gila'),
(7, 'sup iga', '3 days', 'halal', 3, 'fd3e7202ab963668b62e4b806a32ff5f.jpg', 'iga sapi, bumbu penyedap, kaldu sup', 'bekasi', NULL),
(8, 'sapo tahu', '1 day', 'halal', 12, '4ae87322b02d975b85b522da34a3e2a1.jpg', 'sapo, bumbu penyedap, seafood', 'jakarta', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idpesan` int(5) NOT NULL,
  `idmakanan` int(15) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picker`
--

CREATE TABLE `picker` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kondisi` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `active` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picker`
--

INSERT INTO `picker` (`username`, `nama`, `alamat`, `kondisi`, `gambar`, `password`, `active`) VALUES
('andyndy', 'andi', 'cipadu', 'sehat kok', 'b50f7d2983b83e27c73661a13041a47a.jpg', 'admin', 0),
('habibi', 'iqra', 'bogor', 'lagi lapar', '39df4e580884b2bda0b2ce1695eed143.jpeg', 'admin', 0),
('lutviarfi', 'lutvi', 'jakarta', 'sejahtera', 'f2f2511ba7d5e4c7028214e89031fdb4.jpg', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resto`
--

CREATE TABLE `resto` (
  `username` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `point` int(5) DEFAULT NULL,
  `active` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resto`
--

INSERT INTO `resto` (`username`, `email`, `phone`, `password`, `point`, `active`) VALUES
('nasi goreng gila', 'nasgorgil@gmail.com', 'jakarta', '21232f297a57a5a743894a0e4a801fc3', 0, 0),
('pecelele', 'pecel@gmail.com', '0897654', '21232f297a57a5a743894a0e4a801fc3', 0, 0),
('serba sambal', 'ss123@gmail.com', '0897654', '21232f297a57a5a743894a0e4a801fc3', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`idmakanan`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idpesan`),
  ADD UNIQUE KEY `idmakanan` (`idmakanan`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `picker`
--
ALTER TABLE `picker`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `idmakanan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idpesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`username`) REFERENCES `resto` (`username`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `picker` (`username`),
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`idmakanan`) REFERENCES `food` (`idmakanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
