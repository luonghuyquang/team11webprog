-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 22, 2023 at 01:29 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team11_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `aisha_customer`
--
  create Database team11_project;

CREATE TABLE `aisha_customer` (
  `customerid` int NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `username` varchar(12) NOT NULL,
  `phone_nbr` int NOT NULL,
  `email_address` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aisha_customer`
--

INSERT INTO `aisha_customer` (`customerid`, `fname`, `lname`, `username`, `phone_nbr`, `email_address`, `address`, `password`) VALUES
(2, 'Aisha', 'NIYOBYIRINGIRO', 'crudapp', 408704076, 'niyobyiringiroirene@gmail.com', 'Maisemamaalauksenkatu 1 E102', 'password'),
(3, 'Aisha', 'NIYOBYIRINGIRO', 'crudapp', 408704076, 'niyobyiringiroirene@gmail.com', 'helsinki', 'password'),
(4, 'Aisha', 'NIYOBYIRINGIRO', 'crudapp', 408704076, 'niyobyiringiroirene@gmail.com', 'helsinki', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `aisha_membership`
--

CREATE TABLE `aisha_membership` (
  `membershipid` int NOT NULL,
  `customerid` int NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quang_availability`
--

CREATE TABLE `quang_availability` (
  `time_slot` time NOT NULL,
  `places_available` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quang_reservation`
--

CREATE TABLE `quang_reservation` (
  `reservationid` int NOT NULL,
  `customerid` int NOT NULL,
  `date` datetime NOT NULL,
  `guests_nbr` int NOT NULL,
  `specific_request` varchar(100) NOT NULL,
  `membershipid` varchar(12) NOT NULL,
  `part_size` int NOT NULL,
  `part_date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rushani_items`
--

CREATE TABLE `rushani_items` (
  `item_nbr` int NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL,
  `note` varchar(100) NOT NULL,
  `item_no` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rushani_order`
--

CREATE TABLE `rushani_order` (
  `order_nbr` varchar(12) NOT NULL,
  `customerid` int NOT NULL,
  `order_time` datetime NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_nbr` int NOT NULL,
  `email` varchar(12) NOT NULL,
  `ordertype` varchar(12) NOT NULL,
  `note` varchar(100) NOT NULL,
  `total_amt` decimal(10,2) NOT NULL,
  `membership` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rushani_order_items`
--

CREATE TABLE `rushani_order_items` (
  `item_name` varchar(30) NOT NULL,
  `order_nbr` varchar(12) NOT NULL,
  `item_nbr` int NOT NULL,
  `quantity` int NOT NULL,
  `unity_price` int NOT NULL,
  `subtotal_amt` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shreya_review`
--

CREATE TABLE `shreya_review` (
  `email_address` varchar(12) NOT NULL,
  `customerid` int NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `suggestion` varchar(350) NOT NULL,
  `starring` enum('1','2','3','4','5') NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aisha_customer`
--
ALTER TABLE `aisha_customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `aisha_membership`
--
ALTER TABLE `aisha_membership`
  ADD PRIMARY KEY (`membershipid`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `quang_reservation`
--
ALTER TABLE `quang_reservation`
  ADD PRIMARY KEY (`reservationid`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `rushani_items`
--
ALTER TABLE `rushani_items`
  ADD PRIMARY KEY (`item_nbr`);

--
-- Indexes for table `rushani_order`
--
ALTER TABLE `rushani_order`
  ADD PRIMARY KEY (`order_nbr`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `rushani_order_items`
--
ALTER TABLE `rushani_order_items`
  ADD KEY `order_nbr` (`order_nbr`),
  ADD KEY `item_nbr` (`item_nbr`);

--
-- Indexes for table `shreya_review`
--
ALTER TABLE `shreya_review`
  ADD PRIMARY KEY (`email_address`),
  ADD KEY `customerid` (`customerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aisha_customer`
--
ALTER TABLE `aisha_customer`
  MODIFY `customerid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aisha_membership`
--
ALTER TABLE `aisha_membership`
  MODIFY `customerid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456;

--
-- AUTO_INCREMENT for table `quang_reservation`
--
ALTER TABLE `quang_reservation`
  MODIFY `customerid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rushani_order`
--
ALTER TABLE `rushani_order`
  MODIFY `customerid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shreya_review`
--
ALTER TABLE `shreya_review`
  MODIFY `customerid` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aisha_membership`
--
ALTER TABLE `aisha_membership`
  ADD CONSTRAINT `aisha_membership_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `aisha_customer` (`customerid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `quang_reservation`
--
ALTER TABLE `quang_reservation`
  ADD CONSTRAINT `quang_reservation_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `aisha_customer` (`customerid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `rushani_order`
--
ALTER TABLE `rushani_order`
  ADD CONSTRAINT `rushani_order_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `aisha_customer` (`customerid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `rushani_order_items`
--
ALTER TABLE `rushani_order_items`
  ADD CONSTRAINT `rushani_order_items_ibfk_1` FOREIGN KEY (`item_nbr`) REFERENCES `rushani_items` (`item_nbr`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rushani_order_items_ibfk_2` FOREIGN KEY (`order_nbr`) REFERENCES `rushani_order` (`order_nbr`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `shreya_review`
--
ALTER TABLE `shreya_review`
  ADD CONSTRAINT `shreya_review_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `aisha_customer` (`customerid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
