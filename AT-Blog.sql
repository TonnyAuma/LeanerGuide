-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2016 at 02:17 PM
-- Server version: 5.0.19
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `AT-Blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL auto_increment,
  `Title` text NOT NULL,
  `Category` text NOT NULL,
  `Main` text NOT NULL,
  `UploadedBy` varchar(100) NOT NULL,
  `DateUploaded` varchar(50) NOT NULL default '01-March-2016, Tuesday',
  `TimeUploaded` varchar(20) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `Title`, `Category`, `Main`, `UploadedBy`, `DateUploaded`, `TimeUploaded`, `image`) VALUES
(1, 'services', 'Networking', '\r\nSince the identification of the classes is founded on the functions and activities of the Ministry, the departments may not necessarily produce records in all the classes. For example the Slum Upgrading Department does not have records in class 9.\r\n\r\nThe coding system is a prefix combining alphabets and numerals to make the reference number.  The code begins by identifying the Ministry and Department which are represented by the alphabets.  They are followed by numerals that represent the class and the item. For example, MH/SUD/1/1 stands for the first file in the class of Administration in the department of   Slum Upgrading Department as follows:-\r\n', 'Tonny Auma', '2016/03/03', '03:21:27pm', 'uploads/services.docx'),
(2, 'hffh', 'Science', 'fghfghf', 'Tonny Auma', '2016/03/03', '04:11:40pm', 'uploads/hffh.docx'),
(3, 'gdfgd', 'Networking', 'dgdfgd', 'Tonny Auma', '2016/03/03', '04:11:57pm', 'uploads/gdfgd.png'),
(4, 'How to select cells and ranges efficiently using VBA', 'Information Technology', 'How to select cells and ranges efficiently using VBA', 'Tonny Auma', '2016/03/03', '04:12:31pm', 'uploads/How to select cells and ranges efficiently using VBA.png'),
(5, 'How to select cells and ranges efficiently using VBA', 'Information Technology', 'When you work in Excel, you select cells and ranges a lot. Often, you can automate some of your work using simple macros. The macro recorder can get you started, but the recorder uses explicit references that can be difficult to maintain and enhance.', 'Tonny Auma', '2016/03/03', '04:13:47pm', 'uploads/How to select cells and ranges efficiently using VBA.jpg'),
(6, 'mobile programming', 'Computer Programming', 'Top selling moble apps', 'Tonny Auma', '2016/03/03', '04:42:28pm', 'uploads/mobile programming.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `ArticleID` int(11) NOT NULL,
  `Comment` text NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Aprroved` int(11) NOT NULL default '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(25) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `LoginAs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`, `FullName`, `LoginAs`) VALUES
('tauma@iat.ac.ke', '@@kauma', 'Tonny Auma', 'Administrator');
