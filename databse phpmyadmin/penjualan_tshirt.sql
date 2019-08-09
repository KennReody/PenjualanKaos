-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2019 pada 15.48
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_tshirt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2019_08_08_150503_create_table_tshirt', 1),
(9, '2019_08_09_093343_create_table_admin', 2),
(10, '2019_05_01_120245_create_t_kemeja_panjang', 3),
(11, '2019_05_01_120637_create_t_buyer', 3),
(12, '2019_08_09_101120_create_table_user', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_tshirt`
--

CREATE TABLE `table_tshirt` (
  `id_tshirt` int(10) UNSIGNED NOT NULL,
  `nama_tshirt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_tshirt`
--

INSERT INTO `table_tshirt` (`id_tshirt`, `nama_tshirt`, `type`, `warna_produk`, `ukuran`, `stock`, `harga`, `created_at`, `updated_at`) VALUES
(6, 'RSCH', 'Kemeja', 'Merah', 'XL', '5', '160000', '2019-08-09 00:07:20', '2019-08-09 00:07:20'),
(7, 'RSCH', 'Kaos V-Neck', 'Abu-Abu', 'L', '5', '120000', '2019-08-09 00:09:43', '2019-08-09 00:09:43'),
(8, 'Black ID', 'Kaos V-Neck', 'Biru', 'M', '5', '120000', '2019-08-09 00:12:12', '2019-08-09 00:12:12'),
(9, 'Maternal', 'Kemeja', 'Biru', 'M', '5', '160000', '2019-08-09 00:42:01', '2019-08-09 00:42:01'),
(10, 'Screamous', 'Kaos V-Neck', 'Biru', 'L', '5', '120000', '2019-08-09 05:57:00', '2019-08-09 05:57:55'),
(11, 'Maternal', 'Kaos V-Neck', 'Jingga', 'M', '5', '120000', '2019-08-09 06:04:49', '2019-08-09 06:05:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE `t_login` (
  `id_login` int(10) UNSIGNED NOT NULL,
  `nama_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_login`
--

INSERT INTO `t_login` (`id_login`, `nama_user`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AdminKA', 'admin', '$2y$10$0o4z7PNT8S2b7WZ29p80XO6SNsIzdIPUYik/vsmd3ItQ0IKl/7eWW', NULL, '2019-08-09 03:19:23', '2019-08-09 03:19:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_tshirt`
--
ALTER TABLE `table_tshirt`
  ADD PRIMARY KEY (`id_tshirt`);

--
-- Indeks untuk tabel `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `table_tshirt`
--
ALTER TABLE `table_tshirt`
  MODIFY `id_tshirt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id_login` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
