-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 02:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_box`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `user_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `password`, `email`, `number`, `birthday`, `user_created`) VALUES
(1, 'tanmay', '202cb962ac59075b964b07152d234b70', 'tpvarade@mitaoe.ac.in', 2147483647, '2019-04-26', '2019-04-28 06:08:39'),
(2, 'amartya', '81dc9bdb52d04dc20036dbd8313ed055', 'adthorat@mitaoe.ac.in', 1245789632, '2019-04-26', '2019-04-28 11:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `sid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `album` varchar(50) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `filepath` varchar(1000) NOT NULL,
  `songtheme` varchar(1000) NOT NULL,
  `rdate` date NOT NULL,
  `uploadDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`sid`, `title`, `album`, `artist`, `filepath`, `songtheme`, `rdate`, `uploadDate`, `genre`) VALUES
(2, 'Duniya-Lukka Chuppi', 'Luka Chuppi', 'Arjit Singh', 'Duniyaa - Luka Chuppi.mp3', 'lp1.jpg', '2019-05-10', '2019-04-30 22:38:10', 'Movie'),
(3, 'Jawani Song', 'Student of The Year 2', 'Rammanna Singh', 'The Jawaani Song - SOTY 2.mp3', 'sd.jpg', '2019-05-11', '2019-04-30 22:44:58', 'Movie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `id_2` (`id`,`username`,`email`,`number`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
