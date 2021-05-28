-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: com-linweb188.srv.combell-ops.net:3306
-- Generation Time: May 29, 2021 at 01:14 AM
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
CREATE DATABASE IF NOT EXISTS `ID329766_kidseducate` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ID329766_kidseducate`;

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

-- --------------------------------------------------------

--
-- Table structure for table `alphabatelecture`
--

CREATE TABLE `alphabatelecture` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alphabatelecture`
--

INSERT INTO `alphabatelecture` (`id`, `video`, `date`) VALUES
(5, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/RX3gpe8jYJ4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:11:33'),
(6, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/k-1dMgvAJMU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:18:16'),
(7, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/abxA_XtnRSc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `animallecture`
--

CREATE TABLE `animallecture` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animallecture`
--

INSERT INTO `animallecture` (`id`, `video`, `date`) VALUES
(9, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/_kYu_HTQ6YM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:21:28'),
(10, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/CA6Mofzh7jo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:23:25'),
(11, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/Gbf1P9s1kQ0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `colorlecture`
--

CREATE TABLE `colorlecture` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colorlecture`
--

INSERT INTO `colorlecture` (`id`, `video`, `date`) VALUES
(5, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/qhOTU8_1Af4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:26:22'),
(6, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/tkpfg-1FJLU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:28:25'),
(7, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/pUPM3DtK9so\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(1, 'ledjo', 'rshifat010@gmail.com', 'dfd', 'dfdf', '2021-05-09 17:35:41'),
(2, 'Admin', 'admin@admin.com', '2323213', 'you are doing great', '2021-05-09 17:35:58'),
(3, 'Admin', 'admin@admin.com', '2323213', 'you are doing great', '2021-05-09 17:36:43'),
(4, 'Admin', 'admin@admin.com', '2323213', 'you are doing great', '2021-05-09 17:37:04'),
(5, 'Admin', 'admin@admin.com', '2323213', 'you are doing great', '2021-05-09 17:38:36'),
(6, 'Admin', 'admin@admin.com', '209830298', 'You are just excelent', '2021-05-10 09:01:10'),
(7, 'Admin', 'admin@admin.com', '209830298', 'You are just excelent', '2021-05-10 09:01:38'),
(8, 'Rahman', 'rahman@gmail.com', '01323424', 'Nice moment with you.', '2021-05-11 18:57:01'),
(9, 'muzamel', 'muzamelhashimi10@gmail.com', '+32483187805', 'heyyyy', '2021-05-28 11:48:35'),
(10, 'sultan aziz sultani', 'muzamelhashimi10@gmail.com', '+32483187805', 'asdasdas', '2021-05-28 11:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `englishlecture`
--

CREATE TABLE `englishlecture` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `englishlecture`
--

INSERT INTO `englishlecture` (`id`, `video`, `date`) VALUES
(2, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/xh31SRczFNk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 13:59:41'),
(3, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/aolmjyuViO8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:01:28'),
(4, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/DJy4PV6kETM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `date`) VALUES
(1, 'Admin', 'email@email.com', 'admin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mathlecture`
--

CREATE TABLE `mathlecture` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mathlecture`
--

INSERT INTO `mathlecture` (`id`, `video`, `date`) VALUES
(4, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/mjlsSYLLOSE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:05:36'),
(5, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/N0_TWQTrJ-k\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:06:34'),
(6, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/SEAKuerLbsk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-05-10 14:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `mathqa`
--

CREATE TABLE `mathqa` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mathqa`
--

INSERT INTO `mathqa` (`id`, `question`, `answer`, `date`) VALUES
(1, '2+3', '5', '2021-05-08 00:57:37'),
(2, '1-1', '0', '2021-05-08 00:57:37'),
(3, '5-3', '2', '2021-05-08 00:57:37'),
(4, '6*1', '6', '2021-05-08 00:57:37'),
(5, '8/4', '2', '2021-05-08 00:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `kphoto` varchar(255) NOT NULL,
  `kfname` text NOT NULL,
  `klname` text NOT NULL,
  `kdate` varchar(255) NOT NULL,
  `confirmkid` varchar(255) NOT NULL,
  `pphoto` varchar(255) NOT NULL,
  `pfname` text NOT NULL,
  `plname` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` text NOT NULL,
  `zip` varchar(255) NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pdate` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `kphoto`, `kfname`, `klname`, `kdate`, `confirmkid`, `pphoto`, `pfname`, `plname`, `address`, `city`, `zip`, `state`, `country`, `email`, `pass`, `phone`, `pdate`, `date`) VALUES
(1, '../images/', 'Abhay', 'Assam', '2021-05-14', 'on', '../images/math.jpg', 's', 'd', 'f', 'f', 'dfd1', 'a', 'bel', 'email@email.com', 'admin', '24343', '2021-06-01', '2021-05-07 15:14:07'),
(5, '../images/1101228.jpg', 'Rahman', 'Rahman', '2021-05-07', 'on', '../images/1101228.jpg', 'Akter', 'Akter', '121/1', 'kkk`', 'dfd1', 'a', 'Belgiam', 'rahman@gmail.com', 'rahman', '98493893', '2021-05-19', '2021-05-08 18:14:48'),
(6, '../images/su.jpg', 'Joe', 'Joe', '2001-01-15', 'on', '../images/su.jpg', 'Papa', 'Maha', '2326 street', 'berchem', '2050', 'flanders', 'belgium', 'joe@joe.com', 'joe123', '84587586', '1985-01-02', '2021-05-11 18:24:19'),
(7, '../images/1101228.jpg', 'rahman', 'a', '2021-05-15', 'on', '../images/1101228.jpg', 's', 'd', 'afdfd', 'dfdf', '232', 'fdfd', 'Belgiam', 'r@gmail.com', 'r123', '243243', '2021-05-19', '2021-05-11 18:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `profession` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `image`, `name`, `profession`, `date`) VALUES
(1, 'boris.jpeg', 'Boris Eto', 'CEO', '2021-05-06 06:45:22'),
(2, 'Logo 2.png', 'Collins Van', 'INVESTOR', '2021-05-06 06:45:22'),
(3, 'fergus.jpg', 'Fergus A ', 'EDUCATION TEACHER ', '2021-05-06 06:48:21'),
(4, 'muzammel.jpeg', 'Muzammel H ', 'HUMAN RESOURCE', '2021-05-06 06:48:21'),
(5, 'ramson.jpeg', 'Ramson N', 'SALES', '2021-05-06 06:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `comment`, `name`, `date`) VALUES
(1, '\"Education is important from the begening state of life\"', '', '2021-05-08 16:56:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alphabatelecture`
--
ALTER TABLE `alphabatelecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animallecture`
--
ALTER TABLE `animallecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colorlecture`
--
ALTER TABLE `colorlecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `englishlecture`
--
ALTER TABLE `englishlecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mathlecture`
--
ALTER TABLE `mathlecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mathqa`
--
ALTER TABLE `mathqa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alphabatelecture`
--
ALTER TABLE `alphabatelecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `animallecture`
--
ALTER TABLE `animallecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `colorlecture`
--
ALTER TABLE `colorlecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `englishlecture`
--
ALTER TABLE `englishlecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mathlecture`
--
ALTER TABLE `mathlecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mathqa`
--
ALTER TABLE `mathqa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
