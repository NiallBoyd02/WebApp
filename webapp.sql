-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 04:58 PM
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
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `customertbl`
--

CREATE TABLE `customertbl` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `MobileNo` varchar(14) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `ShippingAddress` varchar(50) NOT NULL,
  `BillingAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customertbl`
--

INSERT INTO `customertbl` (`CustomerID`, `FirstName`, `Surname`, `MobileNo`, `EmailAddress`, `ShippingAddress`, `BillingAddress`) VALUES
(0, 'John', 'Johnson', '07383747382', 'JJS@hotmail.com', '141 gtsgt', '122 hdwhd'),
(1608, 'hbdhe', 'sseehy', '07283947563', 'whsyh@eudu.dej', '182 shwhyshwyehw', '122 hdehdyeuw'),
(1947, 'xshsx', 'sxjush', '07829837627', 'sxhs@dcd.dcc', '132 heygceyye', '122 hcdyhdchdch'),
(7930, 'xshsx', 'sxjush', '07829837627', 'sxhs@dcd.dcc', '132 heygceyye', '122 hcdyhdchdch'),
(8025, 'Callum', 'Barrett', '0787654321', 'Barrett50.cal@outlook.com', '31 Park Ave', '345 Pine Rd'),
(8304, 'Niall', 'Boyd', '0739527859', 'niallBoydz@hotmail.com', '28 Oak St', '456 Green St'),
(8456, 'Darragh', 'McElhinney', '0751234567', 'DazMcElhinnyz@email.com', '321 Maple St', '654 Birch Rd'),
(8930, 'Leah', 'Craig', '0728551212', 'SlothCraiggers@email.com', '987 Willow Rd', '321 Oakwood Blvd');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `shipping_address` varchar(50) NOT NULL,
  `billing_address` varchar(50) NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `order_total` decimal(10,0) NOT NULL,
  `order_items` varchar(30) NOT NULL,
  `stock_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`order_id`, `customer_id`, `order_date`, `shipping_address`, `billing_address`, `order_status`, `order_total`, `order_items`, `stock_id`) VALUES
(324, 8025, '2023-02-01', '31 Park Ave', '345 Pine Rd', 'Shipped', 100, 'Widget', 123),
(342, 8456, '2023-04-01', '321 Maple St', '54 Birch Rd', 'Processing', 100, 'Widget', 74),
(373, 8930, '2023-03-15', '987 Willow Rd', '321 Oakwood Blvd', 'Cancelled', 0, '', 93),
(376, 8304, '2023-02-15', '28 Oak St', '456 Green St', 'Delivered', 150, 'Gadget', 142),
(381, 8395, '2023-03-01', '321 Cedar Ln', '567 Spruce Ave', 'Processing', 200, 'Widget, Gadget', 98);

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`id`, `username`, `password_hash`) VALUES
(295, 'mikeGilly42@example.com', 'HelloThere!!'),
(374, 'SarahOConnor@outlook.com', 'SkynetIsReal??'),
(472, 'Peterward23@gmail.com', 'password123!');

-- --------------------------------------------------------

--
-- Table structure for table `purchasetbl`
--

CREATE TABLE `purchasetbl` (
  `purchaseID` int(6) NOT NULL,
  `stock_Name` varchar(30) NOT NULL,
  `price` float(10,2) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviewtbl`
--

CREATE TABLE `reviewtbl` (
  `reviewID` int(11) NOT NULL,
  `customerName` varchar(30) NOT NULL,
  `customerEmail` varchar(30) NOT NULL,
  `rating` varchar(30) NOT NULL,
  `review` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviewtbl`
--

INSERT INTO `reviewtbl` (`reviewID`, `customerName`, `customerEmail`, `rating`, `review`) VALUES
(1, 'John M', 'johnm@outlook.com', 'Happy', 'Great product, fast delivery.'),
(2, 'David J', 'davidj@outlook.com', 'Average', 'Product was good but shipping took longer than exp'),
(3, 'Danielle L', 'daniellel@outlook.com', 'Unhappy', 'Amazing quality and service.'),
(4, 'Leanne N', 'leannen@outook.com', 'Happy', 'Product arrived damaged, but customer service was great'),
(5, 'George K', 'georgek@outlook.com', 'Happy', 'Cancelled as i found out sizes were too large'),
(6, 'Niall B', 'NiallB@outlook.com', 'option1', 'Great items, fast delivery '),
(7, 'John Y', 'JY@outlook.com', 'option1', 'Very happy with order'),
(8, 'John Y', 'JY@outlook.com', 'Happy', 'Very happy with order'),
(9, 'swhsn', 'swujsns@nwsn.ssj', 'Happy', 'wsjwujs'),
(10, 'xxwdweweexeee', 'sjsj@edkedjde.dje', 'Unhappy', 'wsnuwhunwdh'),
(11, 'xxwdweweexeee', 'sjsj@edkedjde.dje', 'Unhappy', 'wsnuwhunwdh'),
(12, 'shhwd', 'sj@jsj.dkid', 'Unhappy', 'snsn');

-- --------------------------------------------------------

--
-- Table structure for table `stocktable`
--

CREATE TABLE `stocktable` (
  `stock_id` int(11) NOT NULL,
  `stock_name` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocktable`
--

INSERT INTO `stocktable` (`stock_id`, `stock_name`, `quantity`, `brand`, `category`) VALUES
(1, 'Nike Air Max', 50, 'Nike', 'Athletic Shoes'),
(2, 'Adidas Ultraboost', 25, 'Adidas', 'Athletic Shoes'),
(3, 'Vans Classic Slip-On', 40, 'Vans', 'Casual Shoes'),
(4, 'Converse Chuck Taylor All Star', 30, 'Converse', 'Casual Shoes'),
(5, 'Timberland Premium Waterproof ', 20, 'Timberland', 'Boots');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customertbl`
--
ALTER TABLE `customertbl`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `purchasetbl`
--
ALTER TABLE `purchasetbl`
  ADD PRIMARY KEY (`purchaseID`);

--
-- Indexes for table `reviewtbl`
--
ALTER TABLE `reviewtbl`
  ADD PRIMARY KEY (`reviewID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passwords`
--
ALTER TABLE `passwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=473;

--
-- AUTO_INCREMENT for table `purchasetbl`
--
ALTER TABLE `purchasetbl`
  MODIFY `purchaseID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewtbl`
--
ALTER TABLE `reviewtbl`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
