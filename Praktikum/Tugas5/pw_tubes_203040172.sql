-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 05:35 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040172`
--

-- --------------------------------------------------------

--
-- Table structure for table `novel`
--

CREATE TABLE `novel` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `terbit` date NOT NULL,
  `dimensi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `novel`
--

INSERT INTO `novel` (`id`, `gambar`, `judul`, `pengarang`, `terbit`, `dimensi`) VALUES
(1, '8circle.jpg', 'The Great Mage Return After 4000 Years', 'Barnacle & Kim Deok-yong', '2020-05-04', '773 chapters'),
(2, 'blackfield.png', 'God Of Blackfield', 'Mujang', '2020-06-05', '72 chapters'),
(3, 'cheat.jpg', 'Isekai de Cheat Skill wo te ni Shita', 'Irozuku', '2020-05-26', 'Volume 2 : Afterword'),
(4, 'greatmage.jpg', 'The Great Mage Returns 4000 Years', 'Derek Yee Chun Tin-nam Lau Ho-leung', '2020-05-04', '67 chapters'),
(5, 'maxlevel.jpg', 'The MAX Leveled Hero', 'HONGSIL', '2021-02-05', '12 chapters'),
(6, 'meikyuu.jpg', 'Isekai Meikyuu', 'Shachi Sogano', '2011-12-28', 'Volume 11'),
(7, 'OPM.jpg', 'One Punch Man', 'One', '2015-12-04', '143 chapters'),
(8, 'overgeared.png', 'Overgeared', 'Dong Wook Lee', '2012-12-04', '1250 chapters'),
(9, 'Overlord.jpg', 'Overlord', 'Kugane Maruyama', '2010-10-04', 'Volume 18'),
(10, 'sololeveling.png', 'Solo Leveling', 'Chu-Gong', '2016-10-26', '147 chapters');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `novel`
--
ALTER TABLE `novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
