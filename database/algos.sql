-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2021 at 03:10 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `algos`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_product`
--

CREATE TABLE IF NOT EXISTS `m_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_selling_price` int(11) NOT NULL,
  `product_buying_price` int(11) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_created` datetime NOT NULL,
  `product_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `m_product`
--

INSERT INTO `m_product` (`product_id`, `product_code`, `product_name`, `product_selling_price`, `product_buying_price`, `product_stock`, `product_category`, `product_description`, `product_created`, `product_modified`) VALUES
(1, 'ACR-HP-01', 'Acer Iconia Pro', 50000, 30000, 3, 'Handphone', 'Sebuah hape canggih pertama besutan Acer yang merupakan raksasa dari produsen laptop dan sejenisnya...', '2021-11-23 09:30:09', '0000-00-00 00:00:00'),
(2, 'TRX-RC-01', 'Traxxas RC Crawler Titan 4WD', 300000, 280000, 5, 'Remote Control', 'Sebuah RC besutan Traxxas yang sudah tidak perlu diragukan lagi kualitasnya...', '2021-11-18 09:31:50', '0000-00-00 00:00:00'),
(3, 'MSI-LP-01', 'MSI Legion Power Core XX9', 13000000, 9900000, 99, 'Laptop', 'Sebuah laptop gaming canggih besutan MSI yang sangat gahar...', '2021-11-10 09:34:52', '0000-00-00 00:00:00'),
(4, 'ADS-SH-01', 'Adidas Predator 2099', 1750000, 1500000, 99, 'Shoes', 'Sebuah sepatu mahal besutan Adidas yang bukan merk abal-abal lagi...', '2021-11-03 09:36:14', '0000-00-00 00:00:00'),
(5, 'CSM-KP-01', 'Cosmos Kipas Angin Wadesta', 600000, 500000, 99, 'Kipas Angin', 'Sebuah kipas angin legendaris dari Cosmos yang bisa nempel di dinding dan di meja...', '2021-11-07 09:38:58', '0000-00-00 00:00:00'),
(6, 'ONE-HP-01', 'One Plus One Is Two', 1200200, 1000100, 99, 'Handphone', 'Sebuah hape canggih besutan merk tidak terkenal One Plus yang berasal dari negaranya Shakh Rukh Khan......', '2021-11-01 09:41:01', '0000-00-00 00:00:00'),
(7, 'AUL-RC-01', 'Auldey Race-Tin 60FX', 500000, 499000, 88, 'Remote Control', 'Sebuah RC dengan ukuran mini berskala 1/60 buatan Auldey...', '2021-11-06 09:42:10', '0000-00-00 00:00:00'),
(8, 'XIA-LP-01', 'Xiaomi Mi-Book Air i7', 18000000, 15000000, 13, 'Laptop', 'Sebuah laptop tiruan Apple Macbook Air yang dibuat oleh Apple dong pastinya...', '2021-11-15 09:44:21', '0000-00-00 00:00:00'),
(9, 'NKE-SH-01', 'Nike Supernova Galaxy Edition', 799000, 733000, 18, 'Shoes', 'Sebuah sepatu edisi langka keluaran Nike dengan mengusung tema ledakan bintang di galaksi...', '2021-11-09 09:46:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `r_trx`
--

CREATE TABLE IF NOT EXISTS `r_trx` (
  `trx_id` int(11) NOT NULL AUTO_INCREMENT,
  `trx_datetime` datetime NOT NULL,
  `trx_user` varchar(100) NOT NULL,
  `trx_type` varchar(10) NOT NULL,
  `trx_address` varchar(250) NOT NULL,
  `trx_created` datetime NOT NULL,
  `trx_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`trx_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `r_trx`
--

INSERT INTO `r_trx` (`trx_id`, `trx_datetime`, `trx_user`, `trx_type`, `trx_address`, `trx_created`, `trx_modified`) VALUES
(1, '2021-11-20 12:23:15', 'Joko Budi', 'selling', 'Jl. Tanah Jawa No. 95', '2021-11-20 12:22:50', '0000-00-00 00:00:00'),
(2, '2021-11-10 12:25:05', 'Jaya Raya', 'selling', 'Jl. Bandung Bondowoso No. 39', '2021-11-10 12:24:07', '0000-00-00 00:00:00'),
(3, '2021-11-13 12:26:12', 'Bule Londo', 'selling', 'Jl. Veer Hoven No. 64', '2021-11-13 12:26:09', '0000-00-00 00:00:00'),
(4, '2021-11-15 12:27:30', 'Doni Diablo', 'selling', 'Jl. Tengkorak Emas No. 96', '2021-11-15 12:27:23', '0000-00-00 00:00:00'),
(5, '2021-11-18 12:28:50', 'Monkey D. Luffy', 'selling', 'Jl. Cerita Tawa No. 33', '2021-11-18 12:28:48', '0000-00-00 00:00:00'),
(6, '2021-11-15 12:30:16', 'Roronoa Zoro', 'selling', 'Jl. Pedang Tiga No. 1', '2021-11-15 12:29:58', '0000-00-00 00:00:00'),
(7, '2021-11-20 12:31:47', 'Vinsmoke Sanji', 'selling', 'Jl. Semua Biru No. 5', '2021-11-20 12:31:33', '0000-00-00 00:00:00'),
(8, '2021-11-05 12:33:01', 'Naruto Uzumaki', 'selling', 'Jl. Ninja Kita No. 10', '2021-11-05 12:32:52', '0000-00-00 00:00:00'),
(9, '2021-11-05 12:33:24', 'Sasuke Uchiha', 'selling', 'Jl. Sesat Lagi No. 9', '2021-11-05 12:33:21', '0000-00-00 00:00:00'),
(10, '2021-11-20 12:34:51', 'Yenny Arianto', 'selling', 'Jl. Aja Dulu No. 76', '2021-11-20 12:34:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `r_trx_dtl`
--

CREATE TABLE IF NOT EXISTS `r_trx_dtl` (
  `trx_dtl_id` int(11) NOT NULL AUTO_INCREMENT,
  `trx_dtl_trx_id` int(11) NOT NULL,
  `trx_dtl_product_code` varchar(10) NOT NULL,
  `trx_dtl_quantity` int(11) NOT NULL,
  `trx_dtl_product_price` int(11) NOT NULL,
  `trx_dtl_total_price` int(11) NOT NULL,
  `trx_dtl_created` datetime NOT NULL,
  `trx_dtl_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`trx_dtl_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `r_trx_dtl`
--

INSERT INTO `r_trx_dtl` (`trx_dtl_id`, `trx_dtl_trx_id`, `trx_dtl_product_code`, `trx_dtl_quantity`, `trx_dtl_product_price`, `trx_dtl_total_price`, `trx_dtl_created`, `trx_dtl_modified`) VALUES
(1, 8, 'ONE-HP-01', 5, 1200200, 6001000, '2021-11-05 12:40:32', '0000-00-00 00:00:00'),
(2, 9, 'ADS-SH-01', 3, 1750000, 5250000, '2021-11-05 12:42:07', '0000-00-00 00:00:00'),
(3, 2, 'MSI-LP-01', 1, 13000000, 13000000, '2021-11-10 12:43:37', '0000-00-00 00:00:00'),
(4, 3, 'CSM-KP-01', 3, 600000, 1800000, '2021-11-13 12:45:57', '0000-00-00 00:00:00'),
(5, 4, 'AUL-RC-01', 1, 500000, 500000, '2021-11-15 12:46:57', '0000-00-00 00:00:00'),
(6, 6, 'NKE-SH-01', 1, 799000, 799000, '2021-11-15 12:48:39', '0000-00-00 00:00:00'),
(7, 5, 'AUL-RC-01', 1, 500000, 500000, '2021-11-18 12:49:17', '0000-00-00 00:00:00'),
(8, 1, 'TRX-RC-01', 3, 300000, 900000, '2021-11-20 12:50:18', '0000-00-00 00:00:00'),
(9, 7, 'NKE-SH-01', 1, 799000, 799000, '2021-11-20 12:51:10', '0000-00-00 00:00:00'),
(10, 10, 'XIA-LP-01', 1, 18000000, 18000000, '2021-11-20 12:51:53', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
