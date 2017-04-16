-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 09:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usertest`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `date` date NOT NULL,
  `activity_type` varchar(20) NOT NULL,
  `outcome` varchar(20) NOT NULL,
  `sales_person_name` varchar(20) NOT NULL,
  `customer_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_name`, `email`, `contact_number`) VALUES
('', '', 0),
('Billy', 'Colombo', 10300),
('sasa', 'sasa', 12230);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `company_name` varchar(20) NOT NULL,
  `address` varchar(202) NOT NULL,
  `brn` varchar(20) NOT NULL,
  `website` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`company_name`, `address`, `brn`, `website`) VALUES
('', '', '', ''),
('asd', 'asd', '234', 'https://www.w3school');

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact`
--

CREATE TABLE `customer_contact` (
  `customer_name` varchar(20) NOT NULL,
  `contact_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`sales_person_name`,`customer_name`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`company_name`);

--
-- Indexes for table `customer_contact`
--
ALTER TABLE `customer_contact`
  ADD PRIMARY KEY (`customer_name`,`contact_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
