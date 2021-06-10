-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 06:11 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_findpeken`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_05_31_085016_create_pasar_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasar`
--

CREATE TABLE `tbl_pasar` (
  `pasar_id` bigint(20) UNSIGNED NOT NULL,
  `pasar_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasar_deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasar_alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `pasar_gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasar_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_pasar`
--

INSERT INTO `tbl_pasar` (`pasar_id`, `pasar_nama`, `pasar_deskripsi`, `pasar_alamat`, `latitude`, `longitude`, `pasar_gambar`, `pasar_status`, `created_at`, `updated_at`) VALUES
(1, 'Pasar Ungasan', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Ungasan', -8.825152365949586, 115.16761181567541, 'UGFzYXIgRGVzYSBVbmdhc2FuLmpwZw==', 1, '2021-06-01 15:56:51', '2021-06-10 02:41:43'),
(2, 'test', 'test', 'adada', 343544655, 3241251, NULL, 0, '2021-06-04 03:27:13', '2021-06-04 04:56:16'),
(3, 'Pasar Desa Jimbaran', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Jimbaran', -8.769501876322746, 115.17326613295438, 'UGFzYXIgRGVzYSBKaW1iYXJhbi5qcGc=', 1, '2021-06-10 02:30:45', '2021-06-10 02:30:45'),
(4, 'Pasar Mekar Sari', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Jimbaran', -8.781461688512849, 115.18742789877976, 'UGFzYXIgTWVrYXIgU2FyaS5qcGc=', 1, '2021-06-10 02:45:04', '2021-06-10 02:45:04'),
(5, 'Pasar Kusuma Jimbaran Kuta Selatan', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Jimbaran', -8.802875216982644, 115.15997467036598, 'UGFzYXIgS3VzdW1hIEppbWJhcmFuLmpwZw==', 1, '2021-06-10 02:48:06', '2021-06-10 02:48:06'),
(6, 'Pasar Kori Nuansa', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Kori Nuansa Jimbaran', -8.8016829, 115.1867718, 'UGFzYXIgS29yaSBOdWFuc2EuanBn', 1, '2021-06-10 02:49:32', '2021-06-10 02:49:32'),
(7, 'Pasar Taman Griya', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Taman Griya', -8.7862331, 115.1877427, 'UGFzYXIgVGFtYW4gR3JpeWEuanBn', 1, '2021-06-10 02:51:55', '2021-06-10 02:51:55'),
(8, 'Pasar Ampera', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Ungasan', -8.819424159998743, 115.1529515968188, 'UGFzYXIgQW1wZXJhLmpwZw==', 1, '2021-06-10 02:52:49', '2021-06-10 02:52:49'),
(9, 'Pasar Telagi Sari Ungasan', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Ungasan', -8.822520467176284, 115.16503247539269, 'UGFzYXIgVGVsYWdpIFNhcmkgVW5nYXNhbi5qcGc=', 1, '2021-06-10 02:53:49', '2021-06-10 02:53:49'),
(10, 'Pasar Pecatu', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Pecatu', -8.834039570244181, 115.12609317776955, 'UGFzYXIgRGVzYSBBZGF0IFBlY2F0dS5qcGc=', 1, '2021-06-10 02:55:30', '2021-06-10 02:55:30'),
(11, 'Pasar Dukuh Sari Pecatu', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Pecatu', -8.825318359255848, 115.14130426242534, NULL, 1, '2021-06-10 02:56:39', '2021-06-10 02:56:39'),
(12, 'Pasar Desa Adat Bualu', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Bualu', -8.797903, 115.223182, 'UGFzYXIgRGVzYSBBZGF0IEJ1YWx1LmpwZw==', 1, '2021-06-10 02:57:50', '2021-06-10 02:57:50'),
(13, 'Pasar Pekraman Tanjung Benoa', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Tanjung Benoa', -8.757099, 115.219267, 'UGFzYXIgUGVrcmFtYW4gVGFuanVuZyBCZW5vYS5qcGc=', 1, '2021-06-10 02:58:53', '2021-06-10 02:58:53'),
(14, 'Pasar Taman Giri', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Taman Giri', -8.792776, 115.195603, 'UGFzYXIgVGFtYW4gR2lyaS5qcGc=', 1, '2021-06-10 02:59:52', '2021-06-10 02:59:52'),
(15, 'Pasar Sentral', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Kampial', -8.796534, 115.216778, NULL, 1, '2021-06-10 03:00:45', '2021-06-10 03:00:45'),
(16, 'Pasar Desa Wisma Nusa Permai Benoa', 'Menurut kajian ilmu ekonomi, pasar merupakan suatu tempat atau proses interaksi antara permintaan (pembeli) dan penawaran (penjual) dari suatu barang atau jasa tertentu. Proses interaksi tersebut dapat menetapkan harga keseimbangan (harga pasar) dan jumlah yang diperdagangkan.', 'Nusa Permai Benoa', -8.803938, 115.205113, 'UGFzYXIgRGVzYSBXaXNtYSBOdXNhIFBlcm1haSBCZW5vYS5qcGc=', 1, '2021-06-10 03:01:43', '2021-06-10 03:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', 'admin@findpeken.com', NULL, '$2y$10$9ZawgfFrryiaS.i0Gk9KquTy3GZIdMw33RTJA8Nf.8pj2Kg73uXlW', NULL, '2021-05-31 01:03:36', '2021-05-31 01:03:36'),
(4, NULL, 'Admin 1', 'admin1@findpeken.com', NULL, '$2y$10$fbh1wYpqYrDbDIliZ1uKhOvxeXSTYtlDlqiB/0dkFXmiodK268Hpi', NULL, '2021-06-04 07:54:48', '2021-06-04 07:54:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_pasar`
--
ALTER TABLE `tbl_pasar`
  ADD PRIMARY KEY (`pasar_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pasar`
--
ALTER TABLE `tbl_pasar`
  MODIFY `pasar_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
