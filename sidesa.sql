-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 04:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `blmnikah`
--

CREATE TABLE `blmnikah` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Disetujui',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blmnikah`
--

INSERT INTO `blmnikah` (`id`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `pekerjaan`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
(4, '32132006060003', 'Agus Supardi', 'Karawang', '21 Juli 1997', 'Laki-laki', 'Islam', 'Wirausaha', 'Desa Karang Anyar', 'Disetujui', '2022-06-18 05:34:36', '2022-06-27 06:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `domisili`
--

CREATE TABLE `domisili` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Verifikasi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domisili`
--

INSERT INTO `domisili` (`id`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
(20, '32040505696985', 'Apendi', 'Laki laki', 'Cifeundeuy', '01121994', 'Indonesia', 'Islam', 'Dagang Nasi Goreng Fork', 'Cifeundeuy', 'Disetujui', '2022-06-27 05:49:05', '2022-06-29 06:55:43'),
(21, '32144552134512', 'Rahmat', 'laki-laki', 'purwakarta', '09', 'Indonesia', 'islam', 'karyawan', 'purwakarta', 'Selesai', '2022-06-29 07:03:46', '2022-06-29 07:05:26');

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
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id` int(11) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `umur_ibu` varchar(5) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_suami` varchar(100) NOT NULL,
  `umur_suami` varchar(5) NOT NULL,
  `pekerjaan_suami` varchar(100) NOT NULL,
  `alamat_suami` varchar(255) NOT NULL,
  `tgl_lahir_anak` varchar(50) NOT NULL,
  `jam_lahir` varchar(20) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `jk_anak` varchar(20) NOT NULL,
  `bb_anak` varchar(20) NOT NULL,
  `pb_anak` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `anak_ke` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Disetujui',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`id`, `nama_ibu`, `umur_ibu`, `pekerjaan_ibu`, `nama_suami`, `umur_suami`, `pekerjaan_suami`, `alamat_suami`, `tgl_lahir_anak`, `jam_lahir`, `nama_anak`, `jk_anak`, `bb_anak`, `pb_anak`, `tempat_lahir`, `anak_ke`, `agama`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Yanti', '25', 'Wiraswasta', 'Sandra', '25', 'Wiraswasra', 'Desa Karang Anyar', '23012022', '18.05', 'Muhammad Yusuf', 'laki-laki', '2kg', '45cm', 'Karawang', '1', 'Islam', 'Disetujui', '2022-06-18 05:33:27', '2022-06-26 21:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `id` int(11) NOT NULL,
  `nama_pelapor` varchar(255) NOT NULL,
  `umur_pelapor` varchar(20) NOT NULL,
  `pekerjaan_pelapor` varchar(255) NOT NULL,
  `alamat_pelapor` varchar(255) NOT NULL,
  `agama_pelapor` varchar(20) NOT NULL,
  `nik_pelapor` varchar(20) NOT NULL,
  `nama_jenazah` varchar(255) NOT NULL,
  `jk_jenazah` varchar(20) NOT NULL,
  `tempat_lahir_jenazah` varchar(100) NOT NULL,
  `tanggal_lahir_jenazah` varchar(50) NOT NULL,
  `agama_jenazah` varchar(20) NOT NULL,
  `ayah_jenazah` varchar(255) NOT NULL,
  `ibu_jenazah` varchar(255) NOT NULL,
  `alamat_jenazah` varchar(255) NOT NULL,
  `hari_meninggal` varchar(20) NOT NULL,
  `tanggal_meninggal` varchar(50) NOT NULL,
  `tempat_meninggal` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Disetujui',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`id`, `nama_pelapor`, `umur_pelapor`, `pekerjaan_pelapor`, `alamat_pelapor`, `agama_pelapor`, `nik_pelapor`, `nama_jenazah`, `jk_jenazah`, `tempat_lahir_jenazah`, `tanggal_lahir_jenazah`, `agama_jenazah`, `ayah_jenazah`, `ibu_jenazah`, `alamat_jenazah`, `hari_meninggal`, `tanggal_meninggal`, `tempat_meninggal`, `status`, `created_at`, `updated_at`) VALUES
(5, 'asep', '40', 'wiraswasta', 'ciseureuh', 'islam', '321465986437', 'yudi', 'laki-laki', 'purwakarta', '18 juni 1980', 'islam', 'rudi', 'neneng', 'purwakarta', 'jumat', '12 juni 2022', 'purwakarta', 'Ditolak', '2022-06-18 05:08:01', '2022-06-26 10:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `keramaian`
--

CREATE TABLE `keramaian` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_keramaian` varchar(50) NOT NULL,
  `tempat_keramaian` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Disetujui',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keramaian`
--

INSERT INTO `keramaian` (`id`, `nik`, `nama_lengkap`, `umur`, `pekerjaan`, `alamat`, `tgl_keramaian`, `tempat_keramaian`, `kegiatan`, `status`, `created_at`, `updated_at`) VALUES
(3, '3213201405960001', 'Habibie', '29', 'Wiraswasta', 'Desa Karang Anyar', '12072022', 'Dusun Cariu', 'Resepsi Nikah', 'Ditolak', '2022-06-18 05:36:54', '2022-06-27 05:29:28');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_04_06_074807_create_warga_table', 1);

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
-- Table structure for table `sku`
--

CREATE TABLE `sku` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Disetujui',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sku`
--

INSERT INTO `sku` (`id`, `nik`, `nama`, `umur`, `alamat`, `no_hp`, `nama_usaha`, `status`, `created_at`, `updated_at`) VALUES
(4, '3213202306980001', 'Asep', '23', 'Desa Karang Anyar', '083863587763', 'Ayam Geprek Asep', 'Belum Disetujui', '2022-06-18 05:30:02', '2022-06-18 05:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fcm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `nik`, `email`, `email_verified_at`, `password`, `fcm`, `remember_token`, `created_at`, `updated_at`) VALUES
(31, 'Administrator', 'Ririn', '32140101213244', 'ririn@gmail.com', NULL, '$2y$10$QVwLPVKU1f7cPth6cIMo7OMBnlSOLgfCXNPR5HenITtxQTVBiPgHG', NULL, 'XgBnNqYk9ywjxKOW6klIPkCfTnWC0EYY8olcB5uTHMsgcjAgohls8pBvhp9C', '2022-05-25 06:28:03', '2022-05-25 06:28:03'),
(32, 'warga', 'mona', '1234567891123456', 'mona@gmail.com', NULL, '$2y$10$54iLL/HLGRn/lJptuyTO6es8FoR1UGZYjoeeKG/LJV6WnNUoxx4sy', NULL, 'lnJZ3Ba0MxyuDOcTXlyZ1xFwhB3SynA1swuRK0sanW9C5NBr3Q', '2022-05-25 07:53:47', '2022-05-25 07:53:47'),
(33, 'warga', 'Neni Anggraeni', '3214126707770001', 'neni.anggraeni@gmail.com', NULL, '$2y$10$LpnaBdvVvXp1Bpa89aksXuovS1VV0JqJaWQ53nhRblnwwx7q33K4.', NULL, 'sYyUxT4UcbZNICMF8jPmrmxPi40y6REtYJkZKVMXlFIj6AUObqwVZu5WT2SV', '2022-05-25 07:57:21', '2022-05-25 07:57:21'),
(45, 'lurah', 'sinta', '3215543215675432', 'sinta@gmail.com', NULL, '$2y$10$jkCie8rMUXGavG42vemuAOeTDetNclpUYaHfQSwOYOqCFmk3tx1Ia', NULL, 'npmBiVI1YNnuUIfDvPyDggenVi6i38C0cj3HEdJcnXbvKovYth4Cmo4CFVo7', '2022-05-27 05:57:01', '2022-05-27 05:57:01'),
(46, 'warga', 'rahma', '32111201123415', 'rahma@gmail.com', NULL, '$2y$10$gYCeAta/0H4X4kyD2HCU0.qaRPpdBSdfHAE6bvxV33iyxrrQZsPT6', 'c8qdtUubQ4Ok3bSzNbnOKu:APA91bG__x8frP6jh3VeE-Obnrq_ObCdvvJUORsc88UetX2ysHjnEKJeM075VBzaWNiWevSPciaLp5dpQwetZnimKSJIqV7As8pcFehkCLS0eWDlaxwnoBAN7VI3DtWEjesD8tZ98qmF', 'aUZqdnDpVgzuX8kcL5AUNxc7x56fbplH9TureXGTCFrWVHbJEN', '2022-06-23 10:33:52', '2022-06-29 07:02:39'),
(47, 'warga', 'agus', '32144213356734', 'agus@gmail.com', NULL, '$2y$10$1ze5C3gnJvskYivShODw7OWf1bb5.pxIexOaRFab2uDukhlv1Ebyi', NULL, 'yueTXi6fUssvhro2Jk6gM1QC2BkT7cMt5jLK27JRMdQwoyWOx6', '2022-06-23 10:38:47', '2022-06-23 10:38:47'),
(48, 'warga', 'cintia', '32111232213423', 'cintia@gmain.com', NULL, '$2y$10$UpZH/8apCtj4U9FM2iUw5u0WdPfVWMX76Tr4SOQjs3qJZzCAlVhOC', NULL, 'UDRJvvdVymSDtvtQHft8e8x6PF1nePtfrkaRmnA3TeJobIHGg5', '2022-06-24 08:24:02', '2022-06-24 08:24:02'),
(49, 'warga', 'andri', '32145223123433', 'andri@gmail.com', NULL, '$2y$10$Z5JBe0dUju60cEJIfkHsceiGdYfxH/yxdNrtfAVh.fITi3UIBznSC', NULL, 'K1j69rO2ew0Yu5nt2tAVZRKoAi00NBtQvhZtHqUas1uvbdINO2ybhLoxVyUd', '2022-06-25 00:33:55', '2022-06-25 00:33:55'),
(51, 'Kepala Desa', 'Amor', '32167875625234', 'amor@gmail.com', NULL, '$2y$10$AXZtNFnS5CGnFDTSGJkEnu/foQcfKwI33DQBbQxTThh5P8b4cJWKa', NULL, 'wzmGn3sT7Wf5ff4t0u39YMY9Px66xRq75ePJmAAkYrOx9ThPcAQllDk62MDi', '2022-06-26 06:49:12', '2022-06-26 06:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` int(11) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `email`, `jenis_kelamin`, `usia`, `alamat`, `avatar`, `created_at`, `updated_at`) VALUES
(25, '32140101213244', 'Ririn', 'Purwakarta', '2000-01-01', 'ririn@gmail.com', 'Perempuan', 22, 'Purwakarta', NULL, '2022-05-25 06:28:03', '2022-05-25 06:28:03'),
(26, '1234567891123456', 'mona', 'purwakarta', '2000-06-09', 'mona@gmail.com', 'Perempuan', 22, 'purwakarta', NULL, '2022-05-25 07:53:47', '2022-05-25 07:53:47'),
(31, '32111201123415', 'rahma', 'karawang', '1998-06-09', 'rahma@gmail.com', 'Perempuan', 24, 'karawang', NULL, '2022-06-23 10:33:52', '2022-06-23 10:33:52'),
(33, '32111232213423', 'cintia', 'tasik', '1998-06-10', 'cintia@gmain.com', 'Laki-laki', 24, 'karawang', NULL, '2022-06-24 08:24:02', '2022-06-24 08:24:02'),
(34, '32145223123433', 'andri', 'purwakarta', '1998-06-08', 'andri@gmail.com', 'Laki-laki', 24, 'purwakarta', NULL, '2022-06-25 00:33:55', '2022-06-25 00:33:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blmnikah`
--
ALTER TABLE `blmnikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keramaian`
--
ALTER TABLE `keramaian`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sku`
--
ALTER TABLE `sku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `warga_nik_unique` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blmnikah`
--
ALTER TABLE `blmnikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `domisili`
--
ALTER TABLE `domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `keramaian`
--
ALTER TABLE `keramaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sku`
--
ALTER TABLE `sku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
