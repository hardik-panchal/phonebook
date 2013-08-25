-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2013 at 03:17 PM
-- Server version: 5.1.66
-- PHP Version: 5.3.3-7+squeeze16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='List of admin users' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `user_name`, `password`, `create_at`, `modified_at`) VALUES
(1, 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-08-25 00:00:00', '2013-08-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `phonebook`
--

CREATE TABLE IF NOT EXISTS `phonebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `notes` text NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='base table for phonebook' AUTO_INCREMENT=6 ;

--
-- Dumping data for table `phonebook`
--

INSERT INTO `phonebook` (`id`, `name`, `phone`, `notes`, `created_at`, `modified_at`) VALUES
(2, 'John Right', '(102) 983-0128', 'Sr Developer', '2013-08-25 15:09:59', '2013-08-25 15:09:59'),
(3, 'Tom Harrison', '(284) 080-9208', 'Project Manager', '2013-08-25 15:10:13', '2013-08-25 15:10:13'),
(4, 'David Michael', '(230) 428-1842', 'Chief Executive Officer', '2013-08-25 15:10:39', '2013-08-25 15:11:20');
