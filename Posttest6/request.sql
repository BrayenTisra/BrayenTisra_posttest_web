-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 12:54 PM
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
-- Database: `posttest5`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(9) NOT NULL,
  `nama_req` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama_pelukis` varchar(255) NOT NULL,
  `tahun_buat` int(4) NOT NULL,
  `lukisan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `nama_req`, `judul`, `nama_pelukis`, `tahun_buat`, `lukisan`) VALUES
(9, 'Brayen', 'Penangkapan Pangeran Diponegoro', 'Raden Saleh', 1857, '2023-10-25 Brayen.jpg'),
(10, 'Tisra', 'Potret Diri', 'Affandi Koesoema', 1981, '2023-10-25 Tisra.jpg'),
(11, 'Sarira', 'Watersnood op Midden Java  ', 'Raden Saleh', 1862, '2023-10-25 Sarira.jpg'),
(12, 'Zarira', 'Bandung Lautan Api', 'Hendra Gunawan', 1972, '2023-10-25 Zarira.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
