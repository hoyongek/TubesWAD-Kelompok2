-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2020 pada 14.39
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `regist_user`
--

CREATE TABLE `regist_user` (
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `psw_repeat` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `regist_user`
--

INSERT INTO `regist_user` (`username`, `nama`, `psw_repeat`, `email`, `no_hp`, `password`) VALUES
('', '', '', '', '', ''),
('grace', 'grace', '', 'grace@grace.com', '082455564', '8ff861bcfd87bd85e9b207ea74cb6596'),
('tre', 'tre', '123', 'tre@a.com', '1321', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `regist_user`
--
ALTER TABLE `regist_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
