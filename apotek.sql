-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 12:28 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `idObat` varchar(7) NOT NULL,
  `nmObat` varchar(45) NOT NULL,
  `hargaBeli` varchar(25) DEFAULT NULL,
  `hargaJual` varchar(25) DEFAULT NULL,
  `tglExp` date DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `satuan` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`idObat`, `nmObat`, `hargaBeli`, `hargaJual`, `tglExp`, `stok`, `satuan`, `created_at`, `updated_at`) VALUES
('B01', 'Antangin', 'Rp. 22.750', 'Rp. 31.000', '2022-06-22', 5, 'Kotak', NULL, NULL),
('B02', 'Paracetamol', 'Rp. 20.000', 'Rp. 25.000', '2021-07-08', 4, 'Kotak', NULL, NULL),
('B03', 'Asam Mefenamat', 'Rp. 20.000', 'Rp. 30.000', '2022-08-06', 5, 'Kotak', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `idPembelian` varchar(20) NOT NULL,
  `nmObat` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(45) DEFAULT NULL,
  `obat_idObat` varchar(7) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `supplier_idSupplier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`idPembelian`, `nmObat`, `jumlah`, `satuan`, `obat_idObat`, `created_at`, `updated_at`, `supplier_idSupplier`) VALUES
('PB01', 'Antangin', 8, NULL, 'B01', NULL, NULL, 'SP02');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idPenjualan` varchar(20) NOT NULL,
  `nmObat` varchar(45) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `obat_idObat1` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idPenjualan`, `nmObat`, `jumlah`, `created_date`, `created_at`, `updated_at`, `obat_idObat1`) VALUES
('K01', 'Antangin', 5, NULL, NULL, NULL, 'B01'),
('K02', 'Paracetamol', 2, NULL, NULL, NULL, 'B02'),
('K03', 'Asam Mefenamat', 3, NULL, NULL, NULL, 'B03');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idSupplier` varchar(20) NOT NULL,
  `nmSupplier` varchar(45) DEFAULT NULL,
  `tglKirim` date DEFAULT NULL,
  `alamat` varchar(75) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`idSupplier`, `nmSupplier`, `tglKirim`, `alamat`, `created_date`, `created_at`, `updated_at`) VALUES
('SP01', 'Adi', '2019-05-22', 'Malang', '2019-05-12 18:51:05', NULL, NULL),
('SP02', 'Andi', '2019-05-08', 'Surabaya', '2019-05-12 19:00:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Novi Gita Chayani', 'novigita@gmail.com', NULL, '$2y$10$jFHOSS.LYkOkqV6YCuIhROwwvjTyZv5rMWpLMSIzGtKAVO58qO2SO', '9VRNFIx8hJWfBhbjNUnRCnsxVxqbUSSWjD0LOtHzdoJIhTPqXwbCmyYAOrR3', '2019-04-10 21:12:04', '2019-04-10 21:12:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idObat`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`idPembelian`,`obat_idObat`,`supplier_idSupplier`),
  ADD KEY `fk_pembelian_obat1_idx` (`obat_idObat`),
  ADD KEY `fk_pembelian_supplier1_idx` (`supplier_idSupplier`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idPenjualan`,`obat_idObat1`),
  ADD KEY `fk_penjualan_obat2_idx` (`obat_idObat1`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idSupplier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_pembelian_obat1` FOREIGN KEY (`obat_idObat`) REFERENCES `obat` (`idObat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pembelian_supplier1` FOREIGN KEY (`supplier_idSupplier`) REFERENCES `supplier` (`idSupplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_penjualan_obat2` FOREIGN KEY (`obat_idObat1`) REFERENCES `obat` (`idObat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
