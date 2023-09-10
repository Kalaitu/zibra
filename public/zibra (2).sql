-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 10, 2023 at 01:37 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zibra`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_customer` varchar(255) NOT NULL DEFAULT '',
  `nomor_telepon` varchar(13) DEFAULT '',
  `alamat_customer` text,
  `point` int(11) NOT NULL DEFAULT '0',
  `kode_reveral` text NOT NULL,
  `foto_customer` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `id_user`, `nama_customer`, `nomor_telepon`, `alamat_customer`, `point`, `kode_reveral`, `foto_customer`) VALUES
(1, 4, 'Nama Customer 1', '1234512345123', 'Jl. Veteran No.15, Kuningan, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511', 0, 'zibraidcustomer1', 'dummyfoto.jpg'),
(2, 10, 'Nama Customer 2', '', 'Jl. Veteran No.15, Kuningan, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511', 40, 'zibraidcustomer10', 'dummyfoto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_karyawan` varchar(255) DEFAULT NULL,
  `nomor_telpon` varchar(13) DEFAULT NULL,
  `alamat_karyawan` text,
  `foto_karyawan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `id_user`, `nama_karyawan`, `nomor_telpon`, `alamat_karyawan`, `foto_karyawan`) VALUES
(3, 5, 'Nama Kasir 1', '0808080808', 'Jl. Veteran No.15, Kuningan, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511', 'dummyfoto.jpg'),
(4, 6, 'Nama Staff Gudang 1', '1234567891011', 'Jl. Veteran No.15, Kuningan, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511', '1689153673_a5cb2f0c8212dad4c1fc.jpg'),
(6, 8, 'Nama Staff Keuangan', '123451234512', 'Ini alamat staff keuangan ZibraID', '1689155421_f664b989b53525f887df.jpg'),
(7, 9, 'Nama Staff Gudang 2', '5432154321', 'Ini alamat staff gudang ke 2', '1689155523_e5327ccd24513c9dc580.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `kode_pemesanan` text NOT NULL,
  `bukti_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_user`, `tanggal_pembayaran`, `kode_pemesanan`, `bukti_pembayaran`) VALUES
(1, 4, '2023-07-17', 'ORDER420230712012743', '1689576590_6a269bd2f58e9d26e317.png'),
(3, 4, '2023-07-17', 'ORDER420230717070842', '1689578007_b2964fb2cb834e2b936a.png'),
(4, 4, '2023-08-12', 'ORDER420230812021738', '1691851514_070aba294225f2992e90.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) UNSIGNED NOT NULL,
  `kode_pemesanan` text NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `qty` int(11) NOT NULL,
  `status` enum('Keranjang','Menunggu Pembayaran','Diproses','Selesai') NOT NULL DEFAULT 'Keranjang'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_pemesanan`, `id_produk`, `id_user`, `tanggal_pemesanan`, `qty`, `status`) VALUES
(1, 'ORDER420230712112519', 3, 4, '2023-07-12', 2, 'Menunggu Pembayaran'),
(4, 'ORDER420230712112519', 1, 4, '2023-07-12', 2, 'Menunggu Pembayaran'),
(5, 'ORDER420230712012743', 2, 4, '2023-07-12', 1, 'Diproses'),
(6, 'ORDER420230712012743', 4, 4, '2023-07-12', 2, 'Diproses'),
(7, 'ORDER420230717070842', 3, 4, '2023-07-17', 1, 'Diproses'),
(8, 'ORDER420230812021738', 3, 4, '2023-08-12', 1, 'Diproses'),
(9, 'ORDER420230812021738', 2, 4, '2023-08-12', 1, 'Diproses'),
(10, 'ORDER420230910013404', 3, 4, '2023-09-10', 2, 'Menunggu Pembayaran'),
(11, 'ORDER420230910013404', 1, 4, '2023-09-10', 1, 'Menunggu Pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) UNSIGNED NOT NULL,
  `nama_produk` text NOT NULL,
  `foto_produk` text NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `harga_produk` decimal(10,0) NOT NULL,
  `status` enum('New Arival','Hot Sales','Reguler') DEFAULT 'New Arival'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `foto_produk`, `deskripsi_produk`, `harga_produk`, `status`) VALUES
(1, 'Nama Produk 1 ZibraID', '1689150436_913bc55fd4171cac3a5b.jpg', 'Ini deskripsi produk 1 ZibraID', '150000', 'Reguler'),
(2, 'Produk 2 ZibraID', 'dummyfoto.jpg', 'Ini deskripsi produk ke 2 ZibraID', '200000', 'Hot Sales'),
(3, 'Produk Ke 3 ZibraID', '1689149162_47b18e3ac19e340f4d17.jpg', 'Ini deskripsi produk ke 3 ZibraID', '250000', 'New Arival'),
(4, 'Nama Produk Ke-4 ZibraID', '1689149620_8ba0bf881138969b477e.jpg', 'Ini deskripsi produk ke 4 dari ZibraID', '100000', 'Reguler');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) UNSIGNED NOT NULL,
  `nama_promo` text NOT NULL,
  `deskripsi_promo` text NOT NULL,
  `poin` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `foto_promo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) UNSIGNED NOT NULL,
  `kode_transaksi` int(11) NOT NULL,
  `kode_pembelian` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  `role` enum('Customer','Manager','Kasir','Staff Gudang','Staff Keuangan') NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'manager', 'manager', 'Manager'),
(4, 'customer1', 'customer1', 'Customer'),
(5, 'kasir1', 'kasir1', 'Kasir'),
(6, 'gudang1', 'gudang1', 'Staff Gudang'),
(8, 'keuangan1', 'keuangan1', 'Staff Keuangan'),
(9, 'gudang2', 'gudang2', 'Staff Gudang'),
(10, 'customer2', 'customer2', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
