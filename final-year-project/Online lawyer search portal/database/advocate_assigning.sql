-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2021 at 12:43 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advocate_assigning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `advogate_register`
--

CREATE TABLE `advogate_register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bar_council_regno` varchar(100) NOT NULL,
  `adv_type` varchar(50) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advogate_register`
--

INSERT INTO `advogate_register` (`id`, `name`, `bar_council_regno`, `adv_type`, `contact`, `email`, `address`, `username`, `password`, `rdate`) VALUES
(1, 'cherry', 'BCIRN1001', 'Criminal', '9876543210', 'mickey@gmail.com', 'trichy', 'cherry', '1234', '09-02-21'),
(2, 'mickey', 'BCIRN1002', 'Civil', '9876543210', 'mickey@gmail.com', 'trichy', 'mickey', '1234', '11-02-21'),
(3, 'yoga', 'BCIRN1001', 'Family', '9876543210', 'mickey@gmail.com', 'trichy', 'yoga', '1234', '15-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `bar_council_regno`
--

CREATE TABLE `bar_council_regno` (
  `id` int(11) NOT NULL,
  `regno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bar_council_regno`
--

INSERT INTO `bar_council_regno` (`id`, `regno`) VALUES
(1, 'BCIRN1001'),
(2, 'BCIRN1002'),
(3, 'BCIRN1003'),
(4, 'BCIRN1004'),
(5, 'BCIRN1005');

-- --------------------------------------------------------

--
-- Table structure for table `describe_problem`
--

CREATE TABLE `describe_problem` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `advogate_name` varchar(100) NOT NULL,
  `advogate_type` varchar(100) NOT NULL,
  `bar_council_regno` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `problem_description` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `appoint_date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `describe_problem`
--

INSERT INTO `describe_problem` (`id`, `username`, `advogate_name`, `advogate_type`, `bar_council_regno`, `contact`, `problem_description`, `note`, `appoint_date`, `status`) VALUES
(1, 'cherry', 'cherry1', 'Criminal', 'BCIRN1001', '9876543210', 'dddddd', 'ffff', '2021-02-24', '1'),
(2, 'arun', 'yoga', 'Family', 'BCIRN1001', '9876543210', 'mddfndfndfndfddf', 'jhjhjhhhdhdhdhdhhdhd', '2021-02-16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `address`, `contact`, `email`, `uname`, `pass`, `rdate`) VALUES
(1, 'cherry', 'trichy', '9876543210', 'yoga@gmail.com', 'cherry', '1234', '09-02-21'),
(2, 'arun', 'thillainagar', '9876543210', 'arun@gmail.com', 'arun', '1234', '15-02-21');
