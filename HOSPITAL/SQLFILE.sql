-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 08:20 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_doctors_data`
--

CREATE TABLE `admin_doctors_data` (
  `name` varchar(50) NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Joining_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_doctors_data`
--

INSERT INTO `admin_doctors_data` (`name`, `age`, `gender`, `phone`, `email`, `speciality`, `password`, `Joining_date`) VALUES
('Prakash Rao', '45', 'male', '7474696985', 'prakashrao45@gmail.com', 'Surgeon', '12345', '06-11-22'),
('Jagan Das', '40', 'male', '7596842163', 'jagandas1@gmail.com', 'Diabetologist', '12345', '06-11-22'),
('Kalyan Ram', '45', 'male', '7694283173', 'kalyanram67@gmail.com', 'Diabetologist', '12345', '06-11-22'),
('Manasa R', '30', 'female', '7845875496', 'manasa23@gmail.com', 'Pediatrician', '12345', '06-11-22'),
('Vihari Patel', '40', 'male', '7865123497', 'vihari546@gmail.com', 'Opthalmologist', '12345', '06-11-22'),
('Suraj Katakam', '30', 'male', '7865452174', 'suraj333@gmail.com', 'Physiotherapist', '12345', '06-11-22'),
('Anand Varma', '40', 'male', '7894561230', 'anand23@gmail.com', 'Dentist', '12345', '05-11-22'),
('Vishal Kumar', '35', 'male', '8462793155', 'vishalkumar34@gmail.com', 'Dentist', '12345', '05-11-22'),
('Sahithi Reddy', '30', 'female', '8521479630', 'sahithi333@gmail.com', 'Nuerologist', '12345', '05-11-22'),
('Saran Vinay', '50', 'male', '8525367191', 'saranvinay3@gmail.com', 'Orthopedician', '12345', '06-11-22'),
('Narayan Varma', '50', 'male', '8542132526', 'narayanvarma7@gmail.com', 'Opthalmologist', '12345', '06-11-22'),
('Suhas Bala', '35', 'male', '8547748569', 'suhasbala72@gmail.com', 'Physiotherapist', '12345', '06-11-22'),
('Siri Reddy', '40', 'female', '8564462321', 'sirireddy32@gmail.com', 'Cardiologist', '12345', '06-11-22'),
('Rupesh Singh', '29', 'male', '8585857946', 'rupesh43@gmail.com', 'Pediatrician', '12345', '06-11-22'),
('Damodar Bhanu', '30', 'male', '8956452536', 'damodar11@gmail.com', 'Cardiologist', '12345', '06-11-22'),
('Anvith Das', '33', 'male', '8987898754', 'anvithdas33@gmail.com', 'Surgeon', '12345', '06-11-22'),
('Janaki Ram', '40', 'male', '9247123451', 'janakiram@gmail.com', 'Dentist', '12345', '05-11-22'),
('Aneesh Roy', '34', 'male', '9785469878', 'aneeshroy55@gmail.com', 'Pediatrician', '12345', '06-11-22'),
('Harish Rao', '50', 'male', '9874563210', 'harishrao99@gmail.com', 'Nuerologist', '12345', '05-11-22'),
('Kalyani Devi', '30', 'female', '9955487234', 'kalyanidevi18@gmail.com', 'Orthopedician', '12345', '06-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_data`
--

CREATE TABLE `admin_login_data` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login_data`
--

INSERT INTO `admin_login_data` (`name`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_data`
--

CREATE TABLE `appointment_data` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `speciality` varchar(15) NOT NULL,
  `slot` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_data`
--

INSERT INTO `appointment_data` (`name`, `email`, `phone`, `date`, `gender`, `doctor`, `speciality`, `slot`) VALUES
('Devarsh', 'dev@gmail.com', '9876543210', '2022-11-06', 'male', 'Sahithi Reddy', 'Nuerologist', '12:40 - 13:00'),
('GIRISH', 'girishkumarthatavarthi@gmail.c', '9121438128', '2022-11-07', 'male', 'Vishal Kumar', 'Dentist', '13:00 - 13:20'),
('KATAKAM HANUMAN', 'rapidnitin11@gmail.com', '9121438128', '2022-11-24', 'male', 'Vishal Kumar', 'Dentist', '13:00 - 13:20'),
('Nitin', 'rapidnitin11@gmail.com', '9121438128', '2022-11-06', 'male', 'Aneesh Roy', 'Pediatrician', '12:20 - 12:40'),
('Nitin', 'rapidnitin11@gmail.com', '9121438128', '2022-11-08', 'male', 'Janaki Ram', 'Dentist', '12:00 - 12:20'),
('Suraj Kiran', 'sujju33@gmail.com', '9121438128', '2022-11-11', 'male', 'Kalyani Devi', 'Orthopedician', '13:20 - 13:40');

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `name` varchar(50) NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`name`, `age`, `gender`, `phone`, `email`, `password`, `address`) VALUES
('THATAVARTHI GIRISH KUMAR', '20', 'male', '9121052205', 'girishkumarthatavarthi@gmail.com', '12345', 'HOUSE NO.74,KAVALI\r\nBRUNDAVANAM HOUSING COLONY,1ST LINE'),
('Nitin', '20', 'male', '9121438128', 'rapidnitin11@gmail.com', '12345', 'BRUNDAVANAM HOUSING COLONY , KAVALI'),
('Devarsh', '20', 'male', '9876543210', 'dev@gmail.com', '12345', 'BHC,KAVALI');

-- --------------------------------------------------------

--
-- Table structure for table `speciality_data`
--

CREATE TABLE `speciality_data` (
  `speciality` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speciality_data`
--

INSERT INTO `speciality_data` (`speciality`) VALUES
('Dentist'),
('Nuerologist'),
('Pediatrician'),
('Surgeon'),
('Cardiologist'),
('Opthalmologist'),
('Physiotherapist'),
('Diabetologist'),
('Orthopedician');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_doctors_data`
--
ALTER TABLE `admin_doctors_data`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
