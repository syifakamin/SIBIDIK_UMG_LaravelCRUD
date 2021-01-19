-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 10:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `camaba`
--

CREATE TABLE `camaba` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_studi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `camaba`
--

INSERT INTO `camaba` (`id`, `no_reg`, `nama`, `fakultas`, `program_studi`, `created_at`, `updated_at`) VALUES
(8, '2018100565', 'DEVA TRISFIANA AMALIYA', 'Pertanian', 'Agroteknologi', '2020-12-04 05:45:53', '2020-12-04 05:45:53'),
(9, '2018100667', 'SINTA NUR AFIAH', 'Pertanian', 'Agroteknologi', '2020-12-04 05:46:40', '2020-12-04 05:46:40'),
(10, '2018100728', 'DINDA SARASATUS MAHARDIANTI', 'Pertanian', 'Agroteknologi', '2020-12-04 05:47:29', '2020-12-04 05:47:29'),
(11, '2018100799', 'ZIDANE TRIANANDA PUTRA', 'Pertanian', 'Agroteknologi', '2020-12-04 05:47:49', '2020-12-04 05:47:49'),
(12, '2018100876', 'KRISTIA ANDRE IRAWAN', 'Pertanian', 'Agroteknologi', '2020-12-04 05:48:21', '2020-12-04 05:48:21'),
(13, '2018100923', 'ANANG DWI FEBRIANTO', 'Pertanian', 'Agroteknologi', '2020-12-04 05:49:08', '2020-12-04 05:49:08'),
(14, '2018100966', 'ASKIYA` A`YUNITA', 'Pertanian', 'Agroteknologi', '2020-12-04 05:49:32', '2020-12-04 05:49:32'),
(15, '2018101009', 'MOH. ABU HASAN AL ASYARI', 'Pertanian', 'Agroteknologi', '2020-12-04 05:50:05', '2020-12-04 05:50:05'),
(16, '2018101010', 'MOH. ABU MANSUR AL MATHORIDI', 'Pertanian', 'Agroteknologi', '2020-12-04 05:50:42', '2020-12-04 05:50:42'),
(17, '2018101128', 'SITI NURAZIZAH', 'Pertanian', 'Agroteknologi', '2020-12-04 05:51:08', '2020-12-04 05:51:08'),
(18, '2018101310', 'MAR\'ATUS KHUSNIATUR RAHMAH', 'Pertanian', 'Agroteknologi', '2020-12-06 07:16:09', '2020-12-06 07:16:28'),
(19, '2018101343', 'AGUNG BUDI SANTOSO', 'Pertanian', 'Agroteknologi', '2020-12-06 07:17:03', '2020-12-06 07:17:03'),
(20, '2018101371', 'MUHAMMAD FADHLURROHMAN', 'Pertanian', 'Agroteknologi', '2020-12-06 07:17:29', '2020-12-06 07:17:29'),
(21, '2018101383', 'MUHAMMAD FIKRI HAIKAL', 'Pertanian', 'Agroteknologi', '2020-12-06 07:17:51', '2020-12-06 07:17:51'),
(22, '2018101391', 'DIAN ARI SETIAWAN', 'Pertanian', 'Agroteknologi', '2020-12-06 07:18:12', '2020-12-06 07:18:12'),
(23, '2018101401', 'NURUL NUR QOIRIYAH', 'Pertanian', 'Agroteknologi', '2020-12-06 07:18:36', '2020-12-06 07:18:36'),
(24, '2018100940', 'RIANA INTAN SAFITRI', 'Pertanian', 'Agroteknologi', '2020-12-06 07:20:32', '2020-12-06 07:20:32'),
(25, '2018101254', 'HARYA DUTA DEWANGGA', 'Pertanian', 'Agroteknologi', '2020-12-06 07:20:56', '2020-12-06 07:20:56'),
(26, '2018100970', 'ZAHRUN NAFISA', 'Pertanian', 'Agroteknologi', '2020-12-06 07:21:29', '2020-12-06 07:21:29'),
(27, '2018100588', 'FATIMATU ZAHROH', 'Pertanian', 'Akuakultur', '2020-12-06 07:31:07', '2020-12-06 07:31:07'),
(28, '2018100589', 'NIHAYATUL ISTIANAH', 'Pertanian', 'Akuakultur', '2020-12-06 07:31:33', '2020-12-06 07:31:33'),
(29, '2018100590', 'MINHATIN AWWALIYAH', 'Pertanian', 'Akuakultur', '2020-12-06 07:32:52', '2020-12-06 07:32:52'),
(30, '2018100591', 'ANFA\'U MAZIDA', 'Pertanian', 'Akuakultur', '2020-12-06 07:33:12', '2020-12-06 07:33:12'),
(31, '2018100592', 'PUTRI NUR IZZATI', 'Pertanian', 'Akuakultur', '2020-12-06 07:33:30', '2020-12-06 07:33:30'),
(32, '2018100593', 'AKHMAD WAFI MUSABBIH', 'Pertanian', 'Akuakultur', '2020-12-06 07:33:48', '2020-12-06 07:33:48'),
(33, '2018100660', 'FAIZAL ABDUL SYAHROSID', 'Pertanian', 'Akuakultur', '2020-12-06 07:34:07', '2020-12-06 07:34:07'),
(34, '2018100681', 'AZMIFARIHAGUSTA', 'Pertanian', 'Akuakultur', '2020-12-06 07:34:29', '2020-12-06 07:34:29'),
(35, '2018100731', 'QONITA YASMIN FIRDAUS', 'Pertanian', 'Akuakultur', '2020-12-06 07:34:52', '2020-12-06 07:34:52'),
(36, '2018101123', 'AHMAD JA\'FAR SHODIQ', 'Pertanian', 'Akuakultur', '2020-12-06 07:35:11', '2020-12-06 07:35:11'),
(37, '2018101069', 'ANDI MUH ROBY MAULANA', 'Pertanian', 'Akuakultur', '2020-12-06 07:35:29', '2020-12-06 07:35:29'),
(38, '2018100554', 'ERINA FAUZIA', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-06 07:40:50', '2020-12-06 07:41:43'),
(39, '2018100578', 'GITA SYAHARA', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-06 07:42:22', '2020-12-06 07:42:22'),
(40, '2018100585', 'JAMILATUS SHOLIKHAH', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-06 07:42:41', '2020-12-06 07:42:41'),
(41, '2018100604', 'MINDARTI', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-06 07:43:05', '2020-12-06 07:43:05'),
(42, '2018100619', 'BAMBANG FITRI YADI', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-06 07:43:27', '2020-12-06 07:43:27'),
(43, '2018100643', 'MAGHRIBA TRI ZULVIA', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-06 07:43:45', '2020-12-06 07:43:45'),
(44, '2018100665', 'CICIK KHOIRIYAH', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-06 07:44:08', '2020-12-06 07:44:08'),
(45, '2018100666', 'PRAWITA INDRANA WATI', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-06 07:44:25', '2020-12-06 07:44:25'),
(46, '2018100672', 'ENY WALIDATUL MAGHFIROH', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-06 07:44:40', '2020-12-06 07:44:40'),
(47, '2018100685', 'NISRINA WATSIQAH', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-06 07:45:06', '2020-12-06 07:45:06'),
(48, '2018100688', 'RISATUL BAIYINAH', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:33:13', '2020-12-08 04:33:13'),
(49, '2018100897', 'M.KHAKIKI NAZILIN', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:37:34', '2020-12-08 04:37:34'),
(50, '2018100936', 'GHULAM SHOBRI AMIRUDDIN', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:38:02', '2020-12-08 04:38:02'),
(51, '2018100951', 'MISBAKHUL KHOIR', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:38:25', '2020-12-08 04:38:25'),
(52, '2018100959', 'IQBALUL HAQQI AL MUHARRAMI', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:38:46', '2020-12-08 04:38:46'),
(54, '2018101013', 'ZUNAINAH HANNA SAPUTRI', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:39:38', '2020-12-08 04:39:38'),
(55, '2018101067', 'AHMAD MUHARIKIL HAQ', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:39:58', '2020-12-08 04:39:58'),
(56, '2018101129', 'ASYRAFIL MURSIDI', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:40:19', '2020-12-08 04:40:19'),
(57, '2018101153', 'FAJRUL MURTAFAQO', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:40:53', '2020-12-08 04:40:53'),
(59, '2018101170', 'NADIYA VIDILIYA YUSVIYA DEWI', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:41:13', '2020-12-08 04:41:13'),
(60, '2018101304', 'SAGITA VIO NITA', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:42:42', '2020-12-08 04:42:42'),
(61, '2018101333', 'MAULIDDA ALFAJAR SYAIFULLAH', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:42:59', '2020-12-08 04:42:59'),
(62, '2018101404', 'ALFIN NUR AHSAN', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:43:55', '2020-12-08 04:43:55'),
(63, '2018101411', 'ADE LATHIFATUL KHUSNA', 'Agama Islam', 'Pendidikan Agama Islam', '2020-12-08 04:44:35', '2020-12-08 04:44:35'),
(64, '2018100233', 'ELMA', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:45:16', '2020-12-08 04:45:16'),
(66, '2018100369', 'INDAH WATI', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:45:43', '2020-12-08 04:45:43'),
(67, '2018100556', 'NOR LAILY SYAFA\'AH', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:46:04', '2020-12-08 04:46:04'),
(68, '2018100576', 'NUR MAKHMUDIYAH', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:46:40', '2020-12-08 04:46:40'),
(69, '2018100577', 'DINA ARISTA NOVIANTI', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:47:00', '2020-12-08 04:47:00'),
(70, '2018100584', 'ADISA JASMINE ARYA', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:48:37', '2020-12-08 04:48:37'),
(71, '2018100596', 'AFIFATUL \'ULYA', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:53:15', '2020-12-08 04:53:15'),
(72, '2018100599', 'TRI HARTATI WIJAYATI', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:53:37', '2020-12-08 04:53:37'),
(73, '2018100602', 'NUR FAJRIYAH', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:53:58', '2020-12-08 04:53:58'),
(74, '2018100610', 'ERICA SAFRINA KHANSA', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:54:19', '2020-12-08 04:54:19'),
(75, '2018100611', 'DEVI NOVITASARI', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:54:45', '2020-12-08 04:54:45'),
(76, '2018100612', 'NUR KHOLIFATUR ROSYIDAH', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:55:09', '2020-12-08 04:55:09'),
(77, '2018100673', 'BUNGA CITRA LESTARI', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:56:35', '2020-12-08 04:56:35'),
(78, '2018100676', 'RISKY MILA SARY', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:57:10', '2020-12-08 04:57:10'),
(79, '2018100944', 'SHOFI PAVITA', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:57:39', '2020-12-08 04:57:39'),
(80, '2018100997', 'IRA ANDRIYANI RUKMANA', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:58:08', '2020-12-08 04:58:08'),
(81, '2018101092', 'INNA SYAFA\'ATUL ILMIYAH', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:58:33', '2020-12-08 04:58:33'),
(82, '2018101147', 'NURMA APRILIA HS', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 04:59:09', '2020-12-08 04:59:09'),
(83, '2018101395', 'MILLATUL SANIYAH', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 05:00:46', '2020-12-08 05:00:46'),
(84, '2018100716', 'ANANDA DWI', 'Agama Islam', 'Pendidikan Islam Usia Dini', '2020-12-08 05:01:17', '2020-12-08 05:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_akhir`
--

CREATE TABLE `hasil_akhir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double NOT NULL,
  `rangking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keputusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_perhitungan`
--

CREATE TABLE `hasil_perhitungan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `camaba_id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_perhitungan`
--

INSERT INTO `hasil_perhitungan` (`id`, `camaba_id`, `kriteria_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 50, NULL, '2020-11-23 13:27:58'),
(2, 2, 3, 90, NULL, '2020-11-23 13:27:58'),
(3, 2, 4, 90, NULL, '2020-11-23 13:27:58'),
(4, 3, 2, 90, NULL, NULL),
(5, 3, 3, 10, NULL, NULL),
(6, 3, 4, 40, NULL, NULL),
(7, 4, 2, 50, NULL, '2020-11-23 02:22:39'),
(8, 4, 3, 40, NULL, '2020-11-23 02:22:39'),
(9, 4, 4, 80, NULL, '2020-11-23 02:22:39'),
(11, 5, 2, 80, NULL, '2020-11-24 02:41:38'),
(12, 5, 3, 60, NULL, '2020-11-24 02:41:38'),
(13, 5, 4, 90, NULL, '2020-11-24 02:41:38'),
(14, 7, 2, 70, NULL, '2020-11-24 02:41:49'),
(15, 7, 3, 40, NULL, '2020-11-24 02:41:49'),
(16, 7, 4, 70, NULL, '2020-11-24 02:41:49'),
(17, 8, 2, 50, NULL, '2020-12-04 05:52:04'),
(18, 8, 3, 48, NULL, '2020-12-04 05:52:04'),
(19, 8, 4, 85, NULL, '2020-12-04 05:52:04'),
(20, 9, 2, 50, NULL, NULL),
(21, 9, 3, 47, NULL, NULL),
(22, 9, 4, 94, NULL, NULL),
(23, 10, 2, 25, NULL, NULL),
(24, 10, 3, 54, NULL, NULL),
(25, 10, 4, 95, NULL, NULL),
(26, 11, 2, 70, NULL, NULL),
(27, 11, 3, 11, NULL, NULL),
(28, 11, 4, 80, NULL, NULL),
(29, 12, 2, 70, NULL, NULL),
(30, 12, 3, 25, NULL, NULL),
(31, 12, 4, 84, NULL, NULL),
(32, 13, 2, 50, NULL, NULL),
(33, 13, 3, 22, NULL, NULL),
(34, 13, 4, 89, NULL, NULL),
(35, 14, 2, 50, NULL, NULL),
(36, 14, 3, 47, NULL, NULL),
(37, 14, 4, 90, NULL, NULL),
(38, 15, 2, 25, NULL, NULL),
(39, 15, 3, 39, NULL, NULL),
(40, 15, 4, 85, NULL, NULL),
(41, 16, 2, 25, NULL, NULL),
(42, 16, 3, 37, NULL, NULL),
(43, 16, 4, 80, NULL, NULL),
(44, 17, 2, 50, NULL, NULL),
(45, 17, 3, 45, NULL, NULL),
(46, 17, 4, 95, NULL, NULL),
(47, 18, 2, 100, NULL, NULL),
(48, 18, 3, 52, NULL, NULL),
(49, 18, 4, 95, NULL, NULL),
(50, 19, 2, 50, NULL, NULL),
(51, 19, 3, 34, NULL, NULL),
(52, 19, 4, 90, NULL, NULL),
(53, 20, 2, 50, NULL, NULL),
(54, 20, 3, 34, NULL, NULL),
(55, 20, 4, 85, NULL, NULL),
(56, 21, 2, 70, NULL, NULL),
(57, 21, 3, 25, NULL, NULL),
(58, 21, 4, 90, NULL, NULL),
(59, 22, 2, 25, NULL, NULL),
(60, 22, 3, 38, NULL, NULL),
(61, 22, 4, 90, NULL, NULL),
(62, 23, 2, 25, NULL, NULL),
(63, 23, 3, 34, NULL, NULL),
(64, 23, 4, 90, NULL, NULL),
(65, 24, 2, 0, NULL, NULL),
(66, 24, 3, 0, NULL, NULL),
(67, 24, 4, 89, NULL, NULL),
(68, 25, 2, 70, NULL, NULL),
(69, 25, 3, 47, NULL, NULL),
(70, 25, 4, 90, NULL, NULL),
(71, 26, 2, 25, NULL, NULL),
(72, 26, 3, 53, NULL, NULL),
(73, 26, 4, 89, NULL, NULL),
(74, 27, 2, 50, NULL, '2020-12-09 03:16:21'),
(75, 27, 3, 29, NULL, '2020-12-09 03:16:21'),
(76, 27, 4, 90.5, NULL, '2020-12-09 03:16:21'),
(77, 28, 2, 70, NULL, NULL),
(78, 28, 3, 36, NULL, NULL),
(79, 28, 4, 86, NULL, NULL),
(80, 29, 2, 50, NULL, NULL),
(81, 29, 3, 31, NULL, NULL),
(82, 29, 4, 88.5, NULL, NULL),
(83, 30, 2, 50, NULL, NULL),
(84, 30, 3, 33, NULL, NULL),
(85, 30, 4, 99, NULL, NULL),
(86, 31, 2, 50, NULL, NULL),
(87, 31, 3, 28, NULL, NULL),
(88, 31, 4, 81, NULL, NULL),
(89, 32, 2, 25, NULL, NULL),
(90, 32, 3, 23, NULL, NULL),
(91, 32, 4, 94, NULL, NULL),
(92, 33, 2, 25, NULL, NULL),
(93, 33, 3, 44, NULL, NULL),
(94, 33, 4, 91.5, NULL, NULL),
(95, 34, 2, 25, NULL, NULL),
(96, 34, 3, 26, NULL, NULL),
(97, 34, 4, 88.5, NULL, NULL),
(98, 35, 2, 25, NULL, NULL),
(99, 35, 3, 39, NULL, NULL),
(100, 35, 4, 90, NULL, NULL),
(101, 36, 2, 25, NULL, NULL),
(102, 36, 3, 37, NULL, NULL),
(103, 36, 4, 86.5, NULL, NULL),
(104, 37, 2, 50, NULL, NULL),
(105, 37, 3, 46, NULL, NULL),
(106, 37, 4, 90, NULL, NULL),
(107, 38, 2, 25, NULL, NULL),
(108, 38, 3, 38, NULL, NULL),
(109, 38, 4, 93, NULL, NULL),
(110, 39, 2, 70, NULL, NULL),
(111, 39, 3, 35, NULL, NULL),
(112, 39, 4, 91, NULL, NULL),
(113, 40, 2, 50, NULL, NULL),
(114, 40, 3, 8, NULL, NULL),
(115, 40, 4, 97, NULL, NULL),
(116, 41, 2, 50, NULL, NULL),
(117, 41, 3, 47, NULL, NULL),
(118, 41, 4, 98, NULL, NULL),
(119, 42, 2, 25, NULL, NULL),
(120, 42, 3, 37, NULL, NULL),
(121, 42, 4, 88, NULL, NULL),
(122, 43, 2, 70, NULL, NULL),
(123, 43, 3, 31, NULL, NULL),
(124, 43, 4, 97, NULL, NULL),
(125, 44, 2, 70, NULL, NULL),
(126, 44, 3, 20, NULL, NULL),
(127, 44, 4, 92, NULL, NULL),
(128, 45, 2, 70, NULL, NULL),
(129, 45, 3, 32, NULL, NULL),
(130, 45, 4, 94, NULL, NULL),
(131, 46, 2, 25, NULL, NULL),
(132, 46, 3, 32, NULL, NULL),
(133, 46, 4, 97, NULL, NULL),
(134, 47, 2, 100, NULL, NULL),
(135, 47, 3, 34, NULL, NULL),
(136, 47, 4, 96, NULL, NULL),
(137, 48, 2, 70, NULL, NULL),
(138, 48, 3, 28, NULL, NULL),
(139, 48, 4, 88, NULL, NULL),
(140, 49, 2, 50, NULL, NULL),
(141, 49, 3, 39, NULL, NULL),
(142, 49, 4, 89, NULL, NULL),
(143, 50, 2, 70, NULL, NULL),
(144, 50, 3, 34, NULL, NULL),
(145, 50, 4, 98, NULL, NULL),
(146, 51, 2, 70, NULL, NULL),
(147, 51, 3, 51, NULL, NULL),
(148, 51, 4, 98, NULL, NULL),
(149, 52, 2, 70, NULL, NULL),
(150, 52, 3, 48, NULL, NULL),
(151, 52, 4, 85, NULL, NULL),
(152, 54, 2, 25, NULL, NULL),
(153, 54, 3, 44, NULL, NULL),
(154, 54, 4, 84, NULL, NULL),
(155, 55, 2, 70, NULL, NULL),
(156, 55, 3, 36, NULL, NULL),
(157, 55, 4, 87, NULL, NULL),
(158, 56, 2, 50, NULL, NULL),
(159, 56, 3, 39, NULL, NULL),
(160, 56, 4, 89, NULL, NULL),
(161, 57, 2, 50, NULL, NULL),
(162, 57, 3, 39, NULL, NULL),
(163, 57, 4, 89, NULL, NULL),
(164, 59, 2, 70, NULL, NULL),
(165, 59, 3, 18, NULL, NULL),
(166, 59, 4, 88, NULL, NULL),
(167, 60, 2, 70, NULL, NULL),
(168, 60, 3, 43, NULL, NULL),
(169, 60, 4, 86, NULL, NULL),
(170, 61, 2, 100, NULL, NULL),
(171, 61, 3, 37, NULL, NULL),
(172, 61, 4, 97, NULL, NULL),
(173, 62, 2, 25, NULL, NULL),
(174, 62, 3, 42, NULL, NULL),
(175, 62, 4, 88, NULL, NULL),
(176, 63, 2, 25, NULL, '2020-12-10 17:52:40'),
(177, 63, 3, 25, NULL, '2020-12-10 17:52:40'),
(178, 63, 4, 95, NULL, '2020-12-10 17:52:40'),
(179, 64, 2, 50, NULL, '2020-12-10 17:53:24'),
(180, 64, 3, 39, NULL, '2020-12-10 17:53:24'),
(181, 64, 4, 85.75, NULL, '2020-12-10 17:53:24'),
(182, 66, 2, 25, NULL, NULL),
(183, 66, 3, 50, NULL, NULL),
(184, 66, 4, 86.75, NULL, NULL),
(185, 67, 2, 50, NULL, NULL),
(186, 67, 3, 43, NULL, NULL),
(187, 67, 4, 85, NULL, NULL),
(188, 68, 2, 50, NULL, NULL),
(189, 68, 3, 40, NULL, NULL),
(190, 68, 4, 82.25, NULL, NULL),
(191, 69, 2, 50, NULL, NULL),
(192, 69, 3, 30, NULL, NULL),
(193, 69, 4, 85, NULL, NULL),
(194, 70, 2, 70, NULL, NULL),
(195, 70, 3, 35, NULL, NULL),
(196, 70, 4, 84, NULL, NULL),
(197, 71, 2, 50, NULL, NULL),
(198, 71, 3, 46, NULL, NULL),
(199, 71, 4, 86.2, NULL, NULL),
(200, 72, 2, 70, NULL, NULL),
(201, 72, 3, 64, NULL, NULL),
(202, 72, 4, 87, NULL, NULL),
(203, 73, 2, 50, NULL, NULL),
(204, 73, 3, 26, NULL, NULL),
(205, 73, 4, 83.05, NULL, NULL),
(206, 74, 2, 25, NULL, NULL),
(207, 74, 3, 55, NULL, NULL),
(208, 74, 4, 91.25, NULL, NULL),
(209, 75, 2, 100, NULL, '2020-12-10 18:01:28'),
(210, 75, 3, 27, NULL, '2020-12-10 18:01:28'),
(211, 75, 4, 86.25, NULL, '2020-12-10 18:01:28'),
(212, 76, 2, 85, NULL, NULL),
(213, 76, 3, 42, NULL, NULL),
(214, 76, 4, 82.05, NULL, NULL),
(215, 77, 2, 25, NULL, NULL),
(216, 77, 3, 35, NULL, NULL),
(217, 77, 4, 88.75, NULL, NULL),
(218, 78, 2, 70, NULL, NULL),
(219, 78, 3, 45, NULL, NULL),
(220, 78, 4, 85.5, NULL, NULL),
(221, 79, 2, 70, NULL, NULL),
(222, 79, 3, 37, NULL, NULL),
(223, 79, 4, 85.35, NULL, NULL),
(224, 80, 2, 50, NULL, NULL),
(225, 80, 3, 33, NULL, NULL),
(226, 80, 4, 90, NULL, NULL),
(227, 81, 2, 25, NULL, NULL),
(228, 81, 3, 44, NULL, NULL),
(229, 81, 4, 83.75, NULL, NULL),
(230, 82, 2, 25, NULL, NULL),
(231, 82, 3, 36, NULL, NULL),
(232, 82, 4, 85.25, NULL, NULL),
(233, 83, 2, 25, NULL, NULL),
(234, 83, 3, 38, NULL, NULL),
(235, 83, 4, 88.75, NULL, NULL),
(236, 84, 2, 25, NULL, '2020-12-10 18:06:33'),
(237, 84, 3, 53, NULL, '2020-12-10 18:06:33'),
(238, 84, 4, 85, NULL, '2020-12-10 18:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama_kriteria`, `jenis`, `bobot`, `created_at`, `updated_at`) VALUES
(2, 'Nilai Prestasi', 'Benefit', '10', '2020-11-17 10:15:40', '2020-11-17 10:17:11'),
(3, 'Nilai Test Kemampuan Dasar', 'Benefit', '40', '2020-11-17 10:16:20', '2020-11-17 10:16:20'),
(4, 'Nilai test akademik', 'Benefit', '50', '2020-11-17 10:16:37', '2020-11-17 10:16:37');

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
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(27, '2020_07_10_061721_create_camaba_table', 1),
(28, '2020_11_16_102142_create_kriteria_table', 1),
(29, '2020_11_17_144736_create_hasil_perhitungan_table', 1),
(30, '2020_11_17_144913_create_hasil_akhir_table', 1),
(31, '2020_11_19_072241_create_nilai_hitung_2_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(7, 'App\\User', 1),
(7, 'App\\User', 4),
(8, 'App\\User', 2),
(8, 'App\\User', 5),
(8, 'App\\User', 6),
(9, 'App\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_hitung_2`
--

CREATE TABLE `nilai_hitung_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `camaba_id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(7, 'CRUD semua', 'web', '2020-12-19 04:15:51', '2020-12-19 04:15:51'),
(8, 'CRUD Penilaian', 'web', '2020-12-19 04:15:51', '2020-12-19 04:15:51'),
(9, 'Read hasil', 'web', '2020-12-19 04:15:51', '2020-12-19 04:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(7, 'admin', 'web', '2020-12-19 04:15:51', '2020-12-19 04:15:51'),
(8, 'juri', 'web', '2020-12-19 04:15:51', '2020-12-19 04:15:51'),
(9, 'kepala', 'web', '2020-12-19 04:15:51', '2020-12-19 04:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(7, 7),
(8, 8),
(9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ijQlBlGr7mWO5IMXjLxffeN9h/HhlhGkOUKkcNi8I2xngBnl9ilyG', NULL, '2020-12-19 04:15:51', '2020-12-19 04:15:51'),
(2, 'juri', 'juri@gmail.com', NULL, '$2y$10$C1w7rvLXXU2yMLka2nkaK.xfTS2fsH/li4SLrh/UHsQSUtNnBFGBa', NULL, '2020-12-19 04:15:51', '2020-12-19 04:15:51'),
(3, 'kepala', 'kepala@gmail.com', NULL, '$2y$10$0b711F4qbZusjbI5d00DTubCqKqrjiFrHFi0GXM2RqzoDt3HcAj5W', NULL, '2020-12-19 04:15:51', '2020-12-19 04:15:51'),
(4, 'amik', 'amik@umg.ac.id', NULL, '$2y$10$fMBa9/r/skb2UQeHQ9Rha.esc62FnMUfYW5OuYzsTVHRSQ.N.21Jm', NULL, '2020-12-19 07:07:29', '2020-12-19 07:07:29'),
(5, 'Ahmad Agus Trianto', 'agusAgus@gmail.com', NULL, '$2y$10$f2DxbsKMwpo0zirNldL4MOFT45LG4A9l3JStPlAOSAkANq.bN7eLy', NULL, '2020-12-29 02:15:50', '2020-12-29 02:15:50'),
(6, 'Ismail bin Mail', 'mail@gmail.com', NULL, '$2y$10$4qqrhJ5JltKjxGocJ87ZyuQS0EaK8Mz1QQdeEtU94W1iqXorN7RAa', NULL, '2021-01-03 07:41:03', '2021-01-03 07:41:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camaba`
--
ALTER TABLE `camaba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_akhir`
--
ALTER TABLE `hasil_akhir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_perhitungan`
--
ALTER TABLE `hasil_perhitungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `nilai_hitung_2`
--
ALTER TABLE `nilai_hitung_2`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camaba`
--
ALTER TABLE `camaba`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_akhir`
--
ALTER TABLE `hasil_akhir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_perhitungan`
--
ALTER TABLE `hasil_perhitungan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `nilai_hitung_2`
--
ALTER TABLE `nilai_hitung_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
