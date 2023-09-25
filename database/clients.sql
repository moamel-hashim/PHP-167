-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 25, 2023 at 01:11 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clients`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientsinformation`
--

CREATE TABLE `clientsinformation` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `state/country` varchar(100) NOT NULL,
  `company` varchar(50) NOT NULL,
  `Phone` varchar(13) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact` enum('phone','email') NOT NULL,
  `website` set('site design','site redesign','online store','marketing','maintenance') NOT NULL,
  `programmingLanguages` set('html/dhtml','cgi/perl/c/c++','java','asp','xml') NOT NULL,
  `clientsDatabase` set('acess','sql','sybase','oracle') NOT NULL,
  `multimedia` set('flash','quicktime','media player','real') NOT NULL,
  `corporateDesign` set('marketing','logos','packaging','annual reports') NOT NULL,
  `other` varchar(255) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientsinformation`
--

INSERT INTO `clientsinformation` (`id`, `name`, `email`, `URL`, `state/country`, `company`, `Phone`, `city`, `contact`, `website`, `programmingLanguages`, `clientsDatabase`, `multimedia`, `corporateDesign`, `other`, `comments`) VALUES
(1, 'Moamel', 'sdhaksjhjdajkhsdhkjas@gmail.com', 'www.moamel-hashim.vercel', 'California', 'the Hashim', '6199238894', 'La Mesa', 'phone', 'site design,site redesign,online store,marketing', 'html/dhtml,java,xml', 'sql', 'flash,media player', 'marketing,logos', 'None', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientsinformation`
--
ALTER TABLE `clientsinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientsinformation`
--
ALTER TABLE `clientsinformation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
