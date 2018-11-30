-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 08:44 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `rest`
--

CREATE TABLE `rest` (
  `id` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `city` char(30) NOT NULL,
  `address` char(30) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(250) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rest`
--

INSERT INTO `rest` (`id`, `name`, `city`, `address`, `photo1`, `photo2`, `rate`) VALUES
(27, 'sobhy kaber', 'cairo', '151 ebied asahel', 'images/images.jpeg', 'images/images1.jpeg', 9),
(28, 'koshary eltahrer', 'cairo', '92 eltahrir bab allouq', 'images/FB_IMG_1543530851790.jpg', 'images/FB_IMG_1543530916095.jpg', 7),
(29, 'elbrens', 'cairo', 'imbaba', 'images/FB_IMG_1543530517531.jpg', 'images/FB_IMG_1543530732496.jpg', 8),
(30, 'abo shaqra', 'assiut', 'ard el maard', 'images/FB_IMG_1543539139304.jpg', 'images/FB_IMG_1543539062418.jpg', 8),
(31, 'spectra', 'assiut', 'ard el maard', 'images/FB_IMG_1543538633184.jpg', 'images/FB_IMG_1543538787699.jpg', 9),
(32, 'om hasan', 'assiut', 'gomhorya st', 'images/FB_IMG_1543539298312.jpg', 'images/FB_IMG_1543539235295.jpg', 6),
(33, 'mcdonalds', 'aswan', 'kornash el nill', 'images/FB_IMG_1543538482613.jpg', 'images/Screenshot_2018-11-30-05-18-19.png', 6),
(34, 'kfc', 'aswan', 'kornash el nill', 'images/Screenshot_2018-11-30-05-20-29.png', 'images/Screenshot_2018-11-30-05-20-17.png', 6),
(35, 'hosny', 'aswan', 'mall aswan blaza', 'images/FB_IMG_1543531140860.jpg', 'images/images (2).jpg', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rest`
--
ALTER TABLE `rest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rest`
--
ALTER TABLE `rest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
