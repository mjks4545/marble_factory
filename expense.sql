-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2016 at 04:22 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marble_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `expense_id` int(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `paid_to` varchar(500) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL,
  `date_updated` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`expense_id`, `reason`, `paid_to`, `amount`, `date_added`, `date_updated`, `added_by`) VALUES
(8, 'asa', 'sdas11', '100', '2016-04-08', '2016-04-15', ''),
(9, 'asa', 'sdas11', '100', '2016-04-08', '2016-04-15', ''),
(10, 'asa', 'sdas11', '100', '2016-04-08', '2016-04-15', ''),
(11, 'asa', 'sdas11', '100', '2016-04-08', '2016-04-15', ''),
(12, 'asa', 'sdas11', '100', '2016-04-08', '2016-04-15', ''),
(13, 'asa', 'sdas11', '100', '2016-04-08', '2016-04-15', ''),
(14, 'asa', 'sdas11', '100', '2016-04-08', '2016-04-15', ''),
(15, 'asa', 'sdas11', '100', '2016-04-08', '2016-04-15', ''),
(16, 'asa', 'sdas11', '100', '2016-04-08', '2016-04-15', ''),
(17, 'asa', 'sdas11', '100', '2016-04-08', '2016-04-15', ''),
(20, 'asa', 'sdas', '100', '2016-04-08', '2016-04-15', ''),
(21, 'asa', 'sdas', '100', '2016-04-08', '2016-04-15', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `expense_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
