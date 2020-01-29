-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 02:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(50) NOT NULL,
  `nm_pegawai` varchar(70) NOT NULL,
  `ttl` varchar(225) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_masuk` date NOT NULL,
  `bidang` varchar(220) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `ukuran_file` int(11) NOT NULL,
  `direktori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nm_pegawai`, `ttl`, `jk`, `alamat`, `tgl_masuk`, `bidang`, `jabatan`, `golongan`, `nohp`, `nama_file`, `ukuran_file`, `direktori`) VALUES
('16220042', 'DESI RAMADANI', 'Kisaran, 26 Desember 2019', 'Perempuan', 'KISARAN', '2017-12-27', 'Kesetaraan', 'KASUBBAG', 'II A', '-', 'Screenshot_2020_0129_201357.png', 264331, 'foto/Screenshot_2020_0129_201357.png'),
('16220049', 'KORI CAHYATI', 'Kisaran, 26 Desember 2019', 'Perempuan', 'KISARAN', '2018-12-28', 'Pendidikan Non Formal dan Informal', 'Kepala Dinas', 'I B', '-', 'Screenshot_2020_0129_201340.png', 251247, 'foto/Screenshot_2020_0129_201340.png'),
('16220052', 'MUDY RANSYAH', 'TANJUNG BALAI, 19 MEI 1996', 'Laki-laki', 'TANJUNG BALAI', '2020-01-29', 'Kepegawaian', 'KASUBBAG', 'I B', '-', 'IMG_20200129_201641.JPG', 146450, 'foto/IMG_20200129_201641.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('desi', '069e2dd171f61ecffb845190a7adf425', 'desiramadani@gmail.com', 'Desi Ramadani', 1, 'Source 1'),
('kori', 'ee737204f194d27f0888722820c3994a', 'koricahyati@gmail.com', 'Kori Cahyati', 1, 'Source 1'),
('mudy', '4ff62fe8edbdd0cd8683a4ffef27da68', 'mudyrnsyh@gmail.com', 'Mudy Ransyah', 1, 'Source 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
