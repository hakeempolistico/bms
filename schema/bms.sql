-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 04:43 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `invoice_number` varchar(20) NOT NULL,
  `company` varchar(500) NOT NULL,
  `service` enum('Water','Electricity','Internet','House Rent') NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `date_paid` date NOT NULL,
  `amount_paid` decimal(11,2) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`invoice_number`, `company`, `service`, `period_start`, `period_end`, `amount`, `date_paid`, `amount_paid`, `date_added`) VALUES
('1', 'Meralco', 'Electricity', '2018-04-01', '2018-05-02', '5000.00', '2018-04-27', '5000.00', '2018-04-28 16:39:55'),
('2', 'Maynilad', 'Water', '2018-04-11', '2018-05-11', '2000.00', '0000-00-00', '0.00', '2018-04-27 20:18:53'),
('3', 'Meralco', 'Electricity', '2018-05-01', '2018-06-01', '5000.00', '0000-00-00', '0.00', '2018-04-27 20:22:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`invoice_number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
