-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 02:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'nurul febi anisa', 'nurulfebyanisa26@gmail.com', 123456, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `akreditasi`
--

CREATE TABLE `akreditasi` (
  `id_akreditas` int(11) NOT NULL,
  `akreditas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akreditasi`
--

INSERT INTO `akreditasi` (`id_akreditas`, `akreditas`) VALUES
(1, 'Belum terakreditasi'),
(2, 'C (Akreditasi Cukup Baik)'),
(3, 'B (Akreditasi Baik)'),
(4, 'A (Akreditasi Sangat Baik)');

-- --------------------------------------------------------

--
-- Stand-in structure for view `alternatif`
-- (See below for the actual view)
--
CREATE TABLE `alternatif` (
`id_prodi` int(11)
,`nama_prodi` varchar(50)
,`prestasi_prodi` double
,`Biaya` double
,`mutu_tenaga_pendidik` double
,`presentase_lulusan` double
,`Akreditasi` int(11)
,`Fasilitas` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `prestasi_prodi` double NOT NULL,
  `biaya_kuliah` double NOT NULL,
  `mutu_tenaga_pendidik` double NOT NULL,
  `akreditasi_prodi` double NOT NULL,
  `fasilitas` double NOT NULL,
  `presentase_lulusan` double NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatifs`
--

INSERT INTO `alternatifs` (`id`, `nama_prodi`, `prestasi_prodi`, `biaya_kuliah`, `mutu_tenaga_pendidik`, `akreditasi_prodi`, `fasilitas`, `presentase_lulusan`, `created_at`, `updated_at`) VALUES
(1, 'DIII Akuntansi', 85, 700, 80, 85, 90, 95, NULL, NULL),
(2, 'DIII Desain Komunikasi Visual', 80, 600, 85, 75, 70, 85, NULL, NULL),
(3, 'DIII Farmasi', 90, 2000, 85, 70, 80, 90, NULL, NULL),
(4, 'DIII Kebidanan', 80, 800, 90, 80, 75, 80, NULL, NULL),
(5, 'DIII Keperawatan', 80, 1000, 80, 75, 80, 85, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `camabas`
--

CREATE TABLE `camabas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_prodi`
--

CREATE TABLE `data_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `prestasi_prodi` double NOT NULL,
  `biaya_kuliah` double NOT NULL,
  `mutu_tenaga_pendidik` double NOT NULL,
  `presentase_lulusan` double NOT NULL,
  `akreditas_id_akreditas` int(11) NOT NULL,
  `fasilitas_id_fasilitas` int(11) NOT NULL,
  `update_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_prodi`
--

INSERT INTO `data_prodi` (`id_prodi`, `nama_prodi`, `prestasi_prodi`, `biaya_kuliah`, `mutu_tenaga_pendidik`, `presentase_lulusan`, `akreditas_id_akreditas`, `fasilitas_id_fasilitas`, `update_at`, `created_at`) VALUES
(1, 'DIII Akuntansi', 20, 700, 80, 95, 3, 4, '2023-06-25 08:19:28', '2023-06-25 08:19:28'),
(2, 'DIII Desain Komunikasi Visual', 15, 600, 85, 95, 4, 3, '2023-06-25 08:21:31', '2023-06-25 08:21:31'),
(3, 'DIII Farmasi', 30, 900, 85, 90, 4, 4, '2023-06-25 08:26:11', '2023-06-25 08:26:11'),
(4, 'DIII Kebidanan', 25, 800, 90, 80, 3, 4, '2023-06-25 08:26:11', '2023-06-25 08:26:11'),
(5, 'DIII Keperawatan', 35, 1000, 80, 85, 3, 4, '2023-06-25 08:26:11', '2023-06-25 08:26:11');

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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `fasilitas`) VALUES
(1, 'Fasilitas Kurang Bagus'),
(2, 'Fasilitas Cukup Bagus'),
(3, 'Fasilitas Bagus'),
(4, 'Fasilitas Sangat Bagus');

-- --------------------------------------------------------

--
-- Stand-in structure for view `hasil`
-- (See below for the actual view)
--
CREATE TABLE `hasil` (
`id_prodi` int(11)
,`nama_prodi` varchar(50)
,`hasil` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `kategori`
-- (See below for the actual view)
--
CREATE TABLE `kategori` (
`id` bigint(20) unsigned
,`kriteria` varchar(255)
,`bobot` double
,`label` enum('cost','benefit')
);

-- --------------------------------------------------------

--
-- Table structure for table `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `bobot` double NOT NULL,
  `label` enum('cost','benefit') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriterias`
--

INSERT INTO `kriterias` (`id`, `kriteria`, `bobot`, `label`, `created_at`, `updated_at`) VALUES
(1, 'Prestasi Prodi', 0.25, 'benefit', NULL, '2023-07-08 10:56:29'),
(2, 'Biaya Kuliah', 0.2, 'cost', NULL, '2023-07-05 06:49:18'),
(3, 'Mutu Tenaga Pendidik', 0.2, 'benefit', NULL, NULL),
(4, 'Presentase Lulusan', 0.15, 'benefit', NULL, NULL),
(5, 'Akreditasi Prodi', 0.1, 'benefit', NULL, NULL),
(6, 'Fasilitas', 0.1, 'benefit', NULL, '2023-07-08 10:59:08');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_18_034429_create_camabas_table', 1),
(6, '2023_06_18_161319_create_kriterias_table', 1),
(7, '2023_06_19_151630_create_alternatifs_table', 1),
(8, '2023_06_22_065547_create_admins_table', 2),
(9, '2023_06_23_133652_create_namaprodis_table', 3),
(10, '2023_06_23_135907_create_prodis_table', 4),
(11, '2023_06_26_023612_create_tb_admin_table', 5),
(12, '2023_06_26_030517_create_tb_admin_table', 6),
(13, '2023_07_08_104955_create_tb_user_table', 7),
(14, '2023_07_08_114757_create_tb_admin_table', 8);

-- --------------------------------------------------------

--
-- Stand-in structure for view `normalisasi`
-- (See below for the actual view)
--
CREATE TABLE `normalisasi` (
`id_prodi` int(11)
,`nama_prodi` varchar(50)
,`prestasi_prodi` double
,`biaya` double
,`mutu_tenaga_pendidik` double
,`presentase_lulusan` double
,`akreditasi` decimal(14,4)
,`fasilitas` decimal(14,4)
);

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
-- Stand-in structure for view `pengkali`
-- (See below for the actual view)
--
CREATE TABLE `pengkali` (
`id_prodi` int(11)
,`nama_prodi` varchar(50)
,`prestasi_prodi` double
,`biaya` double
,`mutu_tenaga_pendidik` double
,`presentase_lulusan` double
,`akreditasi` double
,`fasilitas` double
);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodis`
--

CREATE TABLE `prodis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `kode_prodi` varchar(10) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodis`
--

INSERT INTO `prodis` (`id`, `nama_prodi`, `kode_prodi`, `nama_kampus`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'DIII Akuntansi', '001', 'Politeknik Harapan Bersama', 'Jl. Dewi Sartika No.71, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52117', NULL, NULL),
(2, 'DIII Desain Komunikasi Visual\r\n', '002', 'Politeknik Harapan Bersama', 'Jl. Dewi Sartika No.71, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52117', NULL, NULL),
(3, 'DIII Farmasi\r\n', '003', 'Politeknik Harapan Bersama Tegal ', 'Jl. Dewi Sartika No.71, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52117', NULL, NULL),
(4, 'DIII Kebidanan', '004', 'Politeknik Harapan Bersama Tegal ', 'Jl. Dewi Sartika No.71, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52117', NULL, NULL),
(5, 'DIII Keperawatan', '005', 'Politeknik Harapan Bersama Tegal', 'Jl. Dewi Sartika No.71, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52117', NULL, NULL),
(6, 'DIII Perhotelan', '006', 'Politeknik Harapan Bersama Tegal', 'Jl. Dewi Sartika No.71, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52117', NULL, NULL),
(7, '\r\nDIII Teknik Elektronika', '007', 'Politeknik Harapan Bersama Tegal', 'Jl. Dewi Sartika No.71, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52117\r\n', NULL, NULL),
(8, 'DIII Teknik Komputer\r\n', '008', 'Politeknik Harapan Bersama Tegal', 'Jl. Dewi Sartika No.71, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52117\r\n', NULL, NULL),
(9, 'DIII Teknik Mesin\r\n', '009', 'Politeknik Harapan Bersama Tegal', 'Jl. Dewi Sartika No.71, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52117\r\n', NULL, NULL),
(10, 'Sarjana Terapan Akuntansi Sektor Publik', '010', 'Politeknik Harapan Bersama Tegal', 'Jl. Dewi Sartika No.71, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52117\r\n', NULL, NULL),
(11, 'Sarjana Terapan Teknik Informatika', '011', 'Politeknik Harapan Bersama Tegal', 'Jl. Dewi Sartika No.71, Pesurungan Kidul, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52117\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'anisa', 'wvt_zxy', '123456', NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nurul Febi Anisa', '', NULL, '$2y$10$6BXZaDzD4wF.S782krR1C.Jf2QnaUHgBBbU7Khk9Hn6IHwTll4.l2', NULL, '2023-07-08 04:32:04', '2023-07-08 04:32:04');

-- --------------------------------------------------------

--
-- Structure for view `alternatif`
--
DROP TABLE IF EXISTS `alternatif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alternatif`  AS SELECT `alt`.`id_prodi` AS `id_prodi`, `alt`.`nama_prodi` AS `nama_prodi`, `alt`.`prestasi_prodi` AS `prestasi_prodi`, `alt`.`biaya_kuliah` AS `Biaya`, `alt`.`mutu_tenaga_pendidik` AS `mutu_tenaga_pendidik`, `alt`.`presentase_lulusan` AS `presentase_lulusan`, `alt`.`akreditas_id_akreditas` AS `Akreditasi`, `alt`.`fasilitas_id_fasilitas` AS `Fasilitas` FROM `data_prodi` AS `alt` GROUP BY `alt`.`id_prodi``id_prodi`  ;

-- --------------------------------------------------------

--
-- Structure for view `hasil`
--
DROP TABLE IF EXISTS `hasil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hasil`  AS SELECT `kl`.`id_prodi` AS `id_prodi`, `kl`.`nama_prodi` AS `nama_prodi`, `kl`.`prestasi_prodi`+ `kl`.`biaya` + `kl`.`mutu_tenaga_pendidik` + `kl`.`presentase_lulusan` + `kl`.`akreditasi` + `kl`.`fasilitas` AS `hasil` FROM `pengkali` AS `kl``kl`  ;

-- --------------------------------------------------------

--
-- Structure for view `kategori`
--
DROP TABLE IF EXISTS `kategori`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kategori`  AS SELECT `ctg`.`id` AS `id`, `ctg`.`kriteria` AS `kriteria`, `ctg`.`bobot` AS `bobot`, `ctg`.`label` AS `label` FROM `kriterias` AS `ctg` GROUP BY `ctg`.`id``id`  ;

-- --------------------------------------------------------

--
-- Structure for view `normalisasi`
--
DROP TABLE IF EXISTS `normalisasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `normalisasi`  AS SELECT `alt`.`id_prodi` AS `id_prodi`, `alt`.`nama_prodi` AS `nama_prodi`, if((select `kri`.`label` from `kategori` `kri` where `kri`.`id` = 1) = 'benefit',`alt`.`prestasi_prodi` / (select max(`alt2`.`prestasi_prodi`) from `alternatif` `alt2`),(select min(`alt2`.`prestasi_prodi`) from `alternatif` `alt2`) / `alt`.`prestasi_prodi`) AS `prestasi_prodi`, if((select `kri`.`label` from `kategori` `kri` where `kri`.`id` = 2) = 'cost',`alt`.`Biaya` / (select max(`alt2`.`Biaya`) from `alternatif` `alt2`),(select min(`alt2`.`Biaya`) from `alternatif` `alt2`) / `alt`.`Biaya`) AS `biaya`, if((select `kri`.`label` from `kategori` `kri` where `kri`.`id` = 3) = 'benefit',`alt`.`mutu_tenaga_pendidik` / (select max(`alt2`.`mutu_tenaga_pendidik`) from `alternatif` `alt2`),(select min(`alt2`.`mutu_tenaga_pendidik`) from `alternatif` `alt2`) / `alt`.`mutu_tenaga_pendidik`) AS `mutu_tenaga_pendidik`, if((select `kri`.`label` from `kategori` `kri` where `kri`.`id` = 4) = 'benefit',`alt`.`presentase_lulusan` / (select max(`alt2`.`presentase_lulusan`) from `alternatif` `alt2`),(select min(`alt2`.`presentase_lulusan`) from `alternatif` `alt2`) / `alt`.`presentase_lulusan`) AS `presentase_lulusan`, if((select `kri`.`label` from `kategori` `kri` where `kri`.`id` = 5) = 'benefit',`alt`.`Akreditasi` / (select max(`alt2`.`Akreditasi`) from `alternatif` `alt2`),(select min(`alt2`.`Akreditasi`) from `alternatif` `alt2`) / `alt`.`Akreditasi`) AS `akreditasi`, if((select `kri`.`label` from `kategori` `kri` where `kri`.`id` = 5) = 'benefit',`alt`.`Fasilitas` / (select max(`alt2`.`Fasilitas`) from `alternatif` `alt2`),(select min(`alt2`.`Fasilitas`) from `alternatif` `alt2`) / `alt`.`Fasilitas`) AS `fasilitas` FROM `alternatif` AS `alt` GROUP BY `alt`.`id_prodi``id_prodi`  ;

-- --------------------------------------------------------

--
-- Structure for view `pengkali`
--
DROP TABLE IF EXISTS `pengkali`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pengkali`  AS SELECT `nor`.`id_prodi` AS `id_prodi`, `nor`.`nama_prodi` AS `nama_prodi`, `nor`.`prestasi_prodi`* (select `kr`.`bobot` from `kategori` `kr` where `kr`.`id` = 1) AS `prestasi_prodi`, `nor`.`biaya`* (select `kr`.`bobot` from `kategori` `kr` where `kr`.`id` = 2) AS `biaya`, `nor`.`mutu_tenaga_pendidik`* (select `kr`.`bobot` from `kategori` `kr` where `kr`.`id` = 4) AS `mutu_tenaga_pendidik`, `nor`.`presentase_lulusan`* (select `kr`.`bobot` from `kategori` `kr` where `kr`.`id` = 5) AS `presentase_lulusan`, `nor`.`akreditasi`* (select `kr`.`bobot` from `kategori` `kr` where `kr`.`id` = 5) AS `akreditasi`, `nor`.`fasilitas`* (select `kr`.`bobot` from `kategori` `kr` where `kr`.`id` = 3) AS `fasilitas` FROM `normalisasi` AS `nor``nor`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akreditasi`
--
ALTER TABLE `akreditasi`
  ADD PRIMARY KEY (`id_akreditas`);

--
-- Indexes for table `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camabas`
--
ALTER TABLE `camabas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `camabas_email_unique` (`email`);

--
-- Indexes for table `data_prodi`
--
ALTER TABLE `data_prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `data_prodi_akreditasi_fk` (`akreditas_id_akreditas`),
  ADD KEY `data_prodi_fasilitas_fk` (`fasilitas_id_fasilitas`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_admin_username_unique` (`username`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `tb_user_username_unique` (`username`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `camabas`
--
ALTER TABLE `camabas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodis`
--
ALTER TABLE `prodis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_prodi`
--
ALTER TABLE `data_prodi`
  ADD CONSTRAINT `data_prodi_akreditasi_fk` FOREIGN KEY (`akreditas_id_akreditas`) REFERENCES `akreditasi` (`id_akreditas`),
  ADD CONSTRAINT `data_prodi_fasilitas_fk` FOREIGN KEY (`fasilitas_id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
