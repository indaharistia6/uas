-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 02:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dimpil_homestay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akomodasi`
--

CREATE TABLE `tb_akomodasi` (
  `id` int(11) NOT NULL,
  `nama_kamar` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar_kamar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akomodasi`
--

INSERT INTO `tb_akomodasi` (`id`, `nama_kamar`, `keterangan`, `kategori`, `harga`, `stok`, `gambar_kamar`) VALUES
(24, 'Deluxe Double Room A', 'Kamar untuk keluarga', 'Deluxe', 250000, 14, 'kamar_34.jpg'),
(25, 'Deluxe Double Room B', 'Kamar untuk keluarga', 'Deluxe', 250000, 15, 'kamar_43.jpg'),
(26, 'Deluxe Double Room C', 'Kamar untuk keluarga', 'Deluxe', 250000, 15, 'kamar_35.jpg'),
(27, 'Deluxe Double Room D', 'Kamar untuk keluarga', 'Deluxe', 250000, 15, 'kamar_44.jpg'),
(28, 'Double Room A', 'Kamar untuk sendiri/pasangan', 'Double', 200000, 15, 'kamar_13.jpg'),
(29, 'Double Room B', 'Kamar untuk sendiri/pasangan', 'Double', 200000, 15, 'kamar_23.jpg'),
(30, 'Double Room C', 'Kamar untuk sendiri/pasangan', 'Double', 200000, 15, 'kamar_54.jpg'),
(31, 'Double Room D', 'Kamar untuk sendiri/pasangan', 'Double', 200000, 15, 'kamar_14.jpg'),
(32, 'Double Room E', 'Kamar untuk sendiri/pasangan', 'Double', 200000, 15, 'kamar_24.jpg'),
(34, 'Double Room F', 'Kamar untuk sendiri/pasangan', 'Double', 200000, 15, 'kamar_55.jpg'),
(35, 'Double Room G', 'Kamar untuk sendiri/pasangan', 'Double', 200000, 15, 'kamar_15.jpg'),
(36, 'Double Room H', 'Kamar untuk sendiri/pasangan', 'Double', 200000, 15, 'kamar_26.jpg'),
(38, 'Double Room K', 'Kamar untuk sendiri/pasangan', 'Double', 200000, 1, 'kamar_56.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_tamu`
--

CREATE TABLE `tb_buku_tamu` (
  `id_buku_tamu` int(11) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar_galeri` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul`, `deskripsi`, `tanggal`, `gambar_galeri`) VALUES
(3, 'Halaman Dimpil', 'Halaman Dimpil Homestay yang terletak di depan kamar', '2020-11-01', 'halaman1.jpg'),
(4, 'Restoran', 'restoran dimpil homestay ', '2020-11-01', 'resto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(2, 'Indah Aristia', 'Denpasar', '2020-09-28 08:24:27', '2020-09-29 08:24:27'),
(6, 'Budiyani', 'Denpasar', '2020-11-02 15:00:22', '2020-11-03 15:00:22'),
(20, 'Eka', 'Singaraja', '2020-12-12 09:27:09', '2020-12-13 09:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesan` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesan`, `id_invoice`, `id`, `nama_kamar`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 2, 1, 'Deluxe Room 1', 1, 300000, ''),
(2, 3, 1, 'Deluxe Room 1', 1, 300000, ''),
(3, 4, 1, 'Deluxe Room 1', 1, 300000, ''),
(4, 5, 3, 'Double Room 1', 1, 300000, ''),
(5, 6, 3, 'Double Room 1', 1, 300000, ''),
(6, 7, 1, 'Deluxe Room 1', 1, 300000, ''),
(7, 8, 8, 'Double Deluxe', 2, 300000, ''),
(8, 9, 1, 'Deluxe Room 1', 1, 300000, ''),
(9, 10, 1, 'Deluxe Room 1', 1, 300000, ''),
(10, 18, 22, 'fghjn', 1, 200000, ''),
(11, 19, 38, 'Double Room K', 1, 200000, ''),
(12, 20, 24, 'Deluxe Double Room A', 1, 250000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_kamar` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_akomodasi SET stok = stok-NEW.jumlah
    WHERE id = NEW.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_saran`
--

CREATE TABLE `tb_saran` (
  `id_saran` int(11) NOT NULL,
  `nama_saran` varchar(20) NOT NULL,
  `email_saran` varchar(25) NOT NULL,
  `telp_saran` bigint(15) NOT NULL,
  `isi_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_saran`
--

INSERT INTO `tb_saran` (`id_saran`, `nama_saran`, `email_saran`, `telp_saran`, `isi_saran`) VALUES
(4, 'Eka', 'eka@gmail.com', 85678332123, 'Kamarnya sangat bagus dan bersih. Pegawainya sangat ramah!');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentang_hotel`
--

CREATE TABLE `tb_tentang_hotel` (
  `id_tentang_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(20) NOT NULL,
  `alamat_tentang_hotel` varchar(35) NOT NULL,
  `email_tentang_hotel` varchar(25) NOT NULL,
  `telp_tentang_hotel` bigint(15) NOT NULL,
  `isi_tentang_hotel` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `tw` varchar(50) NOT NULL,
  `gp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tentang_hotel`
--

INSERT INTO `tb_tentang_hotel` (`id_tentang_hotel`, `nama_hotel`, `alamat_tentang_hotel`, `email_tentang_hotel`, `telp_tentang_hotel`, `isi_tentang_hotel`, `logo`, `fb`, `tw`, `gp`) VALUES
(4, 'Dimpil Homestay', 'Jalan Arjuna, Pemuteran', 'dimpilhomestay@gmail.com', 98768234567, '	Dimpil Royal Homestay terletak di Jalan Arjuna, Desa Pemuteran, Kecamatan Gerokgak, Kabupaten Buleleng, Bali. Berdiri pada tanggal 31 Juni 2014, merupakan homestay yang dimiliki oleh Ni Kadek Ria Risti Udayani. Jumlah pekerja yang bekerja di Dimpil Homestay ada 4 orang. ', 'fo6.jpg', 'Dimpil Homestay Pemuteran', 'dimpil.homestay', 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2),
(3, 'Budi', 'Budiman', '123', 2),
(5, 'indah', 'indah', '123', 2),
(6, 'Budiyani', 'Budi', '123', 2),
(7, 'user1', 'user1', '123', 2),
(8, 'user4', 'user4', '123', 2),
(9, 'gay', 'gay', '123', 2),
(10, 'cici', 'cici', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_welcome`
--

CREATE TABLE `tb_welcome` (
  `id_welcome` int(11) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar_welcome` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_welcome`
--

INSERT INTO `tb_welcome` (`id_welcome`, `keterangan`, `tanggal`, `gambar_welcome`) VALUES
(1, 'Gambar Welcome', '2020-10-30', 'resto.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akomodasi`
--
ALTER TABLE `tb_akomodasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buku_tamu`
--
ALTER TABLE `tb_buku_tamu`
  ADD PRIMARY KEY (`id_buku_tamu`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_saran`
--
ALTER TABLE `tb_saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `tb_tentang_hotel`
--
ALTER TABLE `tb_tentang_hotel`
  ADD PRIMARY KEY (`id_tentang_hotel`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_welcome`
--
ALTER TABLE `tb_welcome`
  ADD PRIMARY KEY (`id_welcome`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akomodasi`
--
ALTER TABLE `tb_akomodasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_buku_tamu`
--
ALTER TABLE `tb_buku_tamu`
  MODIFY `id_buku_tamu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_saran`
--
ALTER TABLE `tb_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_tentang_hotel`
--
ALTER TABLE `tb_tentang_hotel`
  MODIFY `id_tentang_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_welcome`
--
ALTER TABLE `tb_welcome`
  MODIFY `id_welcome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
