-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2025 at 12:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pondasi_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Desain Rumah', '2025-09-20 03:22:17', '2025-09-20 03:22:17'),
(2, 'Desain Interior', '2025-09-20 03:22:32', '2025-09-20 03:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `idlayanan` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` text DEFAULT NULL,
  `foto` text NOT NULL,
  `fotodenah` text DEFAULT NULL,
  `luas` varchar(255) DEFAULT NULL,
  `jumlahkamar` int(11) DEFAULT NULL,
  `jumlahkamarmandi` int(11) DEFAULT NULL,
  `jumlahlantai` int(11) DEFAULT NULL,
  `gayadesain` varchar(255) DEFAULT NULL,
  `jenisruangan` varchar(255) DEFAULT NULL,
  `tipe` varchar(255) DEFAULT NULL,
  `harga` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`idlayanan`, `idkategori`, `judul`, `deskripsi`, `lokasi`, `foto`, `fotodenah`, `luas`, `jumlahkamar`, `jumlahkamarmandi`, `jumlahlantai`, `gayadesain`, `jenisruangan`, `tipe`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Green Valey', '<p>Desain rumah Green Valley menonjolkan nuansa natural modern dengan garis-garis arsitektur yang bersih dan penggunaan material ramah lingkungan seperti kayu ekspos dan elemen batu alam. Tata ruang yang terbuka dipadukan dengan bukaan besar untuk mendukung pencahayaan alami dan sirkulasi udara yang optimal. Cocok untuk lahan 7 x 10 meter, rumah ini menghadirkan keseimbangan antara kenyamanan urban dan ketenangan alami &mdash; ideal bagi keluarga yang mendambakan hunian sehat dan harmonis.</p>', 'Kabupaten Bogor, Desa Sentul Eco', 'XZ3dakJWgGlakPaduJirNZdW2vWHbUt1G0eWAZco.png', 'LccWmxV0i5O8iFQoQpAYA5IToXqlkhSd6PKU94De.png', '116', 4, 4, 2, 'Modern', NULL, NULL, '1400000000', '2025-09-20 04:06:44', '2025-09-22 13:23:18'),
(2, 2, 'Scandinavian Light', '<p>Scandinavian Light</p>', NULL, 'zwcTwfZoDkde8YKvNW69hVH5zJlx3BrICTDTyOvY.png', NULL, NULL, NULL, NULL, NULL, 'Premium Desain', 'Kitchen Set', 'Tipe 45', '7500000', '2025-09-20 04:28:11', '2025-09-22 13:50:33'),
(11, 1, 'Naya Compact', '<p>Avana Grande merupakan hunian dua lantai bergaya klasik tropis yang memadukan kemegahan arsitektur simetris dengan nuansa alami khas Indonesia. Fasad rumah dihiasi pilar elegan, balkon depan yang luas, dan jendela besar yang menyambut cahaya alami.  Dirancang di atas lahan 11 x 17 meter, rumah ini cocok untuk keluarga besar yang mendambakan ruang tinggal luas, sirkulasi udara maksimal, serta kesan megah yang tetap nyaman untuk ditinggali.</p>', 'Kabupaten Bogor, Desa Sentul Eco', 'Rle0TMVvW5A9xk64m2Y5IoIv6jPMLPrjS8JlZztR.png', 'fehozVNtjUgPg9vba5Dp6XbqZB9orBKxbSeXIQCO.png', '116', 4, 2, 3, 'Klasik', NULL, NULL, '1300000000', '2025-09-20 16:56:49', '2025-09-22 13:21:30'),
(12, 1, 'Avana Grande', '<p>Avana Grande merupakan hunian dua lantai bergaya klasik tropis yang memadukan kemegahan arsitektur simetris dengan nuansa alami khas Indonesia. Fasad rumah dihiasi pilar elegan, balkon depan yang luas, dan jendela besar yang menyambut cahaya alami.  Dirancang di atas lahan 11 x 17 meter, rumah ini cocok untuk keluarga besar yang mendambakan ruang tinggal luas, sirkulasi udara maksimal, serta kesan megah yang tetap nyaman untuk ditinggali.</p>', 'Kabupaten Bogor, Desa Sentul Eco', 'nckTove3Zj9oodIldyXwmeGA9am9QfqVccWwVkIq.png', 'GgwG1a5yos2vBD3tNU7SMN8ASy209nfkqdD0HZDS.png', '116', 3, 3, 2, 'Klasik', NULL, NULL, '1750000000', '2025-09-22 13:25:45', '2025-09-22 13:25:45'),
(13, 2, 'Nordic Harmony', '<p>Nordic Harmony</p>', NULL, 'tf7ZyKRz5ezavmI1Gy5csgkXYNSseTD7wWfhBfcA.png', NULL, NULL, NULL, NULL, NULL, 'Deluxe Desain', 'Kitchen Set', 'Tipe 36', '7800000', '2025-09-22 13:29:19', '2025-09-22 13:50:24'),
(14, 2, 'Cozy Cream', '<p>Cozy Cream</p>', NULL, 'hUOzQg47eh250v3hurGS3wqh1jTTfRRzaL6TI7f0.png', NULL, NULL, NULL, NULL, NULL, 'Deluxe Desain', 'Kitchen Set', 'Tipe 36', '7450000', '2025-09-22 13:30:08', '2025-09-22 13:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `idportofolio` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`idportofolio`, `judul`, `tanggal`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Portofolio 1', '2025-09-20', '<p>ini deskripsi portofolio 1</p>', 'jp365lTxjPPWR57wkrZozs7A49ezhKlMVNcdKPrv.png', '2025-09-20 03:16:45', '2025-09-20 03:16:45'),
(3, 'Portofolio 2', '2025-09-20', '<p>ini portofolio 2</p>', 'vL4nAfpb5xFz9owTUFAAfmd45FZy9ca4Ma2Mj8To.png', '2025-09-20 16:54:09', '2025-09-20 16:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('COi1koEhGlPMaIPOuBP2YGhVE6OlzmdAxlqqgYdO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEFmVGpISGtJNXlMNGo2eEx4Znh6bmxZcEFsSjNkWkRXb05Fc2ptZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758535622),
('TdpDQdRWMP7PKgTB12PWIhrZa6PCxPT1Zgc0O61u', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQTExZnoyTTQ5VFc4TUtmOU56NjJ2MzZaUHpKTDV6RjVJZFdiZWR5NiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1758523968);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', NULL, '$2y$12$lwKbgqiftXxg4I9qcB7wTeDRRbJkc1NwENMNo3j9dhHklJOBYE6YW', NULL, 'Admin', NULL, '2025-09-19 19:46:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`idlayanan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`idportofolio`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `idlayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `idportofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
