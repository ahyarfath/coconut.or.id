-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2019 at 08:56 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_coconut_regis`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(75) NOT NULL,
  `tujuan` text NOT NULL,
  `jurusan` varchar(17) NOT NULL,
  `asal_kampus` varchar(30) NOT NULL,
  `semester` enum('1','3') NOT NULL,
  `foto` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_kelulusan` enum('lulus','tidak') NOT NULL,
  `status_pembayaran` enum('lunas','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `alamat`, `no_hp`, `email`, `tujuan`, `jurusan`, `asal_kampus`, `semester`, `foto`, `created_at`, `updated_at`, `status_kelulusan`, `status_pembayaran`) VALUES
(9, 'george', 'jl.Pettarani I', '08578357283', 'george.selan@gmail.com', 'daftar', 'Sistem Informasi', 'Stmik Professional', '1', 'img2.jpg', '2019-11-12 16:42:54', '2019-11-13 06:09:58', 'lulus', 'lunas'),
(10, 'karmila', 'jl.Korban', '08965657', 'karmila@gmail.com', 'belajar', 'Sistem Informasi', 'Stmik Professional', '3', 'img1.jpg', '2019-11-13 05:55:13', '2019-11-13 06:09:30', 'lulus', 'lunas'),
(11, 'ika', 'djmfhkjfd', '0876736483', 'kdhfjkhfje.', 'daftar', 'Sistem Informasi', 'Stmik Professional', '1', 'FB_IMG_15593157081031704.jpg', '2019-11-13 11:02:17', '2019-11-13 11:02:17', 'lulus', 'lunas'),
(12, 'agus kurniawan', 'kab.sinjai', '0926381', 'agus@gmail.com', 'mau belajar android dev', 'teknik komputer', 'stmik pro', '1', 'Coconut.png', '2019-11-13 13:16:40', '2019-11-13 13:16:40', 'lulus', 'lunas'),
(13, 'Reynaldy Rahmat', 'Jl.Jalan', '123456789102', 'blackscreen405@yahoo.co.id', 'Memperbanyak Teman & Belajar Komputer', 'Teknik Komputer', 'STMIK Profesional Makassar', '1', 'pp (1).jpeg', '2019-11-13 13:27:47', '2019-11-13 13:27:47', 'lulus', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
