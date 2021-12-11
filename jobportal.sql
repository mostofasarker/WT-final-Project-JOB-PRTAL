-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 04:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobcategory`
--

CREATE TABLE `jobcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobcategory`
--

INSERT INTO `jobcategory` (`id`, `name`) VALUES
(2, 'Web Devloper');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `email`, `username`, `password`, `address`, `phoneno`, `gender`, `type`, `dob`) VALUES
(5, 'Mostofa', 'Mostofa@gmail.com', 'm25', '12345', 'asdas', '01234567891', 'male', 'admin', '2021-12-10'),
(6, 'm', 'm@gmail.com', 'm30', '123456', 'asdasd', '01234567890', 'male', 'admin', '2021-12-10'),
(15, 'test', 'test@gmail.com', 't25', '12345', 'test@gmail.com', '12345678900', 'male', 'admin', '2021-12-10'),
(16, 'test', 'test@gmail.com', 'test', '12345', 'trest', '0123456', 'male', 'admin', '2021-12-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobcategory`
--
ALTER TABLE `jobcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobcategory`
--
ALTER TABLE `jobcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
