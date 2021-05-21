-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 10:00 AM
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
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `amount` int(100) NOT NULL,
  `d&t` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`sender`, `receiver`, `amount`, `d&t`) VALUES
('Ritesh Agarwal', 'Soham Maity', 2000, '21-05-2021 03:07:08 am'),
('Mayur Kumar', 'Rahul Dubey', 500, '21-05-2021 03:07:55 am'),
('Mehul Gupta', 'Vikas Gupta', 550, '21-05-2021 03:08:27 am'),
('Varun Agarwal', 'Avishek Gupta', 10000, '21-05-2021 03:09:03 am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `balance`) VALUES
('Avishek Gupta', 'avi277@gmail.com', 78400),
('Mehul Gupta', 'Mehul1999@gmail.com', 20450),
('Mayur Kumar', 'mks123@gmail.com', 32956),
('Rachit Tawani', 'rachitrns@gmail.com', 22000),
('Rahul Dubey', 'rahuldubey@gmail.com', 48000),
('Ritesh Agarwal', 'riteshagarwal.1806@gmail.com', 51000),
('Shivam Kumar', 'shivamkumar@gmail.com', 36000),
('Soham Maity', 'soham123@gmail.com', 30500),
('Varun Agarwal', 'varun245@gmail.com', 37751),
('Vikas Gupta', 'vikas555@gmail.com', 41799);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`d&t`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
