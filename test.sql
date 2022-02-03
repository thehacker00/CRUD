-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 02:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category`) VALUES
('electronics'),
('laptop'),
('mobile'),
('accessories');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `discription` varchar(200) NOT NULL,
  `category` varchar(30) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `price`, `discription`, `category`, `image`) VALUES
(1, 'Mi', 20000, 'Smart phone', 'mobile', 'MI.jpg'),
(2, 'Vivo', 30000, 'Advance Phone', 'mobile', 'vivo.jpg'),
(3, 'Iphone', 70000, 'High features', 'mobile', 'iphone.png'),
(4, 'Oppo', 27000, 'Budget Smart phone', 'mobile', 'oppo.jpeg'),
(5, 'HP ', 60000, 'Budget Laptop', 'laptop', 'hp.jpg'),
(6, 'Lenovo', 70000, 'Mid range laptop', 'laptop', 'lenovo.jpg'),
(7, 'Macbook', 120000, 'Laptop with high features', 'laptop', 'macbook.jpg'),
(8, 'Sony TV', 150000, '4k Qled TV', 'electronics', 'sony.jpg'),
(9, 'MI TV', 60000, ' 4k HDR TV', 'electronics', 'mi tv.jpg'),
(10, 'Keyboard', 1200, ' Mechanical Keyboard', 'accessories', 'keyboard.jpg'),
(11, 'Mouse', 800, ' Wired Mouse', 'accessories', 'mouse.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
