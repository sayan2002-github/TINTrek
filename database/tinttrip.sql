-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 05:23 PM
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
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tinttrip`
--

CREATE TABLE `tinttrip` (
  `slno` int(3) NOT NULL,
  `name` varchar(40) NOT NULL,
  `roll` int(4) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `gname` varchar(40) NOT NULL,
  `gphone` varchar(13) NOT NULL,
  `addr` text NOT NULL,
  `other` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tinttrip`
--

INSERT INTO `tinttrip` (`slno`, `name`, `roll`, `dept`, `phone`, `email`, `gender`, `gname`, `gphone`, `addr`, `other`, `dt`) VALUES
(1, 'Sayan Jana', 114, 'CSE', '8798564412', 'janasayan@gmail.com', 'male', 'Mukundo Jana', '8744871540', 'Purusrha, West Bengal, 712415', 'Good trip', '2023-08-03 19:13:15'),
(2, 'Sayan Parui', 118, 'CSE', '+916297588876', 'sayanparui076@gmail.com', 'Male', 'Srikanata Parui', '8230846819', 'Pursurah-Radhanagar Road', 'Good trip', '2023-08-03 19:20:26'),
(4, 'Sayan Parui', 112, 'IT', '+916297588876', 'sayanparui076@gmail.com', 'Male', 'Srikanata Parui', '8230846819', 'Pursurah-Radhanagar Road', 'add', '2023-08-03 19:40:32'),
(5, 'Sayan Parui', 0, '', '+916297588876', 'sayanparui076@gmail.com', 'Select', '', '', 'Pursurah-Radhanagar Road', '', '2023-08-03 20:16:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tinttrip`
--
ALTER TABLE `tinttrip`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tinttrip`
--
ALTER TABLE `tinttrip`
  MODIFY `slno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
