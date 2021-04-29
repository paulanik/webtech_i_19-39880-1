-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 09:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyform`
--

CREATE TABLE `applyform` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `display` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `email`, `username`, `address`, `blood`, `display`) VALUES
(4, 'Nusrat Rahman', 'rumel5896@gmail.com', 'juju_juju', 'Banani,Dhaka', '', 'Yes'),
(5, 'Nusrat Bhuiyan', 'nusratftz@gmail.com', 'dip_imam', 'Shamoli,Dhaka', 'B+', 'Yes'),
(6, 'Nusrat Bhuiyan', 'rumel5896@gmail.com', 'dip_imam', 'Shamoli,Dhaka', '', 'Yes'),
(7, 'Nusrat', 'nusratftz@gmail.com', 'dip_imam', 'Uttara,Dhaka', 'O+', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `patient_db`
--

CREATE TABLE `patient_db` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(20) NOT NULL,
  `blood` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_db`
--

INSERT INTO `patient_db` (`id`, `name`, `email`, `username`, `password`, `address`, `blood`) VALUES
(1, 'Nusrat Bhuiyan', 'nusratftz@gmail.com', 'Nusrat_ftz', '0cd87cf96b19a6ed2123933246b5af8d', 'Shamoli,Dhaka', 'A+'),
(2, 'Nusrat Bhuiyan', 'nusratftz@gmail.com', 'Nusrat_ftz', '0cd87cf96b19a6ed2123933246b5af8d', 'Shamoli,Dhaka', 'A+'),
(3, 'Nusrat Bhuiyan', 'nusratftz@gmail.com', 'Nusrat_ftz', '5448552005f7f5b2f011d13667317d5d', 'Bashundhara,Dhaka', 'B+'),
(4, 'Nusrat Bhuiyan', 'nusratftz@gmail.com', 'Nusrat_ftz', '5448552005f7f5b2f011d13667317d5d', 'Bashundhara,Dhaka', 'B+'),
(5, 'Nusrat Bhuiyan', 'nusratftz@gmail.com', 'Nusrat_ftz', '0cd87cf96b19a6ed2123933246b5af8d', 'Bashundhara,Dhaka', 'O+'),
(6, 'Nusrat Bhuiyan', 'nusratftz@gmail.com', 'Nusrat_ftz', '0cd87cf96b19a6ed2123933246b5af8d', 'Bashundhara,Dhaka', 'O+'),
(7, 'Nusrat Bhuiyan', 'nusratftz@gmail.com', 'Nusrat_ftz', '0cd87cf96b19a6ed2123933246b5af8d', 'Bashundhara,Dhaka', 'O+'),
(8, 'Nusrat Bhuiyan', 'nusratftz@gmail.com', 'Nusrat_ftz', '0cd87cf96b19a6ed2123933246b5af8d', 'Bashundhara,Dhaka', 'O+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyform`
--
ALTER TABLE `applyform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_db`
--
ALTER TABLE `patient_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyform`
--
ALTER TABLE `applyform`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient_db`
--
ALTER TABLE `patient_db`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
