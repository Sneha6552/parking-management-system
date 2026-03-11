-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2026 at 06:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `parking_id` varchar(10) NOT NULL,
  `vehicle_number` varchar(20) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `vehicle_type` varchar(10) NOT NULL,
  `parking_slot` varchar(11) NOT NULL,
  `entry_time` datetime NOT NULL,
  `exit_time` datetime NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `parking_id`, `vehicle_number`, `owner_name`, `vehicle_type`, `parking_slot`, `entry_time`, `exit_time`, `fee`) VALUES
(12, 'P3983', 'MH12AB1234', 'Rakesh Pal', 'Two Wheele', 'A1', '2026-03-10 21:01:28', '2026-03-10 21:16:52', 10),
(13, 'P7145', 'MH03LK3387', 'Rahul Sharma', 'Four Wheel', 'A7', '2026-03-10 21:18:10', '2026-03-10 21:22:27', 10),
(14, 'P4580', 'MH12AB12634', 'Asmit Mishra', 'Two Wheele', 'A4', '2026-03-10 21:18:49', '2026-03-10 21:24:20', 10),
(15, 'P5234', 'MH12AB12238', 'Shivam Tiwari', 'Four Wheel', 'A5', '2026-03-10 21:19:29', '2026-03-10 21:48:40', 10),
(16, 'P6219', 'MH12AB12634', 'Aditya pal', 'Two Wheele', 'A3', '2026-03-10 21:21:44', '0000-00-00 00:00:00', 0),
(17, 'P4806', 'MH12AB11644', 'Rahul Yadav', 'Four Wheel', 'A2', '2026-03-10 21:44:33', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
