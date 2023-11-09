-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 02:56 PM
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
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_don_form`
--

CREATE TABLE `blood_don_form` (
  `fullName` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `phoneNumber` int(20) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood_grooup_type` varchar(10) NOT NULL,
  `last_dontation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_don_form`
--

INSERT INTO `blood_don_form` (`fullName`, `occupation`, `phoneNumber`, `emailAddress`, `address`, `blood_grooup_type`, `last_dontation`) VALUES
('Parwinder', 'UX Designer', 2147483647, 'parw@sm.com', 'Sourcemash, phase-8, Sector 91, mohali, Punjab', 'A', '2022-06-17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
