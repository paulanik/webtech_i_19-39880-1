-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 01:39 PM
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
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_info`
--

CREATE TABLE `blood_info` (
  `ID` int(11) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `Price` int(20) NOT NULL,
  `AddedDate` date NOT NULL,
  `ExpireDate` date NOT NULL,
  `DonorUsername` varchar(20) NOT NULL,
  `HospitalUsername` varchar(30) NOT NULL,
  `Available` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_info`
--

INSERT INTO `blood_info` (`ID`, `BloodGroup`, `Price`, `AddedDate`, `ExpireDate`, `DonorUsername`, `HospitalUsername`, `Available`) VALUES
(3, 'A+', 2000, '2021-04-22', '2021-04-02', 'alam1', 'admin', 1),
(4, 'B+', 2000, '2021-04-22', '2021-07-01', 'alima9', 'admin', 1),
(7, 'A+', 2000, '2021-04-22', '2021-07-01', 'humble3', 'admin', 0),
(9, 'A+', 2000, '2021-04-22', '2021-07-01', 'amir4', 'admin', 0),
(11, 'AB+', 2000, '2021-04-22', '2021-07-01', 'jahangir2', 'admin', 1),
(12, 'A+', 2000, '2021-04-23', '2021-06-02', 'alam1', 'admin', 1),
(14, 'B+', 2000, '2021-04-23', '2021-06-02', 'alima9', 'admin', 0),
(16, 'A+', 2000, '2021-04-23', '2021-06-02', 'humble3', 'admin', 1),
(17, 'B+', 2000, '2021-04-25', '2021-06-05', 'hasan', 'mcd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `DonorName` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `DonorUsername` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`DonorName`, `Gender`, `Phone`, `Email`, `Address`, `DonorUsername`) VALUES
('alam', 'male', '01111111546', 'alam@gmail.com', 'Dhaka', 'alam1'),
('alima', 'female', '098765444', 'alima2@gmail.com', 'Khulna', 'alima9'),
('amir', 'male', '09655656', 'amir4@gmail.com', 'Pirojpur', 'amir4'),
('Hasan', 'male', '09876543', 'hasan@gmail.com', 'Dhaka', 'hasan'),
('humble', 'male', '066564333', 'humble@gmail.com', 'Gazipur', 'humble3'),
('jahangir', 'male', '098757555', 'jahangir@gmail.com', 'Jhalokathi', 'jahangir2');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_info`
--

CREATE TABLE `hospital_info` (
  `Hname` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Uname` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_info`
--

INSERT INTO `hospital_info` (`Hname`, `Phone`, `Email`, `Address`, `Uname`, `Password`, `Image`) VALUES
('xyz', '01866558833', 'jahidh101894@gmail.com', 'kjhggss', 'abc', '0987654@', 'flag.PNG'),
('xyz', '01699885533', 'jahidh101894@gmail.com', 'Khulna', 'admin', '1', NULL),
('abi', '0199999999', 'jahidh101894@gmail.com', 'Dhaka', 'asdf', '1234567@', NULL),
('abcde', '01771779910', 'jahidh101891@gmail.com', 'Uttara', 'bob', '12345678@', 'images.jpg'),
('DKMN', '09876543', 'dkmn@gmail.com', 'Gazipur', 'dkmn', '0987654@', NULL),
('MCD', '098765439', 'mcd@gmail.com', 'Dhaka', 'mcd', '1234567@', NULL),
('tyty', '2222222233', 'jahidh101894@gmail.com', 'ytuyt', 'tttttt', '12345678@', NULL),
('gfdgytut', '12345678', 'jahidh101894@gmail.com', 'ytuyt', 'tyryryryryry', '7654321@', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_info`
--
ALTER TABLE `blood_info`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `hName` (`HospitalUsername`),
  ADD KEY `dName` (`DonorUsername`);

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`DonorUsername`);

--
-- Indexes for table `hospital_info`
--
ALTER TABLE `hospital_info`
  ADD PRIMARY KEY (`Uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_info`
--
ALTER TABLE `blood_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_info`
--
ALTER TABLE `blood_info`
  ADD CONSTRAINT `dName` FOREIGN KEY (`DonorUsername`) REFERENCES `donor_info` (`DonorUsername`),
  ADD CONSTRAINT `hName` FOREIGN KEY (`HospitalUsername`) REFERENCES `hospital_info` (`Uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
