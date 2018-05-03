-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 09:14 PM
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
(41, 'nasi goreng', '06-05-2018', 'halal', 4, '06bcb50404c1fc1dadddd9572a87e49b.jpg', 'nasi, bumbu penyedap, sambal', 'jakarta', 'periuk'),
(42, 'ayam bakar', '12-05-2018', 'halal', 3, '8dca1a5c330eb409b28c085d3f133c5e.jpg', 'ayam, kecap, penyedap makanan', 'tangerang', 'periuk'),
(43, 'sup iga', '12-05-2018', 'halal', 3, 'ea86cbfbcc681d9ad154d551c07ea6c5.jpg', 'iga sapi, bumbu penyedap, kaldu sup', 'bekasi', 'periuk'),
(44, 'sapo tahu', '12-05-2018', 'halal', 9, 'af4f5784733a21abc463afd97e199070.jpg', 'sapo, bumbu penyedap, seafood', 'bandung', 'mcd'),
(45, 'buah apel', 'no', 'halal', 3, '898b0213d75586a4c199357fdcc5eb23.jpg', 'apel', 'jakarta', 'mcd');

--
-- Triggers `food`
--
DELIMITER $$
CREATE TRIGGER `update_point` AFTER INSERT ON `food` FOR EACH ROW BEGIN
update resto set point = point + 1 where username = new.username;
END
$$
DELIMITER ;

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
(40, 42, 'lutviarfi', 'APPROVE'),
(41, 43, 'lutviarfi', 'Pending'),
(42, 45, 'habibi', 'Pending'),
(43, 41, 'andyndy', 'Pending');

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
('andyndy', 'andi', 'cipadu', 'sehat', '98f18d77d5c9d900f8ac6f63aaa4760a.jpg', '21232f297a57a5a743894a0e4a801fc3', 'Not Yet'),
('habibi', 'iqra', 'bogor', 'very hungry', '109170645096bc2223827b47724b26de.jpeg', '21232f297a57a5a743894a0e4a801fc3', 'ACTIVE'),
('lutviarfi', 'lutvi', 'jakarta\r\n', 'biasa aja', '45d9d99f3b0e224523b403cd9b92c9d7.jpg', '21232f297a57a5a743894a0e4a801fc3', 'ACTIVE');

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
('mcd', 'lutvi04@gmail.com', '0987654', '21232f297a57a5a743894a0e4a801fc3', 2, 'ACTIVE'),
('periuk', 'lutvi04@gmail.com', '090876543', '21232f297a57a5a743894a0e4a801fc3', 3, 'PENDING');

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
  MODIFY `idmakanan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idpesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
