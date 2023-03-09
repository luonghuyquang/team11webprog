Table structure for table `rushani_items`
--

CREATE TABLE `rushani_items` (
  `item_nbr` int NOT NULL,
  `item_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `unit` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `item_image` varchar(100) DEFAULT NULL,
  `item_status` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rushani_items`
--

INSERT INTO `rushani_items` (`item_nbr`, `item_name`, `unit`, `unit_price`, `quantity`, `item_image`, `item_status`) VALUES
(6, 'Toast Bread', 'Small', '10.00', 5, 'breakfast1.jpg', 1),
(7, 'Fried Egg with Ham', 'Small', '10.00', 6, 'breakfast2.jpg', 1),
(8, 'French Toast', 'Small', '9.00', 7, 'breakfast3.jpg', 1),
(9, 'Toast Bun', 'Small', '10.00', 8, 'breakfast4.jpg', 1),
(10, 'Potato with Bread', 'Small', '11.00', 10, 'lunch1.jpg', 1),
(11, 'Grilled Meatballs', 'Small', '11.00', 10, 'lunch2.jpg', 1),
(12, 'Boiled Salmon Fish', 'Small', '12.00', 12, 'lunch3.jpg', 1),
(13, 'Spaghetti', 'Small', '12.00', 12, 'lunch4.png', 1),
(14, 'Grilled Meat', 'Small', '11.00', 10, 'dinner1.jpg', 1),
(15, 'Noodles', 'Small', '10.00', 10, 'dinner2.jpg', 1),
(16, 'Meaty Pasta', 'Small', '12.00', 10, 'dinner4.jpg', 1),
(17, 'Fried Chicken', 'Small', '10.00', 10, 'dinner5.jpg', 1),
(18, 'Lettuce Salad', 'Small', '10.00', 10, 'salad.jpg', 1),
(19, 'Green Salad', 'Small', '10.00', 10, 'salad2.jpg', 1),
(20, 'Egg salad', 'Small', '10.00', 10, 'salad3.jpg', 1),
(21, 'Greek Salad', 'Small', '10.00', 10, 'salad4.jpg', 1),
(22, 'Ice Cream', 'Small', '6.00', 10, 'dessert1.jpg', 1),
(23, 'Brownie', 'Small', '10.00', 10, 'dessert2.jpg', 1),
(24, 'Pancake', 'Small', '6.00', 6, 'dessert4.jpg', 1),
(25, 'Macarons', 'Small', '8.00', 15, 'dessert5.jpg', 1),
(26, 'Coffee', 'Small', '3.00', 15, 'drink1.jpg', 1),
(27, 'Tea', 'Small', '3.00', 15, 'drink2.jpg', 1),
(28, 'Mocktail', 'Small', '6.00', 15, 'drink3.jpg', 1),
(29, 'Soft drinks', 'Small', '4.00', 20, 'drink5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rushani_order`
--

CREATE TABLE `rushani_order` (
  `order_nbr` int NOT NULL,
  `order_time` datetime DEFAULT NULL,
  `username` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `address` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `phone_nbr` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `order_type` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL COMMENT 'pickup or delivery',
  `total_amt` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rushani_order`
--

INSERT INTO `rushani_order` (`order_nbr`, `order_time`, `username`, `address`, `phone_nbr`, `order_type`, `total_amt`) VALUES
(5, '2023-03-03 08:39:02', 'test', 'abc123', '0773565342', 'Pickup', '40.00'),
(6, '2023-03-03 08:39:56', 'test', 'abc123', '0773565342', 'Pickup', '40.00'),
(7, '2023-03-03 09:21:01', '', '', '', 'Pickup', '10.00'),
(8, '2023-03-03 09:21:21', '', '', '', 'Pickup', '30.00'),
(9, '2023-03-03 09:23:06', 'abc@gmail.com', 'visamaentie 35 A 12', '020123456', 'Pickup', '30.00'),
(10, '2023-03-04 08:51:41', 'abc@gmail.com', 'no 25', '0415657577', 'Pickup', '122.00'),
(11, '2023-03-05 02:39:56', 'abc@gmail.com', 'No 25', '0415744227', 'Delivery', '30.00'),
(12, '2023-03-05 03:35:44', 'new@gmail.com', 'No 54', '0412312234', 'Pickup', '40.00'),
(13, '2023-03-05 03:40:38', 'abc@gmail.com', 'No 45', '0412312345', 'Delivery', '60.00'),
(14, '2023-03-05 03:58:27', 'abc@gmail.com', 'No 50', '041232323', 'Delivery', '158.00'),
(15, '2023-03-05 09:53:51', 'abc@gmail.com', 'no 35', '0778036464', 'Delivery', '70.00'),
(16, '2023-03-05 10:28:36', 'abc@dfd', 'no 89', '0123', 'Delivery', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `rushani_order_items`
--

CREATE TABLE `rushani_order_items` (
  `item_nbr` int NOT NULL,
  `item_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `subtotal_amt` decimal(10,2) DEFAULT NULL,
  `order_nbr` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rushani_order_items`
--

INSERT INTO `rushani_order_items` (`item_nbr`, `item_name`, `quantity`, `unit_price`, `subtotal_amt`, `order_nbr`) VALUES
(7, 'Toast Bread', 1, '10.00', '10.00', 5),
(8, 'Fried Egg with Ham', 3, '10.00', '30.00', 5),
(9, 'Toast Bread', 1, '10.00', '10.00', 7),
(10, 'Toast Bread', 3, '10.00', '30.00', 8),
(11, 'Toast Bread', 3, '10.00', '30.00', 9),
(12, 'Meaty Pasta', 1, '12.00', '12.00', 10),
(13, 'Toast Bread', 5, '10.00', '50.00', 10),
(14, 'Fried Egg with Ham', 6, '10.00', '60.00', 10),
(15, 'Toast Bread', 1, '10.00', '10.00', 11),
(16, 'Fried Egg with Ham', 2, '10.00', '20.00', 11),
(17, 'Toast Bread', 1, '10.00', '10.00', 12),
(18, 'Fried Egg with Ham', 3, '10.00', '30.00', 12),
(19, 'Toast Bread', 2, '10.00', '20.00', 13),
(20, 'Fried Egg with Ham', 4, '10.00', '40.00', 13),
(21, 'Toast Bread', 1, '10.00', '10.00', 14),
(22, 'Fried Egg with Ham', 5, '10.00', '50.00', 14),
(23, 'French Toast', 2, '9.00', '18.00', 14),
(24, 'Toast Bun', 8, '10.00', '80.00', 14),
(25, 'Toast Bread', 2, '10.00', '20.00', 15),
(26, 'Fried Egg with Ham', 5, '10.00', '50.00', 15),
(27, 'Toast Bread', 1, '10.00', '10.00', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rushani_items`
--
ALTER TABLE `rushani_items`
  ADD PRIMARY KEY (`item_nbr`);

--
-- Indexes for table `rushani_order`
--
ALTER TABLE `rushani_order`
  ADD PRIMARY KEY (`order_nbr`);

--
-- Indexes for table `rushani_order_items`
--
ALTER TABLE `rushani_order_items`
  ADD PRIMARY KEY (`item_nbr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rushani_items`
--
ALTER TABLE `rushani_items`
  MODIFY `item_nbr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `rushani_order`
--
ALTER TABLE `rushani_order`
  MODIFY `order_nbr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rushani_order_items`
--
ALTER TABLE `rushani_order_items`
  MODIFY `item_nbr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rushani_order_items`
--
ALTER TABLE `rushani_order_items`
  ADD CONSTRAINT `rushani_order_items_ibfk_1` FOREIGN KEY (`order_nbr`) REFERENCES `rushani_order` (`order_nbr`);
COMMIT;

ALTER TABLE rushani_order_items ADD FOREIGN KEY (`item_name`) REFERENCES rushani_items (`item_name`);
ALTER TABLE rushani_order ADD FOREIGN KEY (`username`) REFERENCES aisha_customer (`email_address`);

