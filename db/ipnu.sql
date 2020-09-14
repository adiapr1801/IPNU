-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 12:50 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipnu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` varchar(11) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `rt` int(2) NOT NULL,
  `rw` int(2) NOT NULL,
  `desa` varchar(15) NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `kabupaten` varchar(15) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `telepon`) VALUES
(0, '', '', '', '', 0, 0, '', '', '', ''),
(111, 'riki', 'wonogiri', '2020-06-10', 'Pondok', 1, 2, 'Domas', 'Bulukerto', 'Wonogiri', '082111111111111'),
(113, 'Adi Apr', 'wonogiri', '2020-06-17', 'tanjung', 2, 2, 'bulusari', 'slogohimo', 'Wonogiri', '083245678098'),
(114, 'asdwdwadi', 'sukoharjo', '2020-06-09', 'swd', 2, 2, 'wdxs', 'Bulukerto', 'sws', '13434556543');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `no` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `katakunci` varchar(50) NOT NULL,
  `gambar` longblob NOT NULL,
  `artikel` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`no`, `judul`, `tanggal`, `penulis`, `katakunci`, `gambar`, `artikel`) VALUES
(1, '2', '0000-00-00', '5', 'h', 0x73, 'a'),
(2, 'lorepm', '0000-00-00', 'adiAPR', 'aakasj, akhkjsa, kash', 0x54756c6970732e6a7067, 'swd'),
(3, 'lorepm', '0000-00-00', 'adiAPR', 'aakasj, akhkjsa, kash', 0x54756c6970732e6a7067, 'swd'),
(4, 'Kebakaran hutan', '2020-06-16', 'adiAPR', 'hjll, khiu, jkj', 0x4368727973616e7468656d756d2e6a7067, 'Pada file index.php diatas terdapat script <form method=â€postâ€ action=â€proses.phpâ€> yang berfungsi untuk mengirimkan data yang kita input melalui form untuk masuk kedalam file proses.php\r\n\r\nSelanjutnya langkah yang terakhir kita akan membuat proses inputan tanggal nya, dan silahkan teman-teman simpan script yang terdapat dibawah ini dengan nama proses.php'),
(5, 'SURVEI SRC IPNU: NEW NORMAL PERSPEKTIF PELAJAR', '2020-06-17', 'NEWS, OPINI, WARTA', 'aakasj, akhkjsa, kash', 0x636c6173732e706e67, 'Penerapan New Normal yang hari ini hangat diperbincangkan oleh berbagai pakar dalam berbagai bidang termasuk dalam aspek pendidikan. Prokontra yang terjadi di masyarakat memang tidak bisa dielakkan, karena masing masing memiliki pandangan dan persepsi yang berbeda. Ikatan Pelajar Nahdlatul Ulama (IPNU) sebagai organisasi kepelajaran terbesar di Indonesia ikut berkonstribusi memberikan masukan kepada pemerintah melalui mini riset.\r\nLembaga Student Research Center (SRC) Pimpinan Pusat Ikatan Pelajar Nahdlatul Ulama (PP IPNU) melakukan survei tentang New Normal dalam prespektif pelajar. survei dilakukan pada tanggal 4-14 Juni 2020, dengan responden 1.273 Pelajar SMP, SMA dan Mahasiswa di 34 Provinsi di Indonesia.\r\nDirektur SRC PP IPNU, Agus Suherman Tanjung menyampaikan survei diawali dengan pertanyaan tentang pengetahuan pelajar tentang apa itu New Normal, ada 67,5% pelajar menjawab faham new normal, kemudian 20,3% kurang faham, 10,7% menjawab sangat faham, dan sisanya 1,5% menjawab tidak faham.');

-- --------------------------------------------------------

--
-- Table structure for table `berita1`
--

CREATE TABLE `berita1` (
  `no` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `katakunci` varchar(50) NOT NULL,
  `gambar` longblob NOT NULL,
  `artikel` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita1`
--

INSERT INTO `berita1` (`no`, `judul`, `tanggal`, `penulis`, `katakunci`, `gambar`, `artikel`) VALUES
(0, 'SURVEI SRC IPNU: NEW NORMAL PERSPEKTIF PELAJAR', '2020-06-19', 'lorem', 'aakasj, akhkjsa, kash', 0x54756c6970732e6a7067, 'Apakah Lorem Ipsum itu?\r\nLorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.\"\"');

-- --------------------------------------------------------

--
-- Table structure for table `doa`
--

CREATE TABLE `doa` (
  `no` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(25) NOT NULL,
  `gambar` longblob NOT NULL,
  `artikel` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doa`
--

INSERT INTO `doa` (`no`, `judul`, `tanggal`, `penulis`, `gambar`, `artikel`) VALUES
(1, 'lorepm', '2020-06-17', 'adiAPR', 0x636c6173732e706e67, 'Penerapan New Normal yang hari ini hangat diperbincangkan oleh berbagai pakar dalam berbagai bidang termasuk dalam aspek pendidikan. Prokontra yang terjadi di masyarakat memang tidak bisa dielakkan, karena masing masing memiliki pandangan dan persepsi yang berbeda. Ikatan Pelajar Nahdlatul Ulama (IPNU) sebagai organisasi kepelajaran terbesar di Indonesia ikut berkonstribusi memberikan masukan kepada pemerintah melalui mini riset.\r\nLembaga Student Research Center (SRC) Pimpinan Pusat Ikatan Pelajar Nahdlatul Ulama (PP IPNU) melakukan survei tentang New Normal dalam prespektif pelajar. survei dilakukan pada tanggal 4-14 Juni 2020, dengan responden 1.273 Pelajar SMP, SMA dan Mahasiswa di 34 Provinsi di Indonesia.\r\nDirektur SRC PP IPNU, Agus Suherman Tanjung menyampaikan survei diawali dengan pertanyaan tentang pengetahuan pelajar tentang apa itu New Normal, ada 67,5% pelajar menjawab faham new normal, kemudian 20,3% kurang faham, 10,7% menjawab sangat faham, dan sisanya 1,5% menjawab tidak faham.');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `no` int(5) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `gambar` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`no`, `judul`, `keterangan`, `gambar`) VALUES
(1, 'Kebakaran hutan', '', 0x50656e6775696e732e6a7067),
(2, 'sfds', '', 0x50656e6775696e732e6a7067),
(3, 'sfsgs', '', 0x54756c6970732e6a7067),
(4, 'wrreds', 'sdda', 0x4c69676874686f7573652e6a7067),
(5, 'SASd', 'sdada', 0x4b6f616c612e6a7067),
(6, 'QSWS', 'SSADA', 0x50656e6775696e732e6a7067),
(7, 'WDD', 'GERSsfdg', 0x4b6f616c612e6a7067),
(8, 'jgfhf', 'fhgd', 0x50656e6775696e732e6a7067),
(9, 'kawan kawankui', 'sdda', 0x54756c6970732e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `hikmah`
--

CREATE TABLE `hikmah` (
  `no` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(25) NOT NULL,
  `gambar` longblob NOT NULL,
  `artikel` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hikmah`
--

INSERT INTO `hikmah` (`no`, `judul`, `tanggal`, `penulis`, `gambar`, `artikel`) VALUES
(1, 'sfds', '2020-06-17', 'adiAPR', 0x61635f76616c69646173692070726f64756b73692e706e67, 'Penerapan New Normal yang hari ini hangat diperbincangkan oleh berbagai pakar dalam berbagai bidang termasuk dalam aspek pendidikan. Prokontra yang terjadi di masyarakat memang tidak bisa dielakkan, karena masing masing memiliki pandangan dan persepsi yang berbeda. Ikatan Pelajar Nahdlatul Ulama (IPNU) sebagai organisasi kepelajaran terbesar di Indonesia ikut berkonstribusi memberikan masukan kepada pemerintah melalui mini riset.\r\nLembaga Student Research Center (SRC) Pimpinan Pusat Ikatan Pelajar Nahdlatul Ulama (PP IPNU) melakukan survei tentang New Normal dalam prespektif pelajar. survei dilakukan pada tanggal 4-14 Juni 2020, dengan responden 1.273 Pelajar SMP, SMA dan Mahasiswa di 34 Provinsi di Indonesia.\r\nDirektur SRC PP IPNU, Agus Suherman Tanjung menyampaikan survei diawali dengan pertanyaan tentang pengetahuan pelajar tentang apa itu New Normal, ada 67,5% pelajar menjawab faham new normal, kemudian 20,3% kurang faham, 10,7% menjawab sangat faham, dan sisanya 1,5% menjawab tidak faham.');

-- --------------------------------------------------------

--
-- Table structure for table `opini`
--

CREATE TABLE `opini` (
  `no` int(5) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(250) NOT NULL,
  `gambar` longblob NOT NULL,
  `artikel` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opini`
--

INSERT INTO `opini` (`no`, `judul`, `tanggal`, `penulis`, `gambar`, `artikel`) VALUES
(1, 'lorepm', '2020-06-17', 'adiAPR', 0x636c6173735f6469616772616d2e706e67, 'opini'),
(2, 'Kebakaran hutan', '2020-06-19', 'ax', 0x556e7469746c65642e706e67, 'axax'),
(3, 'dd', '2020-06-19', 'ss', 0x556e7469746c65642e706e67, 'wsas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `berita1`
--
ALTER TABLE `berita1`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `doa`
--
ALTER TABLE `doa`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `hikmah`
--
ALTER TABLE `hikmah`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `opini`
--
ALTER TABLE `opini`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita1`
--
ALTER TABLE `berita1`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doa`
--
ALTER TABLE `doa`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hikmah`
--
ALTER TABLE `hikmah`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `opini`
--
ALTER TABLE `opini`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
