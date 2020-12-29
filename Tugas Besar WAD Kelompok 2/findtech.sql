-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 06:23 PM
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
-- Database: `findtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `roles` varchar(10) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `gambar`, `roles`) VALUES
(1, 'admin', 'admin', 'admin', '', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(10) NOT NULL,
  `description` text DEFAULT NULL,
  `id_user` int(10) NOT NULL,
  `id_technician` int(10) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `review` varchar(255) DEFAULT NULL,
  `rating` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `description`, `id_user`, `id_technician`, `status`, `review`, `rating`) VALUES
(3, NULL, 1, 2, 'Menunggu Konfirmasi', NULL, NULL),
(4, NULL, 1, 1, 'Selesai', 'Bagus', 8),
(5, NULL, 1, 1, 'Ditolak', NULL, NULL),
(6, NULL, 1, 1, 'Selesai', 'bagus', 9);

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` bigint(13) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `roles` varchar(10) NOT NULL DEFAULT 'Technician',
  `expertise` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `nama`, `email`, `password`, `no_hp`, `alamat`, `gambar`, `roles`, `expertise`) VALUES
(1, 'tech', 'tech@test', 'tech', 1012084, 'Jl. Sukabirus', '194446224_Black Bulls.png', 'Technician', 'Computer,AC,Electric'),
(2, 'test', 'test@email', 'test', 192391, 'Jl. Sukabirus', NULL, 'Technician', 'Computer,AC,Electric'),
(3, 'ujang', 'ujang@gmail', 'ujang', 12938, 'Jl. Sukapura', NULL, 'Technician', 'Computer,AC,Electric');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `roles` varchar(10) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `no_hp`, `alamat`, `gambar`, `roles`) VALUES
(1, 'user', 'user@test', 'user', '080912391', 'Jl. Sukapura', '344170661_peace.jpg', 'User'),
(2, 'coba', 'coba@user', 'coba', '1928031', NULL, NULL, 'User'),
(3, 'tambah', 'tambah@user', 'tambah', '0132891', NULL, NULL, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_technician` (`id_technician`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_technician`) REFERENCES `technician` (`id`),
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
