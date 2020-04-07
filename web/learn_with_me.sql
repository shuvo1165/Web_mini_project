-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2020 at 03:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_with_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `First_name` varchar(12) DEFAULT NULL,
  `Last_name` varchar(12) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Course_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`First_name`, `Last_name`, `Email`, `Phone`, `Gender`, `Birthday`, `Course_code`) VALUES
('Nymur', 'Shuvo', 'shuvo.nrs1996@gmail.com', 1956886474, 'male', '1996-11-17', 'ME103'),
('hfuefe', 'eeeer', 'wded@uff.co', 33, 'male', '2020-04-14', 'wdf'),
('edewww', 'dew', 'bdhhd@hdsn.cihn', 98655, 'male', '2020-04-01', 'ME-202'),
('rrt', 'ertr', 'wew@edjhw.cij', 98762, 'male', '2020-04-21', 'ME-102'),
('erfre', 'erer', 'fsd@ss.cd', 1700000000, 'female', '0000-00-00', 'MA-101'),
('tytt', 'rthy', 'bdhhd@hdsn.cihn', 7789976, 'male', '2020-04-21', 'ME-404'),
('shanto', 'rehman', 'hshjjjs734h@hfhhd.hhd', 99477431, 'male', '2020-04-14', 'ME-102');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
