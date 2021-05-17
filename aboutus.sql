-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: com-linweb188.srv.combell-ops.net:3306
-- Generation Time: May 11, 2021 at 08:56 PM
-- Server version: 5.7.33-36-log
-- PHP Version: 7.1.25-1+0~20181207224605.11+jessie~1.gbpf65b84

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ID329766_kidseducate`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `message`, `date`) VALUES
(1, 'This is a online education platform to teach the future generation. Research shows there is no better time to create\r\n a strong lifelong learning than the first five years of life. It is during this period that the brain develops most rapidly.\r\n And the things that matter most for a healthy brain development, like talking and playing, do not require more time or money.\r\n That is why Kids Learn by D Fram Brother is here.<br><br>Kids Learn believes all parents want\r\n what is best for their children. So we joined with scientists, researchers, and parents to take the science out of\r\n the lab and put it in the hands of caregivers. We provides basic tips and tools to inspire kids to turn shared, \r\neveryday moments into Brain Building Moments.<br><br>Like-minded communities, organizations, brands, and media help \r\nshare kids education Brain Building Moments. Together we are reaching parents where they are, we improve children\'s learning \r\nmethods and their capability.<br><br>Every time we connect with children, it\'s not just their eyes that light up, it\'s their brains, too. \r\nWe help all parents discover that they already have what it takes to boost their child\'s learning', '2021-05-07 04:27:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
