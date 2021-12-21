-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 09:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-academic`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idguru` int(4) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `tmp_lhr` varchar(128) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idguru`, `nip`, `nama`, `tmp_lhr`, `tgl_lhr`, `jk`, `alamat`) VALUES
(15, '1122', 'Permana, MM.Pd.', 'Cirebon', '2021-12-28', 'L', 'jam'),
(16, '112233', 'Nur Fajri Maulidia STR', 'Indramayu', '2021-12-27', 'P', 'LHB'),
(17, '11223344', 'Eko Permana SP.d,.M.Pd', 'Cirebon', '1997-10-21', 'L', 'Jamblang');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(4) NOT NULL,
  `kelas_kd` varchar(10) DEFAULT NULL,
  `kelas_nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `kelas_kd`, `kelas_nama`) VALUES
(9, 'X.A1', 'X MIPA 1'),
(10, 'X.S1', 'X IPS 1');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `idmapel` int(4) NOT NULL,
  `mapel_kd` varchar(10) DEFAULT NULL,
  `mapel_nama` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`idmapel`, `mapel_kd`, `mapel_nama`) VALUES
(10, 'KIM', 'Kimia'),
(11, 'EKO', 'Ekonomi'),
(12, 'MTK', 'Matematika'),
(13, 'FIS', 'Fisika'),
(14, 'IND', 'Bahasa Indonesia'),
(15, 'ING', 'Bahasa Inggris'),
(16, 'BIO', 'Biologi'),
(17, 'GEO', 'Geografi'),
(18, 'ARB', 'Bahasa Arab'),
(19, 'SOS', 'Sosiologi');

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE `mengajar` (
  `idmengajar` int(4) NOT NULL,
  `idtahun_akademik` int(11) NOT NULL,
  `semester` enum('Ganjil','Genap') DEFAULT NULL,
  `idguru` int(4) NOT NULL,
  `idmapel` int(4) NOT NULL,
  `idkelas` int(4) NOT NULL,
  `kkm` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`idmengajar`, `idtahun_akademik`, `semester`, `idguru`, `idmapel`, `idkelas`, `kkm`) VALUES
(55, 10, 'Ganjil', 15, 10, 9, 78),
(56, 10, 'Ganjil', 16, 11, 9, 78),
(57, 10, 'Ganjil', 17, 17, 10, NULL),
(58, 10, 'Ganjil', 17, 19, 10, NULL),
(59, 10, 'Ganjil', 17, 11, 10, NULL),
(60, 10, 'Ganjil', 16, 12, 9, NULL),
(61, 10, 'Ganjil', 16, 12, 10, NULL),
(62, 10, 'Ganjil', 15, 15, 9, NULL),
(63, 10, 'Ganjil', 17, 13, 9, NULL),
(64, 10, 'Ganjil', 16, 18, 9, NULL),
(65, 10, 'Ganjil', 17, 14, 9, NULL),
(66, 10, 'Ganjil', 15, 13, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `idnilai` int(11) NOT NULL,
  `idtahun_akademik` int(4) NOT NULL,
  `semester` enum('Ganjil','Genap') DEFAULT NULL,
  `idkelas` int(4) NOT NULL,
  `idmapel` int(4) NOT NULL,
  `idsiswa` int(4) NOT NULL,
  `nilai_tp1` int(4) DEFAULT NULL,
  `nilai_tp2` int(4) DEFAULT NULL,
  `nilai_tp3` int(4) DEFAULT NULL,
  `nilai_tp4` int(4) DEFAULT NULL,
  `nilai_tp5` int(4) DEFAULT NULL,
  `nilai_tp6` int(4) DEFAULT NULL,
  `nilai_tp7` int(4) DEFAULT NULL,
  `rata_tp` int(4) DEFAULT NULL,
  `nilai_praktek1` int(4) DEFAULT NULL,
  `nilai_praktek2` int(4) DEFAULT NULL,
  `nilai_ket` int(10) DEFAULT NULL,
  `predikat_tp` enum('A','B','C','D','E') DEFAULT NULL,
  `deskripsi_tp` mediumtext DEFAULT NULL,
  `catatan_tp` varchar(256) DEFAULT NULL,
  `nilai_uh1` int(4) DEFAULT NULL,
  `nilai_uh2` int(4) DEFAULT NULL,
  `nilai_uh3` int(4) DEFAULT NULL,
  `nilai_uh4` int(4) DEFAULT NULL,
  `nilai_uh5` int(4) DEFAULT NULL,
  `nilai_uh6` int(4) DEFAULT NULL,
  `nilai_uh7` int(4) DEFAULT NULL,
  `rata_uh` int(4) DEFAULT NULL,
  `nilai_pts` int(4) DEFAULT NULL,
  `nilai_uas` int(4) DEFAULT NULL,
  `nilai_akhir` int(4) DEFAULT NULL,
  `nilai_huruf` enum('A','B','C','D','E') DEFAULT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `catatan_p` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`idnilai`, `idtahun_akademik`, `semester`, `idkelas`, `idmapel`, `idsiswa`, `nilai_tp1`, `nilai_tp2`, `nilai_tp3`, `nilai_tp4`, `nilai_tp5`, `nilai_tp6`, `nilai_tp7`, `rata_tp`, `nilai_praktek1`, `nilai_praktek2`, `nilai_ket`, `predikat_tp`, `deskripsi_tp`, `catatan_tp`, `nilai_uh1`, `nilai_uh2`, `nilai_uh3`, `nilai_uh4`, `nilai_uh5`, `nilai_uh6`, `nilai_uh7`, `rata_uh`, `nilai_pts`, `nilai_uas`, `nilai_akhir`, `nilai_huruf`, `deskripsi`, `catatan_p`) VALUES
(101, 10, 'Ganjil', 9, 10, 23, 100, 100, 100, 100, 100, 100, 100, 100, 50, 50, 67, 'D', 'Kurang Baik', 'Memiliki penguasaan pengetahuan baik, terutama dalam menganalisis perkembangan model atom Dalton, Thomson, Rutherfod, Bohr, dan mekanika gelombang', 100, 10, 10, 10, 10, 10, 10, 23, 10, 10, 11, 'D', 'Kurang Baik', 'Memiliki penguasaan pengetahuan baik, terutama dalam menganalisis perkembangan model atom Dalton, Thomson, Rutherfod, Bohr, dan mekanika gelombang'),
(102, 10, 'Ganjil', 9, 10, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', ''),
(103, 10, 'Ganjil', 9, 11, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 10, 'Ganjil', 9, 11, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `idprofil_sekolah` int(4) NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `npsn` varchar(10) DEFAULT NULL,
  `nss` varchar(30) DEFAULT NULL,
  `status` enum('Negeri','Swasta') DEFAULT NULL,
  `nama_kepsek` varchar(128) DEFAULT NULL,
  `nip_kepsek` varchar(25) DEFAULT NULL,
  `akreditasi` enum('kosong','A','B','C') DEFAULT NULL,
  `logo` varchar(128) DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kabupaten` varchar(128) DEFAULT NULL,
  `kecamatan` varchar(128) DEFAULT NULL,
  `kelurahan` varchar(128) DEFAULT NULL,
  `dusun` varchar(128) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `kodepos` varchar(10) DEFAULT NULL,
  `lintang` varchar(15) DEFAULT NULL,
  `bujur` varchar(15) DEFAULT NULL,
  `website` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telepon` varchar(150) DEFAULT NULL,
  `konten` varchar(128) DEFAULT NULL,
  `isi_konten` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`idprofil_sekolah`, `nama`, `npsn`, `nss`, `status`, `nama_kepsek`, `nip_kepsek`, `akreditasi`, `logo`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `dusun`, `rt`, `rw`, `alamat`, `kodepos`, `lintang`, `bujur`, `website`, `email`, `telepon`, `konten`, `isi_konten`) VALUES
(1, 'SMAN 1 INDRAMAYU', '20215980', '800', 'Negeri', 'Setyo Adisapto, S.Pd, MM', '1277844588499', 'A', 'logo-sekolah.png', 'Jawa Barat', 'Indramayu', 'Indramayu', 'Pekandangan', 'Pekandangan', '001', '002', 'Jl Soekarno - Hatta No.2', '45216', '-6.353310669375', '108.32369729876', 'https://www.sman1indramayu.sch.id/', 'permanaeko74@gmail.com', ' +62234-272536', 'Profil', 'SMAN 1 Indramayu adalah sekolah Zonasi yang berupaya mewujudkan pelayanan prima sehingga terciptanya lulusan yang berkualitas,sinergi warga yang baik menuju SMAN 1 indramayu yang maju dan Harmoni.');

-- --------------------------------------------------------

--
-- Table structure for table `rombel`
--

CREATE TABLE `rombel` (
  `idrombel` int(4) NOT NULL,
  `idwali_kelas` int(4) NOT NULL,
  `idsiswa` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rombel`
--

INSERT INTO `rombel` (`idrombel`, `idwali_kelas`, `idsiswa`) VALUES
(142, 14, 23),
(143, 14, 24),
(144, 15, 25);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idsiswa` int(4) NOT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `nis` varchar(5) DEFAULT NULL,
  `nisn` varchar(15) DEFAULT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `tmp_lhr` varchar(128) DEFAULT NULL,
  `tgl_lhr` varchar(50) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `hobi` varchar(128) DEFAULT NULL,
  `citacita` varchar(128) DEFAULT NULL,
  `sts_anak` enum('Anak Kandung','Anak Tiri','Anak Angkat') DEFAULT NULL,
  `jml_sdr` int(2) DEFAULT NULL,
  `anak_ke` int(2) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nik_ayah` varchar(25) DEFAULT NULL,
  `nama_ayah` varchar(128) DEFAULT NULL,
  `pend_ayah` varchar(50) DEFAULT NULL,
  `pekr_ayah` varchar(50) DEFAULT NULL,
  `nik_ibu` varchar(25) DEFAULT NULL,
  `nama_ibu` varchar(128) DEFAULT NULL,
  `pend_ibu` varchar(50) DEFAULT NULL,
  `pekr_ibu` varchar(50) DEFAULT NULL,
  `alamat_ortu` text DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `alamat_wali` varchar(150) DEFAULT NULL,
  `pekr_wali` varchar(100) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `status` enum('Aktif','Nonaktif','Pindah','Keluar','Alumni') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idsiswa`, `foto`, `nis`, `nisn`, `nik`, `nama`, `tmp_lhr`, `tgl_lhr`, `jk`, `agama`, `hobi`, `citacita`, `sts_anak`, `jml_sdr`, `anak_ke`, `alamat`, `nik_ayah`, `nama_ayah`, `pend_ayah`, `pekr_ayah`, `nik_ibu`, `nama_ibu`, `pend_ibu`, `pekr_ibu`, `alamat_ortu`, `nama_wali`, `alamat_wali`, `pekr_wali`, `tgl_masuk`, `tgl_keluar`, `status`) VALUES
(23, NULL, '1234', '2003069', '20030688888', 'Eko Permana', 'Cirebon', '2002-06-18', 'L', 'Islam', 'Bermain Catur', 'Programmer', 'Anak Kandung', 2, 2, 'Jl. Swakarya Bojong Wetan, Jamblang, Cirebon', '2102102810', 'Rakijan', 'SD/Sederajat', 'Pedagang', '1377163816381', 'Suharyani', 'SD/Sederajat', 'Pedagang', 'Bojong Wetan', NULL, NULL, NULL, '2021-12-14', NULL, 'Aktif'),
(24, NULL, '1235', '2003073', '', 'Maulidia', 'Jakarta', '2021-12-27', 'P', 'Islam', '', 'Programmer', 'Anak Kandung', 5, 1, 'hau', '', 'Jeki', 'S1', 'PNS', '', 'July', 'SMA/Sederajat', 'PNS', 'Lohbener', NULL, NULL, NULL, '2021-12-14', NULL, 'Aktif'),
(25, NULL, '1238', '2003073', '', 'Nur Fajri Maulidia', 'Indramayu', '2002-09-09', 'P', NULL, '', '', NULL, 0, 0, 'Lohbener, Indramayu', '', '', NULL, '', '', '', NULL, '', '', NULL, NULL, NULL, '2021-12-20', NULL, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `idtahun_akademik` int(4) NOT NULL,
  `tahun_akademik` varchar(10) DEFAULT NULL,
  `semester` enum('Ganjil','Genap') DEFAULT NULL,
  `semester_aktif` tinyint(4) DEFAULT NULL,
  `tempat` varchar(128) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`idtahun_akademik`, `tahun_akademik`, `semester`, `semester_aktif`, `tempat`, `tanggal`) VALUES
(10, '2021-2022', 'Ganjil', 1, 'Indramayu', '2021-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `user_password` varchar(128) DEFAULT NULL,
  `user_fullname` varchar(128) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `is_block` tinyint(1) DEFAULT NULL,
  `create_at` int(11) DEFAULT NULL,
  `update_at` int(11) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `user_name`, `user_password`, `user_fullname`, `user_type`, `is_block`, `create_at`, `update_at`, `create_by`, `update_by`) VALUES
(1, 'Admin', '$2y$10$ePYvbmZHzPxjanA.aCprMO9p0Z7Q9JgzlzyCevd7Jqf.Wb2huO8t.', 'Administrator', 'super_user', 0, 1556509343, 1586934959, 1, 1),
(47, '1122', '$2y$10$Kg1eMpY7JYou/4abED2jhOadJHJdRMVcnLY/D5JuTh81I047Zhtfy', 'Permana, MM.Pd', NULL, 0, 1639509491, 1640046948, 1, 1),
(48, '1234', '$2y$10$Z6VkTqp2csKViw389KXpU.6zjj8V4FCpzCHttUv5S5hlkVl14NoIm', 'Eko Permana', 'siswa', 0, 1639512222, NULL, 1, NULL),
(49, '1235', '$2y$10$aaF/qdughkb/qLfFu1W.SebghWwTw7RQCCYAOcz0pcY9zwYZazUAe', 'Maulidia', 'siswa', 0, 1639512222, NULL, 1, NULL),
(50, '112233', '$2y$10$KVJ/qDJX4f1peDjLGdEQ6.u6RSVGZYnGOtOPqdL0n.Sok4.fKbBBy', 'Nur Fajri Maulidia STR', 'guru', 0, 1639898659, NULL, 1, NULL),
(51, '1238', '$2y$10$7mMlgACPuI5qrMdU8LCUQeE4gvy/QfOpTPs.CyNC2rKbRcFSGK96a', 'Nur Fajri Maulidia', 'siswa', 0, 1640006173, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `idwali_kelas` int(4) NOT NULL,
  `idtahun_akademik` int(4) NOT NULL,
  `semester` enum('Ganjil','Genap') DEFAULT NULL,
  `idkelas` int(4) NOT NULL,
  `idguru` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`idwali_kelas`, `idtahun_akademik`, `semester`, `idkelas`, `idguru`) VALUES
(14, 10, 'Ganjil', 9, 15),
(15, 10, 'Ganjil', 10, 17);

-- --------------------------------------------------------

--
-- Table structure for table `_sessions`
--

CREATE TABLE `_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_sessions`
--

INSERT INTO `_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('2c42b2h360825pb3sl777pqfl4o5samv', '::1', 1640074616, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634303037343530353b69647c733a313a2231223b757365726e616d657c733a353a2241646d696e223b6163636573737c733a31303a2273757065725f75736572223b737563636573737c733a32343a224e696c616920626572686173696c2064692073696d70616e223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('6hd0rnv7lpeo1tdcdqqnb0cqckcecccn', '::1', 1640046948, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634303034363837383b69647c733a313a2231223b757365726e616d657c733a353a2241646d696e223b6163636573737c733a31303a2273757065725f75736572223b737563636573737c733a31383a2250657275626168616e20626572686173696c223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('92f7dmn59ibmm15sqv6puecpnbkqt0of', '::1', 1640007897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634303030373838303b69647c733a323a223530223b757365726e616d657c733a363a22313132323333223b6163636573737c733a343a2267757275223b),
('a9v78r32123auc17ud1bafi7mbo256rd', '::1', 1640020870, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634303032303837303b),
('c7n6thhnnp6ntb31tnfeb5vf15778ovc', '::1', 1640066031, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634303036363030373b69647c733a323a223438223b757365726e616d657c733a343a2231323334223b6163636573737c733a353a227369737761223b),
('rl79rbftsubmc0o2q07phrle9hgkn75q', '::1', 1640032357, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634303033323335373b);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`idmapel`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`idmengajar`,`idtahun_akademik`,`idguru`,`idmapel`,`idkelas`),
  ADD KEY `fk_guru_has_mapel_mapel1_idx` (`idmapel`),
  ADD KEY `fk_guru_has_mapel_guru1_idx` (`idguru`),
  ADD KEY `fk_mengajar_tahun_akademik1_idx` (`idtahun_akademik`),
  ADD KEY `fk_mengajar_kelas1_idx` (`idkelas`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`,`idtahun_akademik`,`idkelas`,`idmapel`,`idsiswa`),
  ADD KEY `fk_mapel_has_siswa_siswa1_idx` (`idsiswa`),
  ADD KEY `fk_mapel_has_siswa_mapel1_idx` (`idmapel`),
  ADD KEY `fk_nilai_tahun_akademik1_idx` (`idtahun_akademik`),
  ADD KEY `fk_nilai_kelas1_idx` (`idkelas`);

--
-- Indexes for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`idprofil_sekolah`);

--
-- Indexes for table `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`idrombel`,`idwali_kelas`,`idsiswa`),
  ADD KEY `fk_rombel_siswa1_idx` (`idsiswa`),
  ADD KEY `fk_rombel_wali_kelas1_idx` (`idwali_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idsiswa`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`idtahun_akademik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`idwali_kelas`,`idtahun_akademik`,`idkelas`,`idguru`),
  ADD KEY `fk_rombel_has_guru_guru1_idx` (`idguru`),
  ADD KEY `fk_wali_kelas_kelas1_idx` (`idkelas`),
  ADD KEY `fk_tahun_akademik_tahun_akademik1_idx` (`idtahun_akademik`);

--
-- Indexes for table `_sessions`
--
ALTER TABLE `_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_TIMESTAMP` (`timestamp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `idguru` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `idmapel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mengajar`
--
ALTER TABLE `mengajar`
  MODIFY `idmengajar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  MODIFY `idprofil_sekolah` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rombel`
--
ALTER TABLE `rombel`
  MODIFY `idrombel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idsiswa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `idtahun_akademik` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  MODIFY `idwali_kelas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD CONSTRAINT `fk_guru_has_mapel_guru1` FOREIGN KEY (`idguru`) REFERENCES `guru` (`idguru`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_guru_has_mapel_mapel1` FOREIGN KEY (`idmapel`) REFERENCES `mapel` (`idmapel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mengajar_kelas1` FOREIGN KEY (`idkelas`) REFERENCES `kelas` (`idkelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mengajar_tahun_akademik1` FOREIGN KEY (`idtahun_akademik`) REFERENCES `tahun_akademik` (`idtahun_akademik`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_mapel_has_siswa_mapel1` FOREIGN KEY (`idmapel`) REFERENCES `mapel` (`idmapel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mapel_has_siswa_siswa1` FOREIGN KEY (`idsiswa`) REFERENCES `siswa` (`idsiswa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nilai_kelas1` FOREIGN KEY (`idkelas`) REFERENCES `kelas` (`idkelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nilai_tahun_akademik1` FOREIGN KEY (`idtahun_akademik`) REFERENCES `tahun_akademik` (`idtahun_akademik`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rombel`
--
ALTER TABLE `rombel`
  ADD CONSTRAINT `fk_rombel_siswa1` FOREIGN KEY (`idsiswa`) REFERENCES `siswa` (`idsiswa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rombel_wali_kelas1` FOREIGN KEY (`idwali_kelas`) REFERENCES `wali_kelas` (`idwali_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD CONSTRAINT `fk_rombel_has_guru_guru1` FOREIGN KEY (`idguru`) REFERENCES `guru` (`idguru`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tahun_akademik_tahun_akademik1` FOREIGN KEY (`idtahun_akademik`) REFERENCES `tahun_akademik` (`idtahun_akademik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wali_kelas_kelas1` FOREIGN KEY (`idkelas`) REFERENCES `kelas` (`idkelas`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
