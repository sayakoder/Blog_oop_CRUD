-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for mini_project
CREATE DATABASE IF NOT EXISTS `mini_project` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mini_project`;


-- Dumping structure for table mini_project.matpel
CREATE TABLE IF NOT EXISTS `matpel` (
  `id_matpel` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pelajaran` varchar(50) NOT NULL,
  PRIMARY KEY (`id_matpel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table mini_project.matpel: ~3 rows (approximately)
/*!40000 ALTER TABLE `matpel` DISABLE KEYS */;
REPLACE INTO `matpel` (`id_matpel`, `nama_pelajaran`) VALUES
	(1, 'matematika'),
	(2, 'bahasa inggris'),
	(3, 'bahasa indonesia');
/*!40000 ALTER TABLE `matpel` ENABLE KEYS */;


-- Dumping structure for table mini_project.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(10) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) DEFAULT NULL,
  `id_matpel` int(10) DEFAULT NULL,
  `nilai` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table mini_project.nilai: ~9 rows (approximately)
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
REPLACE INTO `nilai` (`id_nilai`, `id_siswa`, `id_matpel`, `nilai`) VALUES
	(1, 1, 1, '99'),
	(2, 2, 2, '80'),
	(3, 3, 3, '90'),
	(4, 4, 2, '90'),
	(5, 5, 2, '90'),
	(9, 7, 1, '90'),
	(11, 9, 1, '90'),
	(16, 16, 3, '100'),
	(17, 17, 2, '200');
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;


-- Dumping structure for table mini_project.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT '0',
  `alamat` varchar(255) DEFAULT '0',
  `kelamin` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table mini_project.siswa: ~9 rows (approximately)
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
REPLACE INTO `siswa` (`id_siswa`, `nama`, `alamat`, `kelamin`) VALUES
	(1, 'khairul', 'tulungagung', 'laki-laki'),
	(2, 'elisa', 'malang', 'perempuan'),
	(3, 'wawan', 'ta', 'laki-laki'),
	(4, 'paijo', 'malang', 'laki-laki'),
	(5, 'paidi', 'ta', 'laki-laki'),
	(7, 'midi', 'malang', 'laki-laki'),
	(9, 'percobaan_2', 'tulungagung', 'laki-laki'),
	(16, 'alan', 'nganjuk', 'laki-laki'),
	(17, 'malik', 'semarangg', 'laki-laki');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;


-- Dumping structure for table mini_project.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table mini_project.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `username`, `password`) VALUES
	(7, 'admin', 'admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
