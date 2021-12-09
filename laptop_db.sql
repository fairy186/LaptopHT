-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 08:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID_Lap` varchar(10) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `ID_Dis` int(11) NOT NULL,
  `ID_Lap` varchar(10) NOT NULL,
  `Reduce` int(11) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `ID_Lap` varchar(10) NOT NULL,
  `Name_Lap` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Insurance` varchar(100) DEFAULT '36 tháng',
  `ID_Type` varchar(10) NOT NULL,
  `ID_Manu` varchar(10) NOT NULL,
  `Images` varchar(255) NOT NULL,
  `CPU` varchar(255) NOT NULL,
  `GPU` varchar(255) NOT NULL,
  `RAM` varchar(255) NOT NULL,
  `Storage` varchar(255) NOT NULL,
  `Screen` varchar(255) NOT NULL,
  `Audio` varchar(255) DEFAULT NULL,
  `Connection` varchar(255) DEFAULT NULL,
  `Other_Feature` varchar(255) DEFAULT NULL,
  `Dimen_Wei` varchar(255) DEFAULT NULL,
  `Material` varchar(255) DEFAULT NULL,
  `Battery` varchar(255) DEFAULT NULL,
  `OS` varchar(100) DEFAULT 'Win 10',
  `Release_Time` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`ID_Lap`, `Name_Lap`, `Price`, `Insurance`, `ID_Type`, `ID_Manu`, `Images`, `CPU`, `GPU`, `RAM`, `Storage`, `Screen`, `Audio`, `Connection`, `Other_Feature`, `Dimen_Wei`, `Material`, `Battery`, `OS`, `Release_Time`) VALUES
('L0001', 'Laptop Dell Inspiron 7400 i5 1135G7/16GB/512GB/2GB MX350/Win10 (N4I5134W) ', 30490000, '36 tháng', 'LT01', 'LM006', '', 'Intel Core i5 Tiger Lake - 1135G7', '@', '16 GB', '512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)', '14.5 inch', NULL, '2 x USB 3.2\r\nHDMI\r\nJack tai nghe 3.5 mm\r\nThunderbolt 4 USB-C', NULL, 'Dài 321.7 mm - Rộng 224.5 mm - Dày 16.75 mm - Nặng 1.35 kg', 'Vỏ nhựa - nắp lưng bằng kim loại', '4-cell Li-ion, 52 Wh', 'Windows 10 Home SL', NULL),
('L0002', 'Laptop Asus TUF Gaming FX506HC i5 11400H/8GB/512GB/4GB RTX3050/144Hz/Win10 (HN002T)', 24190000, '36 tháng', 'LT01', 'LM002', 'A', '\r\nIntel Core i5 Tiger Lake - 11400H', '@', '\r\n8 GB', '\r\n512 GB SSD NVMe PCIeHỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng', '\r\n15.6 inch', NULL, 'Jack tai nghe 3.5 mm\r\nThunderbolt 4 USB-C\r\n3 x USB 3.2\r\nHDMI\r\nLAN (RJ45)', NULL, 'Dài 359 mm - Rộng 256 mm - Dày 24.9 mm - Nặng 2.3 kg', 'Vỏ nhựa - nắp lưng bằng kim loại', '3-cell Li-ion, 48 Wh', 'Windows 10 Home SL', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laptop_type`
--

CREATE TABLE `laptop_type` (
  `ID_Type` varchar(10) NOT NULL,
  `Name_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop_type`
--

INSERT INTO `laptop_type` (`ID_Type`, `Name_Type`) VALUES
('LT01', 'Gaming'),
('LT02', 'MacBook');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `Id_Manu` varchar(10) NOT NULL,
  `Name_Manu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`Id_Manu`, `Name_Manu`) VALUES
('LM001', 'MacBook'),
('LM002', 'Asus'),
('LM003', 'Lenovo'),
('LM004', 'HP'),
('LM005', 'Acer'),
('LM006', 'Dell'),
('LM007', 'MSI'),
('LM008', 'LG');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `ID_Order` int(11) NOT NULL,
  `ID_Lap` varchar(10) NOT NULL,
  `Quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `ID_Order` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Time_Order` datetime NOT NULL DEFAULT current_timestamp(),
  `Status_Order` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID_Rev` int(11) NOT NULL,
  `ID_Lap` varchar(10) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Star` int(1) NOT NULL,
  `Time_Rev` datetime DEFAULT current_timestamp(),
  `Content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `ID_Slider` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` int(11) NOT NULL,
  `First_Name` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Account` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID_Lap`,`ID_User`),
  ADD KEY `ID_User` (`ID_User`),
  ADD KEY `ID_Lap` (`ID_Lap`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`ID_Dis`),
  ADD KEY `ID_Lap` (`ID_Lap`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`ID_Lap`),
  ADD KEY `ID_Type` (`ID_Type`),
  ADD KEY `ID_Manu` (`ID_Manu`);

--
-- Indexes for table `laptop_type`
--
ALTER TABLE `laptop_type`
  ADD PRIMARY KEY (`ID_Type`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`Id_Manu`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ID_Lap`,`ID_Order`),
  ADD KEY `ID_Lap` (`ID_Lap`),
  ADD KEY `ID_Order` (`ID_Order`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`ID_Order`),
  ADD KEY `ID_Order` (`ID_Order`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID_Rev`),
  ADD KEY `ID_Lap` (`ID_Lap`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ID_Slider`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `ID_Dis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `ID_Order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID_Rev` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `ID_Slider` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`ID_Lap`) REFERENCES `laptop` (`ID_Lap`);

--
-- Constraints for table `discount`
--
ALTER TABLE `discount`
  ADD CONSTRAINT `discount_ibfk_1` FOREIGN KEY (`ID_Lap`) REFERENCES `laptop` (`ID_Lap`);

--
-- Constraints for table `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `laptop_ibfk_1` FOREIGN KEY (`ID_Type`) REFERENCES `laptop_type` (`ID_Type`),
  ADD CONSTRAINT `laptop_ibfk_2` FOREIGN KEY (`ID_Manu`) REFERENCES `manufacturer` (`Id_Manu`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`ID_Order`) REFERENCES `order_info` (`ID_Order`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`ID_Lap`) REFERENCES `laptop` (`ID_Lap`);

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`ID_Lap`) REFERENCES `laptop` (`ID_Lap`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
