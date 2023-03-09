  USE team11;
  DROP TABLE IF EXISTS aisha_customer, quang_reservation, quang_tables, rushani_items, rushani_order, rushani_order_items, shreya_review, functional_table;

  -- Table structure for table `aisha_customer`
  CREATE TABLE `aisha_customer` (
    `email_address` varchar(60) NOT NULL PRIMARY KEY,
    `fname` varchar(60) NOT NULL,
    `lname` varchar(60) NOT NULL,
    `phone_nbr` varchar(12) NOT NULL,
    `address` varchar(60) NOT NULL,
    `password` varchar(60) NOT NULL,
    `membershipid` varchar(60) DEFAULT 'N1458096'
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

  -- Dumping data for table `aisha_customer`

  INSERT INTO `aisha_customer` (`email_address`, `fname`, `lname`, `phone_nbr`, `address`, `password`, `membershipid`) VALUES
  ('keza@gmail.com', 'keza', 'Winnie', '785921597', 'kigali', 'j62JL!C4)WrPn3Zp', NULL),
  ('metanataemailsetkarapan@gmail', 'Menata', 'nata', '40568928', 'visämaki', 'password', NULL);


  -- Table structure for table `shreya_review`

  CREATE TABLE `shreya_review` (
    `reviewid` int NOT NULL,
    `email_address` varchar(60) DEFAULT NULL,
    `fname` varchar(50) NOT NULL,
    `lname` varchar(50) NOT NULL,
    `review` text NOT NULL,
    `rate` int NOT NULL,
    `date` timestamp NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

  -- Dumping data for table `shreya_review`

  INSERT INTO `shreya_review` (`reviewid`, `email_address`, `fname`, `lname`, `review`, `rate`, `date`) VALUES
  (3, 'shreya613@gmail.com', 'Shreya ', 'Khetani', 'This cozy restaurant has left the best impressions! Hospitable hosts, delicious dishes, beautiful presentation, wide wine list and wonderful dessert. I recommend to everyone! I would like to come back here again and again.', 5, '2023-03-06 17:46:40'),
  (4, 'abhishek6492@gmail.com', 'Abhishek', 'Khetani', 'It’s a great experience.', 5, '2023-03-06 17:51:26');

  -- Indexes for table `shreya_review`

  ALTER TABLE `shreya_review`
    ADD PRIMARY KEY (`reviewid`),
    ADD KEY `email_address` (`email_address`);

  -- AUTO_INCREMENT for table `shreya_review`
  ALTER TABLE `shreya_review`
    MODIFY `reviewid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

    -- Quang --
  CREATE TABLE quang_tables (
    table_id VARCHAR(30) NOT NULL PRIMARY KEY,
    seats INT,
    table_name VARCHAR(30),
    table_spec VARCHAR(60)
  );
  INSERT INTO quang_tables (table_id, seats, table_name, table_spec)
  VALUES ('meeting_room_1', 10, 'Meeting Room', 'Good for Business and Event'),
        ('table_1', 2, 'Table 1', 'Good for Thinkers'),
        ('table_2', 2, 'Table 2', 'Good for Friends'),
        ('table_3', 2, 'Table 3', 'Good for Dating'),
        ('table_4', 4, 'Table 4', 'Good for Friends'),
        ('table_5', 4, 'Table 5', 'Good for Business Group'),
        ('table_6', 6, 'Table 6', 'Good for Business Group')
  ;

  CREATE TABLE quang_reservation (
    reservation_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    reservation_code VARCHAR(6) NULL,
    cust_name VARCHAR(30) NOT NULL,
    phone_nbr VARCHAR(20) NOT NULL,
    cust_email VARCHAR(60) NOT NULL,
    start_datetime DATETIME,
    end_datetime DATETIME,
    nbr_of_guests INT NOT NULL,
    special_request VARCHAR(255),
    table_id VARCHAR(30) NOT NULL,
    FOREIGN KEY (table_id) REFERENCES quang_tables(table_id),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  );

  -- Rushani --

-- Table structure for table `rushani_items`
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rushani_items`
--
ALTER TABLE `rushani_items`
  ADD PRIMARY KEY (`item_nbr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rushani_items`
--
ALTER TABLE `rushani_items`
  MODIFY `item_nbr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

-- Table structure for table `rushani_order`
--

CREATE TABLE `rushani_order` (
  `order_nbr` int NOT NULL,
  `order_time` datetime DEFAULT NULL,
  `username` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rushani_order`
--
ALTER TABLE `rushani_order`
  ADD PRIMARY KEY (`order_nbr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rushani_order`
--
ALTER TABLE `rushani_order`
  MODIFY `order_nbr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

-- Table structure for table `rushani_order_items`
--

CREATE TABLE `rushani_order_items` (
  `id` int NOT NULL,
  `item_nbr` int DEFAULT NULL,
  `item_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `subtotal_amt` decimal(10,2) DEFAULT NULL,
  `order_nbr` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rushani_order_items`
--

INSERT INTO `rushani_order_items` (`id`, `item_nbr`, `item_name`, `quantity`, `unit_price`, `subtotal_amt`, `order_nbr`) VALUES
(7, 6, 'Toast Bread', 1, '10.00', '10.00', 5),
(8, 7, 'Fried Egg with Ham', 3, '10.00', '30.00', 5),
(9, 6, 'Toast Bread', 1, '10.00', '10.00', 7),
(10, 6, 'Toast Bread', 3, '10.00', '30.00', 8),
(11, 6, 'Toast Bread', 3, '10.00', '30.00', 9),
(12, 10, 'Meaty Pasta', 1, '12.00', '12.00', 10),
(13, 6, 'Toast Bread', 5, '10.00', '50.00', 10),
(14, 7, 'Fried Egg with Ham', 6, '10.00', '60.00', 10),
(15, 6, 'Toast Bread', 1, '10.00', '10.00', 11),
(16, 7, 'Fried Egg with Ham', 2, '10.00', '20.00', 11),
(17, 6, 'Toast Bread', 1, '10.00', '10.00', 12),
(18, 7, 'Fried Egg with Ham', 3, '10.00', '30.00', 12),
(19, 6, 'Toast Bread', 2, '10.00', '20.00', 13),
(20, 7, 'Fried Egg with Ham', 4, '10.00', '40.00', 13),
(21, 6, 'Toast Bread', 1, '10.00', '10.00', 14),
(22, 7, 'Fried Egg with Ham', 5, '10.00', '50.00', 14),
(23, 8, 'French Toast', 2, '9.00', '18.00', 14),
(24, 9, 'Toast Bun', 8, '10.00', '80.00', 14),
(25, 6, 'Toast Bread', 2, '10.00', '20.00', 15),
(26, 7, 'Fried Egg with Ham', 5, '10.00', '50.00', 15),
(27, 6, 'Toast Bread', 1, '10.00', '10.00', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rushani_order_items`
--
ALTER TABLE `rushani_order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rushani_order_items_ibfk_1` (`order_nbr`),
  ADD KEY `item_nbr` (`item_nbr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rushani_order_items`
--
ALTER TABLE `rushani_order_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rushani_order_items`
--
ALTER TABLE `rushani_order_items`
  ADD CONSTRAINT `rushani_order_items_ibfk_1` FOREIGN KEY (`order_nbr`) REFERENCES `rushani_order` (`order_nbr`),
  ADD CONSTRAINT `rushani_order_items_ibfk_2` FOREIGN KEY (`item_nbr`) REFERENCES `rushani_items` (`item_nbr`);


  -- Table structure for table `functional_table`

  CREATE TABLE `functional_table` (
    `email_address` varchar(60) NOT NULL,
    `reviewid` int NOT NULL,
    `reservation_id` INT NOT NULL,
    `order_nbr` INT NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

  -- Indexes for table `functional_table`

  ALTER TABLE `functional_table`
    ADD KEY `reviewid` (`reviewid`),
    ADD KEY `email_address` (`email_address`),
    ADD KEY `reservation_id` (`reservation_id`),
    ADD KEY `order_nbr` (`order_nbr`);

  -- Constraints for table `functional_table`

  ALTER TABLE `functional_table`
    ADD CONSTRAINT `functional_table_ibfk_1` FOREIGN KEY (`reviewid`) REFERENCES `shreya_review` (`reviewid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
    ADD CONSTRAINT `functional_table_ibfk_2` FOREIGN KEY (`email_address`) REFERENCES `aisha_customer` (`email_address`) ON DELETE RESTRICT ON UPDATE RESTRICT,
    ADD CONSTRAINT `functional_table_ibfk_3` FOREIGN KEY (`reservation_id`) REFERENCES `quang_reservation` (`reservation_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
    ADD CONSTRAINT `functional_table_ibfk_4` FOREIGN KEY (`order_nbr`) REFERENCES `rushani_order` (`order_nbr`) ON DELETE RESTRICT ON UPDATE RESTRICT;
