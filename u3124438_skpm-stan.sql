-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Okt 2017 pada 08.24
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u3124438_skpm-stan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
`ID` int(20) NOT NULL,
  `NPM` varchar(20) NOT NULL,
  `krpm` int(10) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `lingkup` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `nilai` int(100) NOT NULL,
  `keterangan` text NOT NULL,
  `dokumen` varchar(200) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`ID`, `NPM`, `krpm`, `kode`, `nama_kegiatan`, `lingkup`, `tgl_mulai`, `tgl_selesai`, `nilai`, `keterangan`, `dokumen`, `status`) VALUES
(10, '153060021493', 4449, 'LA44', 'Capacity Building', 'Lembaga', '2017-09-17', '2017-09-28', 99, '-', '747095.jpg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `npm` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `progstud` varchar(20) NOT NULL,
  `th_akademi` varchar(20) NOT NULL,
  `kelas` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `progstud`, `th_akademi`, `kelas`) VALUES
('153060021192', 'Anjasmara', 'Akuntansi', '20', 4),
('153060021493', 'Muhammad Taqi Abdul Aziz', 'Akuntansi', '2015-2016', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE IF NOT EXISTS `mhs` (
`id` int(3) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `kelas` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`id`, `nim`, `nama`, `jurusan`, `kelas`) VALUES
(2, 'l200130174', 'Lelly', 'pendidikan matematika', 'b'),
(5, '15306002149', 'M Taqi', 'Akuntansi', '3-'),
(6, '15306002149', 'Anjas', 'Jurusan 1', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
 ADD PRIMARY KEY (`ID`), ADD KEY `npm` (`NPM`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
