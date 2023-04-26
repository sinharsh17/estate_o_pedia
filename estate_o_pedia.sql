-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 12:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estate_o_pedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`first_name`, `middle_name`, `last_name`, `email`, `phone_number`, `user_type`) VALUES
('harshit', 'kumar', 'singh', 'sinharsh17@gmail.com', 2147483647, 'agent'),
('dechamma', '', 'pt', 'dechamma.pt@gmail.com', 1234567890, 'agent');

-- --------------------------------------------------------

--
-- Table structure for table `builders`
--

CREATE TABLE `builders` (
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `builders`
--

INSERT INTO `builders` (`first_name`, `middle_name`, `last_name`, `email`, `phone_number`, `user_type`) VALUES
('harshit', 'kumar', 'singh', 'sinharsh17@gmail.com', 2147483647, 'builder'),
('harshit', 'kumar', 'singh', 'sinharsh17@gmail.com', 1234567890, 'builder'),
('harshit', 'kumar', 'singh', 'sinharsh17@gmail.com', 1234567890, 'builder'),
('dechamma', '', 'pt', 'dechamma.pt@gmail.com', 987654321, 'builder');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`name`, `email`, `subject`, `message`) VALUES
('', '', '', ''),
('', '', '', ''),
('harshit singh', 'sinharsh17@gmail.com', 'hello', 'world'),
('harshit singh', 'sinharsh17@gmail.com', 'yewdve', 'srthstjrnrtd');

-- --------------------------------------------------------

--
-- Table structure for table `individuals`
--

CREATE TABLE `individuals` (
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `individuals`
--

INSERT INTO `individuals` (`first_name`, `middle_name`, `last_name`, `email`, `phone_number`, `user_type`) VALUES
('harshit', 'kumar', 'singh', 'sinharsh17@gmail.com', 2147483647, 'individual'),
('dechamma', '', 'pt', 'sinharsh17@gmail.com', 2147483647, 'individual');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `name` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`name`, `number`, `email`, `subject`, `message`) VALUES
('harshit singh', 2147483647, 'sinharsh17@gmail.com', 'hello', 'world'),
('harshit singh', 2147483647, 'sinharsh17@gmail.com', 'hello', 'world'),
('harshit singh', 2147483647, 'sinharsh17@gmail.com', 'hello', 'world'),
('harshit singh', 2147483647, 'sinharsh17@gmail.com', 'hello', 'world'),
('harshit singh', 2147483647, 'sinharsh17@gmail.com', 'hello', 'world'),
('Adarsh Jaiswal', 1234567890, 'sinharsh17@gmail.com', 'hello', 'hi '),
('harshit singh', 1234567890, 'sinharsh17@gmail.com', 'hello', 'eddd'),
('harshit singh', 0, 'sinharsh17@gmail.com', 'yewdve', 'srthstjrnrtd');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `neighbourhood` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `minimum_expected_rent` int(11) NOT NULL,
  `maximum_expected_rent` int(11) NOT NULL,
  `property_status` varchar(100) NOT NULL,
  `property_type` varchar(100) NOT NULL,
  `bhk` int(11) NOT NULL,
  `amenities` varchar(100) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`neighbourhood`, `city`, `minimum_expected_rent`, `maximum_expected_rent`, `property_status`, `property_type`, `bhk`, `amenities`, `bathrooms`, `location`) VALUES
('koramangla', 'bengaluru', 5000, 30000, 'furnished', 'flat', 3, 'all', 4, ''),
('koramangla', 'bengaluru', 5000, 30000, 'Ready To Move', 'flat', 1, 'parking space', 1, ''),
('koramangla', 'bengaluru', 5000, 30000, 'Ready To Move', 'flat', 1, 'parking space', 1, ''),
('koramangla', 'bengaluru', 5000, 30000, 'furnished', 'flat', 3, 'all', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `neighbourhood` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `minimum_expected_price` int(11) NOT NULL,
  `maximum_expected_price` int(11) NOT NULL,
  `property_status` varchar(100) NOT NULL,
  `property_type` varchar(100) NOT NULL,
  `bhk` int(11) NOT NULL,
  `amenities` varchar(100) NOT NULL,
  `bathrooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`neighbourhood`, `city`, `minimum_expected_price`, `maximum_expected_price`, `property_status`, `property_type`, `bhk`, `amenities`, `bathrooms`) VALUES
('koramangla', 'bengaluru', 5000, 30000, 'Ready To Move', 'flat', 1, 'parking space', 1),
('electronic city', 'bengaluru', 10000, 35000, 'furnished', 'house', 5, 'all', 5),
('electronic city', 'bengaluru', 15000, 30000, 'Ready To Move', 'house', 5, 'all', 5),
('koramangla', 'bengaluru', 5000, 35000, 'under construction', 'house', 1, 'all', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(18, 'sinharsh17', '$2y$10$gzUMkaTFEC4vH/IbW6NyP.mjR3tyLQU/pHfKFgW9JqDsKPE1TUzla', '2023-04-22 10:51:33'),
(19, 'harsh1t', '$2y$10$8n8JBeKKV9vJF9rc7Sdy7.B3wrF0kMQHc7n/rJXmm2EYcsz80V9ne', '2023-04-22 10:59:28'),
(21, 's1ngh', '$2y$10$Rno9.ZGdJiJSCXSLOmYB/OFS5/BEcCT0jpkb4LhzxLF7uc5WIvrbS', '2023-04-22 11:05:09'),
(24, 'dech@amma', '$2y$10$T3D/X.DdRNPHM0TcylbN/OQi9VcJBhi5jyhkgFBxLImv0GFYKMW3K', '2023-04-24 09:14:18'),
(25, '2141016', '$2y$10$1WBfHd/VEpG4mQ6J5R5vC.RCseT436zyfCSTRF3laxfUX6xUDnzhS', '2023-04-24 14:17:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
