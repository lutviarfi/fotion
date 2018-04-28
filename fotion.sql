-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 12:07 AM
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
(10, 'nasi goreng', '1 day', 'halal', 10, '4042c3422b34c556bb342f35f101b34a.jpg', 'nasi, bumbu penyedap, sambal', 'jakarta', 'mcd'),
(11, 'sup iga', '2 days', 'halal', 2, 'a4b1438bb189c1f20e68b1b0c79aed9d.jpg', 'iga sapi, bumbu penyedap, kaldu sup', 'bandung', 'mcd'),
(12, 'gurame kipas', '1 day', 'halal', 8, '3101e9841cdcd71c31f5b122c58720d4.jpg', 'ikan gurame, tepung tapioka, penyedap makanan, maizena', 'bekasi', 'mcd'),
(13, 'sapo tahu', '2 days', 'halal', 1, 'bac1d81e96a49aa6df43c306d1be984e.jpg', 'sapo, bumbu penyedap, seafood', 'tangerang', 'mcd'),
(14, 'nasi goreng', '12-12-12', 'halal', 3, '6c9bf454beddb22d2e81210fcaff7b42.jpg', 'nasi, bumbu penyedap, sambal', 'jakarta', 'mcd');

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
(6, 10, 'gumilar', 'APPROVE'),
(11, 11, 'gumilar', 'Pending'),
(12, 10, 'gumilar', 'Pending'),
(13, 11, 'lutviarfi', 'APPROVE');

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
('gumilar', 'gugum', 'parung', 'baik', '64ac17d359e05d8d44e656d8c0c802df.jpg', '21232f297a57a5a743894a0e4a801fc3', 'ACTIVE'),
('lutviarfi', 'lutvi', 'jakarta', 'sehat', '099130643677fc20a9a4c539b82092e0.jpg', '21232f297a57a5a743894a0e4a801fc3', 'Not Yet');

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
('mcd', 'lutvi04@gmail.com', '0987654', '21232f297a57a5a743894a0e4a801fc3', 0, 'ACTIVE');

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
  MODIFY `idmakanan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idpesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
