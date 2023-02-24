-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 23, 2023 at 01:15 PM
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
-- Database: `Team11`
--

-- --------------------------------------------------------

--
-- Table structure for table `aisha_customer`
--

CREATE TABLE `aisha_customer` (
  `email_address` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `phone_nbr` int NOT NULL,
  `address` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aisha_customer`
--

INSERT INTO `aisha_customer` (`email_address`, `fname`, `lname`, `phone_nbr`, `address`, `password`) VALUES
('metanataemailsetkarapan@gmail', 'Menata', 'nata', 40568928, 'visämaki', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `rushani_items`
--

CREATE TABLE `rushani_items` (
  `item_nbr` int NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL,
  `item_image` varchar(100) DEFAULT NULL,
  `item_status` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rushani_items`
--

INSERT INTO `rushani_items` (`item_nbr`, `item_name`, `unit`, `unit_price`, `quantity`, `item_image`, `item_status`) VALUES
(1, 'Rice', 'Small', '20.00', 10, 'breakfast5.jpg', 1),
(2, 'Bun', 'Small', '5.00', 5, 'coffee.jpg', 1),
(3, 'Pizza', 'Large', '30.00', 20, 'Dessert3.jpg', 1),
(4, 'Cake ', 'Medium', '15.00', 8, 'dessert.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rushani_order`
--

CREATE TABLE `rushani_order` (
  `order_nbr` int NOT NULL,
  `order_time` datetime NOT NULL,
  `username` varchar(20) NOT NULL,
  `customer_id` int NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_nbr` varchar(13) NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `order_type` varchar(12) NOT NULL COMMENT 'pickup or delivery',
  `note` varchar(100) NOT NULL,
  `total_amt` decimal(10,2) NOT NULL,
  `membershipid` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rushani_order`
--

INSERT INTO `rushani_order` (`order_nbr`, `order_time`, `username`, `customer_id`, `address`, `phone_nbr`, `email`, `order_type`, `note`, `total_amt`, `membershipid`) VALUES
(1, '2023-02-19 03:27:45', 'test', 123, 'abc123', '0773565342', 'metanataemailsetkarapan@gmail', 'Pickup', '', '1120.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `rushani_order_items`
--

CREATE TABLE `rushani_order_items` (
  `item_nbr` int NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `quantity` int NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `subtotal_amt` decimal(10,2) NOT NULL,
  `order_nbr` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rushani_order_items`
--

INSERT INTO `rushani_order_items` (`item_nbr`, `item_name`, `quantity`, `unit_price`, `subtotal_amt`, `order_nbr`) VALUES
(1, 'breeee', 5, '20.00', '100.00', 1),
(3, 'dAWSs', 2, '30.00', '60.00', 1),
(2, 'azdasd', 3, '320.00', '960.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shreya_review`
--

CREATE TABLE `shreya_review` (
  `reviewid` int NOT NULL,
  `email_address` varchar(60) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `rate` int NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aisha_customer`
--
ALTER TABLE `aisha_customer`
  ADD PRIMARY KEY (`email_address`);

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
  ADD KEY `rushani_order_ibfk_1` (`email`);

--
-- Indexes for table `rushani_order_items`
--
ALTER TABLE `rushani_order_items`
  ADD KEY `item_nbr` (`item_nbr`),
  ADD KEY `order_nbr` (`order_nbr`);

--
-- Indexes for table `shreya_review`
--
ALTER TABLE `shreya_review`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `email_address` (`email_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rushani_items`
--
ALTER TABLE `rushani_items`
  MODIFY `item_nbr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rushani_order`
--
ALTER TABLE `rushani_order`
  MODIFY `order_nbr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shreya_review`
--
ALTER TABLE `shreya_review`
  MODIFY `reviewid` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rushani_order`
--
ALTER TABLE `rushani_order`
  ADD CONSTRAINT `rushani_order_ibfk_1` FOREIGN KEY (`email`) REFERENCES `aisha_customer` (`email_address`);

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
  ADD CONSTRAINT `shreya_review_ibfk_1` FOREIGN KEY (`email_address`) REFERENCES `aisha_customer` (`email_address`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

DROP TABLE IF EXISTS quang_tables, quang_reservation, quang_reserved;
CREATE TABLE quang_tables (
  table_id VARCHAR(50) NOT NULL PRIMARY KEY,
  seats INT,
  table_name VARCHAR(30),
  table_spec VARCHAR(40)
);
INSERT INTO quang_tables (table_id, seats, table_name, table_spec)
VALUES ('meeting_room_1', 10, 'Meeting Room 1', 'Good for Business and Event'),
       ('table_1', 2, 'Table 1', 'Good for Friends'),
       ('table_2', 2, 'Table 2', 'Good for Dating'),
       ('table_3', 2, 'Table 3', 'Good for Singles'),
       ('table_4', 4, 'Table 4', 'Good for Friends'),
       ('table_5', 4, 'Table 5', 'Good for Business Group'),
       ('table_6', 6, 'Table 6', 'Good for Business Group')
;

CREATE TABLE quang_reservation (
  reservation_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  reservation_code VARCHAR(6) NULL,
  cust_name VARCHAR(30) NOT NULL,
  phone_nbr VARCHAR(20) NOT NULL,
  cust_email VARCHAR(50) NOT NULL,
  FOREIGN KEY (cust_email) REFERENCES aisha_customer(email_address),
  start_datetime DATETIME,
  end_datetime DATETIME,
  nbr_of_guests INT NOT NULL,
  special_request VARCHAR(255),
  table_id VARCHAR(20) NOT NULL,
  FOREIGN KEY (table_id) REFERENCES quang_tables(table_id),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
