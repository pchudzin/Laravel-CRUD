-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Kwi 2024, 18:35
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dbstudcrud`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
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
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_07_091427_create_students_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
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
-- Struktura tabeli dla tabeli `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `pesel` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `students`
--

INSERT INTO `students` (`id`, `name`, `address`, `mobile`, `birthdate`, `pesel`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jan Kowalski', 'Janowo, ul. Janowa 9', '999888777', '1999-11-11', '99111122333', '17126585886615189c108f8.jpg', '2024-04-07 09:06:55', '2024-04-09 08:29:48'),
(2, 'Marek Nowak', 'Warszawa, ul. Wymyślona 7', '444333222', '1990-11-11', '99112233444', '1712658599661518a7432d3.jpg', '2024-04-08 07:25:22', '2024-04-09 08:29:59'),
(3, 'Marta Zych', 'Gdańsk, ul. Zychowa 2', '741852963', '2000-11-11', '00111122777', '1712658612661518b44a3e8.jpg', '2024-04-08 07:38:59', '2024-04-09 08:30:12'),
(4, 'Maciej Nowak', 'Nowość, ul. Nowa 1', '999888999', '1980-09-09', '99090911222', '1712658629661518c57f392.jpg', '2024-04-08 07:52:19', '2024-04-09 08:30:29'),
(5, 'Michalina Kowalska', 'Sopot, ul. Kowalska 6', '789456444', '2000-01-01', '00010122888', '1712658641661518d1a1a63.jpg', '2024-04-08 11:00:10', '2024-04-09 08:30:41'),
(8, 'Anna Wójcik', 'Puck, ul. Pucka 2', '999555111', '2002-02-02', '02020233444', '1712658655661518dfeb616.jpg', '2024-04-08 11:57:22', '2024-04-09 08:30:55'),
(11, 'Dominika Kowalak', 'Puck, ul. Pucka 99', '999555000', '2001-01-01', '02020233444', '1712658668661518ec44e62.jpg', '2024-04-08 13:05:03', '2024-04-09 08:31:08'),
(12, 'Dominik Testowy', 'Testowo, ul. Testowa 9', '+48111222678', '1960-01-01', '60010122777', '17126586886615190070be1.jpg', '2024-04-08 14:18:23', '2024-04-09 08:31:28'),
(13, 'Paweł Kowalczyk', 'Gdynia', '777555321', '1977-07-07', '77070755444', '17126588296615198da5b1b.jpg', '2024-04-09 06:37:57', '2024-04-09 08:33:49'),
(14, 'Robert Tomaszewski', 'Gdańsk', '999000777', '1966-08-08', '66080822777', '1712658839661519976c078.jpg', '2024-04-09 06:43:32', '2024-04-09 08:33:59'),
(15, 'Norbert Jasiński', 'Władysławowo', '111222321', '2000-09-09', '80080844777', '1712652712661501a8f1ab7.jpg', '2024-04-09 06:47:42', '2024-04-09 08:34:59'),
(16, 'Marta Wójcik', 'Szczecin', '123456789', '1999-11-22', '99112233555', '1712658926661519ee00489.jpg', '2024-04-09 07:19:30', '2024-04-09 08:35:26'),
(18, 'Ryszard Piotrowski', 'Wrocław', '777555222', '2001-03-30', '01233011999', '171265899566151a3319168.jpg', '2024-04-09 07:30:35', '2024-04-09 08:36:35'),
(21, 'Jan Wiśniewski', 'Kraków', '124578963', '1964-01-01', '76010155777', '171265907066151a7e9642b.jpg', '2024-04-09 08:05:00', '2024-04-09 08:38:13');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
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
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeksy dla tabeli `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
