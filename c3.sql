-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2022 at 01:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c3`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(15) NOT NULL,
  `kodeBarang` varchar(15) NOT NULL,
  `namaBarang` varchar(30) NOT NULL,
  `fotoBarang` varchar(200) NOT NULL,
  `hargaBarang` double NOT NULL,
  `keteranganBarang` varchar(500) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `stokBarang` int(15) NOT NULL,
  `satuan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `kodeBarang`, `namaBarang`, `fotoBarang`, `hargaBarang`, `keteranganBarang`, `kategori`, `stokBarang`, `satuan`) VALUES
(1, 'PN-01', 'PARFUM CACTUS', ',6295449da0cd52.96042177.jpeg', 75000, 'PARFUM UNIK BERBENTUK CACTUS', 'NON JASA', 23, '-'),
(2, 'PN-02', 'WIPER BOSCH 12', ',629f72f8e9f373.70015817.jpeg', 45000, 'WIPER BOSCH BERUKURAN 12', 'NON JASA', 8, '-'),
(3, 'PJ-01', 'OLI LUCAS', ',6295453daa6b50.74718032.jpeg', 150000, 'OLI LUCAS UNTUK GANTI OLI', 'JASA', 50, 'GALON'),
(4, 'PJ-02', 'GOLD SOAP', ',629545830e8d13.43973510.jpeg', 150000, 'GOLD SOAP UNTUK GOLD WASH', 'JASA', 20, 'BOTOL'),
(5, 'PJ-03', 'GOLD WAX', ',629545aef36e13.42319030.jpeg', 250000, 'GOLD WAX UNTUK GOLD WASH', 'JASA', 10, 'BOTOL'),
(6, 'PJ-04', 'SILVER WAX', ',629545e821fa53.30065963.jpeg', 175000, 'SILVER WAX UNTUK SILVER WASH', 'JASA', 9, 'BOTOL'),
(7, 'PJ-05', 'CALIPER COAT', ',62954622867014.08249139.jpeg', 150000, 'CALIPER COAT UNTUK PLATINUM WASH', 'JASA', 14, 'BOTOL'),
(8, 'PN-03', 'MIRROR GLITTER', ',629fcce8ea73b8.73803997.jpeg', 90000, 'HIASAN GLITTER YANG BISA MEMPERINDAH CERMIN MOBIL ANDA', 'NON JASA', 12, '-'),
(9, 'PN-04', 'SKULL AC', ',629fcd79094136.66696678.jpeg', 70000, 'DEKORASI AC BERBENTUK TENGKORAK', 'NON JASA', 2, '-'),
(10, 'PN-05', 'GANTUNGAN KUNCI BULLDOG', ',629fcdbda98450.20354121.jpeg', 30000, 'GANTUNGAN KUNCI BERBENTUK ANJING BULLDOG', 'NON JASA', 9, '-'),
(11, 'PN-06', 'GANTUNGAN KUNCI NEPAL', ',629fce00565c55.50946791.jpeg', 50000, 'GANTUNGAN KUNCI BERBENTUK JIMAT DARI NEPAL', 'NON JASA', 20, '-'),
(12, 'PN-07', 'GANTUNGAN KUNCI THOR', ',629fce3772df62.39545415.jpeg', 25000, 'GANTUNGAN KUNCI BERBENTUK PALU THOR', 'NON JASA', 9, '-'),
(13, 'PN-08', 'WIPER CLS 12', ',629fce681466e2.43616118.jpeg', 75000, 'WIPER CLS BERUKURAN 12', 'NON JASA', 30, '-'),
(14, 'PN-09', 'WIPER CLS 14', ',629fcece0b8c06.58226475.jpeg', 85000, 'WIPER CLS BERUKURAN 14', 'NON JASA', 5, '-'),
(15, 'PN-10', 'WIPER CLS 16', ',629fceba8eff53.52703018.jpeg', 95000, 'WIPER CLS BERUKURAN 18', 'NON JASA', 3, '-'),
(16, 'PN-11', 'WIPER OEM 12', ',629fcee90a8431.71281770.jpeg', 125000, 'WIPER OEM BERUKURAN 12', 'NON JASA', 4, '-'),
(17, 'PN-12', 'WIPER OEM 14', ',629fcf07bea4e4.91386540.jpeg', 145000, 'WIPER OEM BERUKURAN 14', 'NON JASA', 9, '-'),
(18, 'PN-13', 'LUCAS OLI', ',629fcf5c0dd2e3.92182599.jpeg', 150000, 'OLI LUCAS YANG DAPAT BERTAHAN BERATUS - RATUS KM', 'NON JASA', 2, 'BOTOL');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idBerita` int(11) NOT NULL,
  `kodeBerita` varchar(30) NOT NULL,
  `namaBerita` varchar(30) NOT NULL,
  `fotoBerita` varchar(200) NOT NULL,
  `keteranganBerita` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idBerita`, `kodeBerita`, `namaBerita`, `fotoBerita`, `keteranganBerita`) VALUES
(2, '0-154', 'Parfum', ',628334b97bbeb9.75000951.jpg', 'Parfum'),
(3, 'Kode Khusus', 'PARFUM PERSOL', ',62833c26411510.00726041.jpg', 'Diskon Cashback untuk pengguna Gopay');

-- --------------------------------------------------------

--
-- Table structure for table `detilTransaksi`
--

CREATE TABLE `detilTransaksi` (
  `idDetilTransaksi` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `idJasa` int(15) NOT NULL,
  `kodeJasa` varchar(15) NOT NULL,
  `namaJasa` varchar(30) NOT NULL,
  `fotoJasa` varchar(200) NOT NULL,
  `keteranganJasa` varchar(500) NOT NULL,
  `hargaJasa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`idJasa`, `kodeJasa`, `namaJasa`, `fotoJasa`, `keteranganJasa`, `hargaJasa`) VALUES
(1, 'J-01', 'GOLD WASH', ',629527efd057d3.37322154.jpeg', 'Layanan Doorsmeer Mobil Di Medan telah dikenal dan dipercaya sebagai Layanan Cuci yang handal untuk kebutuhan perawatan mobil menggunakan teknik Gold Wash', 30000),
(2, 'J-02', 'SILVER WASH', ',62952828dccfa1.35790442.jpeg', 'Merawat Mobil Bukan Hanya Tentang Mesin Dan Komponen-Komponen Yang Mendukung Performa Mobil.', 95000),
(3, 'J-03', 'PLATINUM WASH', ',6295286c0953a6.10714398.jpeg', 'Cuci mobil dengan teknologi touchless pertama di indonesia.', 200000),
(4, 'J-04', 'BODY GROOMING', ',629528ae6ae393.13007199.jpeg', 'Menggunakan alat High Pressure Washer dengan tekanan 180 bar untuk merontokkan kotoran yang terdapat di permukaan cat mobil.', 400000),
(5, 'J-05', 'BODY WASH', ',629528de9a50f5.39006280.jpeg', 'Membersihkan noda aspal dan permukaan cat mobil', 40000),
(6, 'J-06', 'CAR DETAILING', ',6295290ad83a78.66006364.jpeg', 'Khusus eksterior mobil yang didesain untuk membersihkan cat mobil dari kontaminan, menghilangkan jamur dan baret, serta memberikan perlindungan tambahan menggunakan wax.', 200000),
(7, 'J-07', 'GANTI OLI', ',629529cf7e50f8.67366124.jpeg', 'Ganti Oli Mobil bagi seluruh pemilik kendaraan, baik kendaraan beroda dua maupun roda empat merupakan ritual rutin yang wajib', 250000),
(8, 'J-08', 'TUNE UP', ',62952a0895d9d0.43073200.jpeg', 'Metode membersihkan ruang bakar dengan cara memasukkan media cairan atau foam (busa) pembersih', 200000),
(9, 'J-09', 'SERVICE AC', ',62952a23aedc55.10894563.jpeg', 'Service Ac Mobil Seringkali Di anggap Tidak Begitu Penting Bagi Pengguna.', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `melakukan`
--

CREATE TABLE `melakukan` (
  `idTransaksi` int(30) NOT NULL,
  `idUser` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `melakukan`
--

INSERT INTO `melakukan` (`idTransaksi`, `idUser`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `idMembership` int(15) NOT NULL,
  `kodeMembership` varchar(30) NOT NULL,
  `namaMembership` varchar(30) NOT NULL,
  `diskon` decimal(15,2) NOT NULL COMMENT 'satuan persen',
  `tarifMembership` double NOT NULL,
  `keteranganMembership` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`idMembership`, `kodeMembership`, `namaMembership`, `diskon`, `tarifMembership`, `keteranganMembership`) VALUES
(1, 'M-01', 'MAGIC SEALANT', '5.00', 2000000, '6 STEPS PAINT PROTECTION DAN DISKON 5% TIAP JASA'),
(2, 'M-02', 'MAGIC CARNAUBA', '10.00', 1750000, '5 STEPS DEEP LOOK PAINT DAN DISKON 10% TIAP JASA'),
(3, 'M-03', 'MAGIC BANANA', '15.00', 1500000, '5 STEPS WET LOOK PAINT DAN DISKON 15% TIAP JASA');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `idPromo` int(11) NOT NULL,
  `kodePromo` varchar(30) NOT NULL,
  `namaPromo` varchar(30) NOT NULL,
  `fotoPromo` varchar(200) NOT NULL,
  `keteranganPromo` varchar(500) NOT NULL,
  `waktuMulai` date NOT NULL,
  `waktuSelesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `idReservasi` int(15) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL,
  `tanggalTransaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idSupplier` int(15) NOT NULL,
  `kodeSupplier` varchar(30) NOT NULL,
  `namaSupplier` varchar(30) NOT NULL,
  `noTelepon` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`idSupplier`, `kodeSupplier`, `namaSupplier`, `noTelepon`, `alamat`, `email`, `kota`) VALUES
(1, 'S-01', 'C3 JAKARTA', '021-578527222', 'Jl. K.H. MANSYUR NO. 140', '-', 'JAKARTA'),
(2, 'S-02', 'CV MAKMUR INTI PRIMA', '061-4157530', 'JL. PROF YAMIN SH 283', 'MAKMUR_INT@GMAIL.COM', 'MEDAN'),
(3, 'S-03', 'CAHAYA MITRA GEMILANG', '-', 'JL. SM. RAJA KM 6.5 NO. 88 RT. 000', '-', 'MEDAN AMPLAS'),
(4, 'S-04', 'MAKMUR JAYA', '061-4538235', 'JL. H. ADAM MALIK NO. 34', '-', 'MEDAN'),
(5, 'S-05', 'PANCA PILAR TANGGUH', '061-82116551', 'JL. HELVETIA BYPASS NO.34', '-', 'MEDAN'),
(6, 'S-06', 'SUMBER BERKAT', '021-6268680', 'JL. TAMAN SARI RAYA NO. 66', '-', 'JAKARTA');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(15) NOT NULL,
  `idUser` int(15) NOT NULL,
  `tanggalTransaksi` date NOT NULL,
  `waktuTransaksi` time NOT NULL,
  `jenisMobil` varchar(30) NOT NULL,
  `platKendaraan` varchar(30) NOT NULL,
  `jasa1` varchar(30) NOT NULL,
  `jasa2` varchar(30) DEFAULT NULL,
  `jasa3` varchar(30) DEFAULT NULL,
  `catatanPelanggan` varchar(30) NOT NULL,
  `totalHarga` double NOT NULL,
  `status` varchar(30) NOT NULL,
  `buktiPembayaran` varchar(200) DEFAULT NULL,
  `waktuPembayaran` datetime DEFAULT NULL,
  `alasanPembatalan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `idUser`, `tanggalTransaksi`, `waktuTransaksi`, `jenisMobil`, `platKendaraan`, `jasa1`, `jasa2`, `jasa3`, `catatanPelanggan`, `totalHarga`, `status`, `buktiPembayaran`, `waktuPembayaran`, `alasanPembatalan`) VALUES
(1, 1, '2022-05-19', '12:00:00', 'CR-V', 'D 412 TA', 'SNOW WASH', 'GANTI OLI', '', 'Tidak ada', 215000, 'Menunggu Konfirmasi', ',629fc7e23d6e91.00328628.jpeg', '2022-06-08 04:49:22', 'qwqww'),
(2, 1, '2022-05-16', '10:00:00', 'AVANZA', 'BK 102 EO', 'SNOW WASH', '', '', '-', 65000, 'Pemesanan Ditolak', ',6280ab1970e634.99907832.jpg', '0000-00-00 00:00:00', 'Jadwal full'),
(3, 4, '2022-05-18', '14:00:00', 'INNOVA', 'B 126 WW', 'GANTI OLI', '', '', 'Tidak ada', 150000, 'Menunggu Konfirmasi', ',629fc8292271a4.00611355.jpeg', '2022-06-08 04:50:33', ''),
(4, 3, '2022-05-20', '12:00:00', '123', 'D 412 TA', 'GANTI OLI', '', '', '', 150000, 'Menunggu Konfirmasi', ',629fc844858335.95424054.jpeg', '2022-06-08 04:51:00', ''),
(5, 2, '2022-05-17', '14:00:00', 'INNOVA', 'B 995 AS', 'SNOW WASH', '', '', 'Tidak ada', 65000, 'Menunggu Konfirmasi', ',629fc70ade4c76.83609933.jpeg', '2022-06-08 04:45:46', ''),
(6, 16, '2022-05-19', '12:00:00', 'CR-V', 'D 412 TA', 'BODY GROOMING', '', '', 'Tidak ada', 400000, 'Pemesanan Ditolak', NULL, '0000-00-00 00:00:00', 'Jadwal full'),
(7, 8, '2022-05-27', '12:00:00', 'CR-V', 'D 412 TA', 'GOLD WASH', '', '', 'Tidak ada', 30000, 'Pemesanan Dibatalkan', NULL, '0000-00-00 00:00:00', ''),
(8, 2, '2022-05-17', '12:00:00', 'qweq', 'D 412 TA', 'GANTI OLI', '', '', '12', 150000, 'Pemesanan Dibatalkan', NULL, '0000-00-00 00:00:00', ''),
(9, 2, '2022-06-07', '10:00:00', '1234', '1234', 'SILVER WASH', 'BODY GROOMING', 'PLATINUM WASH', '12123', 695000, 'Menunggu Konfirmasi', ',629fc711417924.34487429.jpeg', '2022-06-08 04:45:53', ''),
(10, 3, '2022-06-07', '11:00:00', '1234', '1234', 'GOLD WASH', 'SILVER WASH', 'BODY GROOMING', '12123', 446250, 'Menunggu Konfirmasi', ',629fc9567e41c6.55699153.jpeg', '2022-06-08 04:55:34', ''),
(11, 3, '2022-06-22', '11:00:00', '13123', '12231', 'GOLD WASH', 'SILVER WASH', 'GANTI OLI', '3123', 318750, 'Menunggu Konfirmasi', NULL, '0000-00-00 00:00:00', ''),
(12, 2, '2022-06-08', '10:00:00', '231', '231', 'SILVER WASH', 'SILVER WASH', 'GANTI OLI', '231', 440000, 'Menunggu Konfirmasi', ',629fc7174886a6.89104616.jpeg', '2022-06-08 04:45:59', ''),
(13, 2, '2022-06-10', '10:00:00', '8989', '1234', 'GOLD WASH', 'GOLD WASH', 'GOLD WASH', '1212', 90000, 'Menunggu Konfirmasi', ',629fc7224d9cb2.13629239.jpeg', '2022-06-08 04:46:10', ''),
(14, 2, '2022-06-29', '10:00:00', '2121', '1212', 'PLATINUM WASH', 'SILVER WASH', 'TUNE UP', '2121', 420750, 'Menunggu Konfirmasi', NULL, '0000-00-00 00:00:00', ''),
(15, 2, '2022-06-17', '10:00:00', '9090', '1212', 'GOLD WASH', 'SILVER WASH', 'PLATINUM WASH', '0000', 276250, 'Menunggu Konfirmasi', ',629fc7282fe9f8.97759793.jpeg', '2022-06-08 04:46:16', ''),
(16, 15, '2022-06-09', '10:00:00', 'CR-V', 'D 412 TA', 'SILVER WASH', 'CAR DETAILING', 'PLATINUM WASH', '-', 495000, 'Pemesanan Diterima', ',629f6a83925bb4.21527884.jpeg', '0000-00-00 00:00:00', 'asdsa'),
(17, 15, '2022-06-08', '10:00:00', 'CR-V', 'D 412 TA', 'SILVER WASH', 'PLATINUM WASH', 'PLATINUM WASH', '-', 495000, 'Pemesanan Diterima', ',629f6f147a2053.82963082.jpeg', '2022-06-07 22:30:28', ''),
(18, 17, '2022-06-08', '16:00:00', 'CR-V', 'D 1231 TO', 'GOLD WASH', 'BODY GROOMING', 'BODY WASH', 'Tidak ada', 470000, 'Pemesanan Diterima', ',629f7d1c3e7247.71656018.jpeg', '2022-06-07 23:30:20', 'tes'),
(19, 18, '2022-06-15', '12:00:00', 'CR-V', 'D 412 TA', 'SILVER WASH', 'PLATINUM WASH', 'CAR DETAILING', '-', 495000, 'Pemesanan Diterima', ',629f7ecf9eb453.63011534.jpeg', '2022-06-07 23:37:35', 'Jadwal tidak tersedia'),
(20, 18, '2022-06-15', '16:00:00', 'BRIO', 'B 581 R', 'GOLD WASH', 'BODY WASH', 'GANTI OLI', 'Tolong bersihin kap mobil', 272000, 'Pemesanan Ditolak', ',629fd66c9ccd18.92568532.jpeg', '2022-06-08 05:51:24', 'Jadwal tidak tersedia'),
(21, 19, '2022-06-09', '10:00:00', 'HR-V', 'BG 412 ON', 'GOLD WASH', 'TUNE UP', 'GANTI OLI', '-', 408000, 'Pemesanan Diterima', ',62a01f7a9a1019.79316262.jpeg', '2022-06-08 11:03:06', ''),
(22, 18, '2022-06-10', '10:00:00', 'CR-V', 'D 1231 TO', 'GOLD WASH', 'GANTI OLI', 'SERVICE AC', 'Tidak ada', 323000, 'Pemesanan Diterima', ',62a035cd3ae269.43597878.jpeg', '2022-06-08 12:38:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_barang`
--

CREATE TABLE `transaksi_barang` (
  `idTransaksi` int(11) NOT NULL,
  `tanggalTransaksi` date NOT NULL,
  `waktuTransaksi` time NOT NULL,
  `produk1` varchar(100) NOT NULL,
  `produk2` varchar(100) DEFAULT NULL,
  `produk3` varchar(100) DEFAULT NULL,
  `totalHarga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(15) NOT NULL,
  `role` varchar(255) NOT NULL,
  `namaUser` varchar(30) NOT NULL,
  `jenisKelamin` varchar(12) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `noTelepon` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `tipeMembership` varchar(30) DEFAULT NULL,
  `statusMembership` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `role`, `namaUser`, `jenisKelamin`, `tanggalLahir`, `noTelepon`, `email`, `password`, `tipeMembership`, `statusMembership`) VALUES
(1, 'admin', 'admin', 'Pria', '2021-10-21', '087742036248', 'admin@admin', 'admin', 'Magic Carnauba', 'Accepted'),
(2, 'customer', 'customer', 'wanita', '2021-10-05', '087742036246', 'customer@customer', 'customer', 'Magic Carnauba', 'Requested'),
(3, 'customer', 'Giovanni2', 'wanita', '2021-10-14', '08774230128', 'giogioanggasta@yahoo.com', 'Jerapah12', '', NULL),
(4, 'customer', 'Giovanni', 'pria', '2021-12-16', '087742036248', 'giogioanggastaaa@gmail.com', 'jerapah123', '', NULL),
(5, 'customer', 'Giovanni 3', 'pria', '2021-12-14', '087742036248', 'giogioanggastaaaaa@gmail.com', 'jerapah123', 'Magic Carnauba', 'Refused'),
(6, 'customer', 'Timothy', 'pria', '1994-09-14', '087743551281', 'timothy@gmail.com', 'Jerapah12', '', NULL),
(7, 'customer', 'Shafira', 'wanita', '1998-01-11', '087743553397', 'fyrakaire@gmail.com', 'saiafira', '', NULL),
(8, 'customer', 'Hashrul', 'pria', '1998-10-15', '08126232295', 'teukuhashrul@gmail.com', 'naruto', 'Magic Carnauba', 'Accepted'),
(9, 'customer', 'Budi', 'pria', '1995-01-01', '087743553397', 'budi@gmail.com', 'Jerapah123', 'Magic Carnauba', 'Accepted'),
(10, 'customer', 'Asep', 'pria', '1990-10-01', '0877242301', 'asep@gmail.com', 'Jerapah12', '', NULL),
(11, 'customer', 'Tes', 'pria', '1997-01-06', '087743551281', 'tes@gmail.com', 'Jerapah12', '', NULL),
(15, 'customer', 'Giovanni', 'pria', '2022-05-13', 'qewq', 'giogioanggastaqwe@gmail.com', 'Jerapah12', 'Regular', ''),
(16, 'customer', 'Giovanni 3', 'wanita', '2022-05-26', '087743553397', 'giogioanggasta12312@gmail.com', 'Jerapah12', 'Regular', ''),
(17, 'customer', 'Alif', 'Pria', '1999-10-29', '087743553397', 'matiasalif@gmail.com', 'Jerapah12', 'Regular', ''),
(18, 'customer', 'Giovanni', 'Pria', '1997-06-17', '087742036248', 'giogioanggasta@gmail.com', 'Jerapah12', 'Magic Banana', 'Accepted'),
(19, 'customer', 'Cherry', 'Pria', '1999-10-15', '087743553397', 'cheryy@gmail.com', 'Jerapah12', 'Magic Banana', 'Accepted'),
(20, 'customer', 'Apel', 'Pria', '1999-10-17', '087742036248', 'apel@gmail.com', 'Jerapah12', 'Magic Carnauba', 'Accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indexes for table `detilTransaksi`
--
ALTER TABLE `detilTransaksi`
  ADD PRIMARY KEY (`idDetilTransaksi`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`idJasa`);

--
-- Indexes for table `melakukan`
--
ALTER TABLE `melakukan`
  ADD KEY `transaksi` (`idTransaksi`),
  ADD KEY `user` (`idUser`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`idMembership`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`idPromo`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`idReservasi`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idSupplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- Indexes for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idBerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detilTransaksi`
--
ALTER TABLE `detilTransaksi`
  MODIFY `idDetilTransaksi` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `idJasa` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `idMembership` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `idPromo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `idReservasi` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idSupplier` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `melakukan`
--
ALTER TABLE `melakukan`
  ADD CONSTRAINT `transaksi` FOREIGN KEY (`idTransaksi`) REFERENCES `transaksi` (`idTransaksi`),
  ADD CONSTRAINT `user` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
