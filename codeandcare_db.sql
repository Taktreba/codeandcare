-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2017 г., 14:45
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `codeandcare_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blockchains`
--

CREATE TABLE `blockchains` (
  `id` int(10) UNSIGNED NOT NULL,
  `USD` double(8,2) NOT NULL,
  `GBP` double(8,2) NOT NULL,
  `EUR` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blockchains`
--

INSERT INTO `blockchains` (`id`, `USD`, `GBP`, `EUR`, `created_at`, `updated_at`) VALUES
(2, 7206.51, 5474.92, 6180.09, '2017-11-15 13:33:30', '2017-11-15 13:33:30'),
(3, 7225.33, 5489.22, 6184.42, '2017-11-15 13:37:24', '2017-11-15 13:37:24'),
(4, 7241.06, 5501.17, 6215.53, '2017-11-15 14:03:06', '2017-11-15 14:03:06'),
(5, 7225.67, 5489.47, 6217.29, '2017-11-15 14:04:05', '2017-11-15 14:04:05'),
(6, 7437.36, 5648.43, 6374.23, '2017-11-16 07:33:43', '2017-11-16 07:33:43'),
(7, 7502.28, 5691.24, 6430.00, '2017-11-16 09:08:36', '2017-11-16 09:08:36');

-- --------------------------------------------------------

--
-- Структура таблицы `coindesks`
--

CREATE TABLE `coindesks` (
  `id` int(10) UNSIGNED NOT NULL,
  `USD` double(8,2) NOT NULL,
  `GBP` double(8,2) NOT NULL,
  `EUR` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coindesks`
--

INSERT INTO `coindesks` (`id`, `USD`, `GBP`, `EUR`, `created_at`, `updated_at`) VALUES
(3, 7227.33, 5490.73, 6114.27, '2017-11-15 13:33:30', '2017-11-15 13:33:30'),
(4, 7218.82, 5484.27, 6107.07, '2017-11-15 13:37:24', '2017-11-15 13:37:24'),
(5, 7240.45, 5500.70, 6125.37, '2017-11-15 14:03:06', '2017-11-15 14:03:06'),
(6, 7233.21, 5495.20, 6119.25, '2017-11-15 14:04:05', '2017-11-15 14:04:05'),
(7, 7437.91, 5648.86, 6308.97, '2017-11-16 07:33:43', '2017-11-16 07:33:43'),
(8, 7498.67, 5682.68, 6370.58, '2017-11-16 09:08:36', '2017-11-16 09:08:36');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_15_143139_create_coindesks_table', 2),
(4, '2017_11_15_143157_create_blockchains_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blockchains`
--
ALTER TABLE `blockchains`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coindesks`
--
ALTER TABLE `coindesks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blockchains`
--
ALTER TABLE `blockchains`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `coindesks`
--
ALTER TABLE `coindesks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
