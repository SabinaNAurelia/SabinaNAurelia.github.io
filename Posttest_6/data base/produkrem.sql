-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 04:02 AM
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
-- Database: `remdata_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `produkrem`
--

CREATE TABLE `produkrem` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produkrem`
--

INSERT INTO `produkrem` (`id`, `category`, `nama`, `price`, `gambar`, `action`) VALUES
(35, 'Face', 'Primer Face', 250000, '2023-10-25-primer.png', ''),
(36, 'Lip', 'Lip and Cheecks', 199000, '2023-10-25-cheeck&lipstick.png', ''),
(37, 'Face', 'Topper Highliter', 400000, '2023-10-25-highliter.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produkrem`
--
ALTER TABLE `produkrem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produkrem`
--
ALTER TABLE `produkrem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
