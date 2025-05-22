-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 10:17 PM
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
-- Database: `veggicart`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `inStock` tinyint(1) NOT NULL,
  `price` double NOT NULL,
  `curency` varchar(5) NOT NULL,
  `img` text NOT NULL,
  `category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `disc`, `inStock`, `price`, `curency`, `img`, `category`) VALUES
(1, 'Watermeloen', 'fresh out of the farm watermeloens', 1, 5, '$/kg', './rec/watermeloen.jpg', 'fru'),
(2, 'strawberry', 'fresh out of the farm strawberry', 1, 2, '$/kg', './rec/strawberry.webp', 'fru'),
(3, 'Carrot', 'fresh out of the farm Carrot', 1, 0.5, '$/kg', './rec/Carrot.jpg', 'veg'),
(6, 'GrapesGreen', 'fresh out of the farm GrapesGreen', 1, 0.5, '$/kg', './rec/GrapesGreen.jpg', 'fru'),
(7, 'Fig', 'fresh out of the farm Fig', 1, 0.5, '$/kg', './rec/fig.jpg', 'fru'),
(8, 'Potato', 'fresh out of Bikaa Potato', 1, 1.5, '$/kg', './rec/potato.jpg', 'veg'),
(9, 'Cherry', 'fresh out of farm Cherry', 1, 1, '$/kg', './rec/cherries.jpg', 'fru'),
(10, 'Jenerek', 'fresh out of farm Jenerek', 1, 5, '$/kg', './rec/jenerek.webp', 'fru'),
(11, 'Avocado', 'Fresh avocado imported from Africa', 1, 5, '$/kg', './rec/Avocado.jpg\r\n', 'fru'),
(12, 'Cucumber', 'Fresh cucumber', 1, 0.5, '$/kg', './rec/cucumber.jpg', 'veg'),
(13, 'Mango', 'Fresh mango imported from Africa', 1, 4, '$/kg', './rec/mango.jpg', 'fru'),
(14, 'Melon', 'fresh Sweet melons ', 1, 2, '$/kg', './rec/melon.jpg', 'fru'),
(16, 'Pear', 'fresh pears', 1, 1, '$/kg', './rec/pear.jpg', 'fru'),
(17, 'Peach', 'Fresh peach ', 1, 2, '$/kg', './rec/peach.jpg\r\n', 'fru'),
(18, 'Tomato', 'Fresh tomato', 1, 0.5, '$/kg', './rec/tomato.webp', 'veg'),
(19, 'Red Onion', 'Fresh Red onions from india', 1, 1, '$/kg', './rec/onion.avif', 'veg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
