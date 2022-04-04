-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 09:21 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentvote`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `voteCount` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `email`, `contact`, `voteCount`) VALUES
(1, 'kishore', 'kishore@gmail.com', '1234567890', 11),
(2, 'kumar', 'kumar@gmail.com', '98654312', 4),
(3, 'harik', 'harik@dgmail.com', '987654', 2),
(4, 'Neelesh Plaparthy', 'neelu@gmail.com', '987654320', 15),
(5, 'len', 'len@gmail.com', '123457783', 2),
(6, 'len', 'len@gmail.com', '123457783', 3),
(7, 'jc', 'jc@gmail.com', '01777777777775', 0),
(8, 'jc', 'jc@gmail.com', '01777777777775', 0),
(9, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE `id` (
  `uniqueid` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id`
--

INSERT INTO `id` (`uniqueid`) VALUES
('gvjxfkgu8'),
('jc'),
('jc787'),
('ovi'),
('sumon12'),
('thgjj777');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `gender`, `password`) VALUES
('a', 'a', 'male', '693a9fdd4c2fd0700968fba0d07ff3c0'),
('abir', 'abir', 'male', '81dc9bdb52d04dc20036dbd8313ed055'),
('abir', 'abir@yahoo.com', 'male', '81dc9bdb52d04dc20036dbd8313ed055'),
('jc', 'jc', 'male', '81dc9bdb52d04dc20036dbd8313ed055'),
('k', 'k', 'male', '8ce4b16b22b58894aa86c421e8759df3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `studentId` varchar(50) NOT NULL,
  `pass_word` varchar(50) NOT NULL,
  `mobileNumber` varchar(15) NOT NULL,
  `voted` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `studentId`, `pass_word`, `mobileNumber`, `voted`) VALUES
(2, 'Hari', '16EI111', '12345', '9876543210', 1),
(3, 'kishore', '123', '1234', '1234567890', NULL),
(4, 'asdf', '321', 'asd', '987465', 1),
(5, 'asdf', '9874', '789987', '987465', 0),
(6, 'kumar', '3210', '12345', '987987', 1),
(7, 'new', 'new', '123', '987654', 1),
(8, 'harikishore', '45', '987', '98765465', 1),
(9, 'hari kishore', '16EI111', '1234', '8300496930', 1),
(10, 'gau', '16IT114', '120', '987456332', 1),
(11, '', '', '', '', 0),
(12, 'SJKASHKA', '16EC159', '123456', '48923409', 1),
(13, 'purushottam banerjee', '16CS138', '123', '12345', 1),
(14, 'subbu kona', '16CS123', '123', '9866441201', 1),
(15, '', '', '', '', 0),
(16, 'hello', '1234', '1234', '1234556776', 0),
(17, 'hello', '1234', '1234', '1234556776', 0),
(18, 'hello', '1234', '1234', '1234556776', 0),
(19, 'hello', '1234', '1234', '1234556776', 0),
(20, 'hello', '1234', '1234', '1234556776', 0),
(21, 'hello', '1234', '1234', '1234556776', 0),
(22, 'hello', '1234', '1234', '1234556776', 0),
(23, 'Raushan', '16EE139', '12345', '987654321', 1),
(24, 'jc', '11', '1234', '000000', 1),
(25, 'opi', '12', '1234', '1111', 1),
(26, 'jc1', '14', '1234', '1111', 1),
(27, '15', 'jc2', '1234', '1111', 1),
(28, 'k', '16', '1234', '1111', 1),
(29, 'k1', '18', '1234', '1111', 1),
(30, 'k2', '19', '1234', '1111', 1),
(31, 'k7', '20', '1234', '1111', 1),
(32, 'k1', '21', '1234', '1111', 1),
(33, 'jc', '22', '1234', '000000', 1),
(34, '25', '25', '25', '25', 1),
(35, '26', '26', '26', '26', 1),
(36, '30', '30', '30', '30', 1),
(37, '31', '31', '31', '31', 1),
(38, '35', '35', '35', '35', 1),
(39, '36', '36', '36', '36', 1),
(40, '38', '38', '38', '38', 1),
(41, '', 'abir@yahoo.com', '1234', '', 0),
(42, 'k', '50', '50', '1234', 1),
(43, '', 'jc', '1549100', '', 0),
(44, 'p', '105', '100', '01254762', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`uniqueid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
