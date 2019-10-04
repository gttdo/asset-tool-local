-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 03, 2019 at 08:34 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asset_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `serialNo` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `name`, `image`, `serialNo`, `availability`, `notes`, `category`) VALUES
(1, 'Macbook Pro', 'https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg', 'C02TNIFCGTF1', 'Not Available', 'no notes', 'macbook'),
(2, 'Macbook Pro', 'https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg', 'A1234', 'Available', 'no notes', 'macbook'),
(3, 'Macbook Pro', 'https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg', 'C02PM70ZG3QC', 'Available', 'no notes', 'macbook'),
(4, 'Macbook Pro', 'https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg', 'C02HQ152DV7N', 'Available', 'no notes', 'macbook'),
(5, 'Macbook Pro', 'https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg', 'C02HV1PTFLG4', 'Available', 'no notes', 'macbook'),
(6, 'Macbook Pro', 'https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg', 'W80140UF64C', 'Available', 'no notes', 'macbook'),
(7, 'Macbook Pro', 'https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg', 'C02FV2CWDF91', 'Available', 'no notes', 'macbook'),
(8, 'Asus', 'https://m.media-amazon.com/images/I/6167WYHLHiL._AC_UY436_FMwebp_QL65_.jpg', 'B12345', 'Available', 'no notes', 'pc'),
(9, 'Dell', 'https://m.media-amazon.com/images/I/41yH82J80wL._AC_UY436_FMwebp_QL65_.jpg', 'TP9R362', 'Available', 'no notes', 'pc'),
(10, 'Nexus', 'https://m.media-amazon.com/images/I/418KVzHTenL._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg', '10000', 'Not Available', 'WCD Tablet 2, Not Charged', 'tablet'),
(11, 'iPad', 'https://m.media-amazon.com/images/I/6162WMQWhVL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg', '10001', 'Not Available', 'WCD iPAD 1, Not Charged', 'ipad'),
(12, 'iPad', 'https://m.media-amazon.com/images/I/6162WMQWhVL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg', '10002', 'Not Available', 'WCD iPAD 2, Not Charged', 'ipad'),
(13, 'iPad', 'https://m.media-amazon.com/images/I/6162WMQWhVL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg', '10003', 'Not Available', 'WCD iPAD 4 Not Charged', 'ipad'),
(14, 'Galaxy S9', 'https://m.media-amazon.com/images/I/81+h9mpyQmL._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg', 'R25K31VW5K3', 'Available', 'WCD Android 9, Charged, Blue Glossy', 'android'),
(15, 'Galaxy S10e', 'https://m.media-amazon.com/images/I/5132X8MVZ2L._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg', 'SMG970U1ZBAX', 'Available', 'Charging', 'android'),
(16, 'Galaxy S10+', 'https://m.media-amazon.com/images/I/61pJYa3506L._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg', 'SMG975U1ZKAX', 'Available', 'Charging', 'android'),
(17, 'Pixel 2', 'https://m.media-amazon.com/images/I/71CDE9pG4hL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg', '10004', 'Available', 'WCD Android 7, Charged, Black Matte', 'android'),
(18, 'Pixel 3 XL', 'https://m.media-amazon.com/images/I/814bCP5oOsL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg', '10005', 'Available', 'Boxed, left inside the drawer', 'android'),
(19, 'iPhone', 'https://m.media-amazon.com/images/I/61+fbdrjtCL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg', '10006', 'Available', 'WCD iPhone 5, Charging', 'ios'),
(20, 'iPhone 7', 'https://m.media-amazon.com/images/I/61rIZ32kqEL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg', 'A1778', 'Available', 'WCD iPhone 2, Not Charged, Pink Matte', 'ios'),
(21, 'iPhone 7', 'https://m.media-amazon.com/images/I/61+fbdrjtCL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg', 'A1660', 'Available', 'WCD iPhone 3, Charging', 'ios'),
(22, 'iPhone 8', 'https://m.media-amazon.com/images/I/61UYEl6lfKL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg', '10007', 'Available', 'No label, Black Glass, Not Charged', 'ios'),
(23, 'iPhone XS Max', 'https://m.media-amazon.com/images/I/71LNnMEDMyL._AC_SX200_SY200_.jpg', 'FFWXRF81KPHC', 'Available', 'No label, Black Glass, Not Charged', 'ios'),
(24, 'iPhone XR', 'https://m.media-amazon.com/images/I/51sztXPLUyL._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg', 'G0NXW0L7KXKT', 'Not Available', 'No label, Not Charged, Orange Matte', 'ios');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(5) NOT NULL,
  `deviceName` int(5) NOT NULL,
  `userName` int(5) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `deviceName`, `userName`, `checkin`, `checkout`) VALUES
(2, 1, 2, '2019-10-30', '2019-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passphrase` varchar(255) NOT NULL,
  `signupDate` date DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `passphrase`, `signupDate`, `isAdmin`) VALUES
(1, 'Http://tinygraphs.com/squares/tinygraphs?theme=frogideas&numcolors=4&size=220&fmt=svg', 'Admin', 'jacpare@gap.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2019-10-02', NULL),
(2, 'Http://tinygraphs.com/squares/tinygraphs?theme=frogideas&numcolors=4&size=220&fmt=svg', 'Jackie', 'jacqueline_pareja@gap.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2019-10-02', NULL),
(5, 'Http://tinygraphs.com/squares/tinygraphs?theme=frogideas&numcolors=4&size=220&fmt=svg', 'Test account', 'thisisatest@gap.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2019-10-03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
