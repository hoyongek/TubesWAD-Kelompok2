-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2021 pada 16.34
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

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
-- Struktur dari tabel `admin`
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
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `gambar`, `roles`) VALUES
(1, 'admin', 'admin', 'admin', '', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_technisian`
--

CREATE TABLE `data_technisian` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_technisian`
--

INSERT INTO `data_technisian` (`id`, `nama`, `email`, `password`) VALUES
(1, 'test', 'test@test.com', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `laporan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `email`, `nama`, `laporan`) VALUES
(1, 'test@test.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
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
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `description`, `id_user`, `id_technician`, `status`, `review`, `rating`) VALUES
(3, NULL, 1, 2, 'Menunggu Konfirmasi', NULL, NULL),
(4, NULL, 1, 1, 'Selesai', 'Bagus', 8),
(5, NULL, 1, 1, 'Ditolak', NULL, NULL),
(6, NULL, 1, 1, 'Selesai', 'bagus', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `technician`
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
-- Dumping data untuk tabel `technician`
--

INSERT INTO `technician` (`id`, `nama`, `email`, `password`, `no_hp`, `alamat`, `gambar`, `roles`, `expertise`) VALUES
(1, 'tech', 'tech@test', 'tech', 1012084, 'Jl. Sukabirus', '194446224_Black Bulls.png', 'Technician', 'Computer,AC,Electric'),
(2, 'test', 'test@email', 'test', 192391, 'Jl. Sukabirus', NULL, 'Technician', 'Computer,AC,Electric'),
(3, 'ujang', 'ujang@gmail', 'ujang', 12938, 'Jl. Sukapura', NULL, 'Technician', 'Computer,AC,Electric');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `no_hp`, `alamat`, `gambar`, `roles`) VALUES
(1, 'user', 'user@test', 'user', '080912391', 'Jl. Sukapura', '344170661_peace.jpg', 'User'),
(2, 'coba', 'coba@user', 'coba', '1928031', NULL, NULL, 'User'),
(3, 'tambah', 'tambah@user', 'tambah', '0132891', NULL, NULL, 'User'),
(7, 'teknisi', 'teknisi@teknisi.com', 'teknisi', NULL, NULL, NULL, 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_technisian`
--
ALTER TABLE `data_technisian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_technician` (`id_technician`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_technisian`
--
ALTER TABLE `data_technisian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_technician`) REFERENCES `technician` (`id`),
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
