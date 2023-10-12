-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 06:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car-rental-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `agency_id` int(5) NOT NULL,
  `agency_name` text NOT NULL,
  `agency_email` varchar(50) NOT NULL,
  `agency_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agency_id`, `agency_name`, `agency_email`, `agency_password`) VALUES
(108, 'Vishnu', 'v@v', 'v'),
(109, 'Jatin', 'j@j', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `agency_id` int(5) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_image` varchar(255) NOT NULL DEFAULT 'https://shorturl.at/dfvT1',
  `car_model` varchar(50) NOT NULL,
  `car_number` varchar(10) NOT NULL,
  `car_seats` int(5) NOT NULL,
  `car_rent` int(5) NOT NULL,
  `car_status` text NOT NULL DEFAULT 'UNBOOK',
  `client_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `agency_id`, `car_name`, `car_image`, `car_model`, `car_number`, `car_seats`, `car_rent`, `car_status`, `client_id`) VALUES
(1011, 108, 'Audi', 'https://images.pexels.com/photos/1545743/pexels-photo-1545743.jpeg?auto=compress&cs=tinysrgb&w=600', 'A1', 'MH-04-JK-2', 4, 8000, 'BOOK', 204),
(1012, 108, 'Mercedes', 'https://shorturl.at/dfvT1', 'E-class', 'GJ-05-JI-1', 2, 1000, 'BOOK', 204),
(1013, 109, 'ferrari', 'https://imgs.search.brave.com/tne47fPYk3BgXMCsOZingFwox6so1wOmnog-l1uiVb4/rs:fit:500:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzA2LzUyLzk0/LzM2MF9GXzMwNjUy/OTQwN18xRnpVSDJs/VVpLQ1p0V2NKVG9I/RzFmU1BaaW9zYTho/Ui5qcGc', 'ferrari roma', 'MH-839-Rk', 5, 799, 'BOOK', 204),
(1014, 109, 'Maruti', 'https://shorturl.at/dfvT1', 'Alto 800', 'UP-01-1111', 12, 100, 'UNBOOK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_email`, `user_password`) VALUES
(202, 'mukesh ambani', 'mukush@gmail.com', 'jio'),
(203, 'john doe', 'john@john', '123123'),
(204, 'dipu', 'dipu@dipu', 'dipu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `agency_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
