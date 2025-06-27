-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2025 at 11:57 AM
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
-- Database: `padmanimigration`
--

-- --------------------------------------------------------

--
-- Table structure for table `pm_dependent_visa`
--

CREATE TABLE `pm_dependent_visa` (
  `Visitor_Id` varchar(8) NOT NULL,
  `Reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_education`
--

CREATE TABLE `pm_education` (
  `Visitor_Id` varchar(8) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `School_University` varchar(100) NOT NULL,
  `Country` varchar(56) NOT NULL,
  `Cource_Duration` varchar(30) NOT NULL,
  `Completed_Year` varchar(30) NOT NULL,
  `CGPA_Percentage` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_english_test`
--

CREATE TABLE `pm_english_test` (
  `Visitor_Id` varchar(8) NOT NULL,
  `IELTS` varchar(3) NOT NULL,
  `PTE` varchar(3) NOT NULL,
  `TOEFL` varchar(3) NOT NULL,
  `TOEIC` varchar(3) NOT NULL,
  `Cambridge` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_finance`
--

CREATE TABLE `pm_finance` (
  `Visitor_Id` varchar(8) NOT NULL,
  `Sponser_Relationship` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_health_and_travelling_history`
--

CREATE TABLE `pm_health_and_travelling_history` (
  `Visitor_Id` varchar(8) NOT NULL,
  `Health_Insurance` varchar(3) NOT NULL,
  `Travelled` varchar(3) NOT NULL,
  `VisaRefused` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_inquiry`
--

CREATE TABLE `pm_inquiry` (
  `Inquiry_ID` varchar(6) NOT NULL,
  `VisaType` varchar(30) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `GivenName` varchar(50) NOT NULL,
  `Gender` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNo` decimal(15,0) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Country` varchar(56) NOT NULL,
  `Marital_Status` varchar(15) NOT NULL,
  `Action_By_Team` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_other`
--

CREATE TABLE `pm_other` (
  `Visitor_Id` varchar(8) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_passport_details`
--

CREATE TABLE `pm_passport_details` (
  `Visitor_Id` varchar(8) NOT NULL,
  `P_No` varchar(8) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `P_G_Name` varchar(20) NOT NULL,
  `P_DOB` date NOT NULL,
  `P_Gender` varchar(6) NOT NULL,
  `P_Place_Of_Birth` varchar(40) NOT NULL,
  `P_Place_Of_Issue` varchar(40) NOT NULL,
  `P_Date_Of_Issue` date NOT NULL,
  `P_Date_Of_Expiry` date NOT NULL,
  `P_AD1` varchar(50) NOT NULL,
  `P_AD2` varchar(50) NOT NULL,
  `P_Pincode` varchar(12) NOT NULL,
  `P_State` varchar(60) NOT NULL,
  `P_Country` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_ref_table`
--

CREATE TABLE `pm_ref_table` (
  `Inquiry_ID` varchar(6) NOT NULL,
  `Visitor_Id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_relative`
--

CREATE TABLE `pm_relative` (
  `Visitor_Id` varchar(6) NOT NULL,
  `P_No` varchar(8) NOT NULL,
  `VR_Relation` varchar(50) NOT NULL,
  `VR_Gender` varchar(6) NOT NULL,
  `VR_Family_Name` varchar(50) NOT NULL,
  `VR_Given_Name` varchar(50) NOT NULL,
  `VR_DOB` date NOT NULL,
  `VR_Contact_No` decimal(20,0) NOT NULL,
  `VR_AD1` varchar(50) NOT NULL,
  `VR_AD2` varchar(50) NOT NULL,
  `VR_Town` varchar(50) NOT NULL,
  `VR_State` varchar(50) NOT NULL,
  `VR_Postcode` decimal(12,0) NOT NULL,
  `VR_Country` varchar(56) NOT NULL,
  `VR_Residency_Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_tr`
--

CREATE TABLE `pm_tr` (
  `Visitor_Id` varchar(8) NOT NULL,
  `AFP` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_traveling_companions`
--

CREATE TABLE `pm_traveling_companions` (
  `Visitor_Id` varchar(6) NOT NULL,
  `P_No` varchar(8) NOT NULL,
  `TC_Relation` varchar(50) NOT NULL,
  `TC_Gender` varchar(6) NOT NULL,
  `TC_Family_Name` varchar(50) NOT NULL,
  `TC_Given_Name` varchar(50) NOT NULL,
  `TC_DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_visitor_visa`
--

CREATE TABLE `pm_visitor_visa` (
  `Visitor_Id` varchar(6) NOT NULL,
  `Purpose_Of_Visit` varchar(50) NOT NULL,
  `Estimated_Date_Of_Arrival` date NOT NULL,
  `Date_Of_Departure` date NOT NULL,
  `Travelling_Companions` decimal(10,0) DEFAULT NULL,
  `Relative` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pm_dependent_visa`
--
ALTER TABLE `pm_dependent_visa`
  ADD PRIMARY KEY (`Visitor_Id`);

--
-- Indexes for table `pm_english_test`
--
ALTER TABLE `pm_english_test`
  ADD PRIMARY KEY (`Visitor_Id`);

--
-- Indexes for table `pm_finance`
--
ALTER TABLE `pm_finance`
  ADD PRIMARY KEY (`Visitor_Id`);

--
-- Indexes for table `pm_health_and_travelling_history`
--
ALTER TABLE `pm_health_and_travelling_history`
  ADD PRIMARY KEY (`Visitor_Id`);

--
-- Indexes for table `pm_inquiry`
--
ALTER TABLE `pm_inquiry`
  ADD PRIMARY KEY (`Inquiry_ID`);

--
-- Indexes for table `pm_other`
--
ALTER TABLE `pm_other`
  ADD PRIMARY KEY (`Visitor_Id`);

--
-- Indexes for table `pm_passport_details`
--
ALTER TABLE `pm_passport_details`
  ADD PRIMARY KEY (`Visitor_Id`);

--
-- Indexes for table `pm_tr`
--
ALTER TABLE `pm_tr`
  ADD PRIMARY KEY (`Visitor_Id`);

--
-- Indexes for table `pm_visitor_visa`
--
ALTER TABLE `pm_visitor_visa`
  ADD PRIMARY KEY (`Visitor_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
