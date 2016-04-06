-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost:80
-- Generation Time: Mar 07, 2016 at 12:16 AM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IEEE`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `remaining_seats` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `remaining_seats`) VALUES
(1, 'C-programing', 30),
(2, 'PMP', 29);

-- --------------------------------------------------------

--
-- Table structure for table `registrants`
--

CREATE TABLE IF NOT EXISTS `registrants` (
  `No` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `Name` varchar(300) NOT NULL,
  `Mobile_Number` varchar(20) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Department` varchar(300) NOT NULL,
  `Academic_Year` varchar(40) NOT NULL,
  `membership_status` varchar(300) NOT NULL,
  `fees` int(11) NOT NULL,
  `Ticket_Number` int(11) NOT NULL,
  `Registrer` varchar(300) NOT NULL,
  `Notes` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrants`
--

INSERT INTO `registrants` (`No`, `course_id`, `Name`, `Mobile_Number`, `Email`, `Department`, `Academic_Year`, `membership_status`, `fees`, `Ticket_Number`, `Registrer`, `Notes`) VALUES
(2, 2, 'Youssef Fares', '+201112353576', 'Youssefe.fares@gmail.com', 'CCP', '2019', 'Member', 65, 1, 'me', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(0, 'youssefares@ymail.com', '$2y$10$XCjH08H2Q0mR6xnhgrJQMOirvZ0aezdv3rSIHZrXPlHI83UU0N0fy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrants`
--
ALTER TABLE `registrants`
  ADD PRIMARY KEY (`No`),
  ADD KEY `course_key` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registrants`
--
ALTER TABLE `registrants`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `registrants`
--
ALTER TABLE `registrants`
  ADD CONSTRAINT `registrants_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
