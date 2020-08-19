-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2016 at 01:59 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `idAdministrator` int(2) NOT NULL,
  `nama` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_login` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`idAdministrator`, `nama`, `username`, `password`, `current_login`, `last_login`) VALUES
(1, 'Razi', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2016-01-04 19:55:44', '2015-03-28 01:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `idmata_pelajaran` int(5) NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`idmata_pelajaran`, `nama`) VALUES
(9, 'Matematika'),
(10, 'Bahasa Inggris'),
(11, 'Fisika'),
(12, 'Biologi'),
(13, 'Pendidikan Agama Islam'),
(14, 'Teknologi Informasi Dan Komunikasi'),
(15, 'Sosiologi'),
(16, 'Bahasa Daerah'),
(17, 'Olahraga'),
(18, 'Kimia'),
(19, 'Bahasa Indonesia'),
(20, 'Bahasa Jerman');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran_has_ruang_kelas`
--

CREATE TABLE `mata_pelajaran_has_ruang_kelas` (
  `idmata_pelajaran` int(3) NOT NULL,
  `idRuang_Kelas` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mata_pelajaran_has_ruang_kelas`
--

INSERT INTO `mata_pelajaran_has_ruang_kelas` (`idmata_pelajaran`, `idRuang_Kelas`) VALUES
(9, '1'),
(9, '10'),
(9, '11'),
(9, '12'),
(9, '2'),
(9, '3'),
(9, '4'),
(9, '5'),
(9, '6'),
(9, '7'),
(9, '8'),
(9, '9'),
(10, '1'),
(10, '10'),
(10, '11'),
(10, '12'),
(10, '2'),
(10, '3'),
(10, '4'),
(10, '5'),
(10, '6'),
(10, '7'),
(10, '8'),
(10, '9'),
(11, '1'),
(11, '2'),
(11, '3'),
(11, '4'),
(11, '5'),
(11, '6'),
(11, '7'),
(11, '8'),
(12, '1'),
(12, '2'),
(12, '3'),
(12, '4'),
(12, '5'),
(12, '6'),
(12, '7'),
(12, '8'),
(13, '1'),
(13, '10'),
(13, '11'),
(13, '12'),
(13, '2'),
(13, '3'),
(13, '4'),
(13, '5'),
(13, '6'),
(13, '7'),
(13, '8'),
(13, '9'),
(14, '1'),
(14, '10'),
(14, '11'),
(14, '12'),
(14, '2'),
(14, '3'),
(14, '4'),
(14, '5'),
(14, '6'),
(14, '7'),
(14, '8'),
(14, '9'),
(15, '1'),
(15, '10'),
(15, '11'),
(15, '12'),
(15, '2'),
(15, '3'),
(15, '4'),
(15, '9'),
(16, '10'),
(16, '11'),
(16, '12'),
(16, '9'),
(17, '1'),
(17, '10'),
(17, '11'),
(17, '12'),
(17, '2'),
(17, '3'),
(17, '4'),
(17, '5'),
(17, '6'),
(17, '7'),
(17, '8'),
(17, '9'),
(18, '1'),
(18, '2'),
(18, '3'),
(18, '4'),
(18, '5'),
(18, '6'),
(18, '7'),
(18, '8'),
(19, '1'),
(19, '10'),
(19, '11'),
(19, '12'),
(19, '2'),
(19, '3'),
(19, '4'),
(19, '5'),
(19, '6'),
(19, '7'),
(19, '8'),
(19, '9'),
(20, ''),
(20, '10'),
(20, '11'),
(20, '12'),
(20, '5'),
(20, '6'),
(20, '7'),
(20, '8'),
(20, '9');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_kelas`
--

CREATE TABLE `ruang_kelas` (
  `idRuang_Kelas` int(5) NOT NULL,
  `nama` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_siswa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ruang_kelas`
--

INSERT INTO `ruang_kelas` (`idRuang_Kelas`, `nama`, `jumlah_siswa`) VALUES
(1, 'X - 1', 40),
(2, 'X - 2', 42),
(3, 'X - 3', 40),
(4, 'X - 4', 40),
(5, 'XI IPA 1', 40),
(6, 'XI IPA 2', 40),
(7, 'XII IPA 1', 40),
(8, 'XII IPA 2', 38),
(9, 'XI IPS 1', 40),
(10, 'XI IPS 2', 40),
(11, 'XII IPS 1', 35),
(12, 'XII IPS 2', 40);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idSiswa`, `nama`, `alamat`, `kelas`, `password`) VALUES
('1234', 'Sansa Stark', 'Winterfall', 'XI IPA 1', '47c6b15aca93873f58522f26300d181d'),
('1222', 'Jaime', 'Kings Landing', 'XI IPA 2', '47c6b15aca93873f58522f26300d181d'),
('2112', 'Bran Stark', 'Winterfall', 'XII IPS 1', '47c6b15aca93873f58522f26300d181d'),
('1221', 'Lord Commander', 'Castle Black', 'X - 1', '47c6b15aca93873f58522f26300d181d'),
('1215', 'Ayu Ismawati', 'Castle Black', 'X - 1', '47c6b15aca93873f58522f26300d181d'),
('2111', 'Arya Stark', 'Winterfall', 'XII IPA 1', '47c6b15aca93873f58522f26300d181d'),
('2113', 'Daenerys Targaryen', 'Targaryen', 'X - 1', '47c6b15aca93873f58522f26300d181d'),
('2114', 'Jorah Mormont', 'Targaryen', 'X - 1', '47c6b15aca93873f58522f26300d181d'),
('2115', 'Sandor Clegane', 'Kings Landing', 'XI IPA 1', '47c6b15aca93873f58522f26300d181d'),
('1110', 'Cersei', 'Kings Landing', 'X - 3', '47c6b15aca93873f58522f26300d181d'),
('1212', 'Tyrion', 'Kings Landing', 'X - 4', '47c6b15aca93873f58522f26300d181d'),
('1010', 'Tully S', 'Winterfall', 'XI IPS 1', '47c6b15aca93873f58522f26300d181d'),
('1000', 'Rob Stark', 'Winterfall', 'X - 2', '47c6b15aca93873f58522f26300d181d'),
('0809', 'Ned Stark', 'Winterfall', 'X - 2', '47c6b15aca93873f58522f26300d181d'),
('1001', 'Jon Snow', 'Winterfall', 'X - 2', '47c6b15aca93873f58522f26300d181d'),
('1023', 'Jofrey', 'Kings Landing', 'XI IPA 1', '47c6b15aca93873f58522f26300d181d'),
('9061', 'Sense', 'Winterfall', 'X - 1', '2b727c5713b8c7fc261245000d765007'),
('23235', 'Petyr Baelish', 'Kings Landing', 'X - 2', '47c6b15aca93873f58522f26300d181d'),
('89898', 'Sukarjo', 'Suramadu', 'X - 2', '47c6b15aca93873f58522f26300d181d'),
('335345', 'Jaka', 'Jombang', 'X - 2', '47c6b15aca93873f58522f26300d181d'),
('34324', 'Haha', 'Tgthh', 'X - 2', '47c6b15aca93873f58522f26300d181d'),
('3423', 'Razi Aziz Syahputro', 'Kampung Mangga', 'X - 1', '47c6b15aca93873f58522f26300d181d'),
('34234', 'Theon Greyjoy', 'Pyke', 'X - 2', '47c6b15aca93873f58522f26300d181d'),
('3424', 'Jofrey', 'Kings Landing', 'X - 3', '47c6b15aca93873f58522f26300d181d');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_has_mata_pelajaran`
--

CREATE TABLE `siswa_has_mata_pelajaran` (
  `idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idmata_pelajaran` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `semester` enum('Ganjil','Genap') COLLATE utf8_unicode_ci NOT NULL,
  `thn_ajaran` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `afektif` int(3) DEFAULT NULL,
  `komulatif` int(3) DEFAULT NULL,
  `psikomotorik` int(3) DEFAULT NULL,
  `rata` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswa_has_mata_pelajaran`
--

INSERT INTO `siswa_has_mata_pelajaran` (`idSiswa`, `idmata_pelajaran`, `semester`, `thn_ajaran`, `afektif`, `komulatif`, `psikomotorik`, `rata`) VALUES
('1001', '9', 'Ganjil', '2009-2010', 90, 74, 95, 86),
('0809', '11', 'Ganjil', '2009-2010', 86, 98, 86, 90),
('1110', '15', 'Ganjil', '2009-2010', 83, 87, 97, 89),
('1110', '14', 'Ganjil', '2009-2010', 99, 91, 94, 95),
('1234', '9', 'Ganjil', '2009-2010', 91, 91, 94, 92),
('2115', '11', 'Ganjil', '2011-2012', 98, 83, 74, 85),
('2115', '10', 'Ganjil', '2009-2010', 90, 97, 92, 93),
('1222', '14', 'Ganjil', '2010-2011', 95, 89, 98, 94),
('1234', '14', 'Ganjil', '2010-2011', 99, 90, 92, 94),
('1234', '9', 'Genap', '2009-2010', 80, 75, 80, 78),
('1234', '14', 'Ganjil', '2009-2010', 97, 98, 98, 98),
('1023', '9', 'Ganjil', '2009-2010', 84, 87, 95, 89),
('1023', '14', 'Ganjil', '2009-2010', 99, 92, 94, 95),
('1023', '12', 'Ganjil', '2009-2010', 98, 82, 6, 62),
('1023', '9', 'Genap', '2009-2010', 72, 80, 74, 75),
('1023', '14', 'Genap', '2009-2010', 97, 84, 86, 89),
('1023', '9', 'Ganjil', '2010-2011', 86, 98, 80, 88),
('1023', '9', 'Genap', '2010-2011', 87, 70, 71, 76),
('1023', '14', 'Genap', '2010-2011', 74, 65, 69, 69),
('1023', '14', 'Ganjil', '2011-2012', 78, 82, 89, 83),
('1023', '12', 'Genap', '2011-2012', 98, 93, 85, 92),
('1023', '13', 'Genap', '2011-2012', 98, 97, 89, 95),
('23235', '18', 'Ganjil', '2015-2016', 70, 80, 60, 70),
('1000', '9', 'Genap', '2014-2015', 70, 70, 95, 78),
('3423', '12', 'Ganjil', '2015-2016', 78, 80, 90, 83),
('34234', '12', '', '', 78, 0, 0, 26),
('89898', '11', 'Ganjil', '2015-2016', 80, 95, 80, 85),
('335345', '9', 'Genap', '2012-2013', 80, 70, 70, 73),
('335345', '11', 'Genap', '2012-2013', 80, 60, 80, 73),
('3423', '14', 'Ganjil', '2010-2011', 70, 70, 70, 70),
('9061', '13', 'Genap', '2014-2015', 80, 60, 80, 73),
('3423', '9', 'Genap', '2015-2016', 60, 50, 80, 63),
('34234', '15', 'Ganjil', '2015-2016', 60, 60, 80, 67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`idAdministrator`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`idmata_pelajaran`);

--
-- Indexes for table `mata_pelajaran_has_ruang_kelas`
--
ALTER TABLE `mata_pelajaran_has_ruang_kelas`
  ADD PRIMARY KEY (`idmata_pelajaran`,`idRuang_Kelas`),
  ADD KEY `fk_mata_pelajaran_has_Ruang_Kelas_mata_pelajaran` (`idmata_pelajaran`),
  ADD KEY `fk_mata_pelajaran_has_Ruang_Kelas_Ruang_Kelas` (`idRuang_Kelas`);

--
-- Indexes for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  ADD PRIMARY KEY (`idRuang_Kelas`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idSiswa`);

--
-- Indexes for table `siswa_has_mata_pelajaran`
--
ALTER TABLE `siswa_has_mata_pelajaran`
  ADD PRIMARY KEY (`idSiswa`,`idmata_pelajaran`,`semester`,`thn_ajaran`),
  ADD KEY `fk_Siswa_has_mata_pelajaran_Siswa` (`idSiswa`),
  ADD KEY `fk_Siswa_has_mata_pelajaran_mata_pelajaran` (`idmata_pelajaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `idAdministrator` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `idmata_pelajaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `mata_pelajaran_has_ruang_kelas`
--
ALTER TABLE `mata_pelajaran_has_ruang_kelas`
  MODIFY `idmata_pelajaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  MODIFY `idRuang_Kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
