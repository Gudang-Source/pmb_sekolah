-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 10:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id_rank` int(15) NOT NULL,
  `id_siswa` varchar(35) NOT NULL,
  `id_test` varchar(50) NOT NULL,
  `nilai_test` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_gelombang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id_rank`, `id_siswa`, `id_test`, `nilai_test`, `tanggal`, `id_gelombang`) VALUES
(22, '1', '1', '61', '2019-07-25', '3'),
(23, '1', '2', '78', '2019-07-25', '3'),
(24, '1', '3', '89', '2019-07-25', '3');

-- --------------------------------------------------------

--
-- Table structure for table `rn_admin`
--

CREATE TABLE `rn_admin` (
  `id_admin` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(110) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` enum('admin','operator') NOT NULL,
  `log` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rn_admin`
--

INSERT INTO `rn_admin` (`id_admin`, `username`, `password`, `email`, `nama`, `foto`, `level`, `log`) VALUES
(1, 'admin1', '202cb962ac59075b964b07152d234b70', 'bakelok_jalan@gmail.com', 'admin1', 'foto1534665167.jpg', 'admin', '2018-08-10 00:00:00'),
(2, 'user1', '202cb962ac59075b964b07152d234b70', 'bakelok_jalan@gmail.com', 'Mehsyam Ayed Safe', 'foto_admin1534694266.jpg', 'operator', NULL),
(5, 'edward', '202cb962ac59075b964b07152d234b70', 'kotokareh@gmail.com', 'Nahyed jalaludin Nafe\'', 'foto1539017021.jpg', 'operator', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rn_daftar`
--

CREATE TABLE `rn_daftar` (
  `id_pendaftaran` int(15) NOT NULL,
  `id_jurusan` varchar(30) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `nik` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tahun_lahir_ayah` int(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `penghasilan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tahun_lahir_ibu` int(11) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `tahun_lahir_wali` int(11) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL,
  `pendidikan_wali` varchar(100) NOT NULL,
  `penghasilan_wali` varchar(100) NOT NULL,
  `jenis_tinggal` varchar(100) NOT NULL,
  `rt` int(100) NOT NULL,
  `rw` int(100) NOT NULL,
  `desa_kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `tinggi_badan` int(10) NOT NULL,
  `berat_badan` int(10) NOT NULL,
  `nomor_telp_rumah` int(10) NOT NULL,
  `no_telepon` int(10) NOT NULL,
  `jarak_sekolah` int(10) NOT NULL,
  `alat_transportasi` varchar(100) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `alamat_email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `konfirmasi` enum('P','N','Y','') NOT NULL,
  `ta_akademik` varchar(110) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `alamat_sekolah_asal` text NOT NULL,
  `rapor_scan` varchar(100) NOT NULL,
  `ijazah_scan` varchar(100) NOT NULL,
  `kk_scan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rn_daftar`
--

INSERT INTO `rn_daftar` (`id_pendaftaran`, `id_jurusan`, `no_pendaftaran`, `nama_pendaftar`, `jk`, `nik`, `foto`, `tempat_lahir`, `tanggal_lahir`, `agama`, `nama_ayah`, `tahun_lahir_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `penghasilan_ayah`, `nama_ibu`, `tahun_lahir_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `penghasilan_ibu`, `nama_wali`, `tahun_lahir_wali`, `pekerjaan_wali`, `pendidikan_wali`, `penghasilan_wali`, `jenis_tinggal`, `rt`, `rw`, `desa_kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `tinggi_badan`, `berat_badan`, `nomor_telp_rumah`, `no_telepon`, `jarak_sekolah`, `alat_transportasi`, `prestasi`, `alamat_email`, `tanggal`, `konfirmasi`, `ta_akademik`, `sekolah_asal`, `alamat_sekolah_asal`, `rapor_scan`, `ijazah_scan`, `kk_scan`) VALUES
(1, '', 'PSB-PDB-17-1', 'Ismarianto', 'L', 34242, 'foto1545032417.jpg', 'padang', '2018-12-13', 'Islam', 'dsfs', 2352, '2423', 'Sarjana teknik informatik', '3242', '3242', 23423, '234', '234', '24', '243', 234, '234', '234', '23424223', '3', 9, 9, 'Padang', 'padang', 'padang', 'padang', 324, 26, 2342, 235223532, 353434, 34, 'Sepeda Motor', '-', 'SADA@ASDA.COM', '2018-12-17', 'Y', '3', 'SMA 1 Ranah Pesisir', 'Padang', 'rapor_scan1545030207.pdf', 'ijazah_scan1545030208.pdf', 'kk_scan1545030208.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `rn_informasi`
--

CREATE TABLE `rn_informasi` (
  `id_informasi` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rn_jurusan`
--

CREATE TABLE `rn_jurusan` (
  `id_jurusan` int(14) NOT NULL,
  `nama_jurusan` varchar(100) DEFAULT NULL,
  `kode_jurusan` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rn_jurusan`
--

INSERT INTO `rn_jurusan` (`id_jurusan`, `nama_jurusan`, `kode_jurusan`) VALUES
(2, 'Teknik Informatika', 'A341'),
(3, 'Pertanian', '324A');

-- --------------------------------------------------------

--
-- Table structure for table `rn_pdb`
--

CREATE TABLE `rn_pdb` (
  `id_gelombang` int(15) NOT NULL,
  `keterangan` enum('Y','N') NOT NULL,
  `ta_akademik` varchar(50) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `kuota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rn_pdb`
--

INSERT INTO `rn_pdb` (`id_gelombang`, `keterangan`, `ta_akademik`, `tgl_mulai`, `tgl_selesai`, `kuota`) VALUES
(3, 'Y', '2019', '2019-07-15', '2019-07-31', '123');

-- --------------------------------------------------------

--
-- Table structure for table `rn_setting`
--

CREATE TABLE `rn_setting` (
  `parameter` varchar(100) NOT NULL,
  `nilai` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rn_setting`
--

INSERT INTO `rn_setting` (`parameter`, `nilai`) VALUES
('nama', '<p>SMPN 1 RANAH PESISIR</p>\r\n'),
('judul', '<p>SMPN 1 RANAH PESISIR</p>\r\n'),
('jalan', '<p>Jl. Jenderal Ahmad Yani No.284, 13 Ulu, Seberang Ulu II, Kota Palembang, Sumatera Selatan 30116</p>\r\n'),
('description', '<p>adalah sekolah yang terletak di jantung kota padang ini adalah sebuah sekolah&nbsp;Maecenas feugi'),
('copyright', '<p>Someone is noting</p>\r\n'),
('author', '<p>Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facil</p>\n'),
('favicon', '1536857263.png'),
('visi_misi', '<p>Kkkkk</p>\n'),
('telp', '<p>fsf</p>\r\n'),
('map_google', ''),
('cara_daftar', '<p>Langkah 2 Dalam Pendafataran balaitenaga kerja  : </p>\r\n\r\n<p>1. Klik modul pendaftaran pada menu navbar  atau link http://example.com/pendaftaran.jsp </p>\r\n\r\n<p>2. Isikan Biodata lengkap seperti yang ada pada form pendaftaran.</p>\r\n\r\n<p>3.Pastikan sebelum mensubmit form isian registrasi tidak ada salah satu isian yang kosong </p>\r\n\r\n<p>4.Apabila berhasil melakukan registrasi tahap awal silahkan menunggu konfirmasi penerimaan siswa baru dari pihak operator PSB</p>\r\n\r\n<p>5.Silahkan cek hasil pendaftaran pada modul cek kelulusan , apabila data PSB dengan nomor pendaftaran anda di terima     silahkan login untuk melengkapi file pas foto     jika  tidak lulus silahkan mencoba mendaftar untuk lain waktu    TIM IT   </p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rn_slider`
--

CREATE TABLE `rn_slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_admin` int(16) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rn_slider`
--

INSERT INTO `rn_slider` (`id_slider`, `gambar`, `keterangan`, `id_admin`, `tanggal`) VALUES
(3, 'slider1536910727.jpg', 'Kampus Ciyus', 1, '2018-10-09'),
(5, 'slider1536910753.png', 'What', 1, '2018-09-14'),
(6, 'slider1536911201.jpg', 'Universitas', 1, '2018-09-14'),
(10, 'slider1537118403.jpg', 'asdadad', 1, '2018-09-16'),
(11, 'slider1539195311.jpg', 'wa', 1, '2018-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id_test` int(15) NOT NULL,
  `nama_test` varchar(50) NOT NULL,
  `kkm` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_gelombang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id_test`, `nama_test`, `kkm`, `tanggal`, `id_gelombang`) VALUES
(1, 'B.indonesia', '70', '2019-07-19', '3'),
(2, 'Matematika', '70', '0000-00-00', '3'),
(3, 'B.Inggris', '70', '0000-00-00', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id_rank`);

--
-- Indexes for table `rn_admin`
--
ALTER TABLE `rn_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `rn_daftar`
--
ALTER TABLE `rn_daftar`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `rn_informasi`
--
ALTER TABLE `rn_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `rn_jurusan`
--
ALTER TABLE `rn_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `rn_pdb`
--
ALTER TABLE `rn_pdb`
  ADD PRIMARY KEY (`id_gelombang`);

--
-- Indexes for table `rn_slider`
--
ALTER TABLE `rn_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id_rank` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `rn_admin`
--
ALTER TABLE `rn_admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rn_daftar`
--
ALTER TABLE `rn_daftar`
  MODIFY `id_pendaftaran` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rn_informasi`
--
ALTER TABLE `rn_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rn_jurusan`
--
ALTER TABLE `rn_jurusan`
  MODIFY `id_jurusan` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rn_pdb`
--
ALTER TABLE `rn_pdb`
  MODIFY `id_gelombang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rn_slider`
--
ALTER TABLE `rn_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
