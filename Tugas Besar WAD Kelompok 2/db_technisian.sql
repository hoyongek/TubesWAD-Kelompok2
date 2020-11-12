-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 04:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_technisian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `idRoles` int(1) NOT NULL DEFAULT 2,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `idRoles`, `username`, `password`) VALUES
(1, 2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `regist_user`
--

CREATE TABLE `regist_user` (
  `username` varchar(30) NOT NULL,
  `idRoles` int(1) NOT NULL DEFAULT 1,
  `nama` varchar(50) NOT NULL,
  `psw_repeat` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regist_user`
--

INSERT INTO `regist_user` (`username`, `idRoles`, `nama`, `psw_repeat`, `email`, `no_hp`, `password`) VALUES
('grace', 1, 'grace', '', 'grace@grace.com', '082455564', '8ff861bcfd87bd85e9b207ea74cb6596'),
('tre', 1, 'tre', '123', 'tre@a.com', '1321', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'teknisi');

-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--

CREATE TABLE `specialist` (
  `id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `techID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tech`
--

CREATE TABLE `tech` (
  `id` int(9) NOT NULL,
  `idRoles` int(1) NOT NULL DEFAULT 3,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contNum` bigint(13) NOT NULL,
  `address` text NOT NULL,
  `desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tech`
--

INSERT INTO `tech` (`id`, `idRoles`, `username`, `password`, `name`, `email`, `contNum`, `address`, `desc`) VALUES
(202011001, 3, 'FahriR', '', 'Fahri Rahmad', 'fahrirahmad@gmail.com', 81288888888, 'Jl. Sukabirus No.47', 'Saya merupakan seorang teknisi yang berkutat dalam bidang komputer, router, switch, dll.'),
(202011002, 3, 'RobiGusman', '', 'Robi Gusman', 'robigusman12@gmail.com', 82184917502, 'Jl. Sukapura no.93', 'Saya berumur 28 tahun dan seorang teknisi yang dalam bidang perangkat rumah seperti AC, Kulkas, TV, dan sebgainya.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRoles` (`idRoles`);

--
-- Indexes for table `regist_user`
--
ALTER TABLE `regist_user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `idRoles` (`idRoles`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialist`
--
ALTER TABLE `specialist`
  ADD KEY `techID` (`techID`);

--
-- Indexes for table `tech`
--
ALTER TABLE `tech`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRoles` (`idRoles`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tech`
--
ALTER TABLE `tech`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202011003;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`idRoles`) REFERENCES `roles` (`id`);

--
-- Constraints for table `regist_user`
--
ALTER TABLE `regist_user`
  ADD CONSTRAINT `regist_user_ibfk_1` FOREIGN KEY (`idRoles`) REFERENCES `roles` (`id`);

--
-- Constraints for table `specialist`
--
ALTER TABLE `specialist`
  ADD CONSTRAINT `specialist_ibfk_1` FOREIGN KEY (`techID`) REFERENCES `tech` (`id`);

--
-- Constraints for table `tech`
--
ALTER TABLE `tech`
  ADD CONSTRAINT `tech_ibfk_1` FOREIGN KEY (`idRoles`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
