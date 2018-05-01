-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 09:26 PM
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
(28, 'nasi goreng', '2 days', 'halal', 2, '59b7210333d9e6d08f6b4b8cd30a8d5d.jpg', 'nasi, bumbu penyedap, sambal', 'tangerang', 'ss'),
(29, 'sup iga', '3 days', 'halal', 5, '2ef9add6a33c766f1ec45d13a0dbb631.jpg', 'iga sapi, bumbu penyedap, kaldu sup', 'priuk', 'ss'),
(30, 'buah apel', 'no', 'halal', 2, '02fb6ff2ddf9aa0c5761fa7353488e05.jpg', 'rujak', 'tangerang', 'ss'),
(31, 'nasi pecel', '2 days', 'halal', 20, 'e31e10275a56415dab2b6bc22d23ee73.jpg', 'nasi, bumbu penyedap, sambal', 'bekasi', 'mcd'),
(32, 'gurame kipas', '1 day', 'halal', 7, '0313ac8872d36228c4aced713a27fc7c.jpg', 'ikan gurame, tepung tapioka, penyedap makanan, maizena', 'bandung', 'mcd'),
(33, 'nasi uduk', '1 day', 'halal', 4, '631761e2d4c41a0fbfda0b81cb45e633.jpg', 'nasi, bumbu penyedap, sambal', 'priuk', 'mcd');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idpesan` int(5) NOT NULL,
  `idmakanan` int(15) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idpesan`, `idmakanan`, `username`, `status`) VALUES
(33, 29, 'lutviarfi', 'APPROVE'),
(34, 30, 'lutviarfi', 'APPROVE'),
(35, 31, 'lutviarfi', 'APPROVE'),
(36, 30, 'lutviarfi', 'Pending'),
(37, 29, 'andyndy', 'Pending');

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
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picker`
--

INSERT INTO `picker` (`username`, `nama`, `alamat`, `kondisi`, `gambar`, `password`, `active`) VALUES
('aldis', 'aldis', 'pamulang', 'biasa', '40ce05c2e5cd61ef9c0116561c65e5d0.jpg', '21232f297a57a5a743894a0e4a801fc3', 'Not Yet'),
('andyndy', 'andi', 'cipadu\r\n', 'biasa', '70a45feac2be84bebb6f62fe11f77b1d.jpg', '21232f297a57a5a743894a0e4a801fc3', 'Not Yet'),
('lutviarfi', 'lutvi', 'jakarta\r\n', 'biasa aja', '45d9d99f3b0e224523b403cd9b92c9d7.jpg', '21232f297a57a5a743894a0e4a801fc3', 'Not Yet');

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
  `active` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resto`
--

INSERT INTO `resto` (`username`, `email`, `phone`, `password`, `point`, `active`) VALUES
('mcd', 'lutvi04@gmail.com', '0987654', '21232f297a57a5a743894a0e4a801fc3', 0, 'ACTIVE'),
('ss', 'lutvi04@gmail.com', '0897654', '21232f297a57a5a743894a0e4a801fc3', 0, 'PENDING');

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
  ADD KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idpesan`),
  ADD KEY `idmakanan` (`idmakanan`) USING BTREE,
  ADD KEY `username` (`username`) USING BTREE;

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
  MODIFY `idmakanan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idpesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
