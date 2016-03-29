-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2016 at 09:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'db_drinky'
--

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_catd'
--

CREATE TABLE IF NOT EXISTS tbl_catd (
  catD_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  catD_name varchar(50) NOT NULL,
  PRIMARY KEY (catD_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_catd'
--

INSERT INTO tbl_catd (catD_id, catD_name) VALUES
(1, 'Wine'),
(2, 'Spirits'),
(3, 'Beer'),
(4, 'Cider');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_drink'
--

CREATE TABLE IF NOT EXISTS tbl_drink (
  drink_id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  drink_title varchar(100) NOT NULL,
  drink_amount varchar(50) NOT NULL,
  drink_case varchar(50) NOT NULL,
  drink_price varchar(100) NOT NULL,
  drink_img varchar(100) NOT NULL,
  drink_type varchar(50) NOT NULL,
  drink_info text NOT NULL,
  drink_comp varchar(100) NOT NULL,
  PRIMARY KEY (drink_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_drink'
--

INSERT INTO tbl_drink (drink_id, drink_title, drink_amount, drink_case, drink_price, drink_img, drink_type, drink_info, drink_comp) VALUES
(3, 'Highlander Brew Co. Lion Grass', '650 ml', '12 Bottles', '53.10', 'wine_bottle.jpg', '3', 'This is the infomration about the beer', 'Highlander Brew Co. Ontario');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_l_dc'
--

CREATE TABLE IF NOT EXISTS tbl_l_dc (
  cd_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  drink_id varchar(50) NOT NULL,
  catD_id varchar(50) NOT NULL,
  PRIMARY KEY (cd_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_l_dc'
--

INSERT INTO tbl_l_dc (cd_id, drink_id, catD_id) VALUES
(1, '1', '2'),
(2, '2', '4'),
(3, '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_user'
--

CREATE TABLE IF NOT EXISTS tbl_user (
  user_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  user_name varchar(50) NOT NULL,
  user_pass varchar(50) NOT NULL,
  user_email varchar(100) NOT NULL,
  PRIMARY KEY (user_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_user'
--

INSERT INTO tbl_user (user_id, user_name, user_pass, user_email) VALUES
(1, 'robij9528', 'jaker', 'jakerobinson9528@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
