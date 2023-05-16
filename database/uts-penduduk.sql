-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2023 pada 01.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts-penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `provinsi_id` bigint(20) UNSIGNED NOT NULL,
  `_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotas`
--

CREATE TABLE `kotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `_token` varchar(255) DEFAULT NULL,
  `provinsi_id` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kotas`
--

INSERT INTO `kotas` (`id`, `created_at`, `updated_at`, `_token`, `provinsi_id`, `name`) VALUES
(1, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '1', 'Kota Banda Aceh'),
(2, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '1', 'Kota Sabang'),
(3, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '1', 'Kota Langsa'),
(4, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '1', 'Kota Lhokseumawe'),
(5, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '1', 'Kota Subulussalam'),
(6, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '2', 'Kota Medan'),
(7, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '2', 'Kota Pematang Siantar'),
(8, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '2', 'Kota Sibolga'),
(9, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '2', 'Kota Tanjung Balai'),
(10, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '2', 'Kota Binjai'),
(11, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '3', 'Kota Padang'),
(12, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '3', 'Kota Solok'),
(13, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '3', 'Kota Bukittinggi'),
(14, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '3', 'Kota Payakumbuh'),
(15, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '3', 'Kota Pariaman'),
(16, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '4', 'Kota Pekanbaru'),
(17, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '4', 'Kota Dumai'),
(18, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '5', 'Kota Jambi'),
(19, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '5', 'Kota Sungai Penuh'),
(20, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '6', 'Kota Palembang'),
(21, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '6', 'Kota Prabumulih'),
(22, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '6', 'Kota Pagar Alam'),
(23, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '6', 'Kota Lubuklinggau'),
(24, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '7', 'Kota Bengkulu'),
(25, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '8', 'Kota Bandar Lampung'),
(26, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '8', 'Kota Metro'),
(27, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '9', 'Kota Pangkal Pinang'),
(28, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '10', 'Kota Batam'),
(29, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '10', 'Kota Tanjungpinang'),
(30, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '11', 'Kota Jakarta Pusat'),
(31, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '11', 'Kota Jakarta Utara'),
(32, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '11', 'Kota Jakarta Barat'),
(33, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '11', 'Kota Jakarta Selatan'),
(34, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '11', 'Kota Jakarta Timur'),
(35, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '12', 'Kota Bogor'),
(36, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '12', 'Kota Sukabumi'),
(37, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '12', 'Kota Bandung'),
(38, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '12', 'Kota Cirebon'),
(39, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '12', 'Kota Bekasi'),
(40, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '12', 'Kota Depok'),
(41, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '12', 'Kota Cimahi'),
(42, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '12', 'K\r\nota Tasikmalaya'),
(43, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '12', 'Kota Banjar'),
(44, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '13', 'Kota Tangerang'),
(45, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '13', 'Kota Cilegon'),
(46, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '13', 'Kota Serang'),
(47, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '13', 'Kota Tangerang Selatan'),
(48, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '14', 'Kota Semarang'),
(49, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '14', 'Kota Surakarta'),
(50, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '14', 'Kota Salatiga'),
(51, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '14', 'Kota Semarang'),
(52, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '14', 'Kota Pekalongan'),
(53, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '14', 'Kota Tegal'),
(54, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '15', 'Kota Yogyakarta'),
(55, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '16', 'Kota Surabaya'),
(56, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '16', 'Kota Malang'),
(57, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '16', 'Kota Batu'),
(58, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '17', 'Kota Denpasar'),
(59, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '18', 'Kota Mataram'),
(60, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '18', 'Kota Bima'),
(61, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '19', 'Kota Kupang'),
(62, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '19', 'Kota Atambua'),
(63, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '20', 'Kota Pontianak'),
(64, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '20', 'Kota Singkawang'),
(65, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '21', 'Kota Palangka Raya'),
(66, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '21', 'Kota Sampit'),
(67, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '22', 'Kota Banjarmasin'),
(68, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '22', 'Kota Banjarbaru'),
(69, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '23', 'Kota Balikpapan'),
(70, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '23', 'Kota Samarinda'),
(71, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '23', 'Kota Bontang'),
(72, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '23', 'Kota Tarakan'),
(73, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '24', 'Kota Tanjung Selor'),
(74, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '24', 'Kota Bulungan'),
(75, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '24', 'Kota Malinau'),
(76, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '24', 'Kota Nunukan'),
(77, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '24', 'Kota Tana Tidung'),
(78, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '25', 'Kota Manado'),
(79, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '25', 'Kota Bitung'),
(80, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '25', 'Kota Tomohon'),
(81, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '25', 'Kota Kotamobagu'),
(82, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '26', 'Kota Palu'),
(83, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '26', 'Kota Parigi Moutong'),
(84, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '27', 'Kota Makassar'),
(85, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '27', 'Kota Parepare'),
(86, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '27', 'Kota Palopo'),
(87, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '27', 'Kota Makassar\r\n\r\n'),
(88, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '28', 'Kota Kendari'),
(89, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '28', 'Kota Baubau'),
(90, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '29', 'Kota Gorontalo'),
(91, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '29', 'Kota Gorontalo'),
(92, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '30', 'Kota Ambon'),
(93, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '30', 'Kota Tual'),
(94, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '31', 'Kota Ternate'),
(95, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '31', 'Kota Tidore Kepulauan'),
(96, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '32', 'Kota Jayapura'),
(97, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '32', 'Kota Jayapura'),
(98, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '33', 'Kota Sorong'),
(99, '2023-05-16 21:43:23', '2023-05-16 21:43:23', NULL, '33', 'Kota Sorong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2019_08_19_000000_create_failed_jobs_table', 1),
(35, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(36, '2023_05_16_155040_create_provinsis_table', 1),
(37, '2023_05_16_155054_create_kotas_table', 1),
(38, '2023_05_16_155105_create_penduduks_table', 1),
(39, '2023_05_16_155852_create_provinsi_table', 1),
(40, '2023_05_16_155904_create_kota_table', 1),
(41, '2023_05_16_155921_create_penduduk_table', 1),
(42, '2023_05_16_171400_add_token_and_provinsi_id_to_kota_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduks`
--

CREATE TABLE `penduduks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `provinsi_id` char(1) DEFAULT NULL,
  `kota_id` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penduduks`
--

INSERT INTO `penduduks` (`id`, `created_at`, `updated_at`, `nik`, `nama`, `jenis_kelamin`, `tgl_lahir`, `provinsi_id`, `kota_id`) VALUES
(1, NULL, NULL, '1234567890', 'John Doe', 'L', '1990-01-01', '1', '1'),
(2, NULL, NULL, '9876543210', 'Jane Smith', 'P', '1995-05-10', '1', '2'),
(3, NULL, NULL, '2345678901', 'Michael Johnson', 'L', '1985-08-15', '1', '3'),
(4, NULL, NULL, '6789012345', 'Emily Brown', 'P', '1998-12-20', '1', '1'),
(5, NULL, NULL, '1357924680', 'David Lee', 'L', '1993-03-25', '2', '4'),
(6, NULL, NULL, '2468013579', 'Sarah Williams', 'P', '1997-07-15', '2', '5'),
(7, NULL, NULL, '9876543211', 'Michael Brown', 'L', '1988-09-12', '2', '6'),
(8, NULL, NULL, '1234509876', 'Jennifer Davis', 'P', '1994-12-05', '2', '4'),
(9, NULL, NULL, '5678901234', 'Andrew Wilson', 'L', '1992-06-18', '3', '7'),
(10, NULL, NULL, '0123456789', 'Emma Taylor', 'P', '1996-10-08', '3', '8'),
(11, NULL, NULL, '7890123456', 'Daniel Johnson', 'L', '1987-11-30', '3', '9'),
(12, NULL, NULL, '2468013579', 'Olivia Clark', 'P', '1993-04-22', '3', '7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsis`
--

CREATE TABLE `provinsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `provinsis`
--

INSERT INTO `provinsis` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'Aceh'),
(2, NULL, NULL, 'Sumatera Utara'),
(3, NULL, NULL, 'Sumatera Barat'),
(4, NULL, NULL, 'Riau'),
(5, NULL, NULL, 'Jambi'),
(6, NULL, NULL, 'Sumatera Selatan'),
(7, NULL, NULL, 'Bengkulu'),
(8, NULL, NULL, 'Lampung'),
(9, NULL, NULL, 'Bangka Belitung'),
(10, NULL, NULL, 'Kepulauan Riau'),
(11, NULL, NULL, 'Jakarta'),
(12, NULL, NULL, 'Jawa Barat'),
(13, NULL, NULL, 'Banten'),
(14, NULL, NULL, 'Jawa Tengah'),
(15, NULL, NULL, 'Yogyakarta'),
(16, NULL, NULL, 'Jawa Timur'),
(17, NULL, NULL, 'Bali'),
(18, NULL, NULL, 'Nusa Tenggara Barat'),
(19, NULL, NULL, 'Nusa Tenggara Timur'),
(20, NULL, NULL, 'Kalimantan Barat'),
(21, NULL, NULL, 'Kalimantan Tengah'),
(22, NULL, NULL, 'Kalimantan Selatan'),
(23, NULL, NULL, 'Kalimantan Timur'),
(24, NULL, NULL, 'Kalimantan Utara'),
(25, NULL, NULL, 'Sulawesi Utara'),
(26, NULL, NULL, 'Sulawesi Tengah'),
(27, NULL, NULL, 'Sulawesi Selatan'),
(28, NULL, NULL, 'Sulawesi Barat'),
(29, NULL, NULL, 'Gorontalo'),
(30, NULL, NULL, 'Maluku'),
(31, NULL, NULL, 'Maluku Utara'),
(32, NULL, NULL, 'Papua Barat'),
(33, NULL, NULL, 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kota_provinsi_id_foreign` (`provinsi_id`);

--
-- Indeks untuk tabel `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduks`
--
ALTER TABLE `penduduks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penduduks`
--
ALTER TABLE `penduduks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `kota_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
