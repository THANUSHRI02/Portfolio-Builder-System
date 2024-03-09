-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 03:45 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamicportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaboutpage`
--

CREATE TABLE `tblaboutpage` (
  `Id` int NOT NULL,
  `Title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `UserId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblaboutpage`
--

INSERT INTO `tblaboutpage` (`Id`, `Title`, `Description`, `UserId`) VALUES
(1, 'About ', 'nice to', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactpage`
--

CREATE TABLE `tblcontactpage` (
  `Id` int NOT NULL,
  `Address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `MobileNo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `UserId` int DEFAULT NULL,
  `WhatsUp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Instagram` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `LinkedIn` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Githup` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblcontactpage`
--

INSERT INTO `tblcontactpage` (`Id`, `Address`, `MobileNo`, `Facebook`, `UserId`, `WhatsUp`, `Instagram`, `LinkedIn`, `Githup`) VALUES
(1, 'No 12', 'Pondi', 'Pondicherry', 10, '9677443855', 'instamohanraj25', 'linkedmohanraj25', 'giupmohanraj25');

-- --------------------------------------------------------

--
-- Table structure for table `tbleducationdetails`
--

CREATE TABLE `tbleducationdetails` (
  `Id` int NOT NULL,
  `CollegeName` text NOT NULL,
  `Degree` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `OverallPercentage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `CollegeAddress` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `UserId` int DEFAULT NULL,
  `UploadCertificate` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `AdminAcceptFlag` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbleducationdetails`
--

INSERT INTO `tbleducationdetails` (`Id`, `CollegeName`, `Degree`, `OverallPercentage`, `CollegeAddress`, `UserId`, `UploadCertificate`, `AdminAcceptFlag`) VALUES
(2, 'New', 'New', 'kjh', 'jkhj', 10, 'uploads/bak.jpg', NULL),
(3, 'PEC', 'ME', '55', 'pondi', 10, 'uploads/download.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblhomepage`
--

CREATE TABLE `tblhomepage` (
  `Id` int NOT NULL,
  `Title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `UserId` int DEFAULT NULL,
  `HomeImage` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblhomepage`
--

INSERT INTO `tblhomepage` (`Id`, `Title`, `Description`, `UserId`, `HomeImage`) VALUES
(1, 'Home ', 'Good home', 10, 'uploads/660513.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE `tblregister` (
  `Id` int NOT NULL,
  `Role` text NOT NULL,
  `Name` text NOT NULL,
  `UserName` text NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `MobileNo` text NOT NULL,
  `CertificatePath` text NOT NULL,
  `AdminAcceptFlag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`Id`, `Role`, `Name`, `UserName`, `Password`, `Email`, `MobileNo`, `CertificatePath`, `AdminAcceptFlag`) VALUES
(1, 'Admin', 'jh', 'jh', 'kjh', 'kj', 'hk', '', ''),
(2, 'User', 'jh', 'jh', 'jkh', 'jkh', 'kjh', '', '1'),
(3, 'Admin', 'jh', 'kjh', 'kjh', 'kjh', 'kjkjh', 'uploads/', ''),
(4, 'Admin', 'sdf', 'nj', 'jh', 'kjh', 'k', 'uploads/', ''),
(5, 'Admin', 'kjhk', 'kjh', 'kjh', 'kj', 'jh', 'uploads/', ''),
(6, 'Admin', 'kjjhkjh', 'kjh', 'kjh', 'kj', 'hkjh', 'uploads/', ''),
(7, 'Admin', 'jkh', 'jkh', 'kjh', 'kjh', 'kkjh', 'uploads/', ''),
(8, 'Admin', 'kjh', 'kjh', 'kj', 'hkjh', 'kj', 'uploads/', ''),
(9, 'Admin', 'kjh', 'kjh', 'kjh', 'kjh', 'kj', 'uploads/bak.jpg', ''),
(10, 'User', 'raj', 'raj', '1', 'raj@gmail.com', '9876543212', 'uploads/bak.jpg', '1'),
(11, 'Admin', 'admin', 'admin', 'admin', 'admin@gmail.com', '9876543212', 'uploads/2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonials`
--

CREATE TABLE `tbltestimonials` (
  `Id` int NOT NULL,
  `Title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `UserId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbltestimonials`
--

INSERT INTO `tbltestimonials` (`Id`, `Title`, `Description`, `UserId`) VALUES
(1, 'testimonial', 'asd', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tblworkspage`
--

CREATE TABLE `tblworkspage` (
  `Id` int NOT NULL,
  `Title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `UserId` int DEFAULT NULL,
  `WorkImage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblworkspage`
--

INSERT INTO `tblworkspage` (`Id`, `Title`, `Description`, `UserId`, `WorkImage`) VALUES
(1, 'Works sdd', 'good work', 10, 'uploads/660513.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaboutpage`
--
ALTER TABLE `tblaboutpage`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblcontactpage`
--
ALTER TABLE `tblcontactpage`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbleducationdetails`
--
ALTER TABLE `tbleducationdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblhomepage`
--
ALTER TABLE `tblhomepage`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbltestimonials`
--
ALTER TABLE `tbltestimonials`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblworkspage`
--
ALTER TABLE `tblworkspage`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaboutpage`
--
ALTER TABLE `tblaboutpage`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactpage`
--
ALTER TABLE `tblcontactpage`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbleducationdetails`
--
ALTER TABLE `tbleducationdetails`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblhomepage`
--
ALTER TABLE `tblhomepage`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblregister`
--
ALTER TABLE `tblregister`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbltestimonials`
--
ALTER TABLE `tbltestimonials`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblworkspage`
--
ALTER TABLE `tblworkspage`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
