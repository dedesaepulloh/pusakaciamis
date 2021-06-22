-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 04:30 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int(15) NOT NULL,
  `nama_kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Bibit Buah'),
(7, 'Bibit Tanaman Hias'),
(8, 'Bibit Pohon');

-- --------------------------------------------------------

--
-- Table structure for table `t_pelanggan`
--

CREATE TABLE `t_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(35) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `no_hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pelanggan`
--

INSERT INTO `t_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_hp`) VALUES
(5, 'Dean Faria', 'Cipedes ', '+6282113789002'),
(6, 'Melati Merdekawati', 'Ciamis', '+6285333766908'),
(7, 'Ali Dara Fatria', 'Banjar', '+628900767789'),
(8, 'Meka Ningsih', 'Cihaurbeuti', '+6287678143098'),
(9, 'Adimas Purnama', 'Rajapolah', '+6287678134000'),
(10, 'Adelia Syababan', 'Manonjaya', '+6281366789012'),
(11, 'Vera Verawati', 'Indihiang', '+6285333829098'),
(12, 'Deni Daraka', 'Bojong', '+6285334001990'),
(13, 'Umum', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembelian_detail`
--

CREATE TABLE `t_pembelian_detail` (
  `id_pembelian` varchar(30) NOT NULL,
  `id_po` varchar(30) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `tanaman` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pembelian_detail`
--

INSERT INTO `t_pembelian_detail` (`id_pembelian`, `id_po`, `supplier`, `tanaman`, `satuan`, `harga_beli`, `qty`, `harga_total`, `total_harga`) VALUES
('BL0002', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0004', 'PO0004', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 1, 45000, 135000),
('BL0004', 'PO0004', 'Komunitas Bibit Cipedes', 'Belimbing', 'pcs', 15000, 1, 15000, 135000),
('BL0004', 'PO0004', 'Komunitas Bibit Cipedes', 'Semangka', 'pcs', 75000, 1, 75000, 135000),
('BL0006', 'PO0007', 'Himpunan Bibit Tasikmalaya', 'Semangka', '2', 75000, 1, 75000, 325000),
('BL0006', 'PO0007', 'Himpunan Bibit Tasikmalaya', 'Aceh', '2', 250000, 1, 250000, 325000),
('BL0007', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0008', 'PO0005', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 2, 90000, 90000),
('BL0009', 'PO0002', 'Himpunan Bibit Tasikmalaya', 'Belimbing', 'pcs', 15000, 1, 15000, 15000),
('BL0010', 'PO0002', 'Himpunan Bibit Tasikmalaya', 'Belimbing', 'pcs', 15000, 1, 15000, 15000),
('BL0011', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0012', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0013', 'PO0004', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 1, 45000, 135000),
('BL0013', 'PO0004', 'Komunitas Bibit Cipedes', 'Belimbing', 'pcs', 15000, 1, 15000, 135000),
('BL0013', 'PO0004', 'Komunitas Bibit Cipedes', 'Semangka', 'pcs', 75000, 1, 75000, 135000),
('BL0014', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0015', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0016', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0017', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0018', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0019', 'PO0002', 'Himpunan Bibit Tasikmalaya', 'Belimbing', 'pcs', 15000, 1, 15000, 15000),
('BL0020', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0021', 'PO0006', 'Komunitas Bibit Tasikmalaya', 'Aceh', 'pcs', 250000, 2, 500000, 500000),
('BL0022', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0023', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0024', 'PO0004', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 1, 45000, 135000),
('BL0024', 'PO0004', 'Komunitas Bibit Cipedes', 'Belimbing', 'pcs', 15000, 1, 15000, 135000),
('BL0024', 'PO0004', 'Komunitas Bibit Cipedes', 'Semangka', 'pcs', 75000, 1, 75000, 135000),
('BL0025', 'PO0004', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 1, 45000, 135000),
('BL0025', 'PO0004', 'Komunitas Bibit Cipedes', 'Belimbing', 'pcs', 15000, 1, 15000, 135000),
('BL0025', 'PO0004', 'Komunitas Bibit Cipedes', 'Semangka', 'pcs', 75000, 1, 75000, 135000),
('BL0026', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0027', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0028', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0029', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0030', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0031', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0032', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0033', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0034', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0035', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0036', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0037', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0038', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0039', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0040', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0041', 'PO0004', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 1, 45000, 135000),
('BL0041', 'PO0004', 'Komunitas Bibit Cipedes', 'Belimbing', 'pcs', 15000, 1, 15000, 135000),
('BL0041', 'PO0004', 'Komunitas Bibit Cipedes', 'Semangka', 'pcs', 75000, 1, 75000, 135000),
('BL0042', 'PO0004', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 1, 45000, 135000),
('BL0042', 'PO0004', 'Komunitas Bibit Cipedes', 'Belimbing', 'pcs', 15000, 1, 15000, 135000),
('BL0042', 'PO0004', 'Komunitas Bibit Cipedes', 'Semangka', 'pcs', 75000, 1, 75000, 135000),
('BL0043', 'PO0006', 'Komunitas Bibit Tasikmalaya', 'Aceh', 'pcs', 250000, 2, 500000, 500000),
('BL0044', 'PO0002', 'Himpunan Bibit Tasikmalaya', 'Belimbing', 'pcs', 15000, 1, 15000, 15000),
('BL0045', 'PO0002', 'Himpunan Bibit Tasikmalaya', 'Belimbing', 'pcs', 15000, 1, 15000, 15000),
('BL0046', 'PO0002', 'Himpunan Bibit Tasikmalaya', 'Belimbing', 'pcs', 15000, 1, 15000, 15000),
('BL0047', 'PO0007', 'Himpunan Bibit Tasikmalaya', 'Semangka', '2', 75000, 1, 75000, 325000),
('BL0047', 'PO0007', 'Himpunan Bibit Tasikmalaya', 'Aceh', '2', 250000, 1, 250000, 325000),
('BL0048', 'PO0007', 'Himpunan Bibit Tasikmalaya', 'Semangka', '2', 75000, 1, 75000, 325000),
('BL0048', 'PO0007', 'Himpunan Bibit Tasikmalaya', 'Aceh', '2', 250000, 1, 250000, 325000),
('BL0049', 'PO0002', 'Himpunan Bibit Tasikmalaya', 'Belimbing', 'pcs', 15000, 1, 15000, 15000),
('BL0050', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0051', 'PO0004', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 1, 45000, 135000),
('BL0051', 'PO0004', 'Komunitas Bibit Cipedes', 'Belimbing', 'pcs', 15000, 1, 15000, 135000),
('BL0051', 'PO0004', 'Komunitas Bibit Cipedes', 'Semangka', 'pcs', 75000, 1, 75000, 135000),
('BL0052', 'PO0007', 'Himpunan Bibit Tasikmalaya', 'Semangka', '2', 75000, 1, 75000, 325000),
('BL0052', 'PO0007', 'Himpunan Bibit Tasikmalaya', 'Aceh', '2', 250000, 1, 250000, 325000),
('BL0053', 'PO0007', 'Himpunan Bibit Tasikmalaya', 'Semangka', '2', 75000, 1, 75000, 325000),
('BL0053', 'PO0007', 'Himpunan Bibit Tasikmalaya', 'Aceh', '2', 250000, 1, 250000, 325000),
('BL0054', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0055', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0056', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0057', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0058', 'PO0004', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 1, 45000, 135000),
('BL0058', 'PO0004', 'Komunitas Bibit Cipedes', 'Belimbing', 'pcs', 15000, 1, 15000, 135000),
('BL0058', 'PO0004', 'Komunitas Bibit Cipedes', 'Semangka', 'pcs', 75000, 1, 75000, 135000),
('BL0059', 'PO0001', 'Komunitas Bibit Tasikmalaya', 'Jeruk', 'pcs', 45000, 1, 45000, 45000),
('BL0060', 'PO0004', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 1, 45000, 135000),
('BL0060', 'PO0004', 'Komunitas Bibit Cipedes', 'Belimbing', 'pcs', 15000, 1, 15000, 135000),
('BL0060', 'PO0004', 'Komunitas Bibit Cipedes', 'Semangka', 'pcs', 75000, 1, 75000, 135000),
('BL0061', 'PO0005', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 2, 90000, 90000),
('BL0062', 'PO0008', 'Himpunan Bibit Tasikmalaya', 'Belimbing', 'pcs', 15000, 1, 15000, 15000),
('BL0063', 'PO0004', 'Komunitas Bibit Cipedes', 'Jeruk', 'pcs', 45000, 1, 45000, 135000),
('BL0063', 'PO0004', 'Komunitas Bibit Cipedes', 'Belimbing', 'pcs', 15000, 1, 15000, 135000),
('BL0063', 'PO0004', 'Komunitas Bibit Cipedes', 'Semangka', 'pcs', 75000, 1, 75000, 135000),
('BL0064', 'PO0006', 'Komunitas Bibit Tasikmalaya', 'Aceh', 'pcs', 250000, 2, 500000, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `t_pembelian_head`
--

CREATE TABLE `t_pembelian_head` (
  `id_pembelian` varchar(20) NOT NULL,
  `id_po` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pembelian_head`
--

INSERT INTO `t_pembelian_head` (`id_pembelian`, `id_po`, `tanggal`) VALUES
('', '', '0000-00-00'),
('BL0001', 'PO0002', '2020-02-01'),
('BL0002', 'PO0001', '2020-02-01'),
('BL0003', 'PO0002', '2020-02-01'),
('BL0004', 'PO0004', '2020-02-01'),
('BL0005', 'PO0002', '2020-02-01'),
('BL0006', 'PO0007', '2020-02-01'),
('BL0007', 'PO0001', '2020-02-01'),
('BL0008', 'PO0005', '2020-02-01'),
('BL0009', 'PO0002', '2020-02-01'),
('BL0010', 'PO0002', '2020-02-01'),
('BL0011', 'PO0001', '2020-02-01'),
('BL0012', 'PO0001', '2020-02-01'),
('BL0013', 'PO0004', '2020-02-01'),
('BL0014', 'PO0001', '2020-02-01'),
('BL0015', 'PO0001', '2020-02-01'),
('BL0016', 'PO0001', '2020-02-01'),
('BL0017', 'PO0001', '2020-02-01'),
('BL0018', 'PO0001', '2020-02-01'),
('BL0019', 'PO0002', '2020-02-01'),
('BL0020', 'PO0001', '2020-02-01'),
('BL0021', 'PO0006', '2020-02-01'),
('BL0022', 'PO0001', '2020-02-01'),
('BL0023', 'PO0001', '2020-02-01'),
('BL0024', 'PO0004', '2020-02-01'),
('BL0025', 'PO0004', '2020-02-01'),
('BL0026', 'PO0001', '2020-02-01'),
('BL0027', 'PO0001', '2020-02-01'),
('BL0028', 'PO0001', '2020-02-01'),
('BL0029', 'PO0001', '2020-02-01'),
('BL0030', 'PO0001', '2020-02-01'),
('BL0031', 'PO0001', '2020-02-01'),
('BL0032', 'PO0001', '2020-02-01'),
('BL0033', 'PO0001', '2020-02-01'),
('BL0034', 'PO0001', '2020-02-01'),
('BL0035', 'PO0001', '2020-02-01'),
('BL0036', 'PO0001', '2020-02-01'),
('BL0037', 'PO0001', '2020-02-01'),
('BL0038', 'PO0001', '2020-02-01'),
('BL0039', 'PO0001', '2020-02-01'),
('BL0040', 'PO0001', '2020-02-01'),
('BL0041', 'PO0004', '2020-02-01'),
('BL0042', 'PO0004', '2020-02-01'),
('BL0043', 'PO0006', '2020-02-01'),
('BL0044', 'PO0002', '2020-02-01'),
('BL0045', 'PO0002', '2020-02-01'),
('BL0046', 'PO0002', '2020-02-01'),
('BL0047', 'PO0007', '2020-02-01'),
('BL0048', 'PO0007', '2020-02-01'),
('BL0049', 'PO0002', '2020-02-01'),
('BL0050', 'PO0001', '2020-02-05'),
('BL0051', 'PO0004', '2020-02-05'),
('BL0052', 'PO0007', '2020-02-05'),
('BL0053', 'PO0007', '2020-02-05'),
('BL0054', 'PO0001', '2020-02-05'),
('BL0055', 'PO0001', '2020-02-05'),
('BL0056', 'PO0001', '2020-02-05'),
('BL0057', 'PO0001', '2020-02-05'),
('BL0058', 'PO0004', '2020-02-05'),
('BL0059', 'PO0001', '2020-02-05'),
('BL0060', 'PO0004', '2020-02-05'),
('BL0061', 'PO0005', '2020-02-05'),
('BL0062', 'PO0008', '2020-02-05'),
('BL0063', 'PO0004', '2020-02-05'),
('BL0064', 'PO0006', '2020-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `t_penjualan_detail`
--

CREATE TABLE `t_penjualan_detail` (
  `id_penjualan` varchar(20) NOT NULL,
  `id_tanaman` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_penjualan_detail`
--

INSERT INTO `t_penjualan_detail` (`id_penjualan`, `id_tanaman`, `harga`, `qty`, `harga_total`, `total_harga`, `potongan`, `total_bayar`, `bayar`, `kembali`) VALUES
('1931115531', 1, 75000, 1, 75000, 60000, 0, 0, 122222, 62222),
('1931115627', 7, 95000, 1, 95000, 95000, 0, 0, 95000, 0),
('TRX0004', 1, 75000, 1, 75000, 60000, 0, 0, 100000, 40000),
('TRX0004', 3, 35000, 2, 70000, 60000, 0, 0, 100000, 40000),
('TRX0001', 1, 75000, 1, 75000, 60000, 0, 0, 50000, -10000),
('TRX0005', 1, 75000, 1, 75000, 75000, 0, 0, 100000, 25000),
('TRX0006', 1, 75000, 1, 75000, 75000, 0, 0, 100000, 25000),
('TRX0007', 7, 95000, 1, 95000, 95000, 0, 0, 100000, 5000),
('TRX0008', 1, 75000, 1, 75000, 75000, 0, 0, 100000, 25000),
('TRX0009', 1, 75000, 1, 75000, 75000, 0, 0, 100000, 25000),
('TRX0010', 1, 75000, 1, 75000, 75000, 0, 0, 100000, 25000),
('TRX0011', 1, 75000, 5, 375000, 375000, 0, 0, 1000000, 625000),
('TRX0012', 1, 75000, 1, 75000, 75000, 0, 0, 100000, 25000),
('TRX0013', 3, 35000, 1, 35000, 130000, 0, 0, 100000, -30000),
('TRX0013', 7, 95000, 1, 95000, 130000, 0, 0, 100000, -30000),
('TRX0014', 3, 35000, 1, 35000, 130000, 0, 0, 1000000, 870000),
('TRX0014', 7, 95000, 1, 95000, 130000, 0, 0, 1000000, 870000),
('TRX0015', 1, 75000, 2, 150000, 150000, 0, 0, 1000000, 850000),
('TRX0016', 1, 75000, 1, 75000, 110000, 0, 0, 1000000, 890000),
('TRX0016', 3, 35000, 1, 35000, 110000, 0, 0, 1000000, 890000),
('TRX0017', 8, 450000, 1, 450000, 900000, 0, 0, 1000000, 100000),
('TRX0017', 8, 450000, 1, 450000, 900000, 0, 0, 1000000, 100000),
('TRX0018', 3, 35000, 1, 35000, 35000, 0, 0, 100000, 65000),
('TRX0019', 1, 75000, 1, 75000, 75000, 0, 0, 100000, 25000),
('TRX0020', 1, 75000, 1, 75000, 75000, 0, 0, 100000, 25000),
('TRX0021', 1, 75000, 1, 75000, 75000, 0, 75000, 100000, 25000),
('TRX0022', 3, 35000, 1, 35000, 35000, 10000, 25000, 50000, 25000),
('TRX0023', 3, 35000, 1, 35000, 35000, 900, 34100, 50000, 15900),
('TRX0024', 8, 450000, 1, 450000, 450000, 0, 450000, 1000000, 550000),
('TRX0025', 1, 75000, 1, 75000, 75000, 0, 75000, 100000, 25000),
('TRX0026', 1, 75000, 1, 75000, 655000, 0, 655000, 1000000, 345000),
('TRX0026', 3, 35000, 1, 35000, 655000, 0, 655000, 1000000, 345000),
('TRX0026', 7, 95000, 1, 95000, 655000, 0, 655000, 1000000, 345000),
('TRX0026', 8, 450000, 1, 450000, 655000, 0, 655000, 1000000, 345000),
('TRX0027', 8, 450000, 1, 450000, 450000, 0, 450000, 1000000, 550000),
('TRX0029', 8, 450000, 3, 105000, 105000, 0, 105000, 1000000, 895000),
('TRX0030', 7, 95000, 1, 95000, 95000, 0, 95000, 100000, 5000),
('TRX0031', 3, 35000, 1, 35000, 35000, 0, 35000, 100000, 65000);

-- --------------------------------------------------------

--
-- Table structure for table `t_penjualan_head`
--

CREATE TABLE `t_penjualan_head` (
  `id_penjualan` varchar(20) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_penjualan_head`
--

INSERT INTO `t_penjualan_head` (`id_penjualan`, `id_pelanggan`, `tanggal`, `id_user`) VALUES
('', 0, '2020-01-30', 0),
('TRX0001', 8, '2020-01-30', 0),
('TRX0002', 7, '2020-01-30', 0),
('TRX0003', 6, '2020-01-30', 0),
('TRX0004', 8, '2020-01-30', 0),
('TRX0005', 8, '2020-01-30', 0),
('TRX0006', 8, '2020-01-30', 0),
('TRX0007', 6, '2020-01-30', 0),
('TRX0008', 6, '2020-02-01', 0),
('TRX0009', 8, '2020-02-01', 0),
('TRX0010', 7, '2020-02-01', 0),
('TRX0011', 6, '2020-02-01', 0),
('TRX0012', 5, '2020-02-01', 0),
('TRX0013', 6, '2020-02-01', 0),
('TRX0014', 5, '2020-02-01', 0),
('TRX0015', 6, '2020-02-01', 0),
('TRX0016', 5, '2020-02-01', 0),
('TRX0017', 6, '2020-02-01', 0),
('TRX0018', 7, '2020-02-01', 0),
('TRX0019', 6, '2020-02-05', 0),
('TRX0020', 6, '2020-02-05', 0),
('TRX0021', 7, '2020-02-05', 0),
('TRX0022', 5, '2020-02-05', 0),
('TRX0023', 6, '2020-02-05', 0),
('TRX0024', 6, '2020-02-05', 0),
('TRX0025', 7, '2020-02-05', 0),
('TRX0026', 6, '2020-02-05', 0),
('TRX0027', 13, '2020-02-05', 0),
('TRX0028', 6, '2020-02-05', 0),
('TRX0029', 6, '2020-02-05', 0),
('TRX0030', 6, '2020-02-16', 0),
('TRX0031', 7, '2020-02-16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_preorder`
--

CREATE TABLE `t_preorder` (
  `id_po` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `supplier` varchar(35) NOT NULL,
  `tanaman` varchar(35) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `satuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_preorder`
--

INSERT INTO `t_preorder` (`id_po`, `tanggal`, `supplier`, `tanaman`, `qty`, `satuan`) VALUES
('PO0002', '2020-01-30', 'Himpunan Bibit Tasikmalaya', 'Belimbing', '1', 'pcs'),
('PO0003', '2020-01-30', 'Komunitas Bibit Cipedes', 'Aceh', '1', 'pcs'),
('PO0004', '2020-01-30', 'Komunitas Bibit Cipedes', 'Jeruk', '1', 'pcs'),
('PO0004', '2020-01-30', 'Komunitas Bibit Cipedes', 'Belimbing', '1', 'pcs'),
('PO0004', '2020-01-30', 'Komunitas Bibit Cipedes', 'Semangka', '1', 'pcs'),
('PO0005', '2020-01-30', 'Komunitas Bibit Cipedes', 'Jeruk', '2', 'pcs'),
('PO0006', '2020-01-30', 'Komunitas Bibit Tasikmalaya', 'Aceh', '2', 'pcs'),
('PO0007', '2020-01-30', 'Himpunan Bibit Tasikmalaya', 'Semangka', '1', '2'),
('PO0007', '2020-01-30', 'Himpunan Bibit Tasikmalaya', 'Aceh', '1', '2'),
('PO0008', '2020-02-05', 'Himpunan Bibit Tasikmalaya', 'Belimbing', '1', 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `t_supplier`
--

CREATE TABLE `t_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `nama_supplier` varchar(35) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `no_hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_supplier`
--

INSERT INTO `t_supplier` (`id_supplier`, `nama_organisasi`, `nama_supplier`, `alamat`, `no_hp`) VALUES
(5, 'Komunitas Bibit Tasikmalaya', 'Usman Friyadi', 'Tasikmalaya', '+6281366789012'),
(6, 'Komunitas Bibit Cipedes', 'Dede', 'Ciamis', '+6285334001990'),
(8, 'Himpunan Bibit Tasikmalaya', 'Dera Afifah', 'Cipedes ', '+6282113789002');

-- --------------------------------------------------------

--
-- Table structure for table `t_tanaman`
--

CREATE TABLE `t_tanaman` (
  `id_tanaman` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_tanaman` varchar(35) NOT NULL,
  `tinggi` varchar(11) NOT NULL,
  `berat` varchar(11) NOT NULL,
  `satuan` varchar(35) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tanaman`
--

INSERT INTO `t_tanaman` (`id_tanaman`, `id_kategori`, `nama_tanaman`, `tinggi`, `berat`, `satuan`, `harga_beli`, `harga_jual`, `stok`) VALUES
(1, 1, 'Jeruk', '5 cm', '15 gram', 'Pcs', 45000, 75000, 8),
(3, 1, 'Belimbing', '35 cm', '3 kg', 'Pcs', 15000, 35000, 7),
(7, 1, 'Semangka', '300 m', '30 gram', 'Pcs', 75000, 95000, 6),
(8, 8, 'Aceh', '15 cm', '6 gram', 'Pcs', 250000, 450000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(35) NOT NULL,
  `level` varchar(35) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama_user`, `level`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Kasir', 'kasir', 'kasir', 'c7911af3adbd12a035b289556d96470a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `t_pembelian_head`
--
ALTER TABLE `t_pembelian_head`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `t_penjualan_head`
--
ALTER TABLE `t_penjualan_head`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `t_supplier`
--
ALTER TABLE `t_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `t_tanaman`
--
ALTER TABLE `t_tanaman`
  ADD PRIMARY KEY (`id_tanaman`),
  ADD KEY `kp_kategori` (`id_kategori`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_supplier`
--
ALTER TABLE `t_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_tanaman`
--
ALTER TABLE `t_tanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
