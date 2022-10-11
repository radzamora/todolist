-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 08:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasktable`
--

CREATE TABLE `tasktable` (
  `taskID` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `task` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasktable`
--

INSERT INTO `tasktable` (`taskID`, `start_date`, `task`, `deadline`, `status`) VALUES
(1, '2022-01-17', 'Study MySQL', '2022-01-18', ''),
(2, '2022-01-18', 'Study PHP', '2022-01-19', ''),
(3, '2022-01-19', 'Application of PHP and MySQL', '2022-01-24', ''),
(4, '2022-01-19', 'Download necessary softwares (XAMPP/Visual Studio)', '2022-01-19', ''),
(5, '2022-01-24', 'Have project Assessed!', '2022-01-25', ''),
(6, '2022-01-24', 'Add design to Project and Assess', '2022-01-26', ''),
(12, '2022-02-01', 'Patambok gain weight 5kilos', '2022-02-04', 'impossible');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasktable`
--
ALTER TABLE `tasktable`
  ADD PRIMARY KEY (`taskID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasktable`
--
ALTER TABLE `tasktable`
  MODIFY `taskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
