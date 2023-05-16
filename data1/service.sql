-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 04:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_data`
--

CREATE TABLE `service_data` (
  `id` int(11) NOT NULL,
  `officer` varchar(50) NOT NULL,
  `monitor_code` varchar(20) NOT NULL,
  `cpu_code` varchar(20) NOT NULL,
  `printer_code` varchar(20) NOT NULL,
  `condition` varchar(100) NOT NULL,
  `monitor_serial_number` varchar(255) DEFAULT NULL,
  `printer_serial_number` varchar(255) DEFAULT NULL,
  `cpu_serial_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_data`
--

INSERT INTO `service_data` (`id`, `officer`, `monitor_code`, `cpu_code`, `printer_code`, `condition`, `monitor_serial_number`, `printer_serial_number`, `cpu_serial_number`) VALUES
(1, 'dodjw', 'jdowdjwo', 'jdwjd', 'jdowjd', 'Good ', NULL, 'ada', NULL),
(3, '', '', '', '', 'Good', NULL, NULL, NULL),
(4, '', '345678765', 'dfw456787', 'ewfefe', 'Fair', NULL, NULL, NULL),
(5, 'ACCIM', 'DATDGAD', 'dfw456787DUA', 'ewfefeDADA', 'Good', NULL, NULL, NULL),
(9, 'csacssdsd', 'dsds', 'dsds', 'dada', 'Fair', NULL, NULL, NULL),
(10, 'scsdcs', 'cszczs', 'cszc zs', 'cszcz', 'Good', '', '', ''),
(11, 'cs', 'dd', 'dd', 'ad', 'Good', '', '', ''),
(12, 'd', 'a', 'f', 'h', 'Good', '', '', ''),
(13, 'a', 'b', 'd', 'f', 'Good', 'c', 'g', 'e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_data`
--
ALTER TABLE `service_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `monitor_printer_unique` (`monitor_code`,`printer_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_data`
--
ALTER TABLE `service_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
