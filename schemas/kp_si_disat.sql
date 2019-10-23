-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2018 at 06:35 PM
-- Server version: 10.0.33-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_si_disat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diksar`
--

CREATE TABLE `data_diksar` (
  `id_diksar` int(11) NOT NULL,
  `id_kesehatan` int(11) DEFAULT NULL,
  `id_sertifikat` int(11) DEFAULT NULL,
  `nilai` int(5) DEFAULT NULL,
  `status` enum('lulus','tidak lulus') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diksar`
--

INSERT INTO `data_diksar` (`id_diksar`, `id_kesehatan`, `id_sertifikat`, `nilai`, `status`) VALUES
(1, 7, 3, 85, 'lulus'),
(2, 8, 3, 80, 'lulus');

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id_kesehatan` int(11) NOT NULL,
  `id_pembayaran` int(11) DEFAULT NULL,
  `penyakit` text,
  `status` enum('pelatihan khusus','pelatihan normal') DEFAULT 'pelatihan normal',
  `tensi` int(4) DEFAULT NULL,
  `cek_data_diksar` enum('belum','sudah') NOT NULL DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kesehatan`
--

INSERT INTO `kesehatan` (`id_kesehatan`, `id_pembayaran`, `penyakit`, `status`, `tensi`, `cek_data_diksar`) VALUES
(7, 1, '', 'pelatihan normal', 180, 'sudah'),
(8, 2, '', 'pelatihan normal', 110, 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `jabatan` enum('bagian_umum','bagian_kesehatan','administrator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_user`, `nama`, `alamat`, `umur`, `jabatan`) VALUES
(1, 1, 'mimin', 'pekanbaru', 21, 'administrator'),
(3, 2, 'umum', 'pekanbaru', 21, 'bagian_umum'),
(4, 3, 'kesehatan', 'pekanbaru', 22, 'bagian_kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `nama` varchar(50) DEFAULT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `cek_kesehatan` enum('sudah','belum') NOT NULL DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`nama`, `id_pembayaran`, `id_pendaftaran`, `tanggal`, `jumlah`, `cek_kesehatan`) VALUES
('geri', 1, 1, '2018-02-01', 100000, 'sudah'),
('zelvi', 2, 4, '2018-02-06', 100000, 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` enum('islam','kristen','hindu','budha') DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tinggi` int(3) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `riwayat_sekolah` text,
  `berat` int(3) DEFAULT NULL,
  `status_bayar` enum('sudah_bayar','belum_bayar') NOT NULL DEFAULT 'belum_bayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nama`, `umur`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `tinggi`, `alamat`, `riwayat_sekolah`, `berat`, `status_bayar`) VALUES
(1, 'geri', 20, 'L', 'islam', 'pekanbaru', '1997-09-30', 180, 'pekanbaru', 'sd smp sma', 65, 'sudah_bayar'),
(2, 'roni', 21, 'L', 'islam', 'teluk kuantan', '1997-01-01', 156, 'teluk kuantan', 'sd 1\r\nsmp 1\r\nsma 1', 75, 'belum_bayar'),
(3, 'asd', 22, 'L', 'islam', 'asd', '1995-09-20', 180, 'asd', 'sd smp sma', 70, 'belum_bayar'),
(4, 'zelvi', 22, 'L', 'islam', 'pekanbaru', '1995-09-20', 170, 'pekanbaru', 'sd smp sma', 65, 'sudah_bayar');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `periode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertifikat`, `periode`) VALUES
(3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `nip` varchar(35) DEFAULT NULL,
  `password` text,
  `hak_akses` enum('administrator','bagian_umum','bagian_kesehatan','calon_diksar') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `nip`, `password`, `hak_akses`) VALUES
(1, 'admin@gmail.com', '1', '21232f297a57a5a743894a0e4a801fc3', 'administrator'),
(2, 'umum@gmail.com', '2', 'adfab9c56b8b16d6c067f8d3cff8818e', 'bagian_umum'),
(3, 'kesehatan@kesehatan', '3', '03c7173d2ed6323f73452218ae626b78', 'bagian_kesehatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diksar`
--
ALTER TABLE `data_diksar`
  ADD PRIMARY KEY (`id_diksar`),
  ADD KEY `id_sertifikat` (`id_sertifikat`),
  ADD KEY `id_kesehatan` (`id_kesehatan`);

--
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id_kesehatan`),
  ADD KEY `id_pembayaran` (`id_pembayaran`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayaran_ibfk_1` (`id_pendaftaran`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_diksar`
--
ALTER TABLE `data_diksar`
  MODIFY `id_diksar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kesehatan`
--
ALTER TABLE `kesehatan`
  MODIFY `id_kesehatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_diksar`
--
ALTER TABLE `data_diksar`
  ADD CONSTRAINT `data_diksar_ibfk_1` FOREIGN KEY (`id_sertifikat`) REFERENCES `sertifikat` (`id_sertifikat`),
  ADD CONSTRAINT `data_diksar_ibfk_2` FOREIGN KEY (`id_kesehatan`) REFERENCES `kesehatan` (`id_kesehatan`);

--
-- Constraints for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD CONSTRAINT `kesehatan_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran` (`id_pendaftaran`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
