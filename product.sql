-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 01:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gebeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `customer` ( 
  `cust_ID` int(11) NOT NULL,
  `FullName` varchar(11) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL, 
  `Password` varchar(200) NOT NULL, 
  `Re_Password` varchar(200) NOT NULL, 
  `Country` varchar(200) NOT NULL, 
  `City` varchar(200) NOT NULL, 
  `Adress` varchar(200) NOT NULL, 
  `PostalCode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

-- INSERT INTO `product` (`Product_ID`, `productName`, `Picture`, `Price`, `cust_ID`) VALUES
-- (1, 'Murbars', '1.jpg', 54.2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
-- --
-- ALTER TABLE `product`
--   ADD PRIMARY KEY (`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
-- --
-- ALTER TABLE `product`
--   MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
