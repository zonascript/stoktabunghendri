-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2015 at 05:10 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stoktabungtmp`
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
  PRIMARY KEY (`no_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`no_id`, `no_seri`, `no_ketok`, `harga_dasar`, `harga_jual`, `status`) VALUES
(1, '131116372', 'SM001', 4000, 7000, 'Not Available'),
(3, '131116373', 'SM002', 4000, 7000, 'Not Available');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`no_cust`, `nama_cust`, `alamat`, `no_telp`) VALUES
(3, 'abi', 'bnp', '0123456'),
(4, 'asi', 'bnp', '12345'),
(5, 'ari', 'bnp', '45612');

-- --------------------------------------------------------

--
-- Table structure for table `one_click_setting`
--

CREATE TABLE IF NOT EXISTS `one_click_setting` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(100) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `one_click_setting`
--

INSERT INTO `one_click_setting` (`no_id`, `setting_name`, `value`) VALUES
(1, 'masa aktif tabung', '90');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `no_transaksi` int(200) NOT NULL AUTO_INCREMENT,
  `no_po` varchar(100) NOT NULL,
  `no_seri` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `nama_cust` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`no_transaksi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `no_po`, `no_seri`, `tgl_keluar`, `tgl_kembali`, `nama_cust`, `alamat`, `status`) VALUES
(1, 'FAK/2015/06/0001', '131116372', '2015-05-31', '2015-08-28', 'Budi ', 'Veteran', 'kembali'),
(2, 'FAK/2015/07/0001', '131116373', '2015-07-05', '2015-08-26', 'asi', 'bnp', 'kembali'),
(3, 'FAK/2015/07/0001', '131116374', '0000-00-00', '0000-00-00', 'asi', 'bnp', 'kembali'),
(4, 'FAK/2015/07/0002', '131116373', '2015-07-09', '2015-08-26', 'suep', 'bnp', 'kembali'),
(5, 'FAK/2015/08/0001', '131116372', '2015-08-11', '2015-08-28', 'Budi ', 'Veteran No.135', 'kembali'),
(6, 'FAK/2015/08/0001', '131116373', '2015-08-11', '2015-08-26', 'asi', 'bnp', 'kembali'),
(7, 'FAK/2015/08/0001', '131116373', '2015-08-11', '2015-08-26', 'ari', 'bnp', 'kembali'),
(8, 'FAK/2015/08/0001', '131116373', '2015-08-11', '2015-08-26', 'abi', 'bnp', 'kembali'),
(9, 'FAK/2015/08/0001', '131116372', '2015-08-11', '2015-08-28', 'abi', 'bnp', 'kembali'),
(10, 'FAK/2015/08/0001', '131116374', '2015-08-11', '0000-00-00', 'Budi ', 'Veteran No.135', 'kembali'),
(12, 'FAK/2015/08/0002', '131116373', '2015-05-24', '2015-08-26', 'abi', 'bnp', 'kembali'),
(13, 'FAK/2015/08/0003', '131116372', '2015-08-24', '2015-08-28', 'abi', 'bnp', 'kembali'),
(16, 'FAK/2015/08/0001', '131116373', '2015-06-26', NULL, 'abi', 'bnp', 'terjual'),
(17, 'FAK/2015/08/0001', '131116372', '2015-05-26', '2015-08-28', 'abi', 'bnp', 'kembali'),
(18, 'FAK/2015/08/0002', '131116372', '2015-08-28', NULL, 'asi', 'bnp', 'terjual');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `transaksi_refil`
--

INSERT INTO `transaksi_refil` (`no_transaksi`, `no_seri`, `tgl_keluar`, `tgl_kembali`, `status`) VALUES
(9, '131116372', '2015-08-26', '2015-08-26', 'kembali');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_permit`
--

INSERT INTO `user_permit` (`no_id`, `username`, `password`, `permission`) VALUES
(1, 'rully', 'slamdunk', 'admin'),
(2, 'otong', 'otong', 'karyawan'),
(6, 'a', 'b', 'owner');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
