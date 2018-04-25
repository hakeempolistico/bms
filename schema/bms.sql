-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 10:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `invoice_number` bigint(20) NOT NULL,
  `company` varchar(500) NOT NULL,
  `service` enum('Water','Electricity','Internet','House Rent') NOT NULL,
  `month_due` varchar(50) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `date_paid` date NOT NULL,
  `amount_paid` decimal(11,2) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`invoice_number`, `company`, `service`, `month_due`, `amount`, `date_paid`, `amount_paid`, `date_added`) VALUES
(1, 'Meralco', 'Electricity', '04-2018', '5000.00', '0000-00-00', '5000.00', '0000-00-00 00:00:00'),
(2, 'Meralco', 'Electricity', '04-2018', '5200.00', '0000-00-00', '5200.00', '0000-00-00 00:00:00'),
(3, 'Meralco', 'Electricity', '04-2018', '5200.00', '0000-00-00', '5200.00', '2018-04-25 01:34:50'),
(4, 'Meralco', 'Electricity', '04-2018', '1000.00', '2018-04-14', '1000.00', '2018-04-25 01:48:03'),
(5, 'Meralco', 'Electricity', '04-2018', '1000.00', '2018-04-21', '1000.00', '2018-04-25 01:49:39'),
(6, 'Meralco', 'Electricity', '04-2018', '1000.00', '2018-04-19', '1000.00', '2018-04-25 01:50:11'),
(7, 'Meralco', 'Electricity', '04-2018', '5000.00', '2018-04-28', '5000.00', '2018-04-25 02:12:06'),
(8, 'Meralco', 'Water', '04-2018', '1212.00', '2018-04-27', '1212.00', '2018-04-25 02:27:11'),
(9, 'Meralco', 'Electricity', '04-2018', '5000.00', '0000-00-00', '0.00', '2018-04-25 02:42:51'),
(12, 'Meralco', 'Electricity', '04-2018', '5000.00', '2018-04-24', '5000.00', '2018-04-25 01:38:05'),
(12312312, 'Meralco', 'Electricity', '04-2018', '5000.00', '0000-00-00', '5000.00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`invoice_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
