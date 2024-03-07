-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 08:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_datawarga1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_warga`
--

CREATE TABLE `data_warga` (
  `No` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jk` varchar(50) NOT NULL,
  `Tempat_lahir` varchar(50) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Nik` int(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Desa` varchar(30) NOT NULL,
  `Kecamatan` varchar(30) NOT NULL,
  `Kabupaten_kota` varchar(50) NOT NULL,
  `Provinsi` varchar(30) NOT NULL,
  `Alamat_tujuan_pindah` varchar(50) NOT NULL,
  `Desa_tujuan` varchar(50) NOT NULL,
  `Kecamatan_tujuan` varchar(50) NOT NULL,
  `Kabupaten_kota_tujuan` varchar(50) NOT NULL,
  `Provinsi_tujuan` varchar(50) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_warga`
--

INSERT INTO `data_warga` (`No`, `Nama`, `Jk`, `Tempat_lahir`, `Tanggal_lahir`, `Nik`, `Alamat`, `Desa`, `Kecamatan`, `Kabupaten_kota`, `Provinsi`, `Alamat_tujuan_pindah`, `Desa_tujuan`, `Kecamatan_tujuan`, `Kabupaten_kota_tujuan`, `Provinsi_tujuan`, `Waktu`) VALUES
(116, 'Nanda ', 'perempuan', 'Bandung', '2005-12-28', 2147483647, 'Kp. Cibedug rt.01 rw01', 'Bojong', 'Rongga', 'Gununghalu', 'jawa barat', 'bogor', 'Cilengsi', 'Sukamaju', 'Lebak balong', 'jambi', '2024-02-06 04:36:03'),
(117, 'shifa ', 'perempuan', 'Rongga', '2024-02-03', 2147483647, 'Kp. Pasirmalang rt.01 rw01', 'sukamanah', 'gununghalu', 'Ciledug', 'Jawa barat', 'Cimahi', 'Lengsar', 'Padasuka', 'Cigirang', 'Jakarta', '2024-02-06 06:11:12'),
(118, 'Nadia', 'perempuan', 'Bandung', '2024-02-07', 2147483647, 'kjfksdgi8ujguh g', 'jrioujj uigg', 'kgokrigj gjn ', 'kogkfokt', 'kokbhj', 'kkhkj', 'kghijugg', 'jtgr8iujtfryhfg', 'jr8eutr8f7tgfyehg', 'gjui87etggfu', '2024-02-06 06:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `No` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`No`, `user`, `pass`) VALUES
(1, 'nanda@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
