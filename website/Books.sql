-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2023 at 08:11 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Books`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbooks`
--

DROP TABLE IF EXISTS `addbooks`;
CREATE TABLE IF NOT EXISTS `addbooks` (
    `authorname` varchar(30) NOT NULL ,
  `title` varchar(30) NOT NULL,
  `serialno` int NOT NULL,
  
  PRIMARY KEY (`authorname`),
  UNIQUE KEY `serialno` (`serialno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbooks`
--

INSERT INTO `addbooks` VALUES ( `author name`, `title`, `serialno`,) 
( 'sid','to the sky', '93' ),
( 'tahira', 'the bull beneath ','67' ),
( 'love', 'time to open','78' );
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
