-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 03:52 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khnote`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `sex` char(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `sex`, `password`, `photo`) VALUES
(9, 'hello ', 'F', 'KE0Xt886euDqo', 'upload/1495774167.png'),
(8, 'kosal', 'M', 'KE0Xt886euDqo', 'upload/1495773856.png'),
(10, 'hello', 'M', 'KEYSX2qgXxCRc', 'upload/1495774966.jpg'),
(11, 'dad', 'M', 'KEMjf49vOEhjk', 'upload/1495775022.jpg'),
(12, 'dog', 'M', 'KEXLGQsnH0YUw', 'upload/1495775249.jpg'),
(13, 'ja', 'F', 'KEz8mw6WtqNS.', 'upload/1495777311.jpg'),
(14, 'steven', 'F', 'KE2o3mS0Hv9gk', ''),
(15, 'chiro', 'meet_yes', 'KEyetU5HQ4IdI', 'upload/1495805480.jpg'),
(16, 'abc', 'F', 'KEU06zlBmEJgY', 'upload/1495805621.jpg'),
(17, 'la', 'F', 'KEtanbuSNCAUw', 'upload/1495807009.png'),
(18, 'iloveyou', 'F', 'KEw0UjMx9Kvz2', 'upload/1495808041.png');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `title` varchar(200) NOT NULL,
  `content` varchar(300) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`title`, `content`, `id`, `username`) VALUES
('monday', 'i go to school', 45, ''),
('eeeeeeeee', 'hytcss yey xh\r\n', 46, ''),
('rewtrtf', 'ewteterw', 48, 'S'),
('tesdgads', 'aaaaaaaaaaaaaaaaaa', 49, 'S'),
('wwww', 'eeeeeeeeeeee', 50, 'S'),
('qww', 'sdd', 51, 'S'),
('Monday', 'Test Software Engineering', 53, 'ja'),
('Sunday', 'Finish homework\r\n', 54, 'ja'),
('Tuesday', 'make up class of Internet Programming', 55, 'iloveyou'),
('monday', 'Update Phpstorm', 56, 'iloveyou'),
('dd', 'asdasf', 57, 'iloveyou');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
