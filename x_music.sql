-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2025 at 09:46 AM
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
-- Database: `x_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `x_music_feedback`
--

CREATE TABLE `x_music_feedback` (
  `nama` varchar(255) NOT NULL,
  `opinion` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `x_music_feedback`
--

INSERT INTO `x_music_feedback` (`nama`, `opinion`, `email`, `feedback_time`) VALUES
('chong', 'iiiiiii', 'm-11880916@moe-dl.edu.my', ''),
('chong', 'drum good good', 'm-11880916@moe-dl.edu.my', ''),
('chong', '1', 'm-11880916@moe-dl.edu.my', '14/08/2025, 3:39:33 pm');

-- --------------------------------------------------------

--
-- Table structure for table `x_music_payment`
--

CREATE TABLE `x_music_payment` (
  `nama` varchar(255) NOT NULL,
  `telephone_number` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `card_number` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `purchase_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `x_music_payment`
--

INSERT INTO `x_music_payment` (`nama`, `telephone_number`, `address`, `card_number`, `product_name`, `purchase_time`) VALUES
('X_Music', 870, 'hbk', 98098, '', '0'),
('X_Music', 870, 'hbk', 98098, '', '0'),
('X_Music', 870, 'sdfsfdsfdg', 98098, '', '0'),
('X_Music', 870, 'sdfsfdsfdg', 98098, '', '0'),
('X_Music', 870, 'sdfsfdsfdg', 98098, 'Stage Custom', '14/08/2025, 12:54:44 pm'),
('oxr', 870, 'sdfsfdsfdg', 98098, 'PSR', '14/08/2025, 1:45:54 pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
