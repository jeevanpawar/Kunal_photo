-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2013 at 05:42 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE IF NOT EXISTS `gallery_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text NOT NULL,
  `caption` varchar(24) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`category_id`, `category_name`, `caption`) VALUES
(4, 'Functions', 'FUNCTIONS'),
(5, 'Inductrial', 'INDUSTRIAL'),
(6, 'Commercial', 'COMMERCIAL'),
(7, 'Interior', 'INTERIOR'),
(8, 'Sports', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_photos`
--

CREATE TABLE IF NOT EXISTS `gallery_photos` (
  `photo_id` int(20) NOT NULL AUTO_INCREMENT,
  `photo_filename` varchar(25) NOT NULL,
  `photo_caption` text NOT NULL,
  `photo_category` bigint(20) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `gallery_photos`
--

INSERT INTO `gallery_photos` (`photo_id`, `photo_filename`, `photo_caption`, `photo_category`) VALUES
(51, '51.jpg', '', 4),
(52, '52.jpg', '', 4),
(53, '53.jpg', '', 4),
(54, '54.jpg', '', 4),
(55, '55.jpg', '', 4),
(56, '56.jpg', '', 4),
(57, '57.jpg', '', 4),
(58, '58.jpg', '', 4),
(59, '59.jpg', '', 5),
(60, '60.jpg', '', 4),
(61, '61.jpg', '', 4),
(62, '62.jpg', '', 4),
(63, '63.jpg', '', 4),
(64, '64.jpg', '', 4),
(65, '65.jpg', '', 4);
