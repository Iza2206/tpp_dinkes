-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 10:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpp_dinkes`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_pegawai`
--

CREATE TABLE `dt_pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `inp_nip_pegawai` varchar(20) NOT NULL,
  `inp_nm_lengkap` varchar(255) NOT NULL,
  `inp_tgl_lahir` varchar(100) NOT NULL,
  `inp_alamat` text NOT NULL,
  `inp_jabatan` varchar(255) NOT NULL,
  `inp_npwp` varchar(50) NOT NULL,
  `inp_nm_unit` varchar(100) NOT NULL,
  `inp_golongan` varchar(100) NOT NULL,
  `inp_besaran_tpp` text NOT NULL,
  `inp_no_rekening` varchar(100) NOT NULL,
  `inp_status_peg` varchar(10) NOT NULL,
  `inp_umur_pensiun` varchar(50) NOT NULL,
  `inp_saskerja` varchar(100) NOT NULL,
  `inp_bpjs_gaji` text NOT NULL,
  `inp_kls_jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dt_pegawai`
--

INSERT INTO `dt_pegawai` (`pegawai_id`, `inp_nip_pegawai`, `inp_nm_lengkap`, `inp_tgl_lahir`, `inp_alamat`, `inp_jabatan`, `inp_npwp`, `inp_nm_unit`, `inp_golongan`, `inp_besaran_tpp`, `inp_no_rekening`, `inp_status_peg`, `inp_umur_pensiun`, `inp_saskerja`, `inp_bpjs_gaji`, `inp_kls_jabatan`) VALUES
(6, '789676', 'ghffghdfghghgh', '2024-02-28', 'hj', 'hj', '53252', 'Dinas Kesehatan11', 'I/c-Juru', '6675676776', '575467', 'Aktif', '78', 'D20000502600001', '2345', '3'),
(7, '', 'wewetewt', '2020-04-13', 'aefeq', 'ergerger', '34554', 'Dinas Kesehatan11', 'IV/c-Pembina Utama Muda', '1211212121', '212421412412412412412', 'Aktif', '45', 'D20000502600002', '4362346346', '4');

-- --------------------------------------------------------

--
-- Table structure for table `dt_unit_kerja`
--

CREATE TABLE `dt_unit_kerja` (
  `id_unit` int(11) NOT NULL,
  `inp_nm_unit` varchar(100) NOT NULL,
  `inp_alamat` varchar(255) NOT NULL,
  `inp_nip` varchar(100) NOT NULL,
  `inp_nm_pegawai` varchar(255) NOT NULL,
  `inp_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dt_unit_kerja`
--

INSERT INTO `dt_unit_kerja` (`id_unit`, `inp_nm_unit`, `inp_alamat`, `inp_nip`, `inp_nm_pegawai`, `inp_jabatan`) VALUES
(2, 'Dinas Kesehatan11', 'Jl. Medan Lubuk Pakam11', '121212120111', 'dr. Siapa11', 'dr. Siapa11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_pegawai`
--
ALTER TABLE `dt_pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indexes for table `dt_unit_kerja`
--
ALTER TABLE `dt_unit_kerja`
  ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_pegawai`
--
ALTER TABLE `dt_pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dt_unit_kerja`
--
ALTER TABLE `dt_unit_kerja`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
