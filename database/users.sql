-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 06:24 AM
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
-- Database: `alphax_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `membership` enum('Walk In','Student','Regular') NOT NULL,
  `membership_date` date NOT NULL DEFAULT current_timestamp(),
  `age` int(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `mode_of_payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `number`, `email`, `username`, `password`, `membership`, `membership_date`, `age`, `birthdate`, `mode_of_payment`) VALUES
(8, 'Ami Secondes', 'Iloilo', '9236548961', 'ami.secondes@wvsu.edu.ph', 'ami2022', 'ami2022', 'Student', '2022-06-09', 21, '2001-03-12', 'Cash'),
(9, 'Fritz Aeron Rose ', 'Kalibo, Aklan', '09517831504', 'fritzaeron.rose@wvsu.edu.ph', 'frtzrn2022', 'frtzrn0322', 'Regular', '2022-06-09', 20, '2002-03-22', 'Shopeepay'),
(45, 'John Gabriel Declaro', 'Iloilo CIty', '9654698774', 'jd@gmail.com', 'gab2022', 'gab2022', 'Walk In', '2022-06-14', 20, '2002-02-02', 'Gcash'),
(47, 'Angelo Capili', 'General Santos CIty, South Cotabato', '9236548961', 'angelo.capili@wvsu.edu.ph', 'angelo2022', 'angelo2022', 'Student', '2022-06-15', 21, '2001-01-04', 'Paymaya'),
(49, 'Royce Carl', 'Iloilo CIty', '9365984613', 'royce.carl@wvsu.edu.ph', 'royce2022', 'royce2022', 'Student', '2022-06-17', 21, '2001-03-24', 'Gcash'),
(53, 'Taylor Swift', 'USA', '32168942103', 'taylorswift@gmail.com', 'swiftie2022', 'swiftie2022', 'Regular', '2022-06-17', 30, '1992-05-18', 'BDO');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
