-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 10:05 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berkas`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `no_urut` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_judul` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `nama_pihaksatu` varchar(100) NOT NULL,
  `nama_pihakdua` varchar(100) NOT NULL,
  `gambar_berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `no_urut`, `tgl_surat`, `tgl_pendaftaran`, `id_kategori`, `id_judul`, `id_tempat`, `nama_pihaksatu`, `nama_pihakdua`, `gambar_berkas`) VALUES
(1, '1160/DA/W/2019', '2019-01-04', '2019-01-04', 1, 1, 1, 'Raka Wisnu', 'Devi Ambar', ''),
(2, '1161/DA/W/2019', '2019-02-01', '2019-02-01', 1, 2, 1, 'Zulfan Hindaraka', 'Indira', ''),
(3, '1162/DA/W/2019', '0001-01-01', '0001-01-01', 1, 1, 1, 'Raka Wisnu', 'Zulfan Hindaraka', 'IMG_49091.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` int(11) NOT NULL,
  `int_bulan` varchar(11) NOT NULL,
  `nama_bulan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `int_bulan`, `nama_bulan`) VALUES
(1, '01', 'Januari'),
(2, '02', 'Februari'),
(3, '03', 'Maret'),
(4, '04', 'April'),
(5, '05', 'Mei'),
(6, '06', 'Juni'),
(7, '07', 'Juli'),
(8, '08', 'Agustus'),
(9, '09', 'September'),
(10, '10', 'Oktober'),
(11, '11', 'November'),
(12, '12', 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `judul_surat`
--

CREATE TABLE `judul_surat` (
  `id_judul` int(11) NOT NULL,
  `nama_judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul_surat`
--

INSERT INTO `judul_surat` (`id_judul`, `nama_judul`) VALUES
(1, 'Surat Kuasa'),
(2, 'Perpanjangan Kredit');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES
(1, 'Akta', '');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `id_tempat` int(11) NOT NULL,
  `nama_tempat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id_tempat`, `nama_tempat`) VALUES
(1, 'Rak 1-100');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `nama_user`, `password_user`, `id_level`) VALUES
(1, 'zulfanhindaraka@gmail.com', 'Zulfan Hindaraka Zudan', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'ristaangrea@gmail.com', 'Rista Angrea', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `judul_surat`
--
ALTER TABLE `judul_surat`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `judul_surat`
--
ALTER TABLE `judul_surat`
  MODIFY `id_judul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
