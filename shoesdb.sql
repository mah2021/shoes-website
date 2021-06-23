-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 12:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `pro-id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pro-id`, `email`, `num`, `size`, `date`) VALUES
(5, 7, 'designerema3@gmail.com', 5, 37, '2021-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `price-saled` int(11) NOT NULL,
  `detail` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `price-saled`, `detail`, `image`) VALUES
(1, 'shoes', 50000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-2.jpg'),
(3, 'shoes', 60000, 40000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-5.jpg'),
(4, 'shoes', 60000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-10.jpg'),
(5, 'shoes', 30000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-11.jpg'),
(6, 'shoes', 150000, 100000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-3.jpg'),
(7, 'shoes', 80000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-4.jpg'),
(8, 'shoes', 20000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-6.jpg'),
(9, 'shoes', 40000, 35000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-7.jpg'),
(10, 'shoes', 30000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-8.jpg'),
(11, 'shoes', 500000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-9.jpg'),
(12, 'shoes', 60000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-12.jpg'),
(13, 'shoes', 80000, 50000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-13.jpg'),
(14, 'shoes', 80000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-14.jpg'),
(15, 'shoes', 20000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-15.jpg'),
(16, 'shoes', 15000, 10000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-16.jpg'),
(17, 'shoes', 90000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-18.jpg'),
(18, 'shoes', 30000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-17.jpg'),
(19, 'shoes', 60000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-10.jpg'),
(20, 'shoes', 60000, 40000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-5.jpg'),
(21, 'shoes', 30000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium maxime magni tempora ipsa. Quam dicta consectetur officiis doloribus iure omnis libero dolore', 'product-11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
