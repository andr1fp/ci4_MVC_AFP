-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2023 pada 05.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(200) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `nama_film`, `id_genre`, `duration`, `cover`, `created_at`, `updated_at`) VALUES
(3, 'The Last of Us', 2, '2 Jam 5 Menit', 'The Last of Us.jpg', '2023-06-16 04:09:04', '2023-06-16 04:09:04'),
(4, 'Evil Dead Rise', 5, '1 Jam 30 Menit', 'Evil Dead Rise.jpg', '2023-06-16 04:09:04', '2023-06-16 04:09:04'),
(5, 'Guardians of the Galaxy Vol.3', 1, '2 Jam 45 Menit', 'Guardians of the Galaxy Vol.3.jpg', '2023-06-16 04:09:04', '2023-06-16 04:09:04'),
(6, 'Creed III', 6, '2 Jam 15 Menit', 'Creed III.jpg', '2023-06-16 04:21:01', '2023-06-16 04:21:01'),
(8, 'The Siege', 1, '2 Jam 9 Menit', 'The Siege.jpg', '2023-06-16 04:21:01', '2023-06-16 04:21:01'),
(9, 'Mafia Mamma', 4, '2 Jam 27 Menit', 'Mafia Mamma.jpg', '2023-06-16 04:21:01', '2023-06-16 04:21:01'),
(10, 'John Wick: Chapter 4', 1, '2 Jam 20 Menit', 'JohnWickChap4.jpg', '2023-06-16 04:21:01', '2023-06-16 04:21:01'),
(11, 'Encanto', 3, '1 Jam 42 Menit', '1687861933_4dcfbb75f66a53528059.jpg', '2023-06-27 10:32:13', '2023-06-27 10:32:13'),
(12, 'Fast X', 1, ' 2 Jam 21 Menit', '1687878551_b83138529dc37b816b78.jpg', '2023-06-27 15:09:11', '2023-06-27 15:09:11'),
(14, '2012', 7, ' 2 Jam 45 Menit', '1688178473_04119fb307aa040978dd.jpg', '2023-07-01 02:27:53', '2023-07-01 02:27:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`id_genre`, `nama_genre`, `created_at`, `updated_at`) VALUES
(1, 'Action', '2023-06-21 02:55:06', '2023-06-21 02:55:06'),
(2, 'Adventure', '2023-06-21 02:55:06', '2023-06-21 02:55:06'),
(3, 'Animation', '2023-06-21 02:55:06', '2023-06-21 02:55:06'),
(4, 'Comedy', '2023-06-21 02:55:06', '2023-06-21 02:55:06'),
(5, 'Horror', '2023-06-21 02:55:06', '2023-06-21 02:55:06'),
(6, 'Sport', '2023-06-21 02:55:06', '2023-06-21 02:55:06'),
(7, 'Survival', '2023-06-21 02:55:06', '2023-06-21 02:55:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`),
  ADD KEY `id` (`id_genre`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
