-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 02:14 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `akademik`
--

CREATE TABLE `akademik` (
  `id_akademik` int(32) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id_prodi` int(12) NOT NULL,
  `status` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akademik`
--

INSERT INTO `akademik` (`id_akademik`, `nip`, `id_prodi`, `status`, `nama`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `no_telp`, `password`) VALUES
(1, '1234', 2, 'Dosen', 'ridho13', 'Laki-Laki', '2016-07-12', '-', '0980979', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, '09121', 2, 'Mahasiswa', 'Rudi1', 'Laki-Laki', '2020-07-20', '=', '-', 'd2a2ddfe3439333262d2b6f657233d60');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(12) NOT NULL,
  `id_akademik` int(12) NOT NULL,
  `jenis_kegiatan` varchar(31) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `isi_surat` text NOT NULL,
  `status_kegiatan` int(12) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `jumlah_hadir` int(12) NOT NULL,
  `penanggung_jawab` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(32) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `jabatan`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `no_telp`, `password`) VALUES
(1, '1111', 'ridho', 'Admin', 'Laki-Laki', '2016-07-12', '-', '0980979', 'b59c67bf196a4758191e42f76670ceba'),
(4, '2222', 'Rudi1', 'Dekan', 'Laki-Laki', '2020-07-20', '=', '-', '934b535800b1cba8f96a5d72f72f1611');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_ruangan`
--

CREATE TABLE `peminjaman_ruangan` (
  `id_peminjaman_ruangan` int(12) NOT NULL,
  `id_akademik` int(12) NOT NULL,
  `jenis_ruangan` varchar(21) NOT NULL,
  `jenis_kegiatan` varchar(31) NOT NULL,
  `jenis_perlengkapan` varchar(31) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `isi_surat` text NOT NULL,
  `penanggung_jawab` varchar(31) NOT NULL,
  `jumlah_hadir` int(12) NOT NULL,
  `status_peminjaman` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(12) NOT NULL,
  `prodi` varchar(31) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `prodi`, `keterangan`) VALUES
(2, 'Sistem Informasi', '11'),
(3, 'Sistem Komputer', '12'),
(4, 'HIMSI', '-');

-- --------------------------------------------------------

--
-- Table structure for table `studi`
--

CREATE TABLE `studi` (
  `id_studi_lanjut` int(12) NOT NULL,
  `id_akademik` int(12) NOT NULL,
  `pendidikan` varchar(31) NOT NULL,
  `alamat_universitas` text NOT NULL,
  `jabatan_fungsional` varchar(31) NOT NULL,
  `golongan` varchar(31) NOT NULL,
  `instansi_dituju` varchar(41) NOT NULL,
  `fakultas` varchar(31) NOT NULL,
  `progam_studi` varchar(31) NOT NULL,
  `jenjang` varchar(12) NOT NULL,
  `tahun_ajaran` varchar(12) NOT NULL,
  `isi` text NOT NULL,
  `biaya_persemester` int(13) NOT NULL,
  `status_studi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akademik`
--
ALTER TABLE `akademik`
  ADD PRIMARY KEY (`id_akademik`),
  ADD KEY `id_pegawai` (`id_akademik`),
  ADD KEY `id_pegawai_2` (`id_akademik`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_pegawai_2` (`id_pegawai`);

--
-- Indexes for table `peminjaman_ruangan`
--
ALTER TABLE `peminjaman_ruangan`
  ADD PRIMARY KEY (`id_peminjaman_ruangan`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `studi`
--
ALTER TABLE `studi`
  ADD PRIMARY KEY (`id_studi_lanjut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akademik`
--
ALTER TABLE `akademik`
  MODIFY `id_akademik` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjaman_ruangan`
--
ALTER TABLE `peminjaman_ruangan`
  MODIFY `id_peminjaman_ruangan` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studi`
--
ALTER TABLE `studi`
  MODIFY `id_studi_lanjut` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
