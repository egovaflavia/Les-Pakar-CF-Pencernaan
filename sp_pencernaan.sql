-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 25, 2020 at 04:25 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14429699_db_pencernaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(10) NOT NULL,
  `ket_gejala` varchar(255) NOT NULL,
  `angka_cf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `kode_gejala`, `ket_gejala`, `angka_cf`) VALUES
(1, 'G01', 'merasakan mual', '0.4'),
(2, 'G02', 'perut terasa kembung', '0.6'),
(3, 'G03', 'merasa nyeri pada ulu hati', '0.8'),
(4, 'G04', 'sering bersendawa', '0.4'),
(5, 'G05', 'merasakan nyeri bertambah pada saat perut kosong', '0.6'),
(6, 'G06', 'merasa cepat dan mudah kenyang saat makan', '0.8'),
(7, 'G07', 'merasa nafsu makan menurun', '0.6'),
(8, 'G08', 'merasakan lidah terasa pahit', '0.8'),
(9, 'G09', 'merasakan nyeri bertambah pada saat perut terisi makanan', '1'),
(10, 'G10', 'muntah darah', '0.8'),
(11, 'G11', 'buang air besar yang berwarna hitam', '0.6'),
(12, 'G12', 'berak cair 1-2 kali dalam sehari', '1'),
(13, 'G13', 'tidak merasakan haus dan tidak muntah', '0.4'),
(14, 'G14', 'masih kuat beraktifitas dan mempunyai nafsu makan', '0.4'),
(15, 'G15', 'berak cair 4-9 kali dalam sehari', '1'),
(16, 'G16', 'terkadang muntah 1-2 kali dalam sehari', '0.6'),
(17, 'G17', 'merasa haus dan tidak mau makan', '0.6'),
(18, 'G18', 'merasa badan lemah tidak bertenaga', '0.6'),
(19, 'G19', 'berak cair terus menerus', '0.8'),
(20, 'G20', 'merasa mata Anda terlihat cekung', '0.6'),
(21, 'G21', 'merasa mulut bau dan bibir kering', '0.6'),
(22, 'G22', 'merasa tangan dan kaki Anda dingin', '0.6'),
(23, 'G23', 'merasa suara Anda serak/hilang', '0.6'),
(24, 'G24', 'tidak kencing selama 6 jam atau lebih', '0.8');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_konsul`
--

CREATE TABLE `hasil_konsul` (
  `id` int(11) NOT NULL,
  `kode_diagnosa` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `tgl` varchar(25) NOT NULL,
  `tingkat_kepastian` varchar(11) NOT NULL,
  `kode_solusi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_konsul`
--

INSERT INTO `hasil_konsul` (`id`, `kode_diagnosa`, `nama`, `jk`, `umur`, `tgl`, `tingkat_kepastian`, `kode_solusi`) VALUES
(95, 'DGNS-5f44e17823c84', 'Atsira', 'Perempuan', '23', '2020-08-25', '35.2', 'S02');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `tgl` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `nama`, `level`, `jk`, `umur`, `tgl`) VALUES
(5, 'admin', '$2y$10$OL28w5EEWZ19zRkWaWnmAeNfMtZPHOIFV3bazkgHHr7tpWL0mkQwq', 'Tiara Armelia', 'admin', 'perempuan', '21', '03-03-2019'),
(21, 'zalfa', '$2y$10$Bo/lfSWu2wGMncmK.jpa0Ow51YK4FmjOBdLRJiUEYFsVxR9w.PRua', 'Atsira', 'klien', 'Perempuan', '23', '25-08-2020');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(10) NOT NULL,
  `nm_penyakit` varchar(50) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode_penyakit`, `nm_penyakit`, `ket`) VALUES
(1, 'P01', 'Dispepsia Fungsional', 'Bentuk gangguan pencernaan atau sakit perut tanpa adanya luka (ulkus) , dimana pasien merasakan nyeri akan tetapi tidak ditemukan kelainan pada saat pemeriksaan dengan endoskopi.'),
(2, 'P02', 'Dispepsia Like Ulcer', 'Bentuk gangguan pencernaan yang didominasi dengan rasa nyeri pada ulu hati yang setipe dengan penyakit maag.'),
(3, 'P03', 'Dispepsia Tipe Dismotility', 'Penyakit pada saluran pencernaan yang mendominasi keluhan seperti perut kembung, mudah kenyang, serta merasa mual. Penyakit ini bila dicek dengan endoskopi terlihat upper abdominal bloating (bengkak perut bagian atas).'),
(4, 'P04', 'Tukak Lambung', 'Penyakit ini merupakan terkikisnya lapisan dinding lambung yang merupakan luka pada dinding lambung tersebut. Penyakit tukak lambung merupakan bentuk penyakit lambung yang tergolong berat.'),
(5, 'P05', 'Diare tanpa dehidrasi', 'Penyakit ini mengakibatkan penderita buang air besar terus menerus karena feses memiliki kandungan air yang berlebihan. Pada tingkatan penyakit ini, diare yang masih tergolong ringan karena penderita belum kekurangan cairan.'),
(6, 'P06', 'Diare dengan dehidrasi sedang', 'Penyakit ini mengakibatkan penderita buang air besar terus menerus sehingga menyebabkan penderita kekurangan cairan.'),
(7, 'P07', 'Diare dengan dehidrasi berat', 'Penyakit ini mengakibatkan penderita buang air besar secara terus menerus dan menyebabkan penderita sangat kekurangan cairan dan dehidrasi sehingga membuat penderita sangat lemah dan tidak berenergi.');

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id` int(11) NOT NULL,
  `kode_solusi` varchar(10) NOT NULL,
  `ket_solusi` varchar(2555) NOT NULL,
  `nm_penyakit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id`, `kode_solusi`, `ket_solusi`, `nm_penyakit`) VALUES
(1, 'S01', '1. Melakukan pengobatan yang dapat menghambat pompa asam dengan cara mengkonsumsi obat lansoprazole.\r\n<br>\r\n2. Jangan biarkan perut dalam keadaan kosong dan lapar.\r\n', 'Dispepsia Fungsional'),
(2, 'S02', '1. Selalu sedia makanan ringan, makanlah makanan ringan tersebut dalam waktu setiap 3 jam.\r\n<br>\r\n2. Jangan makan langsung banyak dalam satu waktu, hal tersebut akan mengakibatkan Anda memuntahkan makanan tersebut.', 'Dispepsia Like Ulcer'),
(3, 'S03', '1. Mengkonsumsi obat yang dapat mengurangi gas pada tubuh, seperti obat Mylanta.\r\n<br>\r\n2. Selalu sedia makanan atau cemilan untuk dimakan setiap 3 jam,  agar dapat mencegah penyakit yang lebih kronis.', 'Dispepsia Tipe Dismotility'),
(4, 'S04', '1. Istirahat yang cukup dan konsumsi obat maag.\r\n<br>\r\n2. Jika Anda tidak sanggup menahan nyeri tersebut maka disarankan untuk menyegerakan berobat ke rumah sakit atau melakukan pemeriksaan ke dokter. \r\n', 'Tukak Lambung'),
(5, 'S05', '1. Mengkonsumsi oralit agar penderita tidak kekurangan cairan.\r\n<br> \r\n2. Banyak mengkonsumsi air putih. <br>\r\n3. Mengkonsumsi bubur dan makanan yang rendah serat dan tidak berlemak.', 'Diare tanpa dehidrasi'),
(6, 'S06', '1. Segera berikan infus cairan intravena (pemberian sejumlah cairan ke dalam tubuh melalui sebuah jarum) lalu beri larutan oralit.\r\n<br>\r\n2. Mengkonsumsi cairan oralit 2 kali sehari.', 'Diare dengan dehidrasi sedang'),
(7, 'S07', '1. Bawalah penderita ke rumah sakit untuk penanganan dan pengobatan lebih lanjut.\r\n<br>\r\n2. Hindari mengkonsumsi teh dan kopi.', 'Diare dengan dehidrasi berat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_konsul`
--
ALTER TABLE `hasil_konsul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hasil_konsul`
--
ALTER TABLE `hasil_konsul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;