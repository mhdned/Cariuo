-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 12:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mainsweeper`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'primary key',
  `username` varchar(255) NOT NULL COMMENT 'user name account',
  `password` varchar(255) NOT NULL COMMENT 'user password',
  `create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `score` int(10) UNSIGNED DEFAULT NULL,
  `win_count` int(10) UNSIGNED DEFAULT NULL,
  `signin_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `create_time`, `score`, `win_count`, `signin_time`) VALUES
(1, 'tunetiuo', 'Mahdi2003!', '2022-06-13 13:08:59', 109, NULL, '2022-06-19'),
(2, 'mahdi', '123', '2022-06-16 19:43:02', 72, NULL, '2022-06-23'),
(3, 'Ali', '1234', '2022-06-16 19:44:58', NULL, NULL, NULL),
(4, 'Javad', '1234', '2022-06-16 19:46:20', NULL, NULL, NULL),
(5, 'Mmwdi', '8585', '2022-06-16 19:47:07', NULL, NULL, '2022-06-16'),
(6, 'Mmawdi', '1234', '2022-06-19 18:44:58', 63, NULL, '2022-06-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
