-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2015 at 09:18 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qlbh`
--
CREATE DATABASE qlbh CHARSET utf8 COLLATE utf8_unicode_ci; 
USE qlbh;
-- --------------------------------------------------------

--
-- Table structure for table `cthd`
--

CREATE TABLE IF NOT EXISTS `cthd` (
  `SOHD` int(11) NOT NULL DEFAULT '0',
  `MASP` char(4) NOT NULL DEFAULT '',
  `SL` int(11) DEFAULT NULL,
  PRIMARY KEY (`SOHD`,`MASP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cthd`
--

INSERT INTO `cthd` (`SOHD`, `MASP`, `SL`) VALUES
(1, 'BB01', 1),
(1, 'BB02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `SOHD` int(11) NOT NULL,
  `NGHD` date DEFAULT NULL,
  `TRIGIA` int(11) DEFAULT NULL,
  PRIMARY KEY (`SOHD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`SOHD`, `NGHD`, `TRIGIA`) VALUES
(1, NULL, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `MASP` char(4) NOT NULL,
  `TENSP` varchar(40) DEFAULT NULL,
  `DVT` varchar(20) DEFAULT NULL,
  `NUOCSX` varchar(20) DEFAULT NULL,
  `GIA` int(11) DEFAULT NULL,
  `CHITIET` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HINHANH` varchar(40) NOT NULL,
  PRIMARY KEY (`MASP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `TENSP`, `DVT`, `NUOCSX`, `GIA`, `CHITIET`, `HINHANH`) VALUES
('BB01', 'View Sonic LCD', 'cai ', 'Viet Nam', 5000, '19" View Sonic Black LCD, with 10 months', 'images/lcd.jpg'),
('BB02', 'IBM CDROM Drive', 'Cai ', 'Nhat', 7000, 'IBM CDROM Drive', 'images/cdrom-drive.jpg'),
('BB03', 'Laptop Charger', 'Cai ', 'Thai Lan', 100000, 'Dell Laptop Charger with 6 months warran', 'images/charger.jpg'),
('BC01', 'Seagate Hard Drive', 'Cai', 'Singapore', 3000, '80 GB Seagate Hard Drive in 10 months wa', 'images/hard-drive.jpg'),
('BC02', 'Atech Mouse', 'Cai ', 'Singapore', 5000, 'Black colored laser mouse. No warranty', 'images/mouse.jpg'),
('BC03', 'Nokia 5800', 'Chiec ', 'Viet Nam', 3500, 'Nokia 5800 XpressMusic is a mobile devic', 'images/mobile.jpg');
