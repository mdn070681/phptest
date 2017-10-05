-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 05 2017 г., 09:30
-- Версия сервера: 5.7.16
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phptest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applicants`
--

CREATE TABLE `applicants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_vno` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `local_or_foreigner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `applicants`
--

INSERT INTO `applicants` (`id`, `name`, `surname`, `gender`, `group_number`, `email`, `score_vno`, `year`, `local_or_foreigner`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Вася', 'Иванов', 'мужской', '11125', 'vasya@gmail.com', 125, 1990, 'local', 1, NULL, NULL),
(2, 'den', 'Мелашенко', 'male', 'tt447', 'mdn81@ukr.net', 124, 1981, 'local', 1, '2017-10-04 05:04:49', '2017-10-05 02:16:00'),
(4, 'Денис', 'Мелашенко', 'female', '1222', 'mdn81@ukr.nettt', 125, 1981, 'local', 1, '2017-10-04 05:07:09', '2017-10-04 08:02:36'),
(5, 'den', 'Мелашенко', 'male', '1222', 'planetamalysh@ukr.net', 182, 1981, 'local', 1, '2017-10-04 07:42:48', '2017-10-04 07:42:48'),
(6, 'Сергей', 'Конотоп', 'male', '112', 'Serg@gmail.com', 107, 1998, 'local', 1, '2017-10-04 07:56:11', '2017-10-04 07:57:10'),
(7, 'Денис', 'Мелашенко', 'female', '1222', 'mdn81@ukr.netttttt', 125, 1981, 'local', 1, '2017-10-04 08:02:41', '2017-10-04 08:02:41'),
(8, 'Денис', 'Мелашенко', 'female', '1222', 'mdn81@ukr.nettttttttt', 125, 1981, 'local', 1, '2017-10-04 08:02:48', '2017-10-04 08:02:48'),
(9, 'Анна', 'Сашко', 'female', '115', 'anna@gmail.com', 140, 1995, 'local', 1, '2017-10-04 09:27:21', '2017-10-04 09:27:21'),
(10, 'Вика', 'Денисовна', 'male', '15', 'nata12tanya@outlook.com', 120, 1991, 'local', 1, '2017-10-04 11:04:48', '2017-10-04 11:04:48'),
(11, 'Камила', 'Мартутока', 'female', '112', 'kamila@gmail.com', 124, 1998, 'local', 1, '2017-10-04 12:22:50', '2017-10-04 12:22:50'),
(12, 'денис', 'Мелашенко', 'male', '11242', 'nata14tanya@outlook.com', 182, 1981, 'local', 1, '2017-10-04 12:24:24', '2017-10-04 12:24:24'),
(13, 'денис', 'Мелашенко', 'female', '112', 'tanya_sobol@ukr.net', 125, 1981, 'local', 1, '2017-10-04 13:01:01', '2017-10-04 13:01:01'),
(14, 'денис', 'Мелашенко', 'male', '112', 'mdn81@ukr.netttttttt', 125, 1981, 'local', 1, '2017-10-04 13:05:57', '2017-10-04 13:05:57'),
(15, 'денис', 'Мелашенко', 'female', '65465', 'mdn81@ukr.nett', 115, 1981, 'local', 1, '2017-10-04 15:24:46', '2017-10-04 15:24:46'),
(16, 'денис', 'Мелашенко', 'male', '11125', 'mdn81@ukr.net5', 125, 1981, 'local', 1, '2017-10-05 02:09:28', '2017-10-05 02:09:28'),
(17, 'денис', 'Мелашенко', 'male', '11125', 'mdn81@ukr.net8', 125, 1981, 'local', 1, '2017-10-05 02:10:09', '2017-10-05 02:10:09'),
(18, 'денис', 'Мелашенко', 'male', '11125', 'mdn81@ukr.net10', 125, 1981, 'local', 1, '2017-10-05 02:10:18', '2017-10-05 02:10:18'),
(19, 'денис', 'Мелашенко', 'male', '122', 'mdn81@ukr.net125', 122, 1981, 'local', 1, '2017-10-05 02:35:58', '2017-10-05 03:27:21');

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2017_10_03_145855_create_applicants_table', 1);

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
-- Индексы таблицы `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicants_email_unique` (`email`);

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
-- AUTO_INCREMENT для таблицы `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
