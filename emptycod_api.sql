-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2021 at 12:29 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emptycod_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(55) NOT NULL,
  `user_email` varchar(55) NOT NULL,
  `user_stauts` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_stauts`) VALUES
(1, 'Emrul', 'emrul@gmail.com', 1),
(2, 'Hasan', 'hasan@gmail.com', 0),
(3, 'Emrul', 'emrul@gmail.com', 1),
(4, 'Hasan', 'hasan@gmail.com', 0),
(5, 'Kawsar', 'kawsar@gmail.com', 1),
(6, 'Kawsar2', 'kawsar@gmail2.com', 1),
(7, 'kawsar', 'kawsar@g.com', 1),
(8, 'quentity', 'q@g.com', 1),
(9, 'quentity', 'q@g.com', 1),
(10, 'quentity', 'q@g.com', 1),
(11, 'ddd', 'd@g.com', 1),
(12, 'dfdfds', 'emptycoder19@gmail.com', 1),
(13, 'dfdfds', 'emptycoder19@gmail.com', 1),
(14, 'dfdfds', 'emptycoder19@gmail.com', 1),
(15, 'dfdfdsff', 'emptycoder19@gmail.comf', 1),
(16, 'dfdfdsff', 'emptycoder19@gmail.comf', 1),
(17, 'fdfd', 'ea@g.co', 1),
(18, 'test', 'email@g.com', 1),
(19, 'test', 'email@g.com', 1),
(20, 'yyt', 'yyt@y.com', 1),
(21, 'yyt', 'yyt@y.com', 1),
(22, 'Habib', 'hadib@g.com', 1),
(23, 'Habib', 'hadib@g.com', 1),
(24, '', '', 1),
(25, '', '', 1),
(26, '', '', 1),
(27, '', '', 1),
(28, '', '', 1),
(29, '', '', 1),
(30, '', '', 1),
(31, 'Kaikoobad', 'kai@g.com', 1),
(32, 'Kaikoobad', 'kai@g.com', 1),
(33, 'Kaikoobad', 'kai@g.com', 1),
(34, 'Kaikoobad', 'kai@g.com', 1),
(35, 'rrfg', 'dffgt@g.com', 1),
(36, 'Hayder Ali', 'haiderali@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
