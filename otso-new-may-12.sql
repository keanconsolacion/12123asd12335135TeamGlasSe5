-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 10:51 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otso`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_list`
--

CREATE TABLE `event_list` (
  `eventCode` varchar(6) NOT NULL,
  `eventTitle` varchar(50) NOT NULL,
  `eventCreator` varchar(50) NOT NULL,
  `eventcategory` varchar(25) NOT NULL,
  `eventaudience` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `startAt` time NOT NULL,
  `endat` time NOT NULL,
  `venue` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_list`
--

INSERT INTO `event_list` (`eventCode`, `eventTitle`, `eventCreator`, `eventcategory`, `eventaudience`, `date`, `startAt`, `endat`, `venue`) VALUES
('', 'Fun Run', 'kean', '', '', '2020-05-06', '00:00:00', '00:00:00', ''),
('', 'Battle of the bands', 'kean', '', '', '2020-05-06', '00:00:00', '00:00:00', ''),
('', 'Xmas Party', 'kean', '', '', '2020-05-07', '00:00:00', '00:00:00', ''),
('', 'Move Marathon', 'kean', '', '', '2020-05-06', '00:00:00', '00:00:00', ''),
('', 'Xmas Party', 'Paul', '', '', '2020-05-06', '00:00:00', '00:00:00', ''),
('', 'Midterms Exam', 'Maam KC', '', '', '2020-05-06', '00:00:00', '00:00:00', ''),
('', 'Midterms Exam!!', 'Camille Pascua', '', '', '2020-05-06', '00:00:00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_participant`
--

CREATE TABLE `event_participant` (
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `idgiven` varchar(20) NOT NULL,
  `contactnum` varchar(11) NOT NULL,
  `guestcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guest_register`
--

CREATE TABLE `guest_register` (
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `idgiven` varchar(20) NOT NULL,
  `contactnum` varchar(11) NOT NULL,
  `guestcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `permission` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permission`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_school_visit`
--

CREATE TABLE `user_school_visit` (
  `username` varchar(50) NOT NULL,
  `dateOfVisit` date NOT NULL,
  `purpose` varchar(80) NOT NULL,
  `idType` varchar(50) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_school_visit`
--

INSERT INTO `user_school_visit` (`username`, `dateOfVisit`, `purpose`, `idType`, `contactNumber`, `id`) VALUES
('', '0023-12-31', 'Enrollment', 'School ID', 23123, 1),
('', '2003-12-31', 'Tour', 'Government', 12321, 2),
('', '1970-01-01', 'Inquiry', 'School ID', 123, 3),
('', '0023-12-31', 'Tour', 'Government', 123213, 4),
('', '1970-01-01', 'Tour', 'Government', 0, 5),
('', '1970-01-01', 'Inquiry', 'Company ID', 0, 6),
('', '2020-05-14', 'Tour', 'Passport', 1231231123, 7),
('', '2020-05-20', 'Tour', 'School ID', 9177598, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(30) NOT NULL,
  `username` varchar(80) NOT NULL,
  `token` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `username`, `token`) VALUES
(7, 'admin', '39p49ci1EFi8317M5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest_register`
--
ALTER TABLE `guest_register`
  ADD PRIMARY KEY (`guestcode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_school_visit`
--
ALTER TABLE `user_school_visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_school_visit`
--
ALTER TABLE `user_school_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
