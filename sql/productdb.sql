-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 02:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `s_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `created`, `modified`, `s_email`) VALUES
(21, 'samsung', 'tablet', 1000, '7e3fc722bdb9d4ae9affc6dcf75724898e2c280a-product3.png', '2020-03-11 15:13:14', '2020-03-11 08:43:14', 'abc'),
(24, 'mi3', 'headphone', 350, 'c3dea109458835ea814d262c28f2e9881ae4b1b3-product2.png', '2020-03-11 15:28:47', '2020-03-13 04:16:02', 'xyz'),
(44, 'DELL', 'laptop', 9000, '6f9d597263828823daef35239953e0b4d3690efe-ad4c959e62db77878980bf5e772a7593579cbdf4-product1.png', '2020-04-24 14:49:15', '2020-04-24 12:49:31', 'prathamesh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sellerinfo`
--

CREATE TABLE `sellerinfo` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellerinfo`
--

INSERT INTO `sellerinfo` (`s_id`, `s_name`, `s_email`, `s_pwd`) VALUES
(1, 'abc', 'abc', '1234'),
(5, 'prathamesh', 'prathamesh@gmail.com', 'Prathamesh@2408'),
(4, 'vjti', 'Vjti@gmail.com', 'Vjti@123'),
(2, 'xyz', 'xyz', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `cust_id` int(11) NOT NULL,
  `custf_name` varchar(50) NOT NULL,
  `custl_name` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`cust_id`, `custf_name`, `custl_name`, `cust_email`, `cust_pwd`) VALUES
(1, 'prathamesh', 'parulekar', 'prathamesh@gmail.com', 'Prathamesh@2408'),
(3, 'prathamesh', 'parulekar', 'prathamesh123@gmail.com', 'Prathm@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `s_email` (`s_email`);

--
-- Indexes for table `sellerinfo`
--
ALTER TABLE `sellerinfo`
  ADD PRIMARY KEY (`s_email`),
  ADD UNIQUE KEY `s_id` (`s_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `sellerinfo`
--
ALTER TABLE `sellerinfo`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`s_email`) REFERENCES `sellerinfo` (`s_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
