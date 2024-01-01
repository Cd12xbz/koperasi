-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 12:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `gender` varchar(2) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sign_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `telp`, `alamat`, `gender`, `tanggal_lahir`, `status`, `username`, `password`, `sign_date`) VALUES
(1, 'Theo Krisna Amarya', '081230924799', 'Ds. Minggiran Dsn. Morangan 003/001 Kec. Papar Kab. Kediri', 'L', '2001-03-09', 'Aktif', 'stillwater', '382384403d7ed6a173a18e1f999058ea', '2023-12-21 14:39:11'),
(4, 'Bagas', '0856979458896', 'Ds. Ngancar, Kec. Badas', 'L', '1998-11-19', 'Aktif', 'bagas', '86ee04f00adc7ba1f019915a1ccd4de9', '2023-12-21 14:39:11'),
(5, 'M.maimuna', '08963325698', 'Ds. Ngancar', 'L', '1995-02-15', 'Aktif', 'main', 'be5146ee96f183a855ab285aa37d776f', '2023-12-27 16:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'efbc49ec0721c2e4730dcd7f65f69e10');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `nomor_pinjam` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `pinjaman` int(11) NOT NULL,
  `tanggal_pinjaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`nomor_pinjam`, `id_anggota`, `pinjaman`, `tanggal_pinjaman`) VALUES
(1, 1, 500000, '2023-12-14 13:26:02');

--
-- Triggers `pinjam`
--
DELIMITER $$
CREATE TRIGGER `after_delete_pinjam` AFTER DELETE ON `pinjam` FOR EACH ROW BEGIN
    DELETE FROM report WHERE nomor_pinjam = OLD.nomor_pinjam;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_pinjam` AFTER INSERT ON `pinjam` FOR EACH ROW BEGIN
    INSERT INTO report (id_anggota, nomor_pinjam)
    VALUES (NEW.id_anggota, NEW.nomor_pinjam);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `kode` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nomor_simpan` int(11) NOT NULL,
  `nomor_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`kode`, `id_anggota`, `nomor_simpan`, `nomor_pinjam`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `simpan`
--

CREATE TABLE `simpan` (
  `nomor_simpan` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `simpanan` int(11) NOT NULL,
  `tanggal_simpan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `simpan`
--

INSERT INTO `simpan` (`nomor_simpan`, `id_anggota`, `simpanan`, `tanggal_simpan`) VALUES
(1, 1, 80000000, '2023-12-13 13:09:42');

--
-- Triggers `simpan`
--
DELIMITER $$
CREATE TRIGGER `after_delete_simpan` AFTER DELETE ON `simpan` FOR EACH ROW BEGIN
    DELETE FROM report WHERE nomor_simpan = OLD.nomor_simpan;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_simpan` AFTER INSERT ON `simpan` FOR EACH ROW BEGIN
    INSERT INTO report (id_anggota, nomor_simpan)
    VALUES (NEW.id_anggota, NEW.nomor_simpan);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`nomor_pinjam`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `nomor_simpan` (`nomor_simpan`,`nomor_pinjam`),
  ADD KEY `nomor_pinjam` (`nomor_pinjam`);

--
-- Indexes for table `simpan`
--
ALTER TABLE `simpan`
  ADD PRIMARY KEY (`nomor_simpan`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `nomor_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `simpan`
--
ALTER TABLE `simpan`
  MODIFY `nomor_simpan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`nomor_pinjam`) REFERENCES `pinjam` (`nomor_pinjam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_3` FOREIGN KEY (`nomor_simpan`) REFERENCES `simpan` (`nomor_simpan`) ON UPDATE CASCADE;

--
-- Constraints for table `simpan`
--
ALTER TABLE `simpan`
  ADD CONSTRAINT `simpan_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
