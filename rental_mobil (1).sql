-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2024 at 05:26 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayar`
--

DROP TABLE IF EXISTS `tb_bayar`;
CREATE TABLE IF NOT EXISTS `tb_bayar` (
  `id_bayar` int NOT NULL AUTO_INCREMENT,
  `id_kembali` int NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_bayar` decimal(10,0) NOT NULL,
  `status` enum('lunas','belum lunas') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_bayar`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_bayar`
--

INSERT INTO `tb_bayar` (`id_bayar`, `id_kembali`, `tgl_bayar`, `total_bayar`, `status`) VALUES
(1, 1, '2024-10-23', 1400000, 'lunas'),
(2, 2, '2024-10-23', 900000, 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kembali`
--

DROP TABLE IF EXISTS `tb_kembali`;
CREATE TABLE IF NOT EXISTS `tb_kembali` (
  `id_kembali` int NOT NULL AUTO_INCREMENT,
  `id_transaksi` int NOT NULL,
  `tgl_kembali` date NOT NULL,
  `kondisi_mobil` text COLLATE utf8mb4_general_ci NOT NULL,
  `denda` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id_kembali`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kembali`
--

INSERT INTO `tb_kembali` (`id_kembali`, `id_transaksi`, `tgl_kembali`, `kondisi_mobil`, `denda`) VALUES
(1, 1, '2024-10-19', 'baret', 1300000),
(2, 2, '2024-11-17', 'good', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

DROP TABLE IF EXISTS `tb_member`;
CREATE TABLE IF NOT EXISTS `tb_member` (
  `nik` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(99) COLLATE utf8mb4_general_ci NOT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_general_ci NOT NULL,
  `telp` varchar(99) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(99) COLLATE utf8mb4_general_ci NOT NULL,
  `user` varchar(99) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(99) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483647 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`nik`, `nama`, `jk`, `telp`, `alamat`, `user`, `pass`) VALUES
(30303030, 'kim', 'L', '0839382', 'seoul', 'kimingyu', '1'),
(2147483647, 'Choi San', 'L', '08772542641', 'Seoul', 'sanchoice', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

DROP TABLE IF EXISTS `tb_mobil`;
CREATE TABLE IF NOT EXISTS `tb_mobil` (
  `nopol` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(90) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(90) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun` date NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `foto` varchar(99) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('tersedia','kosong') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`nopol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`nopol`, `brand`, `type`, `tahun`, `harga`, `foto`, `status`) VALUES
('AA 7654 TB', 'Pajero', 'Maestro 65P22U', '2024-11-11', 500000, 'pajero2.webp', 'tersedia'),
('AB 2918 AC', 'Nissan', 'qwakyy 10Az9', '2020-10-10', 200000, 'nissanQashqai.jpeg', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

DROP TABLE IF EXISTS `tb_transaksi`;
CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `nik` int NOT NULL,
  `nopol` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_booking` date NOT NULL,
  `tgl_ambil` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `supir` tinyint(1) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `downpayment` decimal(10,2) NOT NULL,
  `kekurangan` decimal(10,2) NOT NULL,
  `status` enum('booking','approve','ambil','kembali') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `nik`, `nopol`, `tgl_booking`, `tgl_ambil`, `tgl_kembali`, `supir`, `total`, `downpayment`, `kekurangan`, `status`) VALUES
(1, 30303030, 'AB 2918 AC', '2024-10-23', '2024-10-10', '2024-10-15', 0, 200000.00, 100000.00, 100000.00, 'kembali'),
(2, 2147483647, 'AA 7654 TB', '2024-10-23', '2024-11-11', '2024-11-16', 127, 700000.00, 400000.00, 300000.00, 'kembali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `user` varchar(99) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(99) COLLATE utf8mb4_general_ci NOT NULL,
  `lvl` enum('admin','petugas') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `user`, `pass`, `lvl`) VALUES
(1, 'chae', '1', 'petugas'),
(2, 'admin', '1', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
