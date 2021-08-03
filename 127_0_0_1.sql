-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 01:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logeo`
--
DROP DATABASE IF EXISTS `logeo`;
CREATE DATABASE IF NOT EXISTS `logeo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `logeo`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(70) DEFAULT NULL,
  `Apellido` varchar(80) DEFAULT NULL,
  `Correo` varchar(40) DEFAULT NULL,
  `Contra` varchar(255) DEFAULT NULL,
  `CodRecup` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `Nombre`, `Apellido`, `Correo`, `Contra`, `CodRecup`) VALUES
(1, 'Ivan', 'Vel', 'ivanveluna@gmail.com', '$2y$10$wvEWt7mNUKtafQaWbvGHYeCF5mqgMqSRfscOhecqVpqnQnDcnXMC', '2424'),
(2, 'Lux', 'Crowreal', 'luxana@gmail.com', '$2y$10$FefUkAzHDHKTeSiJM9IkfuG5i2TnuTY7oE8GpDr9J8NTneexBQzfK', '2525'),
(3, 'Marcos', 'Mamani Quispe', 'marcos@gmail.com', '$P$9IQRaTwmfeRo7ud9Fh4E2PdI0S3r.L0', NULL),
(4, 'Joel', 'Zuniga', 'joel@gmail.com', '$2y$10$KwMnXJBuqWCeuoGxRLAZqOFpucfjrmD8LJv1P0Chw3M5PR9maZTye', '2626'),
(5, 'Ivan', 'Velazquez', 'ivan@gmail.com', '$2y$10$ZU//yh8vNcRNz8mZA3qHW.bj7tJzJ7H0qepq8VogjiVFmo3mbtIHe', '3030');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
