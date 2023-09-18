-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 01:55 PM
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
-- Database: `olympics`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(1, 'admin123@gmail.com', 'admin123', '12345admin');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `info` varchar(255) NOT NULL,
  `image1` text NOT NULL,
  `image` text NOT NULL,
  `imagelink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `info`, `image1`, `image`, `imagelink`) VALUES
(8, 'Ko KO', 'bar lo chit tr ll', '', 'image.jpg', 'https://www.youtube.com/'),
(9, 'Ko KO', 'bar lo chit tr ll', '', 'image.jpg', 'https://www.youtube.com/'),
(10, 'chit ly', 'asdasdas', '', 'Screenshot (1).png', 'https://www.youtube.com/watch?v=StkLx0e4f6c'),
(11, 'chit sa yr kg ma lay', 'soe wai yan tun kg ma lay', '', 'Screenshot (4).png', 'https://www.youtube.com/watch?v=RvhMrB11emk&list=RDwZ8UIaf2uPA&index=9'),
(12, 'chit sa yr kg ma lay', 'soe wai yan tun kg ma lay', '', 'Screenshot (4).png', 'https://www.youtube.com/watch?v=RvhMrB11emk&list=RDwZ8UIaf2uPA&index=9');

-- --------------------------------------------------------

--
-- Table structure for table `registrationuser`
--

CREATE TABLE `registrationuser` (
  `id` int(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `favsport` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrationuser`
--

INSERT INTO `registrationuser` (`id`, `firstname`, `lastname`, `email`, `password`, `phoneno`, `country`, `city`, `favsport`, `dob`, `gender`) VALUES
(8, '', '', 'soewaiyantunn@gmail.com', 'asdasd', '', '', '', '', '0000-00-00', ''),
(9, '', '', 'asdasd@gmail.com', 'dfgdfgdfg', '', '', '', '', '0000-00-00', ''),
(10, 'ayeyu', 'lynn', 'ayeyulynn123@gmail.com', '12345', '789456', 'Myanmar', 'Yangon', 'Boxing', '2023-07-11', 'Female'),
(11, 'soewai', 'SASD', 'aaaaa@gmail.com', '12345', '78945622', 'USA', 'Yangon', 'Cycling BMX Freestyle', '2023-07-27', 'Male'),
(12, 'yee wai ', 'yan', 'yeewaiyan@gmail.com', '12345', '78784', 'Myanmar', 'Yangon', 'Boxing', '1999-12-29', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationuser`
--
ALTER TABLE `registrationuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registrationuser`
--
ALTER TABLE `registrationuser`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
