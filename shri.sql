-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 04:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shri`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `login_id` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`login_id`, `product_id`, `name`, `qty`, `price`, `total`) VALUES
('', 2, 'EVERESTs Biryani Masala', 1, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `user_id` varchar(150) NOT NULL,
  `order_amount` int(11) NOT NULL,
  `new_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `user_id`, `order_amount`, `new_address`) VALUES
(3, '2022-03-09', 'gaytrihogale@gmail.com', 7275, 'abc'),
(4, '2022-03-09', 'gaytrihogale@gmail.com', 7275, 'abc'),
(5, '2022-03-09', 'gaytrihogale@gmail.com', 7275, 'XYZ'),
(6, '2022-03-09', 'gaytrihogale@gmail.com', 0, 'abc'),
(7, '2022-03-09', 'gaytrihogale@gmail.com', 100, 'abc'),
(8, '2022-03-12', 'gaytrihogale@gmail.com', 17, 'abc'),
(9, '2022-03-14', 'divyachikodi15197@gmail.com', 100, 'sfasf'),
(10, '2022-03-14', 'patilmrunalini1@gmail.com', 5400, 'jaysingpur'),
(11, '2022-03-15', 'divyachikodi15197@gmail.com', 20, 'sfasf');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `qty`, `price`, `total`) VALUES
(4, 3, 2, 'EVERESTs Biryani Masala', 50, 20, 1000),
(5, 3, 3, 'Kissan Mixed Fruit Jam', 50, 100, 5000),
(6, 3, 1, 'EVERESTs A1 Kanda Lasun Masala.', 75, 17, 1275),
(7, 4, 2, 'EVERESTs Biryani Masala', 50, 20, 1000),
(8, 4, 3, 'Kissan Mixed Fruit Jam', 50, 100, 5000),
(9, 4, 1, 'EVERESTs A1 Kanda Lasun Masala.', 75, 17, 1275),
(10, 5, 2, 'EVERESTs Biryani Masala', 50, 20, 1000),
(11, 5, 3, 'Kissan Mixed Fruit Jam', 50, 100, 5000),
(12, 5, 1, 'EVERESTs A1 Kanda Lasun Masala.', 75, 17, 1275),
(13, 7, 3, 'Kissan Mixed Fruit Jam', 1, 100, 100),
(14, 8, 1, 'EVERESTs A1 Kanda Lasun Masala.', 1, 17, 17),
(15, 9, 3, 'Kissan Mixed Fruit Jam', 1, 100, 100),
(16, 10, 2, 'EVERESTs Biryani Masala', 20, 20, 400),
(17, 10, 3, 'Kissan Mixed Fruit Jam', 50, 100, 5000),
(18, 11, 2, 'EVERESTs Biryani Masala', 1, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `hsn` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `details` text NOT NULL,
  `price` int(11) NOT NULL,
  `imagepath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `hsn`, `product_name`, `details`, `price`, `imagepath`) VALUES
(1, 0, 'EVERESTs A1 Kanda Lasun Masala.', 'Kanda (Onion) Lasun (Garlic) Masala (Spice Blend) originated from Kolhapur in Maharashtra and has greatly influenced the local cuisine there.', 17, 'assets\\images\\p1.jpg'),
(2, 0, 'EVERESTs Biryani Masala', 'Largely a combination of flavouring spices used along with taste-agents like black pepper & chilli to impart a pleasantly textured flavour to ordinary rice', 20, 'assets\\images\\p2.jpg'),
(3, 0, 'Kissan Mixed Fruit Jam', 'Kissan Mixed Fruit Jam has a flavorsome appeal with its fresh, delicious mixed fruits.', 100, 'assets\\images\\p5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `title` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `store_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` text NOT NULL,
  `GST_no` int(15) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` text NOT NULL,
  `pin_code` int(7) NOT NULL,
  `pay_mode` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `title`, `name`, `store_name`, `email`, `phone_no`, `address`, `GST_no`, `city`, `state`, `pin_code`, `pay_mode`, `password`) VALUES
(1, 'miss', 'vanika', 'vanika shopies', 'vanika@gmail.com', 1234567890, 'jaysingpur', 12345, 'jaysingpur', 'Maharashtra', 416101, 'COD', ''),
(2, 'mr', 'abhinandan', 'cakes for you', 'abhi@gmail.com', 2147483647, 'ichalkaranji', 712531, 'ichalkaranji', 'Maharashtra', 416115, 'COD', ''),
(5, 'mr', 'Kishor More', 'ABC Ltd', 'kk@gmail.com', 2147483647, 'Kolhapur', 2147483647, 'Kolhapur', 'Maharashtra', 416109, 'COD', ''),
(11, 'miss', 'Gayatri Hogale', 'ABC Ltd', 'gaytrihogale@gmail.com', 77, 'abc', 0, 'ABC', 'Maharashtra', 1, 'COD', '123456'),
(12, 'miss', 'divya ', 'scasf', 'divyachikodi15197@gmail.com', 70, 'sfasf', 0, 'Ichalkaranji', 'Maharashtra', 812131, 'COD', 'bT5U4N'),
(13, 'miss', 'mrunal', 'asdasd', 'patilmrunalini1@gmail.com', 2147483647, 'jaysingpur', 12234, 'jaysingpur', 'Maharashtra', 416101, 'COD', 'zW2KdD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
