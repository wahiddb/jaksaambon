-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 02:12 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kejari_ambon`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_bukti`
--

CREATE TABLE `barang_bukti` (
  `id_bb` int(11) NOT NULL,
  `tersangka` varchar(50) NOT NULL,
  `no_perkara` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_bukti`
--

INSERT INTO `barang_bukti` (`id_bb`, `tersangka`, `no_perkara`, `jenis`, `jumlah`, `status`, `keterangan`, `kategori`) VALUES
(1, 'diia', '12', '1', 1, '1', '1', 'musnah'),
(2, 'diia2', '12', '1', 1, '1', '1', 'rampas'),
(3, 'diia3', '12', '1', 1, '1', '1', 'kembali'),
(4, 'diia4', '12', '1', 1, '1', '1', 'lelang');

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` int(11) NOT NULL,
  `coment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id`, `coment`) VALUES
(1, ''),
(2, 'tes'),
(3, 'tes'),
(4, 'tesssss'),
(5, 'tessee'),
(6, 'tessee'),
(7, 'tessee'),
(8, 'tes lagi'),
(9, 'tes lagi ya'),
(10, 'tes ya'),
(11, 'tes ya'),
(12, 'tes ya'),
(13, 'tes ya'),
(14, 'tes ya'),
(15, 'tes ya'),
(16, 'tes'),
(17, 'de'),
(18, ''),
(19, '');

-- --------------------------------------------------------

--
-- Table structure for table `datun`
--

CREATE TABLE `datun` (
  `id_datun` int(11) NOT NULL,
  `pemohon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datun`
--

INSERT INTO `datun` (`id_datun`, `pemohon`, `email`, `perihal`, `keterangan`) VALUES
(1, 'wahid', 'email', 'perihal', 'ket');

-- --------------------------------------------------------

--
-- Table structure for table `intel`
--

CREATE TABLE `intel` (
  `id_intel` int(255) NOT NULL,
  `pelapor` varchar(50) NOT NULL,
  `terlapor` varchar(50) NOT NULL,
  `identitas` varchar(10) NOT NULL,
  `no_identitas` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tindak_pidana` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `ket_tambahan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intel`
--

INSERT INTO `intel` (`id_intel`, `pelapor`, `terlapor`, `identitas`, `no_identitas`, `email`, `tindak_pidana`, `keterangan`, `status`, `ket_tambahan`) VALUES
(5, 'wahid', 'dia', 'ktp', 1707, 'wahid.110887@gmail.co.id', 'maling', 'tolong', 'Belum di Proses', NULL),
(6, 'aaaa', 'dia', 'ktp', 3, 'wahid.110asdas887@gmail.com', 'maling', 'asdasdas', 'Belum di Proses', 'Bantuan Hukum Gratis');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `gol` varchar(25) NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nip`, `jabatan`, `bidang`, `gol`, `pendidikan`, `ttl`, `phone`) VALUES
(1, 'Tangguh', '0082', 'Hakim Muda', 'Perdata', 'IV', 'S1-Cyber Securi', 'Semarang, 29-02-1998', '083866290455'),
(2, 'Teguh', '0083', 'Hakim Muda', 'Perdata', 'IV', 'S1-Cyber Securi', 'Semarang, 29-02-1998', '083866290457');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksa`
--

CREATE TABLE `pemeriksa` (
  `id_pemeriksa` int(11) NOT NULL,
  `pelapor` varchar(50) NOT NULL,
  `identitas` varchar(25) NOT NULL,
  `no_identitas` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `terlapor` varchar(50) NOT NULL,
  `pelanggaran` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemeriksa`
--

INSERT INTO `pemeriksa` (`id_pemeriksa`, `pelapor`, `identitas`, `no_identitas`, `email`, `terlapor`, `pelanggaran`, `keterangan`, `status`) VALUES
(1, 'wahid', 'passport', 123123, 'wahid.110887@gmail.com', 'dia', 'dia', 'da', 'Belum di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `pidsus`
--

CREATE TABLE `pidsus` (
  `id_pidsus` int(11) NOT NULL,
  `nomor_perkara` varchar(255) NOT NULL,
  `pasal` varchar(50) NOT NULL,
  `tersangka` varchar(50) NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `agenda` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pidsus`
--

INSERT INTO `pidsus` (`id_pidsus`, `nomor_perkara`, `pasal`, `tersangka`, `jadwal`, `agenda`, `keterangan`) VALUES
(1, 'de3', 'KUHP', 'diia', 'tanggal', 'kurang tahu', 'sedah');

-- --------------------------------------------------------

--
-- Table structure for table `pidum`
--

CREATE TABLE `pidum` (
  `id_pidum` int(11) NOT NULL,
  `nomor_perkara` varchar(255) NOT NULL,
  `pasal` varchar(50) NOT NULL,
  `tersangka` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pidum`
--

INSERT INTO `pidum` (`id_pidum`, `nomor_perkara`, `pasal`, `tersangka`, `keterangan`, `status`) VALUES
(1, 'E2', 'KUHP', 'diia', 'saya dia dia', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `value`, `ket`) VALUES
(3, '1', 'Sangat Tidak Puas'),
(4, '1', 'Sangat Tidak Puas'),
(5, '1', 'Sangat Tidak Puas'),
(6, '1', 'Sangat Tidak Puas'),
(7, '1', 'Sangat Tidak Puas'),
(8, '1', 'Sangat Tidak Puas'),
(9, '1', 'Sangat Tidak Puas'),
(10, '1', 'Sangat Tidak Puas'),
(11, '1', 'Sangat Tidak Puas'),
(12, '1', 'Sangat Tidak Puas'),
(13, '1', 'Sangat Tidak Puas'),
(14, '1', 'Sangat Tidak Puas'),
(15, '1', 'Sangat Tidak Puas'),
(16, '1', 'Sangat Tidak Puas'),
(17, '1', 'Sangat Tidak Puas'),
(18, '5', 'Sangat Puas');

-- --------------------------------------------------------

--
-- Table structure for table `tilang`
--

CREATE TABLE `tilang` (
  `id_tilang` int(11) NOT NULL,
  `nomor_perkara` varchar(255) NOT NULL,
  `pasal` varchar(50) NOT NULL,
  `tersangka` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `plat` varchar(255) NOT NULL,
  `tgl_sidang` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tilang`
--

INSERT INTO `tilang` (`id_tilang`, `nomor_perkara`, `pasal`, `tersangka`, `keterangan`, `plat`, `tgl_sidang`, `status`) VALUES
(1, '25r', 'KUHP', 'diia', 'sad', 'ad', '2020-02-15', 'hee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_bukti`
--
ALTER TABLE `barang_bukti`
  ADD PRIMARY KEY (`id_bb`);

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datun`
--
ALTER TABLE `datun`
  ADD PRIMARY KEY (`id_datun`);

--
-- Indexes for table `intel`
--
ALTER TABLE `intel`
  ADD PRIMARY KEY (`id_intel`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pemeriksa`
--
ALTER TABLE `pemeriksa`
  ADD PRIMARY KEY (`id_pemeriksa`);

--
-- Indexes for table `pidsus`
--
ALTER TABLE `pidsus`
  ADD PRIMARY KEY (`id_pidsus`);

--
-- Indexes for table `pidum`
--
ALTER TABLE `pidum`
  ADD PRIMARY KEY (`id_pidum`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tilang`
--
ALTER TABLE `tilang`
  ADD PRIMARY KEY (`id_tilang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_bukti`
--
ALTER TABLE `barang_bukti`
  MODIFY `id_bb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `datun`
--
ALTER TABLE `datun`
  MODIFY `id_datun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intel`
--
ALTER TABLE `intel`
  MODIFY `id_intel` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemeriksa`
--
ALTER TABLE `pemeriksa`
  MODIFY `id_pemeriksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pidsus`
--
ALTER TABLE `pidsus`
  MODIFY `id_pidsus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pidum`
--
ALTER TABLE `pidum`
  MODIFY `id_pidum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tilang`
--
ALTER TABLE `tilang`
  MODIFY `id_tilang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
