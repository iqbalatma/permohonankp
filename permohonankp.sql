-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 12:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `permohonankp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_mahasiswa`
--

CREATE TABLE `kelompok_mahasiswa` (
  `id_kelompok` int(11) NOT NULL,
  `ketua_kelompok` varchar(64) NOT NULL,
  `status_kelompok` varchar(64) NOT NULL,
  `deskripsi_kegiatan` text NOT NULL,
  `bidang_kegiatan` varchar(128) NOT NULL,
  `id_perusahaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelompok_mahasiswa`
--

INSERT INTO `kelompok_mahasiswa` (`id_kelompok`, `ketua_kelompok`, `status_kelompok`, `deskripsi_kegiatan`, `bidang_kegiatan`, `id_perusahaan`) VALUES
(31, '10117124', 'Belum Di Approve', 'Membaut absen perusahaan', 'Programmer', 2),
(32, '10117127', 'Belum Di Approve', 'Membaut absen perusahaan', 'Programmer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim_mahasiswa` varchar(64) NOT NULL,
  `nama_mahasiswa` varchar(128) NOT NULL,
  `posisi` varchar(128) NOT NULL,
  `id_kelompok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim_mahasiswa`, `nama_mahasiswa`, `posisi`, `id_kelompok`) VALUES
('10117124', 'DHIKA NOVIANSYAH', 'Ketua', 31),
('10117125', 'RIEFKY RAMADHAN', 'Anggota', 31),
('10117126', 'BAMBANG SIKAMPANG', 'Anggota', 31),
('10117127', 'JOKO SUTOYO', 'Ketua', 32),
('10117128', 'JOKO SUTOYO', 'Anggota', 32),
('10117129', 'JOKO SUSILO SUTOYO', 'Anggota', 32);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(128) NOT NULL,
  `alamat_perusahaan` varchar(128) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `status` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`, `tanggal_pengajuan`, `status`) VALUES
(1, 'PT Djarum Super', 'Jl. Mahkota Utama', '2020-09-10', 'Belum Di Approve'),
(2, 'PT Telkom Indonesia', 'Jl Lembong', '2020-09-10', 'Belum Di Approve'),
(3, 'PT. UNIKOM ', 'DU ', '2020-09-11', 'Belum Di Approve'),
(4, 'PT. MENCARI CINTA SEJATI', 'Rumah Bill Gates', '2020-09-11', 'Belum Di Approve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelompok_mahasiswa`
--
ALTER TABLE `kelompok_mahasiswa`
  ADD PRIMARY KEY (`id_kelompok`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim_mahasiswa`),
  ADD KEY `id_kelompok` (`id_kelompok`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelompok_mahasiswa`
--
ALTER TABLE `kelompok_mahasiswa`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelompok_mahasiswa`
--
ALTER TABLE `kelompok_mahasiswa`
  ADD CONSTRAINT `kelompok_mahasiswa_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok_mahasiswa` (`id_kelompok`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
