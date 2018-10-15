-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 06:53 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_kkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `kd_admin` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `username`, `password`) VALUES
('adm01', 'admin', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
`kd_file` int(5) NOT NULL,
  `nama_file` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tanggal_file` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kd_user` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`kd_file`, `nama_file`, `password`, `tanggal_file`, `kd_user`) VALUES
(65, 'Enkrip_bab_XII_-agama_islam_da', '12345678', '2017-05-29 16:56:45', 2),
(66, 'Enkrip_bab_XII_-agama_islam_da', 'qwertyuiop', '2017-05-29 16:58:46', 2),
(67, 'Enkrip_Book1.xlsx', '1234567890', '2017-05-30 06:22:47', 2),
(68, 'Enkrip_BAB3.docx', 'qwertyuiop', '2017-05-30 06:29:57', 2),
(69, 'Dekrip_BAB3.docx', 'qwertyuiop', '2017-05-30 06:30:47', 2),
(78, 'Enkrip_BAB3.docx', '1234567890', '2017-05-30 06:59:00', 2),
(85, 'Enkrip_algoritma_rc4.txt', '', '2017-07-10 01:53:50', 8),
(86, 'Dekrip_algoritma_rc4.txt', '12345678', '2017-07-10 01:54:19', 8),
(87, 'Enkrip_#2_Lembar_pengesahaan.d', '', '2017-07-10 02:20:30', 8),
(88, 'Enkrip_#2_Lembar_pengesahaan.d', '', '2017-07-10 02:21:05', 8),
(92, 'Dekrip_LATIHAN_GRAFIK.docx', '12345678', '2017-07-10 02:24:55', 2),
(94, 'Dekrip_komputa.pdf', '12345678', '2017-07-10 02:26:42', 2),
(95, 'Enkrip_TUGAS_OP.docx', '', '2017-07-10 02:27:38', 2),
(96, 'Dekrip_TUGAS_OP.docx', '12345678', '2017-07-10 02:28:09', 2),
(97, 'Enkrip_tgs_b.ing.pdf', '', '2017-07-10 13:09:20', 2),
(98, 'Dekrip_tgs_b.ing.pdf', '12345678', '2017-07-10 13:13:11', 2),
(99, 'Enkrip_COBA.txt', '', '2017-07-11 03:09:01', 2),
(100, 'Enkrip_Data_Perusahaan.xlsx', '', '2017-07-11 13:16:21', 2),
(101, 'Dekrip_Data_Perusahaan.xlsx', '12345678', '2017-07-11 13:17:06', 2),
(102, 'Enkrip_File_Perusahaan.txt', '', '2017-07-11 15:27:32', 2),
(103, 'Dekrip_File_Perusahaan.txt', '12345678', '2017-07-11 15:28:29', 2),
(104, 'Enkrip_komputa.pdf', '', '2017-07-11 15:28:58', 2),
(105, 'Dekrip_komputa.pdf', '12345678', '2017-07-11 15:29:27', 2),
(108, 'Enkrip_Data_Perusahaan.xlsx', '', '2017-07-11 15:31:24', 2),
(109, 'Dekrip_Data_Perusahaan.xlsx', '12345678', '2017-07-11 15:32:05', 2),
(110, 'Enkrip_File_Perusahaan.txt', '', '2017-07-11 17:31:35', 2),
(111, 'Dekrip_File_Perusahaan.txt', '12345678', '2017-07-11 17:32:02', 2),
(112, 'Enkrip_File_Perusahaan.txt', '', '2017-07-11 17:32:48', 2),
(113, 'Dekrip_File_Perusahaan.txt', '12345678', '2017-07-11 17:33:10', 2),
(114, 'Enkrip_File_Perusahaan.txt', '', '2017-07-11 17:34:05', 2),
(115, 'Dekrip_File_Perusahaan (1).txt', '12345678', '2017-07-11 17:34:29', 2),
(116, 'Enkrip_File_Perusahaan.txt', '', '2017-07-11 17:35:05', 2),
(118, 'Enkrip_COBA.txt', '', '2017-07-11 17:51:04', 2),
(119, 'Enkrip_Data_Perusahaan.xlsx', '', '2017-07-12 01:29:47', 9),
(120, 'Enkrip_File_Perusahaan.txt', '', '2017-07-12 01:30:50', 9),
(121, 'Enkrip_TUGAS_OP.docx', '', '2017-07-12 01:31:33', 9),
(122, 'Enkrip_komputa.pdf', '', '2017-07-12 01:32:06', 9),
(123, 'Dekrip_Data_Perusahaan.xlsx', '12345678', '2017-07-12 01:32:24', 9),
(124, 'Dekrip_File_Perusahaan.txt', '12345678', '2017-07-12 01:32:47', 9),
(125, 'Dekrip_komputa.pdf', '12345678', '2017-07-12 01:33:13', 9),
(126, 'Dekrip_TUGAS_OP.docx', '12345678', '2017-07-12 01:33:27', 9),
(127, 'Enkrip_contoh_sidang.docx', '', '2017-07-12 03:03:19', 2),
(128, 'Dekrip_contoh_sidang.docx', 'budiluhur123', '2017-07-12 03:07:35', 2),
(129, 'Dekrip_contoh_sidang.docx', 'budiluhu', '2017-07-12 03:08:31', 2),
(130, 'Dekrip_contoh_sidang.docx', 'budiluhur', '2017-07-12 03:09:00', 2),
(131, 'Dekrip_contoh_sidang.docx', 'budiluhur', '2017-07-12 03:09:15', 2),
(132, 'Enkrip_Arief_budiman.docx', '', '2017-07-12 03:10:25', 2),
(133, 'Dekrip_Arief_budiman.docx', 'budiluhur', '2017-07-12 03:10:58', 2),
(134, 'Enkrip_Data_Perusahaan.xlsx', '', '2017-07-14 07:24:16', 2),
(135, 'Dekrip_Data_Perusahaan.xlsx', '12345678', '2017-07-14 07:29:33', 2),
(136, 'Enkrip_TUGAS_OP.docx', '', '2017-07-14 07:32:50', 2),
(137, 'Dekrip_TUGAS_OP.docx', '12345678', '2017-07-14 07:35:17', 2),
(138, 'Enkrip_komputa.pdf', '', '2017-07-14 07:37:09', 2),
(139, 'Dekrip_komputa.pdf', '12345678', '2017-07-14 07:39:53', 2),
(140, 'Enkrip_File_Perusahaan.txt', '', '2017-07-14 07:43:34', 2),
(141, 'Dekrip_File_Perusahaan.txt', '12345678', '2017-07-14 07:45:32', 2),
(142, 'Enkrip_BAB_1.doc', '', '2017-07-14 07:50:18', 2),
(143, 'Dekrip_BAB_1.doc', '12345678', '2017-07-14 07:52:44', 2),
(144, 'Enkrip_Book1.xlsx', '', '2017-07-14 07:54:17', 2),
(145, 'Enkrip_Book1.xlsx', '', '2017-07-14 07:59:57', 2),
(146, 'Dekrip_Book1.xlsx', '12345678', '2017-07-14 08:00:17', 2),
(147, 'Enkrip_pertemuan_3.doc', '', '2017-07-14 08:02:33', 2),
(148, 'Dekrip_pertemuan_3.doc', '12345678', '2017-07-14 08:04:09', 2),
(149, 'Enkrip_mail_merge.pdf', '', '2017-07-14 08:06:53', 2),
(150, 'Dekrip_mail_merge.pdf', '12345678', '2017-07-14 08:08:43', 2),
(151, 'Enkrip_UTS.docx', '', '2017-07-14 08:10:28', 2),
(152, 'Dekrip_UTS.docx', '12345678', '2017-07-14 08:12:31', 2),
(153, 'Enkrip_Pengenalan_MySQL.txt', '', '2017-07-14 08:15:43', 2),
(154, 'Dekrip_Pengenalan_MySQL.txt', '12345678', '2017-07-14 08:17:13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`kd_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `counter` char(5) DEFAULT '0',
  `join_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`, `counter`, `join_date`) VALUES
(2, 'arief', '1234567890', '30', '2017-05-09 14:51:43'),
(3, 'budi', '12345678', '5', '2017-05-23 15:24:22'),
(6, 'rama', '12345678', '0', '2017-05-27 06:36:58'),
(7, 'beta', 'qwertyuiop', '0', '2017-05-28 15:33:13'),
(8, 'gio', '12345678', '0', '2017-06-25 14:21:01'),
(9, 'coba', '1234567890', '0', '2017-07-12 01:29:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
 ADD PRIMARY KEY (`kd_file`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
MODIFY `kd_file` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `kd_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
