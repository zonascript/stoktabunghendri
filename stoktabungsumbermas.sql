-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2015 at 03:11 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stoktabungsumbermas`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `no_id` int(225) NOT NULL AUTO_INCREMENT,
  `no_seri` varchar(50) NOT NULL,
  `no_ketok` varchar(50) NOT NULL,
  `harga_dasar` int(225) NOT NULL,
  `harga_jual` int(225) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `barang`
--


-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `no_cust` int(20) NOT NULL AUTO_INCREMENT,
  `nama_cust` varchar(100) NOT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`no_cust`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `customer`
--


-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kategori`
--


-- --------------------------------------------------------

--
-- Table structure for table `one_click_setting`
--

CREATE TABLE IF NOT EXISTS `one_click_setting` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(100) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `one_click_setting`
--


-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `no_transaksi` int(200) NOT NULL AUTO_INCREMENT,
  `no_po` varchar(100) NOT NULL,
  `no_seri` varchar(50) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `harga_jual` int(225) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `nama_cust` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`no_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `transaksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `transaksi_refil`
--

CREATE TABLE IF NOT EXISTS `transaksi_refil` (
  `no_transaksi` int(200) NOT NULL AUTO_INCREMENT,
  `no_seri` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`no_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `transaksi_refil`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_permit`
--

CREATE TABLE IF NOT EXISTS `user_permit` (
  `no_id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `permission` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_permit`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
