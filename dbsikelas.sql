-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2016 at 03:01 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsikelas`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_si_c_2014`
--

CREATE TABLE IF NOT EXISTS `anggota_si_c_2014` (
  `nim` int(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `no_telephon` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `biografi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_si_c_2014`
--

INSERT INTO `anggota_si_c_2014` (`nim`, `nama`, `ttl`, `jk`, `alamat`, `no_telephon`, `foto`, `hobi`, `biografi`) VALUES
(14540065, 'indra purwa laksana', 'Tegal, 03 oktober 1996', 'laki-laki', 'desa ketileng rt.05/rw.02 kramat tegal', '087897732401', 'indra.jpg', 'semua yang berguna', 'pernah sekolah di smk ypt kota tegal'),
(14540070, 'ira wulandari', 'nganjuk, 03 agustus 1996', 'perempuan', 'palembang', '085344', 'Tri canovanty.JPG', 'nggosip', 'pernah sekolah di nganjuk jawa timur');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `IdBerita` int(11) NOT NULL,
  `jdl_berita` varchar(50) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_berita` date NOT NULL,
  `foto` text NOT NULL,
  `createduser` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`IdBerita`, `jdl_berita`, `isi_berita`, `tgl_berita`, `foto`, `createduser`) VALUES
(2, 'Project ini pasti akan berhasil', 'usaha pantang menyerah walaupun banyak pengorbanan harus dilakukan, tapi pasti hasil akan didapatkan. walau jalan tidak akan mudah aku tidak akan menyerah. no gain whithout a pain', '2016-02-09', 'inaadex.jpg', 2),
(3, 'Konsep dasar sistem', 'Mempersoalkan system sebenarnya bukan membahas hal yang baru. Memang di dunia ini tidak ada yang sama sekali baru. Kalau ada sesuatu yang baru, sebenarnya ia sudah lama ada. Di nilai baru karena baru ditemukan dan baru diungkapkan serta baru diketahui oleh banyak orang. Untuk sampai pada kesepakatan terhadap sesuatu yang tampak baru itu, lebih dulu terjadi pertentangan pendapat yang berlanjut pada perdebatan. Perdebatan ini menghasilkan sesuatu keputusan yang seolah-olah baru, padahal pada hakekatnya bukan baru, melainkan ia (yang disepakati) itu sudah lama ada atau terjadi.', '2016-02-09', 'Photo0317.jpg', 2),
(4, 'Soal BD 1', 'Sebuah perusahaan yang mempunyai cabang di setiap provinsi di seluruh Indonesia memasarÂ¬kan barang dengan cara MLM (multi level marketing). Barang yang dipasarkan berbagai jenis antara lain peralatan rumah tangga, makanan/minuman kesehatan, obat-obatan, mainan anak-anak, dan lain-lain dengan berbagai merk. Setiap cabang mempunyai stok barang sendiri dengan banyak tenaga penjual yang dikelompokkan berdasarkan kabupaten pada provinsi yang bersangÂ¬kutan. Konsumen/pelanggan membeli barang melalui tenaga penjual. Seiring dengan berkembangnya perusahaan, akan dibuat software aplikasi yang dapat memberikan berbagai informasi yang menyangkut stok barang di setiap cabang, tingkat penjualan berdasarkan jenis barang, wilayah kabupaten, tenaga penjual, dsb. Hal lain yang dianggap perlu Anda tetapkan sendiri dan dinyatakan dalam laporan tugas.\r\n', '2016-02-09', 'colorful-smoke-in-hand-620.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE IF NOT EXISTS `buku_tamu` (
  `email` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `Id_kegiatan` int(11) NOT NULL,
  `jdl_kegiatan` varchar(50) NOT NULL,
  `isi_kegiatan` text NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `foto` text NOT NULL,
  `createduser` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`Id_kegiatan`, `jdl_kegiatan`, `isi_kegiatan`, `tgl_kegiatan`, `foto`, `createduser`) VALUES
(2, 'futsal bersama', 'kami sangat mengharapkan kehadiran kalian untuk menerima ajakan sparing futsal kami', '2016-02-12', '11779865_1088352257849247_1573709096002270238_o.gif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `link_lain`
--

CREATE TABLE IF NOT EXISTS `link_lain` (
  `judul` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link_lain`
--

INSERT INTO `link_lain` (`judul`, `link`, `keterangan`) VALUES
('tokobajunesia', 'http://tokobajunesia.esy.es/', 'partner'),
('UIN RADEN FATAH PALEMBANG', 'http://www.radenfatah.ac.id', 'partner');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `jdl_pengumuman` varchar(50) NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `createduser` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `jdl_pengumuman`, `tgl_pengumuman`, `isi_pengumuman`, `createduser`) VALUES
(1, 'judul', '2016-02-01', 'isi', 1),
(2, 'judul', '2016-02-09', 'isi', 1),
(3, 'penting', '2016-02-09', 'penting', 1),
(4, 'Pembayaran ukt', '2016-02-09', 'pembayaran ukt universitas islam raden fatah palembang dari tanggal 1-29 febuari 2016', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE IF NOT EXISTS `tuser` (
  `IdUser` int(100) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last_login` date NOT NULL,
  `created_date` date NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`IdUser`, `nama`, `alamat`, `telepon`, `username`, `password`, `last_login`, `created_date`, `level`) VALUES
(1, 'indra purwa laksana', 'talang jambe', '0878', 'indra', '123', '2016-02-01', '2016-02-02', 1),
(2, 'purwa', 'palembang', '0878', 'purwa', '456', '2016-02-03', '2016-02-01', 2),
(4, 'indra yani 66', 'ngulak sekayu sumatra selatan', '085322', 'yani66', 'yani66', '2016-02-02', '0000-00-00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_si_c_2014`
--
ALTER TABLE `anggota_si_c_2014`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`IdBerita`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`Id_kegiatan`);

--
-- Indexes for table `link_lain`
--
ALTER TABLE `link_lain`
  ADD PRIMARY KEY (`judul`,`link`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `IdBerita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `Id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `IdUser` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
