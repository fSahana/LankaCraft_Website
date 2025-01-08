-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 09:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_lankacraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CID` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `UPhoneNumber` varchar(10) DEFAULT NULL,
  `PrdID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PrdID` int(10) NOT NULL,
  `PrdName` varchar(50) DEFAULT NULL,
  `PrdPrice` varchar(30) DEFAULT NULL,
  `PrdImg` text DEFAULT NULL,
  `PrdCategory` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PrdID`, `PrdName`, `PrdPrice`, `PrdImg`, `PrdCategory`) VALUES
(1, 'Traditional Mask', '1100', 'AC_Mask.jpeg', 'Artisian Crafts'),
(2, 'Batik', '1600', 'AC_batik.jpeg', 'Artisian Crafts'),
(4, 'Beaded Bracelet', '400', 'homeacs2.jpeg', 'Home Decor');

-- --------------------------------------------------------

--
-- Table structure for table `uorder`
--

CREATE TABLE `uorder` (
  `OrID` int(10) NOT NULL,
  `OrTotal` varchar(30) DEFAULT NULL,
  `UPhoneNumber` varchar(10) DEFAULT NULL,
  `PrdID` int(10) DEFAULT NULL,
  `WID` int(10) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `OrAddress` varchar(50) DEFAULT NULL,
  `cardno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uorder`
--

INSERT INTO `uorder` (`OrID`, `OrTotal`, `UPhoneNumber`, `PrdID`, `WID`, `LastName`, `OrAddress`, `cardno`) VALUES
(1, NULL, '0723051619', NULL, NULL, 'dd', 's', '11'),
(2, NULL, '0723051619', NULL, NULL, 'dd', 'd', '11'),
(3, NULL, '0723006755', NULL, NULL, 'Sahana', 'd', '11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UPhoneNumber` varchar(10) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `UPassword` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UPhoneNumber`, `FirstName`, `LastName`, `UPassword`) VALUES
('0723006755', 'Fathima', 'Sahana', '111'),
('0723051619', 'ss', 'dd', '11'),
('1111111111', 'aaa', 'ddd', '11');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `WID` int(10) NOT NULL,
  `WName` varchar(50) DEFAULT NULL,
  `WPrice` varchar(30) DEFAULT NULL,
  `WImg` text DEFAULT NULL,
  `Wdesc` varchar(200) DEFAULT NULL,
  `UPhoneNumber` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `FK_Cart_Phone` (`UPhoneNumber`),
  ADD KEY `FK_Cart_Poduct` (`PrdID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PrdID`);

--
-- Indexes for table `uorder`
--
ALTER TABLE `uorder`
  ADD PRIMARY KEY (`OrID`),
  ADD KEY `FK_User` (`UPhoneNumber`),
  ADD KEY `FK_ProductOrder_PrdID` (`PrdID`),
  ADD KEY `FK_WorkshopOrder_PrdID` (`WID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UPhoneNumber`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`WID`),
  ADD KEY `FK_Workshop` (`UPhoneNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PrdID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uorder`
--
ALTER TABLE `uorder`
  MODIFY `OrID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `WID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_Cart_Phone` FOREIGN KEY (`UPhoneNumber`) REFERENCES `user` (`UPhoneNumber`),
  ADD CONSTRAINT `FK_Cart_Poduct` FOREIGN KEY (`PrdID`) REFERENCES `product` (`PrdID`);

--
-- Constraints for table `uorder`
--
ALTER TABLE `uorder`
  ADD CONSTRAINT `FK_ProductOrder_PrdID` FOREIGN KEY (`PrdID`) REFERENCES `product` (`PrdID`),
  ADD CONSTRAINT `FK_User` FOREIGN KEY (`UPhoneNumber`) REFERENCES `user` (`UPhoneNumber`),
  ADD CONSTRAINT `FK_WorkshopOrder_PrdID` FOREIGN KEY (`WID`) REFERENCES `workshop` (`WID`);

--
-- Constraints for table `workshop`
--
ALTER TABLE `workshop`
  ADD CONSTRAINT `FK_Workshop` FOREIGN KEY (`UPhoneNumber`) REFERENCES `user` (`UPhoneNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
