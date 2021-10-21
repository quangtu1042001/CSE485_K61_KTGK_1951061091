-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 09:59 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ktgk`
--

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` int(29) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `dose` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `cost_price` int(20) NOT NULL,
  `selling_price` int(100) NOT NULL,
  `expiry` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `production_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `place` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `name`, `type`, `barcode`, `dose`, `code`, `cost_price`, `selling_price`, `expiry`, `company_name`, `production_date`, `expiration_date`, `place`, `quantity`) VALUES
(2, 'vero cell', 'vacxin\r\n', 'A321312B321', '2 tháng tiêm 1 lần\r\n', 'ABC12', 100000, 150000, 'còn tốt\r\n', 'dược phẩm hà nội\r\n', '2021-10-01', '2021-10-31', 'Hà Nội\r\n', 1000),
(3, 'astra2', 'con nhộng\r\n', '3213V231A4B32', '2 tuần dùng 1 lần\r\n', 'CDE345\r\n', 50000, 10000, 'sắp hỏng\r\n', 'dược phẩm Hồ Chí Minh\r\n', '2021-10-02', '2021-10-29', 'Sài Gòn\r\n', 20000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
