-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 03:01 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chayanne_lovers`
--

-- --------------------------------------------------------

--
-- Table structure for table `signos`
--

CREATE TABLE `signos` (
  `id` int(11) NOT NULL,
  `signos_zodiaco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signos`
--

INSERT INTO `signos` (`id`, `signos_zodiaco`) VALUES
(1, 'Aries'),
(2, 'Tauro'),
(3, 'Géminis'),
(4, 'Cáncer'),
(5, 'Leo'),
(6, 'Virgo'),
(7, 'Libra'),
(8, 'Escorpio'),
(9, 'Sagitario'),
(10, 'Capricornio'),
(11, 'Acuario'),
(12, 'Piscis');

-- --------------------------------------------------------

--
-- Table structure for table `usuaries`
--

CREATE TABLE `usuaries` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `zodiac_sign` int(11) NOT NULL,
  `song` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `notifications` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuaries`
--

INSERT INTO `usuaries` (`id`, `first_name`, `last_name`, `date_of_birth`, `email`, `zodiac_sign`, `song`, `user_name`, `password`, `notifications`, `comments`) VALUES
(1, 'Antonella', 'Fossati', '1996-10-16', 'antonella_fan1@hotmail.com', 7, 'Torero', 'antonella-45', '1234', 'Yes', 'Querido Chayanne sos el hombre de mi vida'),
(6, 'Juan', 'Carlos', '1975-03-18', 'juancarlos@gmail.com', 5, 'Y ahora tu te vas', 'juancarlos', 'pipopupu', 'no', 'Hola'),
(7, 'ADASD', 'SAFEEFG', '1990-03-03', 'HOLASI@HOTMAIL.COM', 5, 'TORERO', 'HOLASI4', 'ASJAJS', 'yes', 'HOLA QUE TAL'),
(8, 'ASSAD', 'ASDSD', '1990-12-05', 'antofossati@hotmail.com', 4, 'Dejaria todo', 'anto-87', '05087', 'yes', 'AAA'),
(9, 'aaa', 'aaaa', '1970-10-06', 'antofossati@hotmail.com', 4, 'Torero', 'antonella-40', '1234', 'yes', 'querido'),
(10, 'hola', 'queta', '1998-10-16', 'paquita@gmail.com', 3, 'torero', 'torerita', '12345', 'yes', 'holaqueridochayanne');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signos`
--
ALTER TABLE `signos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuaries`
--
ALTER TABLE `usuaries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signos`
--
ALTER TABLE `signos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuaries`
--
ALTER TABLE `usuaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
