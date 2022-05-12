-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 06:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(6, '2019220028', 6, 'Mahasiswa', 'Serly Wahyuni', 'Laki-Laki', '2000-01-10', 'Jl. P.S Ing Kenayan, Lr. Budi Suci', '089696944823', '202cb962ac59075b964b07152d234b70'),
(7, '2019220027', 6, 'Mahasiswa', 'Fadilah Agustina', 'Wanita', '2021-04-11', '', '081122334455', '202cb962ac59075b964b07152d234b70'),
(8, '2019220029', 6, 'Mahasiswa', 'Uny Sari', 'Wanita', '2001-04-12', '', '', '33ccf0bd87d8268904179ea34f40160b'),
(9, '2000.02.0004', 2, 'Dosen', 'Muhammad Julianto, M.Kom', 'Laki-Laki', '1980-04-11', 'Jl. Sosial, No. 25', '09809790088', '202cb962ac59075b964b07152d234b70'),
(10, '1999.09.009', 2, 'Dosen', 'Destiana Lestari, M.Kom', 'Wanita', '1970-04-01', 'Perumahan Griya Asri Gandus', '089696449955', '9b434ea3d2162ebefa548d855a2fc9dd');

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
  `status_progres_pengajuan` int(12) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `jumlah_hadir` int(12) NOT NULL,
  `penanggung_jawab` varchar(31) NOT NULL,
  `alasan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_akademik`, `jenis_kegiatan`, `tanggal_mulai`, `tanggal_selesai`, `waktu_mulai`, `waktu_selesai`, `isi_surat`, `status_kegiatan`, `status_progres_pengajuan`, `nama_kegiatan`, `jumlah_hadir`, `penanggung_jawab`, `alasan`) VALUES
(20, 6, 'Formal', '2022-05-12', '2022-05-12', '10:52:00', '10:53:00', 'Baik', 1, 3, 'Penyerahan Bantuan Desa', 1000, '1267162712', 'Acc');

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
(1, '1111', 'Meydisty', 'Admin', 'Wanita', '1990-07-12', '-', '09809790088', 'b59c67bf196a4758191e42f76670ceba'),
(6, '1111', 'Dr. Juhaini Alie, S.H., M.M', 'Dekan', 'Laki-Laki', '1998-03-28', 'Jl.sekip', '081122334455', '202cb962ac59075b964b07152d234b70'),
(7, '1234', 'taufik', 'Kaprodi', 'Laki-Laki', '2022-05-07', 'Kenten', '08218782618728127', '81dc9bdb52d04dc20036dbd8313ed055');

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
  `jumlah_perlengkapan` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `isi_surat` text NOT NULL,
  `penanggung_jawab` varchar(31) NOT NULL,
  `jumlah_hadir` int(12) NOT NULL,
  `status_peminjaman` int(12) NOT NULL,
  `status_progres_pengajuan` int(11) NOT NULL,
  `alasan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman_ruangan`
--

INSERT INTO `peminjaman_ruangan` (`id_peminjaman_ruangan`, `id_akademik`, `jenis_ruangan`, `jenis_kegiatan`, `jenis_perlengkapan`, `jumlah_perlengkapan`, `tanggal_mulai`, `tanggal_selesai`, `waktu_mulai`, `waktu_selesai`, `isi_surat`, `penanggung_jawab`, `jumlah_hadir`, `status_peminjaman`, `status_progres_pengajuan`, `alasan`) VALUES
(12, 6, 'Gedung B, Aula', 'Rapat', 'Proyektor', 7, '2022-05-12', '2022-05-12', '12:56:00', '10:58:00', 'Baik', '18291829182', 1000, 1, 2, 'Acc');

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan`
--

CREATE TABLE `perlengkapan` (
  `id_jenis_perlengkapan` int(11) NOT NULL,
  `jenis_perlengkapan` varchar(50) NOT NULL,
  `jumlah_perlengkapan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perlengkapan`
--

INSERT INTO `perlengkapan` (`id_jenis_perlengkapan`, `jenis_perlengkapan`, `jumlah_perlengkapan`) VALUES
(1, 'Proyektor', 1000),
(2, 'Sound System', 120);

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
(5, 'Teknik Informatika', ''),
(6, 'Manajemen Informatika', ''),
(7, 'HIMSI', 'Himpunan Mahasiswa Sistem Informasi'),
(8, 'HIMASTER', 'Himpunan Mahasiswa Sistem Komputer'),
(9, 'HMIF', 'Himpunan Mahasiswa Teknik Informatika'),
(10, 'HMI', 'Himpunan Mahasiswa Manaemen Informatika');

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
  `status_studi` int(11) NOT NULL,
  `status_progres_pengajuan` int(12) NOT NULL,
  `alasan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studi`
--

INSERT INTO `studi` (`id_studi_lanjut`, `id_akademik`, `pendidikan`, `alamat_universitas`, `jabatan_fungsional`, `golongan`, `instansi_dituju`, `fakultas`, `progam_studi`, `jenjang`, `tahun_ajaran`, `isi`, `biaya_persemester`, `status_studi`, `status_progres_pengajuan`, `alasan`) VALUES
(1, 1, 'S2', 'Jl. P.S Ing Kenayan', 'Lektor Kepala', 'IV/a', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Teknik Informatika', 'S3', '2022', 'qqq', 12000000, 0, 0, NULL),
(2, 1, 'S1', 'sss', 'Lektor Kepala', 'IV/a', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Teknik Informatika', 'S2', '2022', 'zz', 12000000, 0, 0, NULL),
(4, 10, 'S2', '', 'Lektor', 'IV/c', 'Universitas Gunadarma', 'Ilmu Komputer', 'Teknologi Informasi', 'S3', '2022', '', 12000000, 1, 0, 'benar'),
(6, 9, 'S1', 'Jl. Sekip', 'Dosen', '2', 'Universitas Negeri Surabaya', 'Teknik Informatika', 'Prodi TI', 'S2', '2019', 'Baik', 1000000, 1, 3, 'ACC'),
(7, 9, 'S1', 'Bungaran', 'Dosen', '3', 'Universitas Negeri Surabaya', 'Teknik Informatika', 'Prodi TI', 'S3', '2019', 'Baik', 1000000, 1, 2, 'Baik\r\n');

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
-- Indexes for table `perlengkapan`
--
ALTER TABLE `perlengkapan`
  ADD PRIMARY KEY (`id_jenis_perlengkapan`);

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
  MODIFY `id_akademik` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peminjaman_ruangan`
--
ALTER TABLE `peminjaman_ruangan`
  MODIFY `id_peminjaman_ruangan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `perlengkapan`
--
ALTER TABLE `perlengkapan`
  MODIFY `id_jenis_perlengkapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `studi`
--
ALTER TABLE `studi`
  MODIFY `id_studi_lanjut` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
