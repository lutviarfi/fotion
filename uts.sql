# SQL-Front 5.1  (Build 4.16)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: uts
# ------------------------------------------------------
# Server version 5.5.5-10.1.30-MariaDB

#
# Source for table admin
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Dumping data for table admin
#

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'fadilahasana97@gmail.com','123456');
INSERT INTO `admin` VALUES (2,'fadilahasana97@gmail.com','123456');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table food
#

DROP TABLE IF EXISTS `food`;
CREATE TABLE `food` (
  `idfood` int(10) NOT NULL AUTO_INCREMENT,
  `namefood` varchar(200) NOT NULL,
  `halalorno` varchar(100) NOT NULL,
  `expiry` varchar(100) NOT NULL,
  `status` int(5) DEFAULT NULL,
  `ingredients` varchar(300) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idfood`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Dumping data for table food
#

LOCK TABLES `food` WRITE;
/*!40000 ALTER TABLE `food` DISABLE KEYS */;
INSERT INTO `food` VALUES (1,'nasi goreng','halal','12-12-2012',NULL,'nasi, cabe, lada, dll',NULL);
INSERT INTO `food` VALUES (2,'nasi goreng','halal','12-12-2012',NULL,'nasi, cabe, lada, dll',NULL);
INSERT INTO `food` VALUES (3,'nasi goreng','halal','12-12-2012',NULL,'nasi, cabe, lada, dll',NULL);
/*!40000 ALTER TABLE `food` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table foodpicker
#

DROP TABLE IF EXISTS `foodpicker`;
CREATE TABLE `foodpicker` (
  `id_foodpicker` int(250) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_foodpicker`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Dumping data for table foodpicker
#

LOCK TABLES `foodpicker` WRITE;
/*!40000 ALTER TABLE `foodpicker` DISABLE KEYS */;
INSERT INTO `foodpicker` VALUES (1,'fadilahasana97@gmail.com','fadilahasana','Tl.Jeruk','Keluarga Kecil','Gbr1.jpg','123456','Diterima');
INSERT INTO `foodpicker` VALUES (2,'fadila@gmail.com','Dari dara','Drikd','2','Gbr2.jpg','123456','Ditolak');
/*!40000 ALTER TABLE `foodpicker` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table makanan
#

DROP TABLE IF EXISTS `makanan`;
CREATE TABLE `makanan` (
  `id_makanan` int(250) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(50) NOT NULL,
  `id_restaurant` int(250) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `jml_makanan` int(250) NOT NULL,
  `expired` date NOT NULL,
  `halal` varchar(10) NOT NULL,
  PRIMARY KEY (`id_makanan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Dumping data for table makanan
#

LOCK TABLES `makanan` WRITE;
/*!40000 ALTER TABLE `makanan` DISABLE KEYS */;
INSERT INTO `makanan` VALUES (1,'ketoprak',1,'Gbr1.jpg',12,'2018-04-04','Halal');
INSERT INTO `makanan` VALUES (2,'pizza',1,'Gbr2.jpg',20,'2018-04-05','Haram');
/*!40000 ALTER TABLE `makanan` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table restauran
#

DROP TABLE IF EXISTS `restauran`;
CREATE TABLE `restauran` (
  `id_restaurant` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `point` int(250) NOT NULL,
  PRIMARY KEY (`id_restaurant`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Dumping data for table restauran
#

LOCK TABLES `restauran` WRITE;
/*!40000 ALTER TABLE `restauran` DISABLE KEYS */;
INSERT INTO `restauran` VALUES (1,'resto@gmail.com','resto1','123456','089623518755',0);
INSERT INTO `restauran` VALUES (2,'resti@gmail.com','resto2','123456','098765432567',0);
/*!40000 ALTER TABLE `restauran` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table restogistration
#

DROP TABLE IF EXISTS `restogistration`;
CREATE TABLE `restogistration` (
  `idresto` bigint(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `point` int(5) DEFAULT NULL,
  PRIMARY KEY (`idresto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Dumping data for table restogistration
#

LOCK TABLES `restogistration` WRITE;
/*!40000 ALTER TABLE `restogistration` DISABLE KEYS */;
INSERT INTO `restogistration` VALUES (3,'lutviarfi','lutvi04@gmail.com','0875674567','21232f297a57a5a743894a0e4a801fc3','0',NULL);
INSERT INTO `restogistration` VALUES (4,'lutviarfi','lutvi04@gmail.com','0875674567','21232f297a57a5a743894a0e4a801fc3','0',NULL);
INSERT INTO `restogistration` VALUES (5,'as','as@jas.sd','08898786767','21232f297a57a5a743894a0e4a801fc3','0',NULL);
/*!40000 ALTER TABLE `restogistration` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table transaksi
#

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_makanan` varchar(250) NOT NULL,
  `id_foodpicker` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL,
  `id_restoran` varchar(15) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Dumping data for table transaksi
#

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (1,'1','2','Pending','1');
INSERT INTO `transaksi` VALUES (2,'2','2','Approve','2');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for view q_transaksi
#

DROP VIEW IF EXISTS `q_transaksi`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `q_transaksi` AS select `foodpicker`.`id_foodpicker` AS `id_foodpicker`,`foodpicker`.`status` AS `status_foodpicker`,`makanan`.`id_makanan` AS `id_makanan`,`makanan`.`nama_makanan` AS `nama_makanan`,`makanan`.`jml_makanan` AS `jml_makanan`,`makanan`.`expired` AS `expired`,`makanan`.`halal` AS `halal`,`restauran`.`username` AS `username`,`transaksi`.`status` AS `status` from (((`transaksi` join `makanan` on((`transaksi`.`id_makanan` = `makanan`.`id_makanan`))) join `foodpicker` on((`transaksi`.`id_foodpicker` = `foodpicker`.`id_foodpicker`))) join `restauran` on((`transaksi`.`id_restoran` = `restauran`.`id_restaurant`)));

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
