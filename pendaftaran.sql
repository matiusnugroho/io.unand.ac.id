-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2019 at 12:58 AM
-- Server version: 10.2.3-MariaDB-log
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Madagascar', '2019-04-29 20:40:15', '2019-04-29 20:40:15'),
(2, 'Brazil', '2019-04-29 20:40:15', '2019-04-29 20:40:15'),
(3, 'Argentina', '2019-04-29 20:40:15', '2019-04-29 20:40:15'),
(4, 'Austria', '2019-04-29 20:40:15', '2019-04-29 20:40:15'),
(5, 'Australia', '2019-04-29 20:40:15', '2019-04-29 20:40:15'),
(6, 'Indonesia', '2019-04-29 20:40:15', '2019-04-29 20:40:15'),
(7, 'Malaysia', '2019-04-29 20:40:15', '2019-04-29 20:40:15'),
(8, 'South korea', '2019-04-29 20:40:15', '2019-04-29 20:40:15'),
(9, 'Japan', '2019-04-29 20:40:16', '2019-04-29 20:40:16'),
(10, 'Vietnam', '2019-04-29 20:40:16', '2019-04-29 20:40:16'),
(11, 'US', '2019-04-29 20:40:16', '2019-04-29 20:40:16'),
(12, 'Thailand', '2019-04-29 20:40:16', '2019-04-29 20:40:16'),
(13, 'Egypt', '2019-04-29 20:40:16', '2019-04-29 20:40:16'),
(14, 'Cambodia', '2019-04-29 20:40:16', '2019-04-29 20:40:16'),
(15, 'Poland', '2019-04-29 20:40:16', '2019-04-29 20:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara_asal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bdg_ilmu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Pertanian', '2019-04-29 20:40:16', '2019-04-29 20:40:16'),
(2, 'Teknologi Pertanian', '2019-04-29 20:40:16', '2019-04-29 20:40:16'),
(3, 'Kedokteran', '2019-04-29 20:40:17', '2019-04-29 20:40:17'),
(4, 'Kedokteran Gigi', '2019-04-29 20:40:17', '2019-04-29 20:40:17'),
(5, 'Kesehatan Masyarakat', '2019-04-29 20:40:17', '2019-04-29 20:40:17'),
(6, 'Teknik', '2019-04-29 20:40:17', '2019-04-29 20:40:17'),
(7, 'Hukum', '2019-04-29 20:40:17', '2019-04-29 20:40:17'),
(8, 'MIPA', '2019-04-29 20:40:17', '2019-04-29 20:40:17'),
(9, 'Ekonomi', '2019-04-29 20:40:18', '2019-04-29 20:40:18'),
(10, 'Peternakan', '2019-04-29 20:40:18', '2019-04-29 20:40:18'),
(11, 'Ilmu Budaya', '2019-04-29 20:40:18', '2019-04-29 20:40:18'),
(12, 'Ilmu Sosial dan Ilmu Politik', '2019-04-29 20:40:18', '2019-04-29 20:40:18'),
(13, 'Farmasi', '2019-04-29 20:40:18', '2019-04-29 20:40:18'),
(14, 'Keperawatan', '2019-04-29 20:40:18', '2019-04-29 20:40:18'),
(15, 'Teknologi Informasi', '2019-04-29 20:40:18', '2019-04-29 20:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `internationals`
--

CREATE TABLE `internationals` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `jurusan_id` int(10) UNSIGNED NOT NULL,
  `passport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `file_cv` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_surat_pernyataan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_passport` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internationals`
--

INSERT INTO `internationals` (`id`, `country_id`, `mahasiswa_id`, `jurusan_id`, `passport`, `start_date`, `end_date`, `file_cv`, `file_surat_pernyataan`, `file_passport`, `file_photo`, `program`, `created_at`, `updated_at`) VALUES
(1, 10, 26, 1, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:21:48', '2019-04-29 21:21:48'),
(2, 10, 27, 2, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:24:20', '2019-04-29 21:24:20'),
(3, 10, 28, 1, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:25:50', '2019-04-29 21:25:50'),
(4, 12, 29, 39, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:27:32', '2019-04-29 21:27:32'),
(5, 1, 33, 34, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:31:37', '2019-04-29 21:31:37'),
(6, 1, 34, 34, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:32:08', '2019-04-29 21:32:08'),
(7, 1, 35, 34, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:32:44', '2019-04-29 21:32:44'),
(8, 1, 36, 34, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:33:21', '2019-04-29 21:33:21'),
(9, 11, 40, 37, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:36:02', '2019-04-29 21:36:02'),
(10, 7, 41, 23, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:37:41', '2019-04-29 21:37:41'),
(11, 7, 42, 22, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:38:18', '2019-04-29 21:38:18'),
(12, 7, 43, 22, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:38:52', '2019-04-29 21:38:52'),
(13, 9, 44, 20, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:40:03', '2019-04-29 21:40:03'),
(14, 9, 45, 4, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:40:51', '2019-04-29 21:40:51'),
(15, 7, 46, 6, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:41:58', '2019-04-29 21:41:58'),
(16, 7, 47, 6, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:42:30', '2019-04-29 21:42:30'),
(17, 7, 48, 6, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:43:10', '2019-04-29 21:43:10'),
(18, 7, 49, 6, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:43:39', '2019-04-29 21:43:39'),
(19, 7, 50, 6, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:44:13', '2019-04-29 21:44:13'),
(20, 7, 51, 6, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-29 21:45:57', '2019-04-29 21:45:57'),
(21, 9, 52, 33, NULL, NULL, NULL, NULL, '', '', '', 2, '2019-04-29 21:47:30', '2019-04-29 21:47:30'),
(22, 11, 53, 19, NULL, NULL, NULL, NULL, '', '', '', 3, '2019-04-29 21:51:23', '2019-04-29 21:51:23'),
(23, 8, 54, 34, NULL, NULL, NULL, NULL, '', '', '', 3, '2019-04-29 21:54:09', '2019-04-29 21:54:09'),
(24, 7, 72, 6, NULL, NULL, NULL, NULL, '', '', '', 1, '2019-04-30 00:18:37', '2019-04-30 00:18:37'),
(28, 9, 83, 46, '890000', NULL, NULL, 'cv_Matius Aryanto.jpg', 'surat_pernyataan_Matius Aryanto.png', 'passport_Matius Aryanto.jpg', 'photo_Matius Aryanto.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `fakultas_id`, `created_at`, `updated_at`) VALUES
(1, 'Agribisnis', 1, '2019-04-29 20:40:18', '2019-04-29 20:40:18'),
(2, 'Agroekoteknologi', 1, '2019-04-29 20:40:18', '2019-04-29 20:40:18'),
(3, 'Ilmu Tanah', 1, '2019-04-29 20:40:18', '2019-04-29 20:40:18'),
(4, 'Teknik Pertanian', 2, '2019-04-29 20:40:19', '2019-04-29 20:40:19'),
(5, 'Teknologi Hasil Pertanian', 2, '2019-04-29 20:40:19', '2019-04-29 20:40:19'),
(6, 'Dokter', 3, '2019-04-29 20:40:19', '2019-04-29 20:40:19'),
(7, 'Kebidanan', 3, '2019-04-29 20:40:19', '2019-04-29 20:40:19'),
(8, 'Psikologi', 3, '2019-04-29 20:40:19', '2019-04-29 20:40:19'),
(9, 'Kedokteran Gigi', 4, '2019-04-29 20:40:19', '2019-04-29 20:40:19'),
(10, 'Kesehatan Masyarakat', 5, '2019-04-29 20:40:19', '2019-04-29 20:40:19'),
(11, 'Ilmu Gizi', 5, '2019-04-29 20:40:19', '2019-04-29 20:40:19'),
(12, 'Teknik Mesin', 6, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(13, 'Teknik Sipil', 6, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(14, 'Teknik Lingkungan', 6, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(15, 'Teknik Industri', 6, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(16, 'Teknik Elektro', 6, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(17, 'Hukum', 7, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(18, 'Matematika', 8, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(19, 'Biologi', 8, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(20, 'Kimia', 8, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(21, 'Fisika', 8, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(22, 'Ilmu Management', 9, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(23, 'Ilmu Akutansi', 9, '2019-04-29 20:40:20', '2019-04-29 20:40:20'),
(24, 'Ilmu Ekonomi Pembangunan', 9, '2019-04-29 20:40:21', '2019-04-29 20:40:21'),
(25, 'D III Management', 9, '2019-04-29 20:40:21', '2019-04-29 20:40:21'),
(26, 'D III Akuntansi', 9, '2019-04-29 20:40:21', '2019-04-29 20:40:21'),
(27, 'Akutansi Internasional', 9, '2019-04-29 20:40:21', '2019-04-29 20:40:21'),
(28, 'Management Internasional', 9, '2019-04-29 20:40:21', '2019-04-29 20:40:21'),
(29, 'Ekonomi Pembangunan', 9, '2019-04-29 20:40:21', '2019-04-29 20:40:21'),
(30, 'Peternakan', 10, '2019-04-29 20:40:21', '2019-04-29 20:40:21'),
(31, 'Ilmu Sejarah', 11, '2019-04-29 20:40:21', '2019-04-29 20:40:21'),
(32, 'Sastra Inggris', 11, '2019-04-29 20:40:21', '2019-04-29 20:40:21'),
(33, 'Sastra Daerah', 11, '2019-04-29 20:40:21', '2019-04-29 20:40:21'),
(34, 'Sastra Indonesia ', 11, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(35, 'Sastra Jepang', 11, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(36, 'Sosiologi', 12, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(37, 'Antropologi', 12, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(38, 'Ilmu Administrasi Negara', 12, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(39, 'Ilmu Politik', 12, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(40, 'Ilmu Komunikasi', 12, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(41, 'Ilmu Hubungan Internasional', 12, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(42, 'Farmasi', 13, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(43, 'Profesi Apoteker', 13, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(44, 'Keperawatan', 14, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(45, 'Profesi Ners', 14, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(46, 'Sistem Informasi', 15, '2019-04-29 20:40:22', '2019-04-29 20:40:22'),
(47, 'Sistem Komputer', 15, '2019-04-29 20:40:22', '2019-04-29 20:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `jurusan_id` int(10) UNSIGNED DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmp_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `user_id`, `jurusan_id`, `gender`, `tgl_lahir`, `tmp_lahir`, `address`, `marital_status`, `religon`, `jobs`, `telp`, `created_at`, `updated_at`) VALUES
(1, 'Nurfhadillah Al Munawarah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:42:32', '2019-04-29 20:42:32'),
(2, 'Nurfhadillah Al Munawarah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:43:19', '2019-04-29 20:43:19'),
(3, 'Depi Napita', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:45:14', '2019-04-29 20:45:14'),
(4, 'Riganislamareda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:47:15', '2019-04-29 20:47:15'),
(5, 'Ridhya Dwi A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:49:12', '2019-04-29 20:49:12'),
(6, 'Rahmi Yulia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:50:45', '2019-04-29 20:50:45'),
(7, 'Hafiz Surahman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:51:52', '2019-04-29 20:51:52'),
(8, 'Mia Audina Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:53:23', '2019-04-29 20:53:23'),
(9, 'Maghfirah Assyifa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:54:32', '2019-04-29 20:54:32'),
(10, 'Maghfirah Assyifa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:55:08', '2019-04-29 20:55:08'),
(11, 'Riri Fitriani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:57:21', '2019-04-29 20:57:21'),
(12, 'Rafly Adithy I', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 20:58:58', '2019-04-29 20:58:58'),
(13, 'Alif Maulana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:00:39', '2019-04-29 21:00:39'),
(14, 'Alif Maulana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:00:57', '2019-04-29 21:00:57'),
(15, 'Alif Maulana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:01:31', '2019-04-29 21:01:31'),
(16, 'Roni Vebrian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:03:13', '2019-04-29 21:03:13'),
(17, 'Annisa Istiqa Suwondo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:06:57', '2019-04-29 21:06:57'),
(18, 'Nurul Alisa Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:08:28', '2019-04-29 21:08:28'),
(19, 'Nurul Alisa Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:09:04', '2019-04-29 21:09:04'),
(20, 'Tabita Panggabean', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:10:35', '2019-04-29 21:10:35'),
(21, 'Mulia Sinta Dewi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:12:40', '2019-04-29 21:12:40'),
(22, 'M Yusuf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:16:01', '2019-04-29 21:16:01'),
(23, 'Nurul Nadhila', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:17:51', '2019-04-29 21:17:51'),
(24, 'Nurul Nadhila', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:18:46', '2019-04-29 21:18:46'),
(25, 'Nurul Nadhila', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:19:22', '2019-04-29 21:19:22'),
(26, 'Pham Huynh Thanh Van', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:21:48', '2019-04-29 21:21:48'),
(27, 'Phan Thi Ngoc Tu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:24:20', '2019-04-29 21:24:20'),
(28, 'Than Phuoc Qui', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:25:50', '2019-04-29 21:25:50'),
(29, 'Anis Slaemae', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:27:32', '2019-04-29 21:27:32'),
(30, 'Zaneta Krulikowska', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:29:16', '2019-04-29 21:29:16'),
(31, 'Zaneta Krulikowska', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:29:54', '2019-04-29 21:29:54'),
(32, 'Zaneta Krulikowska', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:30:17', '2019-04-29 21:30:17'),
(33, 'Randrianiaina Joana Eddie', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:31:37', '2019-04-29 21:31:37'),
(34, 'Randrianirina Leonel Juliano', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:32:08', '2019-04-29 21:32:08'),
(35, 'Kasana Soazara Alexia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:32:44', '2019-04-29 21:32:44'),
(36, 'Rajaonarivelo Berthin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:33:21', '2019-04-29 21:33:21'),
(37, 'Razafindrakoto Hery Soa Carinah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:33:53', '2019-04-29 21:33:53'),
(38, 'Razafindrakoto Hery Soa Carinah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:34:09', '2019-04-29 21:34:09'),
(39, 'Razafindrakoto Hery Soa Carinah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:34:52', '2019-04-29 21:34:52'),
(40, 'Maxey William Edward', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:36:02', '2019-04-29 21:36:02'),
(41, 'Fitri Permata Sari binti Efi Patrianus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:37:41', '2019-04-29 21:37:41'),
(42, 'Toh Viki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:38:18', '2019-04-29 21:38:18'),
(43, 'Ahmad Solahuddin Bin Zulfikri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:38:52', '2019-04-29 21:38:52'),
(44, 'Ayumi Mori', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:40:03', '2019-04-29 21:40:03'),
(45, 'Nagaya Daichi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:40:51', '2019-04-29 21:40:51'),
(46, 'Syuhada Ibrahim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:41:58', '2019-04-29 21:41:58'),
(47, 'Benazir Jan Binti Allhammulhack', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:42:30', '2019-04-29 21:42:30'),
(48, 'Marcella Dorainne Mansak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:43:10', '2019-04-29 21:43:10'),
(49, 'Chery Lina Grace Gideon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:43:39', '2019-04-29 21:43:39'),
(50, 'Siti Ubaidah Syahruddin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:44:13', '2019-04-29 21:44:13'),
(51, 'Nur Syazwani Binti Abu Bakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:45:57', '2019-04-29 21:45:57'),
(52, 'Yuki Iwata', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:47:30', '2019-04-29 21:47:30'),
(53, 'Rachel Huang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:51:23', '2019-04-29 21:51:23'),
(54, 'Siyeon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:54:09', '2019-04-29 21:54:09'),
(55, 'Rani Syawaliah Fahmi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 21:58:58', '2019-04-29 21:58:58'),
(56, 'Rinjani Kusuma P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:00:50', '2019-04-29 22:00:50'),
(57, 'Rinjani Kusuma P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:01:18', '2019-04-29 22:01:18'),
(58, 'Syahril Rahmat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:02:45', '2019-04-29 22:02:45'),
(59, 'Sonya Triaz Ramadhani Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:04:10', '2019-04-29 22:04:10'),
(60, 'Mutty Oktaviani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:05:46', '2019-04-29 22:05:46'),
(61, 'Regina Novricha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:07:08', '2019-04-29 22:07:08'),
(62, 'Darniati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:08:25', '2019-04-29 22:08:25'),
(63, 'Melani Niko Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:09:24', '2019-04-29 22:09:24'),
(64, 'Rahmah Selasmi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:10:46', '2019-04-29 22:10:46'),
(65, 'Rahma Dewi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:12:19', '2019-04-29 22:12:19'),
(66, 'Fenti Firhan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:39:06', '2019-04-29 22:39:06'),
(67, 'Zella Monika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:42:36', '2019-04-29 22:42:36'),
(68, 'Regitha Indah F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:43:48', '2019-04-29 22:43:48'),
(69, 'Hanifah Azra Lubis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:45:16', '2019-04-29 22:45:16'),
(70, 'Devi Purwanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:48:06', '2019-04-29 22:48:06'),
(71, 'sheryn Aufa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-29 22:50:28', '2019-04-29 22:50:28'),
(72, 'Muhammad Azri Bin Abdul Rahman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-30 00:18:37', '2019-04-30 00:18:37'),
(79, 'lucunew', NULL, NULL, 1, '2019-05-17', NULL, 'gsgsd', 'Single', NULL, NULL, '+6282286214600', NULL, NULL),
(82, 'Matius Aryanto', 6, NULL, 1, '2019-05-16', NULL, 'Muara langsat', 'Single', NULL, NULL, '+6282286214600', NULL, NULL),
(83, 'Matius Aryanto', 6, NULL, 1, '2019-05-23', NULL, 'Muara langsat', 'Single', NULL, NULL, '+6282286214600', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_14_103900_create_permission_tables', 1),
(4, '2019_04_15_051625_create_fakultas_table', 1),
(5, '2019_04_16_051650_create_jurusan_table', 1),
(6, '2019_04_16_064105_create_country_table', 1),
(7, '2019_04_17_000000_create_mahasiswas_table', 1),
(8, '2019_04_17_050518_create_unand_table', 1),
(9, '2019_04_17_050911_create_internationals_table', 1),
(10, '2019_04_22_170338_create_dosen_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user_manage', 'web', '2019-04-29 20:40:13', '2019-04-29 20:40:13'),
(2, 'validation_manage', 'web', '2019-04-29 20:40:13', '2019-04-29 20:40:13'),
(3, 'student_manage', 'web', '2019-04-29 20:40:13', '2019-04-29 20:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'web', '2019-04-29 20:40:13', '2019-04-29 20:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `unand_student`
--

CREATE TABLE `unand_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `paspor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `jurusan_id` int(10) UNSIGNED NOT NULL,
  `NIM` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program` int(11) NOT NULL,
  `univ_tujuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unand_student`
--

INSERT INTO `unand_student` (`id`, `country_id`, `paspor`, `tgl_mulai`, `tgl_akhir`, `mahasiswa_id`, `jurusan_id`, `NIM`, `prodi`, `program`, `univ_tujuan`, `created_at`, `updated_at`) VALUES
(1, 9, NULL, '2018-10-05', '2018-10-05', 2, 24, '1510514020', NULL, 2, 'Osaka City Univ', '2019-04-29 20:43:20', '2019-04-29 20:43:20'),
(2, 9, NULL, '2018-10-05', '2018-10-31', 3, 24, '14105122042', NULL, 2, 'Osaka City Univ', '2019-04-29 20:45:14', '2019-04-29 20:45:14'),
(3, 5, NULL, '2018-08-12', '2018-09-12', 4, 23, '1510534033', NULL, 2, 'Southern Cross Univ', '2019-04-29 20:47:15', '2019-04-29 20:47:15'),
(4, 5, NULL, '2018-08-12', '2018-09-12', 5, 23, '1510534006', NULL, 2, 'Southern Cross Univ', '2019-04-29 20:49:12', '2019-04-29 20:49:12'),
(5, 9, NULL, '2018-09-30', '2018-10-31', 6, 16, '1510952017', NULL, 2, 'Gifu Univ', '2019-04-29 20:50:45', '2019-04-29 20:50:45'),
(6, 9, NULL, '2018-09-30', '2018-10-31', 7, 16, '1510951006', NULL, 2, 'Gifu Univ', '2019-04-29 20:51:52', '2019-04-29 20:51:52'),
(7, 9, NULL, '2018-10-06', '2018-10-31', 8, 8, '1510321018', NULL, 2, 'Osaka City Univ', '2019-04-29 20:53:23', '2019-04-29 20:53:23'),
(8, 9, NULL, '2017-10-06', '2018-10-31', 10, 8, '1510321001', NULL, 2, 'Osaka City Univ', '2019-04-29 20:55:09', '2019-04-29 20:55:09'),
(9, 9, NULL, '2018-09-30', '2018-10-31', 11, 35, '1410755001', NULL, 2, 'Gifu Univ', '2019-04-29 20:57:21', '2019-04-29 20:57:21'),
(10, 9, NULL, '2018-09-30', '2018-10-31', 12, 35, '1510752021', NULL, 2, 'Osaka City Univ', '2019-04-29 20:58:58', '2019-04-29 20:58:58'),
(11, 5, NULL, '2018-08-01', '2018-08-31', 16, 31, '1210712027', NULL, 2, 'Melbourn Univ', '2019-04-29 21:03:14', '2019-04-29 21:03:14'),
(12, 8, NULL, '2018-08-30', '2018-09-30', 17, 34, '151072003', NULL, 2, 'BUFS Univ', '2019-04-29 21:06:57', '2019-04-29 21:06:57'),
(13, 8, NULL, '2018-08-30', '2018-09-30', 19, 34, '151072025', NULL, 2, 'BUFS Univ', '2019-04-29 21:09:04', '2019-04-29 21:09:04'),
(14, 9, NULL, '2018-09-30', '2018-10-30', 20, 14, '1510942022', NULL, 2, 'Kanazawa Univ', '2019-04-29 21:10:35', '2019-04-29 21:10:35'),
(15, 9, NULL, '2018-09-17', '2018-10-31', 21, 14, '1510942035', NULL, 2, 'Kanazawa Univ', '2019-04-29 21:12:40', '2019-04-29 21:12:40'),
(16, 7, NULL, '2018-08-06', '2018-09-04', 22, 11, '1511222013', NULL, 2, 'UPM', '2019-04-29 21:16:01', '2019-04-29 21:16:01'),
(17, 15, NULL, '2018-10-01', '2018-10-30', 55, 32, '1510731032', NULL, 2, 'Nicolaus Univ', '2019-04-29 21:58:58', '2019-04-29 21:58:58'),
(18, 15, NULL, '2018-10-01', '2018-10-30', 57, 32, '1510731006', NULL, 2, 'Nicolaus Univ', '2019-04-29 22:01:18', '2019-04-29 22:01:18'),
(19, 9, NULL, '2018-09-30', '2018-10-31', 58, 13, '1410921085', NULL, 2, 'Gifu Univ', '2019-04-29 22:02:45', '2019-04-29 22:02:45'),
(20, 9, NULL, '2018-09-30', '2018-10-31', 59, 13, '1410922070', NULL, 2, 'Gifu Univ', '2019-04-29 22:04:10', '2019-04-29 22:04:10'),
(21, 12, NULL, '2018-09-01', '2018-10-01', 60, 15, '1510932031', NULL, 2, 'PrInce of Songkia', '2019-04-29 22:05:46', '2019-04-29 22:05:46'),
(22, 12, NULL, '2018-09-01', '2018-10-01', 61, 15, '1510931033', NULL, 2, 'PrInce of Songkia', '2019-04-29 22:07:08', '2019-04-29 22:07:08'),
(23, 7, NULL, '2018-09-10', '2018-10-09', 62, 33, '1510742028', NULL, 2, 'UM', '2019-04-29 22:08:25', '2019-04-29 22:08:25'),
(24, 7, NULL, '2018-09-10', '2018-10-09', 63, 33, '1510742034', NULL, 2, 'UM', '2019-04-29 22:09:24', '2019-04-29 22:09:24'),
(25, 9, NULL, '2018-09-27', '2017-10-27', 64, 1, '1510222020', NULL, 2, 'Shimane', '2019-04-29 22:10:46', '2019-04-29 22:10:46'),
(26, 9, NULL, '2018-09-27', '2018-10-27', 65, 1, '1510222044', NULL, 2, 'Shimane', '2019-04-29 22:12:19', '2019-04-29 22:12:19'),
(27, 10, NULL, '2018-10-01', '2018-10-31', 66, 37, '1510822003', NULL, 2, 'Vetnam National University', '2019-04-29 22:39:07', '2019-04-29 22:39:07'),
(28, 10, NULL, '2018-10-04', '2018-10-31', 67, 37, '1512861376', NULL, 1, 'Vetnam National University', '2019-04-29 22:42:36', '2019-04-29 22:42:36'),
(29, 9, NULL, '2018-09-30', '2018-10-31', 68, 46, '1511521017', NULL, 2, 'Gifu Univ', '2019-04-29 22:43:48', '2019-04-29 22:43:48'),
(30, 8, NULL, '2018-06-01', '2018-08-24', 69, 46, '1611521003', NULL, 2, 'Hankuk University', '2019-04-29 22:45:17', '2019-04-29 22:45:17'),
(31, 8, NULL, '2018-09-17', '2018-10-17', 70, 41, '1582715728', NULL, 2, 'Matej BelUniversity', '2019-04-29 22:48:07', '2019-04-29 22:48:07'),
(32, 8, NULL, '2018-09-17', '2018-10-17', 71, 41, '1610852002', NULL, 2, 'Matej Bel University', '2019-04-29 22:50:28', '2019-04-29 22:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$ud5NpMQpjde5xXjR7YFGCOesXQyXHpShdMpTjhs7L1dAAj44nPf5S', NULL, NULL, '2019-04-29 20:40:14', '2019-04-29 20:40:14'),
(2, 'ss', 'gdg@gg.kk', NULL, '$2y$10$E1pPQgdLszAyA7OcC2yTyu18FJEbqACqAGWkMa2rKbD6uj1LtvzYe', NULL, NULL, '2019-05-14 10:30:02', '2019-05-14 10:30:02'),
(6, 'burung2', 'burung2@burung.co', NULL, '$2y$10$CBo9w943/gKDas1B16jsS.I4pOqhq.l2JnPUttjOQIo9MKW5mnbUW', 'international', 'NSn5DDwEI0icaRUSrVitvVrn9G4dw61yOy3j6JrWA2S01vO6yyvEu3QE1TNT', '2019-05-14 10:32:43', '2019-05-14 10:32:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internationals`
--
ALTER TABLE `internationals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `internationals_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `internationals_country_id_foreign` (`country_id`),
  ADD KEY `internationals_jurusan_id_foreign` (`jurusan_id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jurusan_fakultas_id_foreign` (`fakultas_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_users_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `unand_student`
--
ALTER TABLE `unand_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unand_student_nim_unique` (`NIM`),
  ADD KEY `unand_student_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `unand_student_jurusan_id_foreign` (`jurusan_id`),
  ADD KEY `unand_student_country_id_foreign` (`country_id`);

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
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `internationals`
--
ALTER TABLE `internationals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unand_student`
--
ALTER TABLE `unand_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `internationals`
--
ALTER TABLE `internationals`
  ADD CONSTRAINT `internationals_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `internationals_jurusan_id_foreign` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id`),
  ADD CONSTRAINT `internationals_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`);

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_fakultas_id_foreign` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `unand_student`
--
ALTER TABLE `unand_student`
  ADD CONSTRAINT `unand_student_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `unand_student_jurusan_id_foreign` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id`),
  ADD CONSTRAINT `unand_student_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
